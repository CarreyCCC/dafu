<?php  
/**
 * 
 * �ݸ��ɳ�Ʒ ������Ʒ
 * �ݸ���Դ����̳ ȫ���׷� http://www.Caogen8.Co
 * ��л֧�֣�����֧�����������Ķ���������������ر�վ������Դ��
 * ��ӭ������û�����¸��µ�������Դ������VIP��ɫ��Դ���ݴ������
 * �ݸ����û�����Ⱥ: ��Ⱥ306115775
 * ����������http://www.Cgzz8.com/ (���ղر���!)
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