<?php

/**
 * Lev.levme.com [ 专业开发各种Discuz!插件 ]
 *
 * Copyright (c) 2013-2014 http://www.levme.com All rights reserved.
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

require_once 'lev_base.php';

class lev_guess extends lev_guess_base {

	public static $minnum, $maxnum, $ytimes, $isend = FALSE;

	public function __construct() {
		parent::__construct();
		$numarea = explode("-", trim(parent::$PL_G['numarea']));
		self::$minnum = $numarea[0];
		self::$maxnum = $numarea[1];
		self::$ytimes = date('Ymd', TIMESTAMP - 3600 * 24);
		self::is_end();
		if (self::$isend && isset($_GET['ajax'])) exit(parent::$lang['is_end']);
		
	}

	public static function run() {
		if (!parent::$_G['uid']) exit('-5');
		$num = intval($_GET['num']);
		if (!$num) {
			$num = rand(self::$minnum, self::$maxnum);
		}elseif ($num < self::$minnum || $num > self::$maxnum) {
			exit('-3');
		}
		$score = C::t('common_member_count')->fetch(parent::$_G['uid']);//print_r($score);
		if ($score['extcredits'.parent::$PL_G['scoretype']] >= parent::$PL_G['spend']) {
			$times    = date('Ymd', TIMESTAMP);
			$guessnum = DB::result_first("SELECT COUNT(*) FROM ".DB::table('lev_guess')." WHERE times=$times AND uid=".parent::$_G['uid']);
			if (parent::$PL_G['maxnum'] && $guessnum >=parent::$PL_G['maxnum']) exit('-4');
			$upscore  = $score['extcredits'.parent::$PL_G['scoretype']] - parent::$PL_G['spend'];
			if (parent::$PL_G['spend']) $res = DB::update('common_member_count', array('extcredits'.parent::$PL_G['scoretype']=>$upscore), array('uid'=>parent::$_G['uid']));
			$insert = array(
					'uid' => parent::$_G['uid'],
					'username' => daddslashes(parent::$_G['username']),
					'ip' => parent::$_G['clientip'],
					'num' => $num,
					'spend' => parent::$PL_G['spend'],
					'score' => $upscore,
					'addtime' => TIMESTAMP,
					'times' => $times,
			);
			DB::insert('lev_guess', $insert);
			exit('1');
		}else {
			exit('-2');
		}

	}

	public static function yguessnum() {
		$page  = max(intval($_GET['page']), 1);
		$limit = 100;
		$start = ($page-1) * $limit;
		$times = self::$ytimes;
		$myfa  = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess')." WHERE times='$times' ORDER BY num ASC ".DB::limit($start, $limit));
		$html  = '';
		foreach ($myfa as $k => $v) {
			if ($k && !($k%8)) $br = '<br />'; else $br = '';
			$html .= $v['username'].'['.$v['num'].'], '.$br;
		}
		if (empty($myfa)) $html = 'no page!';
		$html .= '<br />';
		if ($page !=1) $html .= '<a href="javascript:;" onclick="yguessnum('.($page-1).')">上一页</a> ';
		if (count($myfa) ==$limit) $html .= '<a href="javascript:;" onclick="yguessnum('.($page+1).')">下一页</a>';
		exit($html);
	}

	public static function isaward2() {
		$times = self::$ytimes;
		$rs = DB::result_first("SELECT * FROM ".DB::table('lev_guess_award')." WHERE `times`='$times'");
		if (!$rs) {
			$myfa = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess')." WHERE times='$times' ORDER BY num ASC");
			$awardnum  = 0;
			foreach ($myfa as $v) {
				if ($awardnum ==0) {
					$awardnum  = $v['num'];
				}elseif ($awardnum ==$v['num']) {
					$awardnum = 0;
				}else {
					break;
				}
			}
			$insert = array(
					'times' => $times,
					'awardnum' => $awardnum,
					'addtime' => TIMESTAMP,
			);
			$id = DB::insert('lev_guess_award', $insert, TRUE);
			if ($id) {
				DB::update('lev_guess', array('isaward'=>1), array('num'=>$awardnum, 'times'=>$times));
				exit('1');
			}
		}
	}

	public static function isaward1() {
		$times = self::$ytimes;
		$rs = DB::result_first("SELECT * FROM ".DB::table('lev_guess_award')." WHERE `times`='$times'");
		if (!$rs) {
			$array  = explode("-", trim(parent::$PL_G['awardnum']));
			if (is_numeric($array[0]) && is_numeric($array[1]) && $array[0] < $array[1]) {
				$awardnum = rand($array[0], $array[1]);
			}else {
				$awardnum = rand(self::$minnum, self::$maxnum);
			}
			$insert = array(
				'times' => $times,
				'awardnum' => $awardnum,
				'addtime' => TIMESTAMP,
			);
			$id = DB::insert('lev_guess_award', $insert, TRUE);
			if ($id) {
				DB::update('lev_guess', array('isaward'=>1), array('num'=>$awardnum, 'times'=>$times));
				exit('1');
			}
		}
	}

	public static function isaward() {
		if (parent::$PL_G['isaward2']) {
			self::isaward2();
		}else {
			self::isaward1();
		}
	}

	public static function is_end() {
		$activitendtime = strtotime(lev_guess::$PL_G['endtime']);
		if ($activitendtime < TIMESTAMP) {
			self::$isend = TRUE;
		}
	}
	
	public static function myfa() {
		$times = date('Ymd', TIMESTAMP);
		$uid   = parent::$_G['uid'];
		$myfa  = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess')." WHERE times='$times' AND uid='{$uid}'");
		$html  = '<div id="hm_result_tj" class="bd"><table class="com-tb"><tbody>';
		foreach ($myfa as $r) {
			$html .= '
			<tr class="" onmouseover="this.className=\' on\'" onmouseout="this.className=\'\'">
			<td>'.$r[times].'</td>
			<td><span style="line-height:24px;color:#CC0000;letter-spacing:2px;" class="title">'.$r[num].'</span></td>
			<td>'.dgmdate($r['addtime'], 'u').'</td>
			</tr>';
		}
		$html .= '</tbody></table></div>';
		echo $html;exit;
	}

}













