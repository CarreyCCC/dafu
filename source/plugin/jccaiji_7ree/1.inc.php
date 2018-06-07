<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
loadcache('plugin');
$vars_7ree = $_G['cache']['plugin']['jccaiji_7ree'];
$navtitle = lang('plugin/jccaiji_7ree','php_lang_navtitle_7ree');
if(!$vars_7ree['agreement_7ree']) showmessage('jccaiji_7ree:php_lang_agree_7ree');

$jingcai_7ree_var = $_G['cache']['plugin']['jingcai_7ree'];
if(!$jingcai_7ree_var['agreement_7ree']) showmessage('jingcai_7ree:php_lang_agree_7ree');


echo("111111111111111111111111111111111111111");
echo("<br>222222222222222222222222222222222222222222222222");




?>