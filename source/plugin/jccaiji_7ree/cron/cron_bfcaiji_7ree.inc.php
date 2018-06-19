<?php
/*
	ID: jccaiji_7ree
	[www.7ree.com] (C)2007-2018 7ree.com.
	This is NOT a freeware, use is subject to license terms
	Update: 2018/6/7 16:34
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/

//cronname:bfcaiji_7ree柒瑞比分采集

//hour:3              设置哪一小时执行本任务，留空为不限制




		
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
loadcache('plugin');
$vars_7ree = $_G['cache']['plugin']['jccaiji_7ree'];
$navtitle = lang('plugin/jccaiji_7ree','php_lang_navtitle_7ree');
if(!$vars_7ree['agreement_7ree']) showmessage('jccaiji_7ree:php_lang_agree_7ree');

if($vars_7ree['onoff_7ree']){

//////////////////////////足球比分

$caijiday_7ree = gmdate("Y-m-d", $_G['timestamp']- 86400*$vars_7ree['jieguotianshu_7ree'] + $_G['setting']['timeoffset'] * 3600);
$url2_7ree = "http://zx.500.com/jczq/kaijiang.php?playid=1&d=".$caijiday_7ree; 
if($vars_7ree['function_7ree']==1){//curl_setopt 函数
		$ch_7ree = curl_init();
		curl_setopt ($ch_7ree,  CURLOPT_URL, $url2_7ree);
		curl_setopt ($ch_7ree,  CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch_7ree, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
		curl_setopt ($ch_7ree, CURLOPT_SSL_VERIFYHOST, FALSE);
		$info1_7ree = curl_exec($ch_7ree);
		curl_close($ch_7ree);
}elseif($vars_7ree['function_7ree']==2){//file_get_contents 函数
		$info1_7ree = file_get_contents($url2_7ree);
}


$pos_7ree = strpos($info1_7ree,'<div class="lea_list">');
$info1_7ree = substr($info1_7ree,$pos_7ree);

$pos2_7ree = strpos($info1_7ree,'<div class="ld_bottom have_b">');
$info1_7ree = substr($info1_7ree,0,$pos2_7ree);


$currentlang=currentlang();
if($currentlang=="SC_UTF8" || $currentlang=="TC_UTF8"){
	$info1_7ree = iconv("gb2312", "utf-8//IGNORE",$info1_7ree);
	$lang_7ree = 'utf-8';
}else{
	$lang_7ree = 'gbk';
}



$result_7ree = get_td_array($info1_7ree);



	
foreach ($result_7ree as $key => $value){
	if(preg_match("/^([0-9]+):([0-9]+)$/",$value[6])){
			$change_7ree['racename_7ree'] = trim(dhtmlspecialchars($value[1]));
			$change_7ree['aname_7ree'] = get_team_7ree($value[3]);
			$change_7ree['bname_7ree'] = get_team_7ree($value[5]);
			$bifen_7ree = get_bifen_7ree($value[6]);
			$change_7ree['ashot_7ree'] = $bifen_7ree[0];
			$change_7ree['bshot_7ree'] = $bifen_7ree[1];
			$result2_7ree[] = $change_7ree;
	}
}


$daylimit_7ree = $vars_7ree['daynum_7ree'] ? $vars_7ree['daynum_7ree']*86400 : 3*86400;

$duiming_7ree =  str_replace("\n","|||",$vars_7ree['duiming_7ree']);
$duiming_array =  explode('|||', $duiming_7ree);
foreach($duiming_array as $duiming_value){
		$duiming_array2[] = explode('=',trim($duiming_value));
}

/*
echo("<pre>");
print_r($result_7ree);
echo("<hr><hr><hr><hr><hr><hr>");
print_r($result2_7ree);
echo("</pre>");
showmessage("...");
*/


foreach($result2_7ree as $date_value){//数据入库
		if($date_value['ashot_7ree']!=NULL || $date_value['bshot_7ree']!=NULL){
		
					foreach($duiming_array2 as $duiming_value2){
							if($duiming_value2[1]==$date_value['aname_7ree']){
							 $date_value['aname_7ree'] = $duiming_value2[0];
							}
							if($duiming_value2[1]==$date_value['bname_7ree']){
							 $date_value['bname_7ree'] = $duiming_value2[0];
							}
					}
					
					 $update_value_7ree = DB::fetch_first("SELECT main_id_7ree, rangqiufang_7ree, rangqiuway_7ree FROM ".DB::table('jingcai_main_7ree')." 
					 								 WHERE time_7ree>$date_value[date_7ree]-$daylimit_7ree 
					 								 AND racename_7ree='$date_value[racename_7ree]' 
					 								 AND aname_7ree='$date_value[aname_7ree]' 
					 								 AND bname_7ree='$date_value[bname_7ree]'");
					 if($update_value_7ree['main_id_7ree']){//检索赛事让球规则，并计算比赛结果入库
				           $win_7ree = get_win_7ree($date_value['ashot_7ree'], $date_value['bshot_7ree'], $update_value_7ree['rangqiufang_7ree'], $update_value_7ree['rangqiuway_7ree']);
					   DB::query("UPDATE ".DB::table('jingcai_main_7ree')." SET
							    	ashot_7ree ='$date_value[ashot_7ree]', bshot_7ree = '$date_value[bshot_7ree]', win_7ree = '$win_7ree'
									WHERE main_id_7ree = '$update_value_7ree[main_id_7ree]' LIMIT 1");
					 }
		}
}

}

//////////////////////////////////函数区

function get_date_7ree($week_7ree,$time_7ree){
		global $_G;
		$return_7ree = '';
		date_default_timezone_set(PRC); 
		$date_7ree = array( 'Sunday'=>lang('plugin/jccaiji_7ree','php_lang_zhouri_7ree'),
							'Monday'=>lang('plugin/jccaiji_7ree','php_lang_zhouyi_7ree'),
							'Tuesday'=>lang('plugin/jccaiji_7ree','php_lang_zhouer_7ree'),
							'Wednesday'=>lang('plugin/jccaiji_7ree','php_lang_zhousan_7ree'),
							'Thursday'=>lang('plugin/jccaiji_7ree','php_lang_zhousi_7ree'),
							'Friday'=>lang('plugin/jccaiji_7ree','php_lang_zhouwu_7ree'),
							'Saturday'=>lang('plugin/jccaiji_7ree','php_lang_zhouliu_7ree')
		);
	if($week_7ree){
		foreach($date_7ree as $key_7ree=>$date_value){
				if(strstr($week_7ree,$date_value)){				
					$btime_7ree = gmdate("Y-m-d",strtotime("".$key_7ree) + $_G['setting']['timeoffset'] * 3600).' '.$time_7ree;
					//$btime_7ree = date("Y-m-d",strtotime("".$key_7ree)).' '.$time_7ree;
					$time_array = explode(":",$time_7ree);
					if($time_array[0]<12){
						$bbtime_7ree = strtotime($btime_7ree)+86400;
					}else{
						$bbtime_7ree = strtotime($btime_7ree);
					}
					$return_7ree = $bbtime_7ree; 
					break;
				}
		}	
	}
	return $return_7ree;
}


function get_peilv_7ree($peilv_7ree){//足球让球赔率
		$return_7ree = array();
		$peilv_7ree = trim($peilv_7ree);
		if($peilv_7ree){
			$return_7ree[0]=substr($peilv_7ree,0,2);
			$return_7ree[1]=substr($peilv_7ree,2,4);
			$return_7ree[2]=substr($peilv_7ree,6,4);
			$return_7ree[3]=substr($peilv_7ree,10,4);
		}
		return $return_7ree;
}

function get_rangqiu_7ree($rangqiu_7ree){//让球数分析
		$return_7ree = array();
		if($rangqiu_7ree<0){
		 $return_7ree['rangqiufang_7ree']=1;
		 $return_7ree['rangqiuway_7ree']= abs($rangqiu_7ree);
		}elseif($rangqiu_7ree>0){
		 $return_7ree['rangqiufang_7ree']=2;
		 $return_7ree['rangqiuway_7ree']= abs($rangqiu_7ree);
		}else{
		 $return_7ree['rangqiufang_7ree']=0;
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
	 	 		if($ashot_7ree - floatval($rangqiuway_7ree) > $bshot_7ree ){
	 	 			$win_7ree = 'a';
	 	 		}elseif($ashot_7ree - floatval($rangqiuway_7ree) < $bshot_7ree ){
	 	 			$win_7ree = 'b';
	 	 		}else{
	 	 			$win_7ree = 'c';
	 	 		}
	 	}elseif($rangqiufang_7ree==2){
	 	 		if($ashot_7ree + floatval($rangqiuway_7ree) > $bshot_7ree ){
	 	 			$win_7ree = 'a';
	 	 		}elseif($ashot_7ree + floatval($rangqiuway_7ree) < $bshot_7ree ){
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

function get_team_7ree($team_7ree){
		global $_G;
		$return_7ree = '';
		$preg_7ree='/\[.*\]/i';
		$team_7ree = trim(dhtmlspecialchars($team_7ree));
		$return_7ree = preg_replace($preg_7ree,'',$team_7ree);
		//$return_7ree = $team_7ree ;
		return $return_7ree;
}

function get_td_array($table) { 
$table = preg_replace("'<table[^>]*?>'si","",$table); 
$table = preg_replace("'<tr[^>]*?>'si","",$table); 
$table = preg_replace("'<td[^>]*?>'si","",$table); 
$table = str_replace("</tr>","{tr}",$table); 
$table = str_replace("</td>","{td}",$table); 
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
array_shift($td_array); 

return $td_array; 
} 


?>