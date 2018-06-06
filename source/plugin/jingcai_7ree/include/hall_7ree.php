<?php
/*
	ID: jingcai_7ree
	[www.7ree.com] (C)2007-2017 7ree.com.
	This is NOT a freeware, use is subject to license terms
	Update: 2017/8/4 16:01
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

	if($jingcai_7ree_var['refreshtime_7ree']){
			setcookie('refreshtime_7ree', 0);
	}
	$qrimg_7ree = '';
	$qrfile_7ree = './source/plugin/jingcai_7ree/topad_img_7ree/qrcode_7ree.png';
		
	if(file_exists($qrfile_7ree)){
			if(filemtime($qrfile_7ree)+86400<$_G['timestamp']){
				unlink($qrfile_7ree);
			}
	}
		
	if(!file_exists($qrfile_7ree) && $jingcai_7ree_var['touchon_7ree']){
		include('./source/plugin/jingcai_7ree/include/phpqrcode/phpqrcode.php');
		$qrurl_7ree = $_G['setting']['siteurl'].'plugin.php?id=jingcai_7ree:jingcai_7ree';
		$errorCorrectionLevel = 'L';
		$matrixPointSize = 2;
		QRcode::png($qrurl_7ree, $qrfile_7ree, $errorCorrectionLevel, $matrixPointSize, 2);
	}else{
		$qrimg_7ree = $qrfile_7ree;
	}
	
	
	
	$_GET['finish_7ree'] = intval($_GET['finish_7ree']);
	$finish_where_7ree = $_GET['finish_7ree'] ? " WHERE time_7ree <= $_G[timestamp]" : " WHERE time_7ree > $_G[timestamp]";
	$fenlei_where_7ree = $fenlei1_7ree ? " AND fenlei1_7ree = '{$fenlei1_7ree}' " : "";
	$fenlei_where_7ree = $fenlei2_7ree ? $fenlei_where_7ree." AND fenlei2_7ree = '{$fenlei2_7ree}' " : $fenlei_where_7ree;

	if($_G['uid']){
	   $query = DB::query("SELECT main_id_7ree FROM ".DB::table('jingcai_log_7ree')." WHERE uid_7ree = '{$_G[uid]}' GROUP BY main_id_7ree ORDER BY log_id_7ree DESC LIMIT 100");
		while($result = DB::fetch($query)) {
			$mylist_7ree[] = $result['main_id_7ree'];
		}
    }

	if($_GET['finish_7ree']){
			if(!$jingcai_7ree_var['order2_7ree']){
		          $order_7ree = 'main_id_7ree DESC';
			}elseif($jingcai_7ree_var['order2_7ree']==1){
		          $order_7ree = 'main_id_7ree';
			}elseif($jingcai_7ree_var['order2_7ree']==2){
		          $order_7ree = 'time_7ree DESC';
			}elseif($jingcai_7ree_var['order2_7ree']==3){
		          $order_7ree = 'time_7ree';
			}else{
		          $order_7ree = 'time_7ree DESC';
			}	
	}else{
			if(!$jingcai_7ree_var['order_7ree']){
		          $order_7ree = 'main_id_7ree DESC';
			}elseif($jingcai_7ree_var['order_7ree']==1){
		          $order_7ree = 'main_id_7ree';
			}elseif($jingcai_7ree_var['order_7ree']==2){
		          $order_7ree = 'time_7ree DESC';
			}elseif($jingcai_7ree_var['order_7ree']==3){
		          $order_7ree = 'time_7ree';
			}else{
		          $order_7ree = 'time_7ree DESC';
			}	
	}	

	

    $page = max(1, intval($_GET['page']));
	$startpage = ($page - 1) * $jingcai_7ree_var['pagenum_7ree'];
	$querynum = DB::result_first("SELECT Count(*) FROM ".DB::table('jingcai_main_7ree')." {$finish_where_7ree} {$fenlei_where_7ree}");
	$query = DB::query("SELECT * FROM  ".DB::table('jingcai_main_7ree')." {$finish_where_7ree} {$fenlei_where_7ree} ORDER BY {$order_7ree} LIMIT {$startpage}, {$jingcai_7ree_var[pagenum_7ree]}");
	while($result = DB::fetch($query)) {
		$result['clock_7ree'] = $result['time_7ree']-$jingcai_7ree_var['stoptime_7ree']*60 - $_G['timestamp'];
	    $result['open_7ree'] = $result['time_7ree']-$jingcai_7ree_var['stoptime_7ree']*60 > $_G['timestamp'] ? 1 : 0;
		$result['time_7ree']=gmdate("Y-m-d H:i", $result['time_7ree'] + $_G['setting']['timeoffset'] * 3600);
		for($i=0;$i<COUNT($titlebg_array);$i++){
			if($titlebg_array2[$i][0] == $result['racename_7ree']) $result['titlebg_7ree'] = $titlebg_array2[$i][1];
		}

        if($_G['uid'] && $mylist_7ree){
            $result['myrace_7ree'] = in_array($result['main_id_7ree'],$mylist_7ree) ? 1 : 0;
        }

		$racelist_7ree[] = $result;
	} 
	    $multipage = multi($querynum, $jingcai_7ree_var['pagenum_7ree'], $page, "plugin.php?id=jingcai_7ree:jingcai_7ree&finish_7ree={$_GET['finish_7ree']}&fenlei1_7ree={$_GET['fenlei1_7ree']}&fenlei2_7ree={$_GET['fenlei2_7ree']}" );


?>