<?php
if (! defined ( 'IN_DISCUZ' )) {
	exit ( 'Access Denied' );
}

require_once 'sun_base.php';

class SUN_JU extends SUN_JU_BASE {

	public function __construct() {
		parent::__construct();
	}

	public static function doSendIn(){
		if($_GET['formhash'] != FORMHASH){
			exit(self::doAjaxReturn(-22,"undefined_action"));
		}
		
		$id = (int)$_POST['pid'];
		if($id == 0){
			exit(self::doAjaxReturn(-11));
		}
		
		$keyA = trim(dhtmlspecialchars($_POST['r']));
		$keyB = trim(dhtmlspecialchars($_POST['b']));
		if (count(explode(',',$keyA)) != 5 || count(explode(',',$keyB)) != 2) {
			exit(self::doAjaxReturn(-1));
		}
		
		$info = self::doGetNewlyPeriod();
		if($info['id'] != $id){
			exit(self::doAjaxReturn(-4));
		}
		
		if ($info && $info['status'] == 1) {
			$time 	= time();
			$time_s = strtotime($info['s_time']);
			$time_e = strtotime($info['e_time']);
			
			if ($time > $time_s && $time <  $time_e) {
			} else {
				exit(self::doAjaxReturn(-2));
			}
		} else {
			exit(self::doAjaxReturn(-4));
		}
		
		$ip = self::getClientIp();
		if(self::$PL_UID){
			if(self::doGetRList(array("pid"=>$info['id'],"uid"=>self::$PL_UID,"isCount"=>1)) >= self::$PL_G['play_max']){
				exit(self::doAjaxReturn(-3));
			}
		}else{
			if(self::doGetRList(array("pid"=>$info['id'],"ip"=>$ip,"isCount"=>1)) >= self::$PL_G['play_max']){
				exit(self::doAjaxReturn(-3));
			}
		}
		
		$insert = array(
			'pid' => $info['id'],
			'uid' => self::$PL_UID,
			'red' => $keyA,
			'blue' => $keyB,
			'ip' => $ip,
			'time' => date("Y-m-d H:i:s"),
		);
		DB::insert('sun_ball_record', $insert);
		exit(self::doAjaxReturn(99));
	}
	
	public static function doAdminAddPeriod(){
				
		$period = trim($_POST['period']);
		$s_time = trim($_POST['s_time']);
		$e_time = trim($_POST['e_time']);
		if($period && $s_time && $e_time){
			if(self::doGetNewlyPeriod(1)){
				cpmsg ( "", '', 'error', '', '<p class="infotitle3">'.lang("plugin/".self::$PL_NAME, 'add_p_tit_1').'<p>', TRUE );
			}
			
			if(DB::result_first("SELECT id FROM ".DB::table('sun_ball_period')." WHERE period = {$period}")){
				cpmsg ( "", '', 'error', '', '<p class="infotitle3">'.lang("plugin/".self::$PL_NAME, 'add_p_tit_3').'<p>', TRUE );
			}
			
			$insert = array(
					'period' => $period,
					's_time' => $s_time,
					'e_time' => $e_time,
			);
			DB::insert('sun_ball_period', $insert);
		}else{
			cpmsg ( "", '', 'error', '', '<p class="infotitle3">'.lang("plugin/".self::$PL_NAME, 'add_p_tit_2').'<p>', TRUE );
		}
	}
	
	public static function doAdminModKey(){
		if($_GET['formhash'] != FORMHASH){
			exit(self::doAjaxReturn(-22,"undefined_action"));
		}	
		$id = intval($_POST['id']);
		$key = explode("#",trim($_POST['key']));
		$update = array("win_num_r"=>$key[0],"win_num_b"=>$key[1]);
		DB::update('sun_ball_period', $update, "id={$id}");
		exit(self::doAjaxReturn(99,"success"));
	}
	
	public static function doAdminEnd(){
		if($_GET['formhash'] != FORMHASH){
			exit(self::doAjaxReturn(-22,"undefined_action"));
		}
		
		$id = intval($_POST['id']);
		$info = self::doGetPList(array("id"=>$id));
		if($info[0]['status'] == 2){
			$red = explode(",",$info[0]['win_num_r']);
			$blue = explode(",",$info[0]['win_num_b']);
			if($red && $blue){
				sort($red);sort($blue);
				
				$list = self::doGetRList(array('pid'=>$info[0]['id']));
				if($list){
					$ids = array();
					foreach($list as $k=>$v){
						$tr = explode(",",$v['red']);
						$tb = explode(",",$v['blue']);
						sort($tr);sort($tb);
						if(array_diff($red,$tr) || array_diff($blue,$tb)){
							
						}else{
							$ids[] = $v['id'];
						}
					}
					if($ids){
						DB::update('sun_ball_record', array("status"=>2), "id in(".implode(",",$ids).")");
					}				
				}
				
				DB::update('sun_ball_period', array("status"=>3), "id={$info[0]['id']}");
			}
		}
		
		exit(self::doAjaxReturn(99,"success"));
	}
	
	public static function doGetNewlyPeriod($status=""){
		$info = self::doGetPList(array("status"=>$status,"limit"=>1));
		return $info ? $info[0] : false;
	}

	public static function doGetPList($param){
		if(!is_array($param)) return false;
    	
    	$options = array (
    			'id' => '',
    			'status' => '',
    			'limit' => '',
    			'isCount'=>'0',		
    	);
    	
    	$param = array_merge($options, $param);
    	
    	$wheres = 'WHERE 1';
    	
    	if($param['id']){
    		$wheres .= " AND id = {$param['id']}";
    	}
    	
    	if($param['status']){
    		$wheres .= " AND status = {$param['status']}";
    	}
    	
    	$order = "order by id desc";

		if ($param['isCount'] == 1) {
    		
    		$result = DB::result_first("SELECT COUNT(1) FROM ".DB::table('sun_ball_period')." {$wheres}");
    		
    	} else {
    		
	    	$limit = $param['limit'] ? 'LIMIT '.$param['limit'] : '';
	    	
	    	$result = DB::fetch_all("SELECT * FROM ".DB::table('sun_ball_period')." {$wheres} {$order} {$limit}");
	    	
    	}
    	
    	return $result;
	}
	
	public static function doGetRList($param){
		if(!is_array($param)) return false;
    	
    	$options = array (
			'pid' => '',
			'uid' => '',
			'ip' => '',
			'limit' => '',
			'isCount'=>'0',		
    	);
    	
    	$param = array_merge($options, $param);
    	
    	$wheres = 'WHERE 1';
    	
    	if($param['pid']){
    		$wheres .= " AND pid = {$param['pid']}";
    	}
    	
    	if($param['uid']){
    		$wheres .= " AND uid = {$param['uid']}";
    	}
    	
    	if($param['ip']){
    		$wheres .= " AND ip = '{$param['ip']}'";
    	}
    	
    	$order = "order by id desc";

		if ($param['isCount'] == 1) {
    		
    		$result = DB::result_first("SELECT COUNT(1) FROM ".DB::table('sun_ball_record')." {$wheres}");
    		
    	} else {
    		
	    	$limit = $param['limit'] ? 'LIMIT '.$param['limit'] : '';
	    	
	    	$result = DB::fetch_all("SELECT * FROM ".DB::table('sun_ball_record')." {$wheres} {$order} {$limit}");
	    	
    	}
    	
    	return $result;
	}
}













