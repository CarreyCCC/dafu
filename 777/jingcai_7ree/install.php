<?php

/*
	ID: jingcai_7ree
	[www.010xr.com] (C)2007-2013 010xr.com.
	This is NOT a freeware, use is subject to license terms
	Update: 13:15 2013/6/30
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/




if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}


$sql = <<<EOF


CREATE TABLE IF NOT EXISTS `pre_jingcai_main_7ree` (
  `main_id_7ree` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `racename_7ree` varchar(200) NOT NULL,
  `fenlei1_7ree` varchar(100) NOT NULL,
  `fenlei2_7ree` varchar(100) NOT NULL,   
  `reward_7ree` mediumint(5) unsigned NOT NULL,
  `add_7ree` varchar(250) NOT NULL,
  `time_7ree` int(10) unsigned NOT NULL,
  `aname_7ree` varchar(200) NOT NULL,
  `bname_7ree` varchar(200) NOT NULL,
  `alogo_7ree` varchar(250) NOT NULL,
  `blogo_7ree` varchar(250) NOT NULL,
  `amessage_7ree` text NOT NULL,
  `bmessage_7ree` text NOT NULL,
  `aodds_7ree` float unsigned NOT NULL,
  `bodds_7ree` float unsigned NOT NULL,
  `codds_7ree` float unsigned NOT NULL,
  `racemessage_7ree` text NOT NULL,
  `win_7ree` varchar(1) NOT NULL,
  PRIMARY KEY (`main_id_7ree`)
) ENGINE=MyISAM;


CREATE TABLE IF NOT EXISTS `pre_jingcai_log_7ree` (
  `log_id_7ree` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid_7ree` mediumint(8) unsigned NOT NULL,
  `username_7ree` varchar(100) NOT NULL,
  `myodds_7ree` mediumint(8) NOT NULL,
  `mywin_7ree` varchar(1) NOT NULL,
  `log_time_7ree` int(10) unsigned NOT NULL,
  `log_reward_7ree` mediumint(8) unsigned NOT NULL,
  `main_id_7ree` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`log_id_7ree`)
) ENGINE=MyISAM;



EOF;

runquery($sql);

$finish = TRUE;




?>

