<?php
/*
	ID: jccaiji_7ree
	[www.7ree.com] (C)2007-2018 7ree.com.
	This is NOT a freeware, use is subject to license terms
	Update: 2018/6/7 16:34
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/

//cronname:jccaiji_7ree柒瑞赛事采集

//hour:3              设置哪一小时执行本任务，留空为不限制





if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
loadcache('plugin');
$vars_7ree = $_G['cache']['plugin']['jccaiji_7ree'];
$jingcai_7ree_var = $_G['cache']['plugin']['jingcai_7ree'];
$navtitle = lang('plugin/jccaiji_7ree','php_lang_navtitle_7ree');
if(!$vars_7ree['agreement_7ree']) showmessage('jccaiji_7ree:php_lang_agree_7ree');
if(!$jingcai_7ree_var['agreement_7ree']) showmessage('jingcai_7ree:php_lang_agree_7ree');

if($vars_7ree['onoff_7ree']){

//////////////////////////篮球赛事
$url1_7ree = "http://trade.500.com/jclq/index.php?playid=275"; 
if($vars_7ree['function_7ree']==1){//curl_setopt 函数
		$ch_7ree = curl_init();
		curl_setopt ($ch_7ree,  CURLOPT_URL, $url1_7ree);
		curl_setopt ($ch_7ree,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch_7ree, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
		curl_setopt ($ch_7ree, CURLOPT_SSL_VERIFYHOST, FALSE);
		$info1_7ree = curl_exec($ch_7ree);
		curl_close($ch_7ree);
}elseif($vars_7ree['function_7ree']==2){//file_get_contents 函数
		$info1_7ree = file_get_contents($url1_7ree);
}


$pos_7ree = strpos($info1_7ree,'<div class="dc_l_m" id="vsTable">');
$info1_7ree = substr($info1_7ree,$pos_7ree);

$pos2_7ree = strpos($info1_7ree,'<div class="dc_r" style="margin-top: 0px;">');
$info1_7ree = substr($info1_7ree,0,$pos2_7ree);


$currentlang=currentlang();
if($currentlang=="SC_UTF8" || $currentlang=="TC_UTF8"){
	$info1_7ree = iconv("gb2312", "utf-8//IGNORE",$info1_7ree);
	$lang_7ree = 'utf-8';
}else{
	$lang_7ree = 'gbk';
}



$result_7ree = get_td_array($info1_7ree);

$blacklist_7ree = $vars_7ree['blacklist_7ree'] ? explode(',', $vars_7ree['blacklist_7ree']) : '';
$whitelist_7ree = $vars_7ree['whitelist_7ree'] ? explode(',', $vars_7ree['whitelist_7ree']) : '';

$daylimit_7ree = $vars_7ree['daynum_7ree'] ? $vars_7ree['daynum_7ree']*86400 : 3*86400;

foreach ($result_7ree as $key => $value){
	if($key>0){

			$change_7ree['racename_7ree'] = trim(dhtmlspecialchars($value[1]));
			$jump1_7ree = $jump2_7ree = 0; 
			if($blacklist_7ree){
					$jump1_7ree = in_array($change_7ree['racename_7ree'],$blacklist_7ree) ? 1 : 0;
			}
			if($whitelist_7ree){
					$jump2_7ree = in_array($change_7ree['racename_7ree'],$whitelist_7ree) ? 0 : 1;
			}
			if(!$jump1_7ree && !$jump2_7ree){
					$cell0_len_7ree=strlen(trim($value[0]));
					if($cell0_len_7ree>10){
						$date_7ree=mb_substr($value[0], 0, 5,"$lang_7ree");
					}

					$racetime_7ree = $date_7ree.mb_substr($value[2], 10, 10, "$lang_7ree");
					$change_7ree['date_7ree'] =strtotime($racetime_7ree) ;

					$change_7ree['testtime_7ree'] = dgmdate($change_7ree['date_7ree'] );
					$change_7ree['aname_7ree'] = get_team_7ree($value[5]);
					$change_7ree['bname_7ree'] = get_team_7ree($value[3]);
					$change_7ree['peilv_7ree'][0] = floatval($value[10]);
					$change_7ree['peilv_7ree'][1] = floatval($value[9]);

					if($vars_7ree['rangqiu_7ree']){
							$change_7ree['rangqiu_7ree'] = get_rangqiu_7ree($value[4]);
							$change_7ree['rangqiufang_7ree'] = $change_7ree['rangqiu_7ree']['rangqiufang_7ree'];
							$change_7ree['rangqiuway_7ree'] = $change_7ree['rangqiu_7ree']['rangqiuway_7ree'];
					}else{
							$change_7ree['rangqiufang_7ree'] = 0;
							$change_7ree['rangqiuway_7ree'] = 0;
					}

					$change_7ree['zhusheng_7ree'] = $vars_7ree['peilv_7ree'] ?  floatval($change_7ree['peilv_7ree'][0]) : $vars_7ree['peilv_zhu_7ree'];
					$change_7ree['zhufu_7ree'] = $vars_7ree['peilv_7ree'] ?  floatval($change_7ree['peilv_7ree'][1]) : $vars_7ree['peilv_ke_7ree'];

					if($change_7ree['date_7ree']<=$_G['timestamp']+$daylimit_7ree) $result2_7ree[] = $change_7ree;


			}
	}

}


/*
echo("<pre>");
print_r($result2_7ree);
echo("</pre>");
showmessage(".....");
*/


if($vars_7ree['dongtai_7ree']){
		$odd_dynamic_7ree = 1;
		$max_odd_7ree = $vars_7ree['dongtai_shangxian_7ree'];
		$min_odd_7ree = $vars_7ree['dongtai_xiaxian_7ree'];
		$odd_ratio_7ree = $vars_7ree['dongtai_r_7ree'];
}else{
		$odd_dynamic_7ree = 0;
		$max_odd_7ree = 0;
		$min_odd_7ree = 0;
		$odd_ratio_7ree = 0;
}
 $zq_fenlei_7ree = $vars_7ree['zq_fenlei_7ree'] ? explode(':', $vars_7ree['zq_fenlei_7ree']) : array(); 
 $lq_fenlei_7ree = $vars_7ree['lq_fenlei_7ree'] ? explode(':', $vars_7ree['lq_fenlei_7ree']) : array();

 if($jingcai_7ree_var['fid_7ree'] && $vars_7ree['postthread_7ree']){
			require_once DISCUZ_ROOT.'./source/function/function_forum.php'; 
			require_once DISCUZ_ROOT.'./source/function/function_post.php'; 
			$postuid_7ree = $vars_7ree['postuid_7ree'] ? explode(',', $vars_7ree['postuid_7ree']) : array('admin','1');
 }
 
foreach($result2_7ree as $insert_value){//数据入库
	 $exist_7ree = DB::result_first("SELECT main_id_7ree FROM ".DB::table('jingcai_main_7ree')." 
	 								 WHERE time_7ree>$insert_value[date_7ree]-$daylimit_7ree 
	 								 AND racename_7ree='$insert_value[racename_7ree]' 
	 								 AND aname_7ree='$insert_value[aname_7ree]' 
	 								 AND bname_7ree='$insert_value[bname_7ree]'");
	 if(!$exist_7ree){//数据库检索为空，则插入数据表

			DB::query("INSERT INTO ".DB::table('jingcai_main_7ree')." (
				    racename_7ree,
					fenlei1_7ree,
					fenlei2_7ree,
					reward_7ree,
					add_7ree,
					time_7ree,
					aname_7ree,
					bname_7ree,
					alogo_7ree,
					blogo_7ree,
					amessage_7ree,
					bmessage_7ree,
					aodds_7ree,
					bodds_7ree,
					codds_7ree,
					odd_dynamic_7ree,
					max_odd_7ree,
					min_odd_7ree,
					odd_ratio_7ree,
					rangqiufang_7ree,
					rangqiuway_7ree,
					racemessage_7ree,
					daxiao_7ree
			        ) VALUES (
					'$insert_value[racename_7ree]',
					'$lq_fenlei_7ree[0]',
					'$lq_fenlei_7ree[1]',
					'$vars_7ree[zuidi_7ree]',
					'$add_7ree',
					'$insert_value[date_7ree]',
					'$insert_value[aname_7ree]',
					'$insert_value[bname_7ree]',
					'$alogo_7ree',
					'$blogo_7ree',
					'$amessage_7ree',
					'$bmessage_7ree',
					'$insert_value[zhusheng_7ree]',
					'$insert_value[zhufu_7ree]',
					'$insert_value[ping_7ree]',
					'$odd_dynamic_7ree',	
					'$max_odd_7ree',
					'$min_odd_7ree',
					'$odd_ratio_7ree',
					'$insert_value[rangqiufang_7ree]',
					'$insert_value[rangqiuway_7ree]',
					'$racemessage_7ree',
					'$daxiao_7ree'
			        )");
					//同步发帖
			        if($jingcai_7ree_var['fid_7ree'] && $vars_7ree['postthread_7ree']){
			        	
				        $mid_7ree = DB::insert_id();
				        $time_7ree = gmdate("Y-m-d H:i", $insert_value['date_7ree'] + $_G['setting']['timeoffset'] * 3600);
				        
				        $subject_7ree = $insert_value[racename_7ree].': '.$insert_value[aname_7ree].' VS '.$insert_value[bname_7ree];
				        $alogo_7ree = $_G['setting']['siteurl']."source/plugin/jingcai_7ree/template/image/A_7ree.gif";
				        $blogo_7ree = $_G['setting']['siteurl']."source/plugin/jingcai_7ree/template/image/B_7ree.gif";
						$post_7ree = "[table=98%]
			[tr][td=2,1][align=center][size=5][b]".$insert_value[racename_7ree]."[/b][/size][/align][/td][/tr]
			[tr][td][align=center]".lang('plugin/jingcai_7ree', 'php_lang_bisaishijian_7ree').": ".$time_7ree."[/align][/td][td][align=center][url=plugin.php?id=jingcai_7ree:jingcai_7ree&sp_7ree=more&main_id_7ree=".$mid_7ree."][b][color=Red][backcolor=yellow]".lang('plugin/jingcai_7ree', 'php_lang_jinrujingcai_7ree')."[/backcolor][/color][/b][/url][/align][/td][/tr]
			[tr][td][align=center]".$insert_value[aname_7ree]."[/align][/td][td][align=center]".$insert_value[bname_7ree]."[/align][/td][/tr]
			[tr][td][align=center][img]".$alogo_7ree."[/img][/align][/td][td][align=center][img]".$blogo_7ree."[/img][/align][/td][/tr]
			[/table]";

			        DB::query("INSERT INTO ".DB::table('forum_thread')." (fid, author, authorid, subject, dateline, lastpost, lastposter)
					VALUES ('$jingcai_7ree_var[fid_7ree]', '{$postuid_7ree[0]}', '{$postuid_7ree[1]}', '{$subject_7ree}', '{$_G[timestamp]}', '{$_G[timestamp]}', '{$postuid_7ree[1]}')");
					$tid = DB::insert_id();
					$pid = insertpost(array(
							'fid' => $jingcai_7ree_var['fid_7ree'],
							'tid' => $tid,
							'first' => '1',
							'author' => $postuid_7ree['0'],
							'authorid' => $postuid_7ree['1'],
							'subject' => $subject_7ree,
							'dateline' => $_G['timestamp'],
							'message' => $post_7ree,
							'useip' => $_G['clientip'],
							'invisible' => $pinvisible,
							'anonymous' => $isanonymous,
							'usesig' => $usesig,
							'htmlon' => $htmlon,
							'bbcodeoff' => $bbcodeoff,
							'smileyoff' => $smileyoff,
							'parseurloff' => $parseurloff,
							'attachment' => '0',
							'tags' => $tagstr,
							'replycredit' => 0,
							'status' => (defined('IN_MOBILE') ? 8 : 0)
						));
					
			        DB::query("UPDATE ".DB::table('jingcai_main_7ree')." SET tid_7ree = '$tid' WHERE main_id_7ree = '$mid_7ree' LIMIT 1");
				
					
					}	
	 }
}

}


//////////////////////////////////函数区

function get_team_7ree($team_7ree){
		global $_G;
		$return_7ree = '';
		$preg_7ree='/\[.*\]/i';
		$team_7ree = trim(dhtmlspecialchars($team_7ree));
		$return_7ree = preg_replace($preg_7ree,'',$team_7ree);
		//$return_7ree = $team_7ree ;
		return $return_7ree;
}

function get_date_7ree($date_7ree,$time_7ree){
		global $_G;
		$return_7ree = '';
		date_default_timezone_set(PRC); 
		$time_array = explode(":",$time_7ree);
		if($time_array[0]<12){
						$bbtime_7ree = strtotime($date_7ree." ".$time_7ree)+86400;
		}else{
						$bbtime_7ree = strtotime($date_7ree." ".$time_7ree);
		}
		$return_7ree = $bbtime_7ree; 
	return $return_7ree;
}


function get_peilv_7ree($peilv_7ree){//足球让球赔率
		$return_7ree = array();
		$peilv_7ree = trim($peilv_7ree);
		if($peilv_7ree){
			$return_7ree = explode('{sp}', $peilv_7ree); ;
		}
		return $return_7ree;
}

function get_rangqiu_7ree($rangqiu_7ree){//让球数分析
		$return_7ree = array();
		$rangqiu_7ree=floatval($rangqiu_7ree);
		if($rangqiu_7ree<0){
		 $return_7ree['rangqiufang_7ree']=2;
		 $return_7ree['rangqiuway_7ree']= abs($rangqiu_7ree);
		}elseif($rangqiu_7ree>0){
		 $return_7ree['rangqiufang_7ree']=1;
		 $return_7ree['rangqiuway_7ree']= abs($rangqiu_7ree);
		}else{
		 $return_7ree['rangqiufang_7ree']=0;
		 $return_7ree['rangqiuway_7ree']= 0;
		}
		return $return_7ree;
}

function get_bifen_7ree($bifen_7ree){//比分读取
		$return_7ree = array();
		if($bifen_7ree){
			$bifen_array = explode(":",$bifen_7ree);
			$return_7ree[0]=$bifen_array[0];
			$return_7ree[1]=$bifen_array[1];
		}
		return $return_7ree;
}

function get_win_7ree($ashot_7ree, $bshot_7ree, $rangqiufang_7ree, $rangqiuway_7ree){
		$win_7ree = '';
		if($rangqiufang_7ree==1){
	 	 		if($ashot_7ree - intval($rangqiuway_7ree) > $bshot_7ree ){
	 	 			$win_7ree = 'a';
	 	 		}elseif($ashot_7ree - intval($rangqiuway_7ree) < $bshot_7ree ){
	 	 			$win_7ree = 'b';
	 	 		}else{
	 	 			$win_7ree = 'c';
	 	 		}
	 	}elseif($rangqiufang_7ree==2){
	 	 		if($ashot_7ree + intval($rangqiuway_7ree) > $bshot_7ree ){
	 	 			$win_7ree = 'a';
	 	 		}elseif($ashot_7ree + intval($rangqiuway_7ree) < $bshot_7ree ){
	 	 			$win_7ree = 'b';
	 	 		}else{
	 	 			$win_7ree = 'c';
	 	 		}	 	
	 	}else{
	 	 		if($ashot_7ree > $bshot_7ree ){
	 	 			$win_7ree = 'a';
	 	 		}elseif($ashot_7ree < $bshot_7ree ){
	 	 			$win_7ree = 'b';
	 	 		}else{
	 	 			$win_7ree = 'c';
	 	 		}
	 	}
	 	
		return $win_7ree;
}


function get_td_array($table) { 
$table = preg_replace("'<table[^>]*?>'si","",$table); 
$table = preg_replace("'<tr[^>]*?>'si","",$table); 
$table = preg_replace("'<td[^>]*?>'si","",$table); 

$table = preg_replace("'<th[^>]*?>'si","",$table); 

$table = str_replace("</tr>","{tr}",$table); 
$table = str_replace("</td>","{td}",$table); 

$table = str_replace("</th>","{td}",$table); 

$table = preg_replace("'<[\/\!]*?[^<>]*?>'si","",$table); 
$table = preg_replace("'([\r\n])[\s]+'","",$table); 
$table = str_replace(" ","",$table); 
$table = str_replace(" ","",$table); 
$table = explode('{tr}', $table); 
array_pop($table); 
foreach ($table as $key=>$tr) { 
$td = explode('{td}', $tr); 
array_pop($td); 
$td_array[] = $td; 
} 
return $td_array; 
} 


?>