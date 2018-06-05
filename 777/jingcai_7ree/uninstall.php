<?php

/*
	ID: jingcai_7ree
	[www.010xr.com] (C)2007-2013 010xr.com.
	This is NOT a freeware, use is subject to license terms
	Update: 17:11 2013/5/27
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/




if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}


$sql = <<<EOF
DROP TABLE IF EXISTS `pre_jingcai_main_7ree`;
DROP TABLE IF EXISTS `pre_jingcai_log_7ree`;
EOF;

runquery($sql);

$finish = TRUE;




?>


