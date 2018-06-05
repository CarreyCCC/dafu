<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
$plugintable = DB::table('fruit_order');
$sql = <<<EOF
DROP TABLE IF EXISTS {$plugintable};

EOF;
		runquery($sql);

$finish = true;
?>