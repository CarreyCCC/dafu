<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: facebook.class.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
    exit('Access Denied');
}
class plugin_apoyl_facebook {
    protected  $facebook_login_url='plugin.php?id=apoyl_facebook:pub';
    public function global_usernav_extra1(){
        global $_G;
        $uid=$_G['uid'];
        if(!$uid) return '';
        $row=C::t('#apoyl_facebook#apoyl_facebook')->fetch_uid($uid);
        if(!$row){
            $str=' <a href="plugin.php?id=apoyl_facebook:pub"  ><img src="source/plugin/apoyl_facebook/image/login_bind_small.png" style="vertical-align: text-bottom;"  /></a> ';
        }else{
            $str=' <img src="source/plugin/apoyl_facebook/image/logo_small.png"  alt="'.lang('plugin/apoyl_facebook','facebook_binded').'"  title="'.lang('plugin/apoyl_facebook','facebook_binded').'" /> ';
        }

        return $str;
    }
    public function global_login_extra(){
        global $_G;
        $return = '';
        if(!$this->_showbtn(1)) return $return;
        include template('apoyl_facebook:block/global_login_extra');
        return $return;
    }
    public function global_login_text(){
        global $_G;
        $return = '';
        if(!$this->_showbtn(4)) return $return;
        include template('apoyl_facebook:block/global_login_text');
        return $return;
    }



    protected function _showbtn($num){
        global $_G;
        $showbtn=unserialize($_G['cache']['plugin']['apoyl_facebook']['showbtn']);
        if(in_array($num,$showbtn)){
            return true;
        }
        return false;
    }
	
}

class plugin_apoyl_facebook_member extends plugin_apoyl_facebook{
    public function logging_method(){
        global $_G;
        $return = '';
        if(!$this->_showbtn(2)) return $return;
        include template('apoyl_facebook:block/logging_method');
        return $return;
    }
    public function register_logging_method(){
        global $_G;
        $return = '';
        if(!$this->_showbtn(3)) return $return;
        include template('apoyl_facebook:block/register_logging_method');
        return $return;
    }
}

?>