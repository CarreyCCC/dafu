<?php

define( "CURSCRIPT", "fruit" );
require( "../../../source/class/class_core.php" );
$discuz =& discuz_core::instance( );
$discuz->cachelist = $cachelist;
$discuz->init( );
global $_G;
if ( !isset( $_G['cache']['plugin']['habuluo_fruit'] ) )
{
    loadcache( "plugin" );
}
if ( !$_G['uid'] )
{
    exit( "1" );
}
$max_bet = $_G['cache']['plugin']['habuluo_fruit']['max_bet'];
$orders = addslashes( $_POST['orders'] );
$Max = 1000;
$username = $_G['username'];
$uid = $_G['uid'];
$order = explode( ",", $orders );
$order_money = 0;
$b = 2;
$win_money = 0;
if ( count( $order ) != 8 )
{
    exit( "2" );
}
foreach ( $order as $i )
{
    if ( $i < 0 )
    {
        exit( "2" );
    }
    $order_money += $i;
}
if ( $order_money <= 0 )
{
    exit( "2" );
}
if ( $max_bet < $order_money )
{
    exit( "2" );
}
$r = rand( 1, $Max );
if ( 996 < $r && $r <= 1000 )
{
    $b = 24;
    $win_money = $order[0] * 100;
}
else if ( 988 < $r && r <= 996 )
{
    $b = 23;
    $win_money = $order[0] * 50;
}
else if ( 970 < $r && $r <= 988 )
{
    $b = 12;
    $win_money = $order[1] * 40;
}
else if ( 933 < $r && $r <= 963 )
{
    $b = 16;
    $win_money = $order[2] * 30;
}
else if ( 897 < $r && $r <= 933 )
{
    $b = 4;
    $win_money = $order[3] * 25;
}
else if ( 852 < $r && $r <= 897 )
{
    $ar = rand( 1, 2 );
    switch ( $ar )
    {
    case 1 :
        $b = 22;
        break;
    case 2 :
        $b = 10;
    }
    $win_money = $order[4] * 20;
}
else if ( 792 < $r && $r <= 852 )
{
    $ar = rand( 1, 2 );
    switch ( $ar )
    {
    case 1 :
        $b = 3;
        break;
    case 2 :
        $b = 15;
    }
    $win_money = $order[5] * 15;
}
else if ( 702 < $r && $r <= 792 )
{
    $ar = rand( 1, 2 );
    switch ( $ar )
    {
    case 1 :
        $b = 21;
        break;
    case 2 :
        $b = 9;
    }
    $win_money = $order[6] * 10;
}
else if ( 565 < $r && $r <= 702 )
{
    $ar = rand( 1, 4 );
    switch ( $ar )
    {
    case 1 :
        $b = 1;
        break;
    case 2 :
        $b = 7;
        break;
    case 3 :
        $b = 13;
        break;
    case 4 :
        $b = 19;
    }
    $win_money = $order[7] * 5;
}
else if ( 442 < $r && $r <= 522 )
{
    $ar = rand( 1, 2 );
    switch ( $ar )
    {
    case 1 :
        $b = 6;
        break;
    case 2 :
        $b = 18;
    }
    $win_money = 0;
}
else
{
    $ar = rand( 1, 7 );
    switch ( $ar )
    {
    case 1 :
        $win_money = $order[7] * 2;
        $b = 2;
        break;
    case 2 :
        $win_money = $order[3] * 2;
        $b = 5;
        break;
    case 3 :
        $win_money = $order[6] * 2;
        $b = 8;
        break;
    case 4 :
        $win_money = $order[1] * 2;
        $b = 11;
        break;
    case 5 :
        $win_money = $order[5] * 2;
        $b = 14;
        break;
    case 6 :
        $win_money = $order[2] * 2;
        $b = 17;
        break;
    case 7 :
        $win_money = $order[4] * 2;
        $b = 20;
    }
}
$del_rate = $_G['cache']['plugin']['habuluo_fruit']['del_rate'];
if ( $del_rate < 0 || 100 < $del_rate )
{
    $del_rate = 100;
}
if ( $del_rate < 100 )
{
    $arr = array( 24, 23, 12, 16, 4, 22, 10, 3, 15, 21, 9, 1, 7, 13, 19 );
    if ( in_array( $b, $arr ) )
    {
        $r = rand( 0, 100 );
        if ( $del_rate < $r )
        {
            $ar = rand( 1, 7 );
            switch ( $ar )
            {
            case 1 :
                $win_money = $order[7] * 2;
                $b = 2;
                break;
            case 2 :
                $win_money = $order[3] * 2;
                $b = 5;
                break;
            case 3 :
                $win_money = $order[6] * 2;
                $b = 8;
                break;
            case 4 :
                $win_money = $order[1] * 2;
                $b = 11;
                break;
            case 5 :
                $win_money = $order[5] * 2;
                $b = 14;
                break;
            case 6 :
                $win_money = $order[2] * 2;
                $b = 17;
                break;
            case 7 :
                $win_money = $order[4] * 2;
                $b = 20;
            }
        }
    }
}
$user_cash = $_G['cache']['plugin']['habuluo_fruit']['use_cash'];
$user_cash = empty( $user_cash ) ? "extcredits1" : "extcredits".$user_cash;
usleep( rand( 300, 800 ) * 1000 );
$cash = getuserprofile( $user_cash );
if ( $cash < $order_money )
{
    exit( "3" );
}
updatemembercount( $uid, array(
    $user_cash => $win_money - $order_money
) );
DB::query( "insert ".DB::table( "fruit_order" ).( " (uid, username, orders, order_money,win_money,update_time) values('".$uid."', '{$username}', '{$orders}', '{$order_money}', '{$win_money}', now())" ) );
echo $b."|".$win_money;
?>
