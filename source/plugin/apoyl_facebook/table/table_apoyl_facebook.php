<?php
/**
 *      [liyuanchao] (C)2015-2016 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: table_apoyl_facebook.inc.php  2016-11 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
	exit('Access Denied');
}
class table_apoyl_facebook extends discuz_table{
	public function __construct(){
		$this->_table='plugin_apoyl_facebook';
		$this->_pk='user_id';
		parent::__construct();
	}
	public function fetch_uid($uid){
		return DB::fetch_first('SELECT user_id,screen_name FROM %t WHERE uid=%d',array($this->_table,$uid));
	}
	public function fetch_uids($uids){
		return DB::fetch_all('SELECT screen_name FROM %t WHERE uid in (%n)',array($this->_table,(array)$uids));
	}
	public function fetcharr($start,$limit,$orderby='regdate desc'){
	    if($start==-1){
	        $limit='limit '.$limit;
	    }else{
	        $start=empty($start)?0:$start;
	        $limit=empty($limit)?10:$limit;
	        $limit='limit '.$start.','.$limit;
	    }
	    return DB::fetch_all('SELECT * FROM %t  order by %i %i',array($this->_table,$orderby,$limit));
	}
	
}
?>