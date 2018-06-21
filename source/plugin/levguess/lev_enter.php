<?php

/**
 * Levme.com [ 专业开发各种Discuz!插件 ]
 *
 * Copyright (c) 2013-2014 http://www.levme.com All rights reserved.
 *
 * Author: Mr.Lee <675049572@qq.com>
 *
 * Date: 2013-02-17 16:22:17 Mr.Lee $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once 'lev_class.php';

$C = new lev_guess();//print_r(lev_guess::$_G);

$PLNAME   = lev_guess::$PLNAME;
$PLSTATIC = lev_guess::$PLSTATIC;

$lev_lang = lev_guess::$lang;

$navtitle = $lev_lang['navtitle'] ? $lev_lang['navtitle'] : lev_guess::$navtitle;

$_G['setting']['bbname'] = $lev_lang['bbname'] ? $lev_lang['bbname'] : $_G['setting']['bbname'];







