<?php
/**
 *      [liyuanchao] (C)2015-2018 apoyl.com.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: go.class.php  2018-02 liyuanchao $
 */
if(!defined('IN_DISCUZ')){
	exit("Access Denied");
}

class go{
	private $facebook=null;
	private $cache=null;
	private $callbackurl=null;
	public function __construct(){
	    global $_G;
	    $this->stopmb();
	    $this->callbackurl=$_G['siteurl'].'plugin.php?id=apoyl_facebook:pub&ac=callback';
		$this->cache=$_G['cache']['plugin']['apoyl_facebook'];
		define('FACEBOOK_SDK_V4_SRC_DIR', dirname(__FILE__) . '/facebookapi/');
		require_once dirname(__FILE__) . '/facebookapi/autoload.php';
		$this->facebook=new Facebook(array('app_id'=>$this->cache['apikey'],'app_secret'=>$this->cache['apisecret'],'default_graph_version'=>$this->cache['apiversion']));

	}
	public function index(){
		global $_G;
		
		if(!$this->cache['apikey']||!$this->cache['apisecret']) showmessage(lang('plugin/apoyl_facebook','authfail_10000'),dreferer());
		$permissions = array('email');
		try {
			$helper=$this->facebook->getRedirectLoginHelper();
			$facebookloginurl = $helper->getLoginUrl($this->callbackurl,$permissions);
		}catch(Exception $e){
		  $msg=str_replace('{message}', $e->getMessage(), lang('plugin/apoyl_facebook','authfail_10006'));
		  showmessage($msg,dreferer());
		  exit;
		}
		$this->saveDreferer();
		if($facebookloginurl){
			header('Location:'.$facebookloginurl);
			exit;
		}
		showmessage(lang('plugin/apoyl_facebook','authfail_10007'),dreferer());
		exit;
	}
	private function _dumsg($url){
		global $_G;
		$p=strpos($url, 'mod=register');
		if($p===false)
			return $url;
		return $_G['siteurl'];
	}
	public function callback(){
		global $_G;
		$dreferer=urldecode(getcookie('dreferer'));
		$reurl=isset($dreferer)?$dreferer:dreferer();
		$reurl=$this->_dumsg($reurl);
		if(!$this->cache['apikey']||!$this->cache['apisecret']) showmessage(lang('plugin/apoyl_facebook','authfail_10000'),dreferer());
		$helper = $this->facebook->getRedirectLoginHelper();
		try{
			$accessToken = $helper->getAccessToken($this->callbackurl);

		}catch(Exception $e){
			$msg=str_replace('{message}', $e->getMessage(), lang('plugin/apoyl_facebook','authfail_10006'));
			showmessage($msg,$reurl);
		  	exit;
		}

		if($accessToken){
			$this->facebook->setDefaultAccessToken($accessToken);
			try{
				$response = $this->facebook->get('/me?fields=name,email');
  				$userNode = $response->getGraphUser();
  			}catch(Exception $e){
				$msg=str_replace('{message}', $e->getMessage(), lang('plugin/apoyl_facebook','authfail_10006'));
				showmessage($msg,$reurl);
		  		exit;
  			}
                                                                                                                                           
			if($userNode->getId()<1) showmessage(lang('plugin/apoyl_facebook','authfail_10001'),$reurl);
			$bindrow=C::t('#apoyl_facebook#apoyl_facebook')->fetch($userNode->getId());
			$data['user_id']=$userNode->getId();
			if($_G['cache']['plugin']['apoyl_facebook']['illegalopen'])
			     $data['screen_name']=$this->filterU($this->utfToGbk($userNode->getName(),CHARSET));
			else 
			     $data['screen_name']=$this->utfToGbk($userNode->getName(),CHARSET);
			$data['oauth_token']=$accessToken->getValue();
			$dateobj=$accessToken->getExpiresAt();
			$data['x_auth_expires']=$dateobj->getTimestamp();
			$data['lastdate']=TIMESTAMP;
			$fbemail=$userNode->getEmail();
			$data['email']=$fbemail;
			if($bindrow){
			    if($_G['uid']){
			           //已绑定 已登录异常
			        if($bindrow['uid']) showmessage(lang('plugin/apoyl_facebook','sorry_bind_user'), $reurl);
			    }else{
			           //已绑定 未登录
			        $login=$this->login($bindrow['uid']);
			        if(!$login) showmessage(lang('plugin/apoyl_facebook','authfail_10005'), $reurl);
			        C::t('#apoyl_facebook#apoyl_facebook')->update($bindrow['user_id'],$data);
			        showmessage('login_succeed', $reurl, $login['param'], array('extrajs' => $login['ucsynlogin']));
			    }
			}else{
			    //未绑定 已登录
			    if ($_G['uid']){
			        $data['uid']=$_G['uid'];
			        $data['regdate']=TIMESTAMP;
			        C::t('#apoyl_facebook#apoyl_facebook')->insert($data);
			        showmessage(lang('plugin/apoyl_facebook','bind_success'), $reurl);
			    }else{

			        //注册
			        $regarr=$this->reg($data['screen_name'],$fbemail);
			        list($newuid,$password)=$regarr;

			        if($newuid<0){
						if(in_array($newuid,array(-4,-5,-6)))
							$fbemail='';
			            for($i=1;$i<10;$i++){
			            	if($i==1){
			            		if(!$fbemail)
									$regarr=$this->reg($data['screen_name'],$fbemail);
								else
									$regarr=$this->reg($data['screen_name'].'@fb',$fbemail);
			            	}elseif($i==2){
			            		if(!$fbemail)
									$regarr=$this->reg($data['screen_name'].'@fb',$fbemail);
								else
									$regarr=$this->reg($data['screen_name'].'_fb',$fbemail);
			            	}elseif($i==3){
								$regarr=$this->reg($data['screen_name'].'_fb',$fbemail);
			            	}else{
			                	$regarr=$this->reg();
			            	}
			                list($newuid,$password)=$regarr;
			                if($newuid>0) break;
			                if(in_array($newuid,array(-4,-5,-6)))
			                	$fbemail='';
			               }
			            }
			        if($newuid<0) showmessage(lang('plugin/apoyl_facebook','authfail_10004'), $reurl);
			        //登陆
			        $login=$this->login($newuid);
			        if(!$login) showmessage(lang('plugin/apoyl_facebook','authfail_10005'), $reurl);
			        //更新用户统计
			        require_once libfile('cache/userstats', 'function');
			        build_cache_userstats();
			        //通知
			        $msg = lang('plugin/apoyl_facebook', 'reg_pwd_notice');
			        $msg = str_replace('{password}', $password, $msg);
			        $msg = replacesitevar($msg);
			        notification_add($newuid, 'system', $msg, array('from_id' => 0, 'from_idtype' => 'welcomemsg'), 1);
			        $data['uid']=$newuid;
					$data['regdate']=TIMESTAMP;
			        C::t('#apoyl_facebook#apoyl_facebook')->insert($data,false,true);
			        showmessage('login_succeed', $reurl, $login['param'], array('extrajs' => $login['ucsynlogin']));
			    }				    
			}

		
			showmessage(lang('plugin/apoyl_facebook','authfail_10005'), $reurl);
		}else{
			showmessage(lang('plugin/apoyl_facebook','authfail_10002'),$reurl);
		}
		
		
	}
	public function tokeninfo(){
	    showmessage(lang('plugin/apoyl_facebook', 'nourl'),'',array());
	}
	public function revoketoken(){
		global $_G;
		$row=C::t('#apoyl_facebook#apoyl_facebook')->fetch_uid($_G['uid']);
		if($row){
			C::t('#apoyl_facebook#apoyl_facebook')->delete($row['user_id']);
			showmessage(lang('plugin/apoyl_facebook','destory_success'),dreferer() );
		}else{
	
			showmessage(lang('plugin/apoyl_facebook','destory_fail'), dreferer());
		}
	}

