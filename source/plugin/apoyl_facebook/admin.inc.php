<?php
/**
 *      [liyuanchao] (C)2014-2018 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: admin.inc.php  2018-02 liyuanchao $
 */
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

if($_GET['go']=='del'&&$_GET['formhash']==FORMHASH){
    if(is_numeric($_GET['userid'])){ 
        C::t('#apoyl_facebook#apoyl_facebook')->delete($_GET['userid']);
    }
}
showtableheader();

$page=isset($_GET['page'])?intval($_GET['page']):1;
$prepage=15;
$start=($page-1)*$prepage;
$num=C::t('#apoyl_facebook#apoyl_facebook')->count();
$multipage = multi($num, $prepage, $page, ADMINSCRIPT.'?action=plugins&operation=config&do='.$pluginid.'&identifier=apoyl_facebook&pmod=admin');
$arr=C::t('#apoyl_facebook#apoyl_facebook')->fetcharr($start,$prepage);
showsubtitle(array(
lang('plugin/apoyl_facebook','uid'),
lang('plugin/apoyl_facebook','username'),
lang('plugin/apoyl_facebook','fbname'),
lang('plugin/apoyl_facebook','fbemail'),
lang('plugin/apoyl_facebook','regdate'),
lang('plugin/apoyl_facebook','ac'),

));
foreach ($arr as $v){
if($v['uid']){
    $a=getuserbyuid($v['uid']);
    $v['username']=$a['username'];
}
$delurl='<a href="'.ADMINSCRIPT.'?action=plugins&operation=config&do='.$pluginid.'&identifier=apoyl_facebook&pmod=admin&go=del&userid='.$v['user_id'].'&formhash='.formhash().'" onclick="javascript:if(!confirm(\''.lang('plugin/apoyl_facebook','unbind_msg').'\')){return false}">'.lang('plugin/apoyl_facebook','unbind').'</a>';
    showtablerow('','',array($v['uid'],'<a href="'.$_G['siteurl'].'home.php?mod=space&uid='.$v['uid'].'" target="_blank">'.$v['username'].'</a>',$v['screen_name'],$v['email'],date('Y-m-d H:i',$v['regdate']),$delurl));
}
showtablefooter();
echo '<div class="cuspages right">'.$multipage.'</div>';


?>