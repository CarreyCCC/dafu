<?php
/*
Author:²Ý.¸ù.°É
Website:www.Caogen8.Co
Qq:2575-163-778
*/
if ( defined( "IN_DISCUZ" ) )
{
}
if ( !defined( "IN_ADMINCP" ) )
{
    exit( "Access Denied" );
}
$lang = $scriptlang['habuluo_fruit'];
$i = 1;
$resultempty = FALSE;
$srchadd = " 1 = 1 ";
if ( !empty( $_GET['s_sername'] ) )
{
    $s_sername = addslashes( $_GET['s_sername'] );
    $srchadd .= " AND username like '".$s_sername."%'";
}
if ( empty( $_GET['s_beg_time'] ) )
{
    $beg_time = date( "Y-m-d", time( ) );
}
else
{
    $beg_time = date( "Y-m-d", strtotime( $_GET['s_beg_time'] ) );
}
if ( empty( $_GET['s_end_time'] ) )
{
    $end_time = date( "Y-m-d", time( ) );
}
else
{
    $end_time = date( "Y-m-d", strtotime( $_GET['s_end_time'] ) );
}
$srchadd .= " and update_time between '".$beg_time." 00:00:00:000' and '".$end_time." 23:59:59:59:599'";
echo "<script type=\"text/javascript\" src=\"static/js/calendar.js\"></script>";
showtableheader( );
showformheader( "plugins&operation=config&do=".$pluginid."&identifier=habuluo_fruit&pmod=admin_report", "srchsubmit" );
showsubmit( "srchsubmit", $lang['sp_search'], $lang['sp_username'].": <input name=\"s_sername\" value=\"".addslashes( stripslashes( $_GET['s_sername'] ) )."\" class=\"txt\" />".$lang['sp_beg_end'].": <input name=\"s_beg_time\" value=\"".addslashes( stripslashes( $beg_time ) )."\" style=\"width: 108px; margin-right: 5px;\" class=\"txt\" onclick=\"showcalendar(event, this)\"/> -\r\n    <input name=\"s_end_time\" value=\"".addslashes( stripslashes( $end_time ) )."\" style=\"width: 108px; margin-right: 5px;\" class=\"txt\" onclick=\"showcalendar(event, this)\"/>" );
showformfooter( );
if ( !$resultempty )
{
    $query = DB::query( "\r\nselect uid,username,sum(order_money) as orders,sum(win_money) as wins,count(*) counts, sum(win_money) - sum(order_money) as wins2 from ".DB::table( "fruit_order" ).( "\r\nwhere ".$srchadd."\r\ngroup by uid,username\r\norder by wins2 asc\r\nLIMIT 0, 20" ) );
    echo "<tr><td>".$lang['sp_max_username']."</td></tr>";
    echo "<tr class=\"header\"><th>".$lang['sp_username']."</th><th>".$lang['sp_num_orders']."</th><th>".$lang['sp_orders_money']."</th><th>".$lang['sp_wins_money']."</th><th>".$lang['sp_user_wins']."</th><th></th></tr>";
    while ( $data = DB::fetch( $query ) )
    {
        ++$i;
        echo "<tr><td>".$data['username']."</td><td>".$data['counts']."</td><td>".$data['orders']."</td><td>".$data['wins']."</td><td>".$data['wins2']."</td><td></td>";
        echo "<td></td></tr>";
    }
}
showtablefooter( );
$query2 = DB::query( "\r\nselect sum(order_money) as orders,sum(win_money) as wins,count(*) counts, sum(order_money)-sum(win_money) as wins2\r\nfrom ".DB::table( "fruit_order" ).( "\r\nwhere ".$srchadd ) );
while ( $data = DB::fetch( $query2 ) )
{
    echo "<p>".$lang['sp_num_orders'].":".$data['counts']."----".$lang['sp_orders_money'].":".$data['orders']."----".$lang['sp_user_wins'].":".$data['wins']."----".$lang['sp_web_win'].":".$data['wins2']."</p>";
}
//From:www_caogen8_co
?>