	private function reg($facebookname='',$facebookemail=''){
		global $_G;
		$nameopen=$_G['cache']['plugin']['apoyl_facebook']['nameopen'];
		$emailopen=$_G['cache']['plugin']['apoyl_facebook']['emailopen'];
		if($facebookname&&$nameopen){
			$username=$facebookname;
		}else{
			$username='fb_'.random(5).substr(time(),-2);

		}
		if($facebookemail&&$emailopen){
			$email=$facebookemail;
		}else{ 
			$email=rand(3,10000).substr(time(),-2).'@facebook.com';
		}
		$password=random(9);
		loaducenter();
		$uid = uc_user_register(addslashes($username), $password, $email, '', '', $_G['clientip']);
		
		if($this->cache['spgroup']){
		    $groupid=$this->cache['spgroup'];
		}else{
    		if($_G ['setting']['regverify']) {
    			$groupid = 8;
    		} else {
    			$groupid = $_G ['setting']['newusergroupid'];
    		}
		}
		if($uid > 0) {
			$arr = array('credits' => explode(',', $_G ['setting']['initcredits']), 'profile'=>array(), 'emailstatus' => 0);
			C::t('common_member')->insert($uid, $username, $password, $email, $_G['clientip'], $groupid, $arr);
		}

		return array($uid,$password);
	}
	private function login($uid) {
		global $_G;
		
		$member = getuserbyuid($uid);
		if(!$member) {
			return false;
		}
		
		loadcache('usergroups');
		$usergroups = $_G['cache']['usergroups'][$member['groupid']]['grouptitle'];
		$param = array('username' => $_G['member']['username'], 'usergroup' => $usergroups);
		
		require_once libfile('function/member');
		setloginstatus($member, 1296000);
		
		DB::query("UPDATE ".DB::table('common_member_status')." SET lastip='".$_G['clientip']."', lastvisit='".TIMESTAMP."', lastactivity='".TIMESTAMP."' WHERE uid='$uid'");
		$ucsynlogin = '';
		if($_G['setting']['allowsynlogin']) {
			loaducenter();
			$ucsynlogin = uc_user_synlogin($_G['uid']);
		}
		return array('param' => $param, 'ucsynlogin' => $ucsynlogin);
	}
	private function saveDreferer(){
		dsetcookie('dreferer',urlencode(dreferer()));
	}
	private function filterU($username){
        $guestexp = '\xA1\xA1|\xAC\xA3|^Guest|^\xD3\xCE\xBF\xCD|\xB9\x43\xAB\xC8';
        $re=preg_replace("/\s+|^c:\\con\\con|[%,\*\"\s\<\>\&]|$guestexp/is", '', $username);
        return $re;
    }
    private function utfToGbk($var,$charset){

    	if(in_array($charset, array('gbk','big5'))){
    		$var=diconv($var,'utf-8',$charset);
    	}
    	return $var;
    }
    private function stopmb(){
        if(defined('IN_MOBILE')){
            $fileapoyl=DISCUZ_ROOT.'./source/plugin/apoyl_facebook/components/mobilelogin.php';
            if(!file_exists($fileapoyl))
                exit;
        }
    }
}
?>