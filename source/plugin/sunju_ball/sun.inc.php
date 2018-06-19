<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'sun_init.php';

//var_dump(PHP_VERSION);

$PL_URL    = 'plugin.php?id='.SUN_JU::$PL_NAME.':sun';

if(isset($_GET['send'])){
	SUN_JU::doSendIn();
}

// index
$info = SUN_JU::doGetNewlyPeriod();
$time_s = strtotime($info['s_time']);
$time_e = strtotime($info['e_time']);
$time_s_f = date("Y".lang("plugin/".$PL_NAME, 'y')."m".lang("plugin/".$PL_NAME, 'm')."d".lang("plugin/".$PL_NAME, 'd')." H:i:s",$time_s);
$time_e_f = date("Y".lang("plugin/".$PL_NAME, 'y')."m".lang("plugin/".$PL_NAME, 'm')."d".lang("plugin/".$PL_NAME, 'd')." H:i:s",$time_e);
if ($info && $info['status'] == 1) {
	$time 	= time();
	
	if ($time > $time_s && $time <  $time_e) {
		$intDiff = $time_e - $time;
	} else {
		$intDiff = 0;
		if($info['status'] == 1){
			DB::update('sun_ball_period', array("status"=>2), "id={$info['id']}");
			$info['status'] = 2;
		}
	}
} else {
	$intDiff = 0;
}

$list = SUN_JU::doGetPList(array("status"=>3,"limit"=>10));
include template($PL_NAME.':sun');

?>