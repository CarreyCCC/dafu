<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: mobilelogin.class.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
    exit('Access Denied');
}
if($ftpl=='global_footer_mobile'){
    if(($_GET['mod']=="register"&&!$_G['uid'])||($_GET['mod']=="logging"&&$_GET['action']=="login"&&$_GET['mobile']==1)){
        include template('apoyl_facebook:fb_mobile_login');
    }
}else{
    include template('apoyl_facebook:fb_mobile_login');
}


?>