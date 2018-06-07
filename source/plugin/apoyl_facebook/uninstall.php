<?php
/**
 *      [liyuanchao] (C)2015-2018 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: uninstall.php  2018-02 liyuanchao $
 */

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

$sql = <<<EOF

DROP TABLE pre_plugin_apoyl_facebook;

EOF;


$finish = TRUE;