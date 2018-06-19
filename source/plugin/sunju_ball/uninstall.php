<?php
if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}

$period = DB::table('sun_ball_period');
$record = DB::table('sun_ball_record');
$sql = <<<EOF
DROP TABLE IF EXISTS `{$period}`;
DROP TABLE IF EXISTS `{$record}`;
EOF;

runquery ( $sql );

$finish = TRUE;
?>