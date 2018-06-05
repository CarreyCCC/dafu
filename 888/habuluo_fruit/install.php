<?php  
/**
 * 
 * 草根吧出品 必属精品
 * 草根吧源码论坛 全网首发 http://www.Caogen8.Co
 * 感谢支持！您的支持是我们最大的动力！永久免费下载本站所有资源！
 * 欢迎大家来访获得最新更新的优秀资源！更多VIP特色资源不容错过！！
 * 草根吧用户交流群: ①群306115775
 * 永久域名：http://www.Cgzz8.com/ (请收藏备用!)
 * 
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
require_once DISCUZ_ROOT.'./config/config_ucenter.php';
$sql = <<< SQL
DROP TABLE IF EXISTS `pre_fruit_order`;
CREATE TABLE `pre_fruit_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` char(15) NOT NULL,
  `orders` varchar(64) NOT NULL,
  `order_money` int(11) NOT NULL,
  `win_money` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;
SQL;

runquery($sql);
$finish = TRUE;
?>