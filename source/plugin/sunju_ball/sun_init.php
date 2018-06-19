<?php
if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}

require_once 'sun_class.php';

$SUN = new SUN_JU();

$PL_NAME 	= SUN_JU::$PL_NAME;
$PL_STATIC 	= SUN_JU::$PL_STATIC;
$PL_G 		= SUN_JU::$PL_G;
$PL_P_S 	= SUN_JU::$PL_P_S;

$navtitle = lang("plugin/".$PL_NAME, 'navtitle');