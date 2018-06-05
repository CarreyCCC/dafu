<?php
/*
 * 出处：草根吧
 * 官网: Www.Caogen8.Co
 * 备用网址: www.Cgzz8.com (请收藏备用!)
 * 技术支持/更新维护：QQ 2575163778
 * 
 */
if ( !defined( "IN_DISCUZ" ) )
{
    exit( "Access Deined" );
}
$user_cash = $_G['cache']['plugin']['habuluo_fruit']['use_cash'];
$user_cash = empty( $user_cash ) ? "1" : $user_cash;
$cash_name = $_G['setting'][extcredits][$user_cash]['title'];
$user_cash = "extcredits".$user_cash;
$max_bet = $_G['cache']['plugin']['habuluo_fruit']['max_bet'];
$max_bet = empty( $max_bet ) ? 99 : $max_bet;
$max_bet = $max_bet < 0 ? 99 : $max_bet;
$cash_init = 0;
$mu_yn = $_G['cache']['plugin']['habuluo_fruit']['mu_yn'];
$ad_code = $_G['cache']['plugin']['habuluo_fruit']['ad_code'];
$rule_link = $_G['cache']['plugin']['habuluo_fruit']['rule_link'];
if ( $_G['uid'] )
{
    $cash_init = getuserprofile( $user_cash );
}
$navtitle = lang( "plugin/habuluo_fruit", "name" );
require_once( libfile( "function/cache" ) );
$cache_file = DISCUZ_ROOT."./data/sysdata/cache_habuluo_fruit_list.php";
if ( -60 + $time < $_G['timestamp'] - @filemtime( $cache_file ) )
{
    $querys = DB::query( "\r\nselect uid, username, win_money as bb, update_time cc from ".DB::table( "fruit_order" )."\r\nwhere win_money > 0 and update_time > date_sub(now(), interval 30 DAY)\r\norder by  win_money desc, update_time desc\r\nlimit 0, 10\r\n    " );
    $i = 0;
    $objarray = array( );
    while ( $threadfid = DB::fetch( $querys ) )
    {
        ++$i;
        $objarray[$i] = $threadfid;
    }
    $cacheArray .= "\$habuluo_fruit_lists=".arrayeval( $objarray ).";\n\n";
    writetocache( "habuluo_fruit_list", $cacheArray );
    unset( $querys );
    unset( $objarray );
}
@include_once( DISCUZ_ROOT."./data/sysdata/cache_habuluo_fruit_list.php" );
include( template( "habuluo_fruit:hbl" ) );
?>
