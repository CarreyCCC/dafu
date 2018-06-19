<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: mobilefacebook.class.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
    exit('Access Denied');
}
class mobileplugin_apoyl_facebook {
    protected  $facebook_login_url='plugin.php?id=apoyl_facebook:pub';
    protected function _fileapoyl($filename){
        $fileapoyl=DISCUZ_ROOT.'./source/plugin/apoyl_facebook/components/'.$filename.'.php';
        if(file_exists($fileapoyl))
            return $fileapoyl;
        return '';
    }
    protected function _isopen(){
        global $_G;
        if($_G['cache']['plugin']['apoyl_facebook']['mfbopen'])
            return true;
        return false;
    }
	public function global_footer_mobile(){
        global $_G;
        $return = '';
        if(!$this->_isopen()) return $return;
        $ftpl='global_footer_mobile';
        include $this->_fileapoyl('mobilelogin');
        return $return;
    }
}

class mobileplugin_apoyl_facebook_member extends mobileplugin_apoyl_facebook{

    public function logging_bottom_mobile(){
        global $_G;
        $return = '';
         if(!$this->_isopen()) return $return;
        include $this->_fileapoyl('mobilelogin');
        return $return;
    }
}

?>