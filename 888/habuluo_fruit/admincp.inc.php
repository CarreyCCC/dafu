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
$perpage = 10;
$page = max( 1, intval( $_GET['page'] ) );
$i = 1;
$resultempty = FALSE;
$srchadd = $searchtext = $extra = "";
if ( !empty( $_GET['srchspusername'] ) )
{
    $srchspusername = addslashes( $_GET['srchspusername'] );
    $extra .= "&srchspusername=".$srchspusername;
    $srchadd .= " AND username like '".$srchspusername."%'";
    $searchtext .= $lang['sp_search']." \"".$srchspusername."\" ";
}
$searchtext .= $lang['sp_orders_disp'];
if ( $searchtext )
{
    $searchtext = $searchtext."<a href=\"".ADMINSCRIPT."?action=plugins&operation=config&do=".$pluginid."&identifier=k_spider&pmod=admincp\">".$lang['sp_viewall']."</a>&nbsp";
}
showtableheader( );
showformheader( "plugins&operation=config&do=".$pluginid."&identifier=habuluo_fruit&pmod=admincp", "srchsubmit" );
showsubmit( "srchsubmit", $lang['sp_search'], $lang['sp_username'].": <input name=\"srchspusername\" value=\"".addslashes( stripslashes( $_GET['srchspusername'] ) )."\" class=\"txt\" />", $searchtext );
showformfooter( );
if ( !$resultempty )
{
    $count = DB::result_first( "SELECT COUNT(*) FROM ".DB::table( "fruit_order" ).( " WHERE 1 ".$srchadd ) );
    $query = DB::query( "SELECT * FROM ".DB::table( "fruit_order" ).( " WHERE 1 ".$srchadd." ORDER BY id DESC LIMIT " ).( $page - 1 ) * $perpage.( ",".$perpage ) );
    echo "<tr class=\"header\"><th>".$lang['sp_username']."</th><th>".$lang['sp_orders']."</th><th>".$lang['sp_order_money']."</th><th>".$lang['sp_win_money']."</th><th>".$lang['sp_time']."</th><th></th></tr>";
    while ( $data = DB::fetch( $query ) )
    {
        ++$i;
        echo "<tr><td>".$data['username']."</td><td>".$data['orders']."</td><td>".$data['order_money']."</td><td>".$data['win_money']."</td>";
        echo "<td>".$data['update_time']."</td></tr>";
    }
}
showtablefooter( );
echo multi( $count, $perpage, $page, ADMINSCRIPT.( "?action=plugins&operation=config&do=".$pluginid."&identifier=habuluo_fruit&pmod=admincp{$extra}" ) );
?>
