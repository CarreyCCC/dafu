<?php
if (! defined ( 'IN_DISCUZ' ) || ! defined ( 'IN_ADMINCP' )) {
	exit ( 'Access Denied' );
}

require_once 'sun_init.php';

$PL_ADMIN_URL = "admin.php?action=plugins&identifier={$PL_NAME}&pmod=sunperiod&op=";
$op = trim($_GET['op']) ? $_GET['op'] : "";

// add
if("add" == $op && $_GET['formhash'] == FORMHASH){
	SUN_JU::doAdminAddPeriod();
}

// kai
if("go" == $op){	
	SUN_JU::doAdminEnd();
}

// mod key 
if("key" == $op){
	SUN_JU::doAdminModKey();
}

// list
$page 	= $_GET ['page'] ? $_GET ['page'] : 1;
$pnum 	= 10;
$start 	= ($page - 1) * $pnum;
$limit 	= "{$start},{$pnum}"; 

$total 		= SUN_JU::doGetPList(array("isCount"=>1));
$multipage 	= multi ( $total, $pnum, $page, $PL_ADMIN_URL, $maxpages = 0, $page = 6, $autogoto = FALSE, $simple = TRUE );
$list 		= SUN_JU::doGetPList(array("limit"=>$limit));

$now_period = str_split($list[0]['period'],8);
if($now_period[0] == date("Ymd")){
	$now_period_ = $now_period[1] ? ($now_period[1] + 1) : '01';
	$now_period_ = strlen($now_period_) < 2 ? "0".$now_period_ : $now_period_;
}else{
	$now_period_ = "01";
}
$now_period = date("Ymd").$now_period_;

include template($PL_NAME.':admin/period');

?>