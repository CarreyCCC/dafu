<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: facebookbind.inc.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
	exit('Access Denied');
}
if(!$_G['uid']){
	showmessage('not_loggedin',NULL,array(),array('login'=>1));
}
$row=C::t('#apoyl_facebook#apoyl_facebook')->fetch_uid($_G['uid']);
$purl='plugin.php?id=apoyl_facebook:pub';
$destoryurl=$purl.'&ac=revoketoken';

?>