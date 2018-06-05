<?php
/*
	ID: jingcai_7ree
	[www.010xr.com] (C)2007-2013 010xr.com.
	This is NOT a freeware, use is subject to license terms
	Update: 09:27 2013/6/30
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/		
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$jingcai_7ree_var = $_G['cache']['plugin']['jingcai_7ree'];

if (!$jingcai_7ree_var['agreement_7ree']) showmessage('jingcai_7ree:php_lang_agree_7ree');

//$navtitle = lang('plugin/jingcai_7ree', 'php_lang_navtitle_7ree');
$navtitle = $jingcai_7ree_var['navtitle_7ree'];
$metakeywords  = $jingcai_7ree_var['keywords_7ree'];
$metadescription  = $jingcai_7ree_var['description_7ree'];

$_GET['ac_7ree'] = intval($_GET['ac_7ree']);
$_GET['sp_7ree'] = daddslashes(dhtmlspecialchars($_GET['sp_7ree']));	
	
$extname_7ree = "extcredits".$jingcai_7ree_var['extcredit_7ree'];
$exttitle_7ree = $_G['setting']['extcredits'][$jingcai_7ree_var['extcredit_7ree']][title];
$notice_7ree = $jingcai_7ree_var['notice_7ree'];
$width_7ree = $jingcai_7ree_var['width_7ree'];
$height_7ree = $jingcai_7ree_var['height_7ree'];
$cost_7ree = $jingcai_7ree_var['cost_7ree'];

$isadmins_7ree = (in_array($_G['uid'],explode(',',$jingcai_7ree_var['admins_7ree']))) ? 1 : 0;

$fenlei_7ree =  str_replace("\n","|||",$jingcai_7ree_var[fenlei_7ree]);
$fenlei_array =  explode('|||', $fenlei_7ree);


foreach($fenlei_array as $fenlei_value){
		$fenlei_array2[] = explode(',',trim($fenlei_value));	
}			

if(!$_G[uid] && in_array($_GET[ac_7ree],array("1","2","3","4"))) showmessage('not_loggedin', NULL, 'NOPERM');
if(!($_G[adminid]==1 || $isadmins_7ree) && in_array($_GET[ac_7ree],array("2","3"))) showmessage('Permission denied. @7ree', NULL, 'NOPERM');

$_GET['fenlei1_7ree'] = $_GET['fenlei1_7ree'] ? daddslashes(dhtmlspecialchars(trim($_GET['fenlei1_7ree']))) : '';
$_GET['fenlei2_7ree'] = $_GET['fenlei2_7ree'] ? daddslashes(dhtmlspecialchars(trim($_GET['fenlei2_7ree']))) : '';

if(!$_GET['ac_7ree']){    
	if (!$_GET['sp_7ree']){
	
	$fenlei_where_7ree = $_GET['fenlei1_7ree'] ? " AND fenlei1_7ree = '{$_GET[fenlei1_7ree]}' " : "";
	$fenlei_where_7ree = $_GET['fenlei2_7ree'] ? $fenlei_where_7ree." AND fenlei2_7ree = '{$_GET[fenlei2_7ree]}' " : $fenlei_where_7ree;
		
    $page = $_G['page'];
    $page = 20 && $page > 20 ? 1 : $page;
	$startpage = ($page - 1) * 20;
	$query = DB::query("SELECT Count(*) FROM  ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree > 0");
    $querynum = DB::result($query,0);
	$query = DB::query("SELECT * FROM  ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree > 0 {$fenlei_where_7ree} ORDER BY main_id_7ree DESC LIMIT {$startpage}, 20");
	while($result = DB::fetch($query)) {
	    $result[open_7ree] = $result[time_7ree] > $_G['timestamp'] ? 1 : 0;
		$result[time_7ree]=gmdate("Y-m-d H:i", $result[time_7ree] + $_G[setting][timeoffset] * 3600);
		$racelist_7ree[] = $result;
	}
	    $multipage = multi($querynum, 20, $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&fenlei1_7ree={$_GET['fenlei1_7ree']}&fenlei2_7ree={$_GET['fenlei2_7ree']}" );
		$mymultipage_7ree = $multipage."      [<a href='http://www.010xr.com' target='_blank'><font color=gray>Powered by 010xr.com</font></a>]";	
    }elseif($_GET['sp_7ree'] == "more"){
    	
    $race_7ree = DB::fetch_first("SELECT * FROM ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]'");
    $race_7ree[open_7ree] = $race_7ree[time_7ree] > $_G['timestamp'] ? 1 : 0;
    $race_7ree[time_7ree] = gmdate("Y-m-d H:i", $race_7ree[time_7ree] + $_G[setting][timeoffset] * 3600);
    
    $navtitle = $navtitle.' - '.$race_7ree[racename_7ree] ;
    
    if($_G[uid]) $mywin_7ree = DB::fetch_first("SELECT mywin_7ree,myodds_7ree FROM ".DB::table('jingcai_log_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]' AND uid_7ree='$_G[uid]'");
    
    $anum_7ree = DB::result_first("SELECT COUNT(*) FROM ".DB::table('jingcai_log_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]' AND mywin_7ree='a'");
    $bnum_7ree = DB::result_first("SELECT COUNT(*) FROM ".DB::table('jingcai_log_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]' AND mywin_7ree='b'");
    $cnum_7ree = DB::result_first("SELECT COUNT(*) FROM ".DB::table('jingcai_log_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]' AND mywin_7ree='c'");

    }
	
}elseif($_GET['ac_7ree'] =="1"){  
	if($_GET['op_7ree'] == "get"){
	if($_GET[formhash] <> FORMHASH) showmessage("Access Deined. @ 010xr.com");

    if(intval($_GET[log_id_7ree])) $mylog_7ree = DB::fetch_first("SELECT l.*, m.* FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree WHERE l.log_id_7ree = '$_GET[log_id_7ree]'");
	if ($mylog_7ree[log_reward_7ree]) showmessage('jingcai_7ree:php_lang_yilingqu_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=1");
	if ($mylog_7ree[win_7ree] != $mylog_7ree[mywin_7ree]) showmessage('jingcai_7ree:php_lang_buzhengque_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=1");
		$odds_7ree = $mylog_7ree[mywin_7ree]."odds_7ree";
		$mylog_7ree[plan_reward_7ree] = round($mylog_7ree[myodds_7ree] * $mylog_7ree[$odds_7ree]);

    DB::query("UPDATE ".DB::table('jingcai_log_7ree')." SET log_reward_7ree = '{$mylog_7ree[plan_reward_7ree]}' WHERE log_id_7ree = '$_GET[log_id_7ree]' AND uid_7ree='$_G[uid]'");

	DB::query("UPDATE ".DB::table('common_member_count')." SET {$extname_7ree} = {$extname_7ree} + {$mylog_7ree[plan_reward_7ree]} WHERE uid='{$mylog_7ree[uid_7ree]}' LIMIT 1");

	showmessage('jingcai_7ree:php_lang_chenggonglingqu_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=1");	
	}else{
    $page = $_G['page'];
    $page = 20 && $page > 20 ? 1 : $page;
	$startpage = ($page - 1) * 20;
	$query = DB::query("SELECT Count(*) FROM ".DB::table('jingcai_log_7ree')." WHERE uid_7ree = '$_G[uid]'");
    $querynum = DB::result($query,0);
	$query = DB::query("SELECT l.*,m.* FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree WHERE  l.uid_7ree = '$_G[uid]' ORDER BY l.log_id_7ree DESC LIMIT {$startpage}, 20");
	while($result = DB::fetch($query)) {
		$result[log_time_7ree]=gmdate("Y-m-d H:i", $result[log_time_7ree] + $_G[setting][timeoffset] * 3600);
		if($result[mywin_7ree] == $result[win_7ree]){
		$odds_7ree = $result[mywin_7ree]."odds_7ree";
		$result[plan_reward_7ree] = round($result[myodds_7ree] * $result[$odds_7ree]) ;
		}else{
		$result[plan_reward_7ree] = "0";
		}
		$loglist_7ree[] = $result;
	}
	    $multipage = multi($querynum, 20, $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=1" );
		$mymultipage_7ree = $multipage."      [<a href='http://www.010xr.com' target='_blank'><font color=gray>Powered by 010xr.com</font></a>]";	
	
	}
	
	
}elseif($_GET['ac_7ree'] =="2"){  
	
if(!$_GET['sp_7ree']){

}elseif($_GET['sp_7ree'] == "op"){
	
    $page = $_G['page'];
    $page = 20 && $page > 20 ? 1 : $page;
	$startpage = ($page - 1) * 20;
	$query = DB::query("SELECT Count(*) FROM ".DB::table('jingcai_main_7ree'));
    $querynum = DB::result($query,0);
	$query = DB::query("SELECT * FROM ".DB::table('jingcai_main_7ree')." ORDER BY main_id_7ree DESC LIMIT {$startpage}, 20");
	while($result = DB::fetch($query)) {
		$result[time_7ree]=gmdate("Y-m-d H:i", $result[time_7ree] + $_G[setting][timeoffset] * 3600);
		$racelist_7ree[] = $result;
	}
	    $multipage = multi($querynum, 20, $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=op" );
		$mymultipage_7ree = $multipage."      [<a href='http://www.010xr.com' target='_blank'><font color=gray>Powered by 010xr.com</font></a>]";	
	
}elseif($_GET['sp_7ree'] == "edit"){
$race_7ree = DB::fetch_first("SELECT * FROM ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]'");
$race_7ree[time_7ree] = gmdate("Y-m-d H:i", $race_7ree[time_7ree] + $_G[setting][timeoffset] * 3600);
}elseif($_GET['sp_7ree'] == "del"){

	if($_GET[formhash] <> FORMHASH) showmessage("Access Deined. @ 010xr.com");
	DB::query("DELETE FROM ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]'");
	showmessage('jingcai_7ree:php_lang_chenggongshanchu_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=op");

}elseif($_GET['sp_7ree'] == "log"){
    $page = $_G['page'];
    $page = 20 && $page > 20 ? 1 : $page;
	$startpage = ($page - 1) * 20;
	$query = DB::query("SELECT Count(*) FROM ".DB::table('jingcai_log_7ree'));
    $querynum = DB::result($query,0);
	$query = DB::query("SELECT l.*,m.* FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree ORDER BY l.log_id_7ree DESC LIMIT {$startpage}, 20");
	while($result = DB::fetch($query)) {
		$result[log_time_7ree]=gmdate("Y-m-d H:i", $result[log_time_7ree] + $_G[setting][timeoffset] * 3600);
		$loglist_7ree[] = $result;
	}
	    $multipage = multi($querynum, 20, $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=log" );
		$mymultipage_7ree = $multipage."      [<a href='http://www.010xr.com' target='_blank'><font color=gray>Powered by 010xr.com</font></a>]";	

}


}elseif($_GET['ac_7ree'] =="3"){  
if (!submitcheck('add_submit_7ree', 1)) exit('Access Denied @ 7ree');

$_GET[main_id_7ree] = intval($_GET[main_id_7ree]);
$_GET[racename_7ree] = daddslashes(dhtmlspecialchars($_GET[racename_7ree]));
$_GET[reward_7ree] = daddslashes(dhtmlspecialchars($_GET[reward_7ree]));
$_GET[add_7ree] = daddslashes(dhtmlspecialchars($_GET[add_7ree]));
$_GET[time_7ree] = daddslashes(dhtmlspecialchars($_GET[time_7ree]));
$_GET[aname_7ree] = daddslashes(dhtmlspecialchars($_GET[aname_7ree]));			
$_GET[bname_7ree] = daddslashes(dhtmlspecialchars($_GET[bname_7ree]));
$_GET[alogo_7ree] = daddslashes(dhtmlspecialchars($_GET[alogo_7ree]));	
$_GET[blogo_7ree] = daddslashes(dhtmlspecialchars($_GET[blogo_7ree]));	
$_GET[amessage_7ree] = daddslashes(dhtmlspecialchars($_GET[amessage_7ree]));
$_GET[bmessage_7ree] = daddslashes(dhtmlspecialchars($_GET[bmessage_7ree]));	
$_GET[racemessage_7ree] = daddslashes(dhtmlspecialchars($_GET[racemessage_7ree]));	
$_GET[win_7ree] = daddslashes(dhtmlspecialchars($_GET[win_7ree]));
	
	
if(!trim($_GET[racename_7ree])) showmessage('jingcai_7ree:php_lang_error_name_7ree',"");
if(!trim($_GET[reward_7ree]) || !ereg("^[0-9]*$",$_GET[reward_7ree])) showmessage('jingcai_7ree:php_lang_error_reward_7ree',"");
if(!trim($_GET[time_7ree])) showmessage('jingcai_7ree:php_lang_error_time_7ree',"");
if(!trim($_GET[aname_7ree])) showmessage('jingcai_7ree:php_lang_error_aname_7ree',"");
if(!trim($_GET[bname_7ree])) showmessage('jingcai_7ree:php_lang_error_bname_7ree',"");


$aodds_7ree = floatval($_GET[aodds_7ree]);
$bodds_7ree = floatval($_GET[bodds_7ree]);
$codds_7ree = floatval($_GET[codds_7ree]);


//if(!$aodds_7ree || !$bodds_7ree || !$codds_7ree)  showmessage('jingcai_7ree:php_lang_error_odds_7ree',"");
if(!$aodds_7ree || !$bodds_7ree)  showmessage('jingcai_7ree:php_lang_error_odds_7ree',"");

$_GET[time_7ree] = $_GET[time_7ree] ? strtotime($_GET[time_7ree]) : 0;
if(trim($_GET[main_id_7ree])){
DB::query("UPDATE ".DB::table('jingcai_main_7ree')." SET
	    racename_7ree = '$_GET[racename_7ree]',
		fenlei1_7ree = '$_GET[fenlei1_7ree]',
		fenlei2_7ree = '$_GET[fenlei2_7ree]',	
		reward_7ree = '$_GET[reward_7ree]',
		add_7ree = '$_GET[add_7ree]',
		time_7ree = '$_GET[time_7ree]',
		aname_7ree = '$_GET[aname_7ree]',
		bname_7ree = '$_GET[bname_7ree]',
		alogo_7ree = '$_GET[alogo_7ree]',
		blogo_7ree = '$_GET[blogo_7ree]',
		amessage_7ree = '$_GET[amessage_7ree]',
		bmessage_7ree = '$_GET[bmessage_7ree]',
		aodds_7ree = '$aodds_7ree',
		bodds_7ree = '$bodds_7ree',
		codds_7ree = '$codds_7ree',
		racemessage_7ree = '$_GET[racemessage_7ree]',
		win_7ree = '$_GET[win_7ree]'
        WHERE main_id_7ree = '{$_GET[main_id_7ree]}'");
showmessage('jingcai_7ree:php_lang_chenggongbianji_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=op");
}elseif(!trim($_GET[main_id_7ree])){
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
		racemessage_7ree
        ) VALUES (
	    '$_GET[racename_7ree]',
		'$_GET[fenlei1_7ree]',
		'$_GET[fenlei2_7ree]',
		'$_GET[reward_7ree]',
		'$_GET[add_7ree]',
		'$_GET[time_7ree]',
		'$_GET[aname_7ree]',
		'$_GET[bname_7ree]',
		'$_GET[alogo_7ree]',
		'$_GET[blogo_7ree]',
		'$_GET[amessage_7ree]',
		'$_GET[bmessage_7ree]',
		'$aodds_7ree',
		'$bodds_7ree',
		'$codds_7ree',
		'$_GET[racemessage_7ree]'
        )");
showmessage('jingcai_7ree:php_lang_chenggongtijiao_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=add");
}
}elseif($_GET['ac_7ree'] =="4"){  
	
	
	if($_GET[formhash] <> FORMHASH) showmessage("Access Deined. @ 010xr.com");
	

    if (DB::result_first("SELECT time_7ree FROM ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]'") < $_G[timestamp]) showmessage('jingcai_7ree:php_lang_yijingkaishi_7ree',"");

	if (DB::result_first("SELECT mywin_7ree FROM ".DB::table('jingcai_log_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]' AND uid_7ree='$_G[uid]'")) showmessage('jingcai_7ree:php_lang_chenggongjingcai_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree");
	
	$myodds_7ree = intval($_GET[myodds_7ree]);


	
	if ($myodds_7ree < DB::result_first("SELECT reward_7ree FROM ".DB::table('jingcai_main_7ree')." WHERE main_id_7ree = '$_GET[main_id_7ree]'")) showmessage(lang('plugin/jingcai_7ree', 'php_lang_error_zuidi1_7ree').$exttitle_7ree.lang('plugin/jingcai_7ree', 'php_lang_error_zuidi2_7ree'),"");
	if ($myodds_7ree > $cost_7ree && $cost_7ree) showmessage(lang('plugin/jingcai_7ree', 'php_lang_error_zuigao1_7ree').$cost_7ree.$exttitle_7ree.lang('plugin/jingcai_7ree', 'php_lang_error_zuigao2_7ree'),"");

	if(DB::result_first("SELECT {$extname_7ree} FROM ".DB::table('common_member_count')." WHERE uid='$_G[uid]'") < $myodds_7ree){
	showmessage('jingcai_7ree:php_lang_jifenbuzu_7ree',"");	

	}else{
	DB::query("UPDATE ".DB::table('common_member_count')." SET {$extname_7ree} = {$extname_7ree} - {$myodds_7ree} WHERE uid='$_G[uid]' LIMIT 1");

	DB::query("INSERT INTO ".DB::table('jingcai_log_7ree')." (
	uid_7ree,
	username_7ree,
	myodds_7ree,
	mywin_7ree,
	log_time_7ree,
	main_id_7ree
	) VALUES (
	'$_G[uid]',
	'$_G[username]',
	$myodds_7ree,
	'$_GET[win_7ree]',
	'$_G[timestamp]',
	'$_GET[main_id_7ree]'
	)");
	
	showmessage('jingcai_7ree:php_lang_zhichichenggong_7ree',"plugin.php?id=jingcai_7ree:jingcai_7ree");
	}

}elseif($_GET['ac_7ree'] =="5"){  
	
    $page = $_G['page'];
    $page = 20 && $page > 20 ? 1 : $page;
	$startpage = ($page - 1) * 20;
	$query = DB::query("SELECT Count(*) FROM ".DB::table('jingcai_log_7ree'));
    $querynum = DB::result($query,0);
	$query = DB::query("SELECT l.*,m.* FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree ORDER BY l.log_id_7ree DESC LIMIT {$startpage}, 20");
	while($result = DB::fetch($query)) {
		$result[log_time_7ree]=gmdate("Y-m-d H:i", $result[log_time_7ree] + $_G[setting][timeoffset] * 3600);
		$loglist_7ree[] = $result;
	}
	    $multipage = multi($querynum, 20, $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=5&sp_7ree=log" );
		$mymultipage_7ree = $multipage."      [<a href='http://www.010xr.com' target='_blank'><font color=gray>Powered by 010xr.com</font></a>]";	

}elseif($_GET['ac_7ree'] =="6"){  
	$_GET['how_7ree'] = intval($_GET['how_7ree']);
	$_GET['how_7ree'] = in_array($_GET['how_7ree'],array('1','2','3')) ? $_GET['how_7ree'] : 1;
	$_GET['cycle_7ree'] = intval($_GET['cycle_7ree']);
	$_GET['cycle_7ree'] = in_array($_GET['cycle_7ree'],array('1','2','3','4')) ? $_GET['cycle_7ree'] : 1;	


	if($_GET['cycle_7ree']==1){ //全部时间
		$toptime_7ree = 0;
	}elseif($_GET['cycle_7ree']==2){ //本年
	    $toptime_7ree = mktime(0,0,0,1,1,gmdate("Y",$_G[timestamp] + $_G[setting][timeoffset] * 3600));
	}elseif($_GET['cycle_7ree']==3){ //本月
 		$toptime_7ree = mktime(0,0,0,gmdate("m",$_G[timestamp] + $_G[setting][timeoffset] * 3600),1,gmdate("Y",$_G[timestamp] + $_G[setting][timeoffset] * 3600));	
	}elseif($_GET['cycle_7ree']==4){//本周	
 		$toptime_7ree = mktime(0, 0, 0, gmdate("m",strtotime("last Monday") + $_G[setting][timeoffset] * 3600),date("d",strtotime("last Monday") + $_G[setting][timeoffset] * 3600),date("Y",strtotime("last Monday") + $_G[setting][timeoffset] * 3600)); 	
	}
	
		$toptime_zhou_where_7ree = $toptime_7ree ? " AND log_time_7ree > {$toptime_7ree} " : "";
 
 	
	if($_GET['how_7ree']==1){
	
	$query = DB::query("SELECT l.*, count(l.log_id_7ree) AS log_num_7ree, SUM(l.log_reward_7ree) AS sum_reward_7ree FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree WHERE m.win_7ree = l.mywin_7ree {$toptime_zhou_where_7ree} GROUP BY l.uid_7ree ORDER BY sum_reward_7ree DESC LIMIT 100");	
	
	}elseif($_GET['how_7ree']==2){
		
	$query = DB::query("SELECT *, count(log_id_7ree) AS log_num_7ree,SUM(log_reward_7ree - myodds_7ree) AS sum_reward_7ree FROM ".DB::table('jingcai_log_7ree')." WHERE log_reward_7ree > myodds_7ree {$toptime_zhou_where_7ree} GROUP BY uid_7ree ORDER BY sum_reward_7ree DESC LIMIT 100");
		
	}elseif($_GET['how_7ree']==3){

	$query = DB::query("SELECT l.*, count(l.log_id_7ree) AS log_num_7ree, SUM(l.log_reward_7ree) AS sum_reward_7ree FROM ".DB::table('jingcai_log_7ree')." l LEFT JOIN ".DB::table('jingcai_main_7ree')." m ON l.main_id_7ree = m.main_id_7ree WHERE m.win_7ree = l.mywin_7ree {$toptime_zhou_where_7ree} GROUP BY l.uid_7ree ORDER BY log_num_7ree DESC LIMIT 100");
			
	}

	while($result = DB::fetch($query)) {
		$toplist_7ree[] = $result;
	}
	
}else{

 		showmessage("Undefined Operation @ 010xr.com");

			
}
include template('jingcai_7ree:jingcai_index_7ree');
?>
