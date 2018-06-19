<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: pub.inc.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
	exit('Access Denied');
}
@session_start();
$ac=empty($_GET['ac'])?'index':strtolower(daddslashes($_GET['ac']));
$arr=array('index','callback','tokeninfo','revoketoken');
if(!in_array($ac,$arr)){
  showmessage(lang('plugin/apoyl_facebook', 'nourl'),'',array());
}

require_once dirname(__FILE__).'/class/go.class.php';
$go=new go();
$go->$ac();

?>