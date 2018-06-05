<?php

/*
	ID: jingcai_7ree
	[www.010xr.com] (C)2007-2013 010xr.com.
	This is NOT a freeware, use is subject to license terms
	Update: 11:38 2013/6/30
	Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
	More Plugins: http://addon.discuz.com/?@7ree
*/



if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

function testfield_7ree($dbfield_7ree, $dbtable_7ree) {
	$field_7ree=array();
	$query=DB::query('SHOW COLUMNS FROM '.DB::table($dbtable_7ree));
	while ($row = mysql_fetch_array($query,MYSQL_ASSOC)) {
		$field_7ree[]=$row['Field'];
	}
	return in_array($dbfield_7ree,$field_7ree) ? TRUE:FALSE;
}



if (!testfield_7ree('fenlei1_7ree','jingcai_main_7ree')) {
	$sql="ALTER TABLE `pre_jingcai_main_7ree` ADD `fenlei1_7ree` VARCHAR( 100 ) NOT NULL AFTER  `racename_7ree`;";
	runquery($sql);	
}

if (!testfield_7ree('fenlei2_7ree','jingcai_main_7ree')) {
	$sql="ALTER TABLE `pre_jingcai_main_7ree` ADD `fenlei2_7ree` VARCHAR( 100 ) NOT NULL AFTER  `fenlei1_7ree`;";
	runquery($sql);	
}

$finish = TRUE;




?>

