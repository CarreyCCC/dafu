<?php
if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}

if(defined('IN_ADMINCP')) loadcache('plugin');

class SUN_JU_BASE {

	public static $PL_G, $PL_NAME, $PL_STATIC;
	public static $PL_UID, $PL_UNAME;
	public static $PL_P_S;

	public function __construct() {
		self::init();
	}

	public static function init() {
		$pl_root = explode(DIRECTORY_SEPARATOR, dirname(__FILE__));
		
		global $_G;
		self::$PL_NAME = trim(end($pl_root));
		self::$PL_G    = $_G['cache']['plugin'][self::$PL_NAME];

		self::$PL_STATIC = 'source/plugin/'.self::$PL_NAME.'/public/';
		
		self::$PL_UID 	= $_G ['uid'] ? $_G ['uid'] : 0;
		self::$PL_UNAME = $_G ['username'];
		
		self::$PL_P_S = array(
			"1" => lang("plugin/".self::$PL_NAME, 'p_status_1') ,
			"2" => lang("plugin/".self::$PL_NAME, 'p_status_2') ,
			"3" => lang("plugin/".self::$PL_NAME, 'p_status_3') ,
		);
		
	}
	
	/**
	 * 获取客户端IP地址
	 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
	 * @param boolean $adv 是否进行高级模式获取（有可能被伪装） 
	 * @return mixed
	 */
	public static function getClientIp($type = 0,$adv=true){
		$type       =  $type ? 1 : 0;
	    static $ip  =   NULL;
	    if ($ip !== NULL) return $ip[$type];
	    if($adv){
	        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	            $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
	            $pos    =   array_search('unknown',$arr);
	            if(false !== $pos) unset($arr[$pos]);
	            $ip     =   trim($arr[0]);
	        }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
	            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
	        }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	            $ip     =   $_SERVER['REMOTE_ADDR'];
	        }
	    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
	        $ip     =   $_SERVER['REMOTE_ADDR'];
	    }
	    // IP地址合法验证
	    $long = sprintf("%u",ip2long($ip));
	    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	    return $ip[$type];
	}
	
	public static function doAjaxReturn($code,$msg="",$data=array()){
		array_push($data,array("formhash"=>FORMHASH));
		return json_encode(array("code"=>$code,"data"=>$data,"msg"=>$msg));
	}
}













