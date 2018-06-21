<?php

/**
 * Lev.suake.org [ 专业开发各种Discuz!插件 ]
 *
 * Copyright (c) 2013-2014 http://www.suake.org All rights reserved.
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_enter.php';
//print_r(lev_guess::$PL_G);
if (isset($_GET['isaward'])) {
	lev_guess::isaward();
}
if (isset($_GET['fa'])) {
	lev_guess::myfa();
}
if (isset($_GET['yguessnum'])) {
	lev_guess::yguessnum();
}
if (isset($_GET['num']) && is_numeric($_GET['num'])) {
	lev_guess::run();
}else {
	$times   = date('Ymd', TIMESTAMP);//print_r($lev_lang);
	$timesed = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess_award')." ORDER BY addtime DESC LIMIT 10");
	$mescore = C::t('common_member_count')->fetch($_G['uid']);//print_r($score);
	$mymoney = $mescore['extcredits'.lev_guess::$PL_G['scoretype']];
	$buyuser = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess')." ORDER BY addtime DESC LIMIT 10");
	$isaward = DB::fetch_all("SELECT * FROM ".DB::table('lev_guess')." WHERE isaward=1 ORDER BY addtime DESC LIMIT 10");
	$mytimes = DB::result_first("SELECT COUNT(*) FROM ".DB::table('lev_guess')." WHERE times='$times' AND uid='{$_G['uid']}'");
	if ($timesed[0]['awardnum']) {
		for($i=0; $i<15; $i++) {
			if (is_numeric($timesed[0]['awardnum'][$i])) {
				$nowaward .= '<li>'.$timesed[0]['awardnum'][$i].'</li>';
			}else {
				break;
			}
		}
	}
	$_h = $_m = $_s = 0;
	if (!lev_guess::$isend) { 
		$isendtime = strtotime(lev_guess::$PL_G['endtime']);
		$h = date('H', TIMESTAMP);
		$m = date('i', TIMESTAMP);
		$s = date('s', TIMESTAMP);
		if (date('Ymd') ==date('Ymd', $isendtime)) {
			$_h = date('H', $isendtime) - $h;
			if ($_h >= 0) {
				$_m = date('i', $isendtime) - $m;
				if ($_m >=0) $_s = 60 - $s; else $_m = 0;
			}else {
				$_h = 0;
			}
		}else {
			$_h = 24 - $h;
			$_m = 60 - $m;
			$_s = 60 - $s;
		}
	}
	include template($PLNAME.':lev');
}

?>