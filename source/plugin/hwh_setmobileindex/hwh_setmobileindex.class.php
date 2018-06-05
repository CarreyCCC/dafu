<?php

defined('IN_DISCUZ') or exit('Powered by Hymanwu.Com');

class mobileplugin_hwh_setmobileindex {

    protected $cfg = array();
    protected $in_mobile;

    function __construct() {
        global $_G;
        $this->cfg = $_G['cache']['plugin']['hwh_setmobileindex'];
        $this->in_mobile = defined('IN_MOBILE') ? true : false;
    }

    public function global_header_mobile() {
        if (CURSCRIPT == 'forum' && CURMODULE == 'index'){
            $var = 'hwh_setmobileindex_history';
            switch ($this->cfg['chose_mode']) {
                case 1:
                    if (!getcookie($var)) {
                        dsetcookie($var,1);
                        $this->_location();
                    }
                    break;

                case 2:
                default:
                    if (!getcookie($var)) {
                        dsetcookie($var,1,$this->cfg['out_time']*3600);
                        $this->_location();
                    }
            }
        }
    }

    public function _location(){
        dheader('Location:'.$this->cfg['index_url']);
        exit;
    }

}

?>