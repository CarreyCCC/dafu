<?php
/**
 *      [liyuanchao] (C)2015-2018 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: adminhelp.inc.php  2018-02 liyuanchao $
 */
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
showtableheader();
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_google')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_twitter')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_yahoo')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_googleping')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_prize')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_rewrite')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_vest')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_index')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_wmark')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_teladv')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_listbigimg')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_hidesection')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_money')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_telbigimg')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_salary')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_moderator')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_mtime')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_picessence')));
showtablerow('','',array(lang('plugin/apoyl_facebook','apoyl_picdivision')));

showtablerow('','',array(lang('plugin/apoyl_facebook','addr')));
showtablerow('','',array(lang('plugin/apoyl_facebook','blog')));
showtablerow('','',array(lang('plugin/apoyl_facebook','qq')));
showtablefooter();

?>