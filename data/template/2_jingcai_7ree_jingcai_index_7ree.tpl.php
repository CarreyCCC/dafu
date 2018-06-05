<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('jingcai_index_7ree');
0
|| checktplrefresh('./source/plugin/jingcai_7ree/template/jingcai_index_7ree.htm', './template/yunzhan_zq/common/header.htm', 1528097763, 'jingcai_7ree', './data/template/2_jingcai_7ree_jingcai_index_7ree.tpl.php', './source/plugin/jingcai_7ree/template', 'jingcai_index_7ree')
|| checktplrefresh('./source/plugin/jingcai_7ree/template/jingcai_index_7ree.htm', './template/yunzhan_zq/common/footer.htm', 1528097763, 'jingcai_7ree', './data/template/2_jingcai_7ree_jingcai_index_7ree.tpl.php', './source/plugin/jingcai_7ree/template', 'jingcai_index_7ree')
|| checktplrefresh('./source/plugin/jingcai_7ree/template/jingcai_index_7ree.htm', './template/yunzhan_zq/common/header_common.htm', 1528097763, 'jingcai_7ree', './data/template/2_jingcai_7ree_jingcai_index_7ree.tpl.php', './source/plugin/jingcai_7ree/template', 'jingcai_index_7ree')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
    <link rel="stylesheet" type="text/css" href="template/yunzhan_zq/style/css/yunzhan.css" media="all">
    <script src="template/yunzhan_zq/style/js/jquery-u.js" type="text/javascript"></script>
    <script src="template/yunzhan_zq/style/js/jquery_uc.js" type="text/javascript"></script>
    
    
    
    
    



<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" />
<?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" />
<?php } if(helper_access::check_module('feed')) { ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" />
<?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?>
<?php echo $rsshead;?>
<?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
</head><body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { ?><?php
$diynav = <<<EOF

<a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();">DIY</a>

EOF;
?>
<?php } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c"> 請選擇 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">進入手機版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">繼續訪問電腦版</a> </div>
<?php } ?>

<div class="wp"><?php echo adshow("headerbanner/wp a_h");?><?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_top'])) echo $_G['setting']['pluginhooks']['global_cpnav_top'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?>
</div>
<div class="cl"></div>
</div>
<div id="yunzhan_topnav" class="nav_bar_box">
  <div class="nav_content wp cl">
    <div class="logo">
      <span>
      <?php $mnid = getcurrentnav();?>        <?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?>
        <a href="./" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a>
        <?php } else { ?>
        <?php echo $_G['setting']['navlogos'][$mnid];?>
        <?php } ?>
      </span>
    </div>
  
    <div class="newnav_box">
        <!--Start Navigation-->
        <?php $mnid = getcurrentnav();?>        <div id="yunzhan_menu_nav" class="yunzhan_m_n">
          <?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { ?>          <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
          <li <?php if($mnid == $nav['navid']) { ?>class="active" <?php } ?><?php echo $nav['nav'];?>></li>
          <?php } ?>
          <?php } ?>
          <?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
        </div>
    </div>
    
    <div class="newnav_right">
         <ul id="umnav_menu" class="p_pop nav_pop" style="display: none;">
      <li><a class="infos" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="訪問我的空間"><?php echo $_G['member']['username'];?></a></li>
      <li><a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1" id="extcreditmenu">積分: <?php echo $_G['member']['credits'];?></a></li>
      <li><a href="home.php?mod=spacecp">設置</a></li>
      <?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { ?>      <?php if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
      <?php $nav[code] = str_replace('style="', '_style="', $nav[code]);?>      <li><?php echo $nav['code'];?></li>
      <?php } ?>
      <?php } ?>
      <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra3'])) echo $_G['setting']['pluginhooks']['global_usernav_extra3'];?>
      <?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
      <li><a href="portal.php?mod=portalcp">
        <?php if($_G['setting']['portalstatus'] ) { ?>
        門戶管理
        <?php } else { ?>
        模塊管理
        <?php } ?>
        </a></li>
      <?php } ?>
      <?php if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
      <li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
      <?php } ?>
      <?php if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
      <li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">雲平台</a></li>
      <?php } ?>
      <?php if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
      <li><a href="admin.php" target="_blank">管理中心</a></li>
      <?php } ?>
  <?php if(check_diy_perm($topic)) { ?>
      <li><?php echo $diynav;?></li>
      <?php } ?>
      <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra4'])) echo $_G['setting']['pluginhooks']['global_usernav_extra4'];?>
      <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
      <?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
      <?php if(!empty($_G['setting']['pluginhooks']['global_myitem_extra'])) echo $_G['setting']['pluginhooks']['global_myitem_extra'];?>
    </ul>

 <?php if($_G['uid']) { ?>
    <div id="yunzhan_user">
      <ul id="yunzhan_nav">
        <li id="user_box"> <span><a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_g['member']['newpm']) { ?> class="new"<?php } ?>>消息
          <?php if($_G['member']['newpm']) { ?>
          (<?php echo $_G['member']['newpm'];?>)
          <?php } ?>
          </a></span> <span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_g['member']['newprompt']) { ?> class="new"<?php } ?>>提醒
          <?php if($_G['member']['newprompt']) { ?>
          (<?php echo $_G['member']['newprompt'];?>)
          <?php } ?>
          </a></span>
          <?php if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?>
          <span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">進行中的任務</a></span>
          <?php } ?>
          <a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="訪問我的空間" id="umnav" class="username" onMouseOver="showMenu({'ctrlid':this.id,'ctrlclass':'a'})">
          <?php echo avatar($_G[uid],small);?>          </a> </li>
      </ul>
    </div>
    
    <?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
    <div id="yunzhan_user">
      <ul id="yunzhan_nav">
        <li id="login_u_box"> <span><a id="loginuser" class="username">
          <?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?>          </a></span> <span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a></span> <span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></span> </li>
      </ul>
    </div>
    <?php } elseif(!$_G['connectguest']) { ?>
    <div class="yunzhan_login">
    <a href="plugin.php?id=wechat:login"><em class="i_wei"></em></a>
    <a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><em class="i_qq"></em></a>
    </div>	
    <div id="yunzhan_user">
      <ul id="yunzhan_nav">
        <li id="login_u_box"> <span><a href="javascript:;" onClick="javascript:lsSubmit();" class="nousername">登录</a></span> <span><a href="member.php?mod=register" class="btn-register">注册</a></span> </li>
      </ul>
    </div>
    <div style="display:none">
      <?php include template('member/login_simple'); ?>    </div>
    <?php } else { ?>
    <div id="yunzhan_user">
      <ul id="yunzhan_nav">
        <li id="login_u_box"> <span><a href="home.php?mod=spacecp&amp;ac=usergroup" class="nousername"><?php echo $_G['member']['username'];?></a></span> <span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></span> </li>
      </ul>
    </div>
    <?php } ?>
    </div>
    
    
    
    <div class="cl"></div>
  </div>
  <!--End Navigation-->
  <?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
  <ul class="p_pop h_pop er_nav" id="plugin_menu" style="display: none">
    <?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?>    <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
    <li><?php echo $module['url'];?></li>
    <?php } ?>
    <?php } ?>
  </ul>
  <?php } ?>
  <?php echo $_G['setting']['menunavs'];?>
  <div class="cl"></div>
  <div id="mu" class="cl wp">
    <?php if($_G['setting']['subnavs']) { ?>
    <?php if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { ?>    <?php if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
    <ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
      <div class="wp">
      <?php echo $subnav;?>
      </div>
    </ul>
    <?php } ?>
    <?php } ?>
    <?php } ?>
  </div>
</div>
<?php } ?>
<div class="wp"><?php echo adshow("subnavbanner/a_mu");?><?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
</div>

<div id="wp" class="wp">
<!--
ID: jingcai_7ree
[www.7ree.com] (C)2007-2017 7ree.com.
This is NOT a freeware, use is subject to license terms
Update: 2017/10/28 17:19
Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
More Plugins: http://addon.discuz.com/?@7ree
-->

<link rel="stylesheet" type="text/css" href="data/cache/style_1_forum_viewthread.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="source/plugin/jingcai_7ree/template/image/css_7ree.css?<?php echo VERHASH;?>">
<style type="text/css"> 
.titlebg_7ree{
color:<?php echo $jingcai_7ree_var['titlecolor_7ree'];?>;
}

</style> 


<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><a href="<?php echo $_G['siteurl'];?>"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><a href="<?php echo $dating_url_7ree;?>"><?php echo $navtitle;?></a>
</div> 
</div>




<div id="ct" class="wp cl n">
<div class="mn">
<ul class="tb cl">
            <li <?php if(!$_GET['ac_7ree'] && !$_GET['finish_7ree']) { ?> class="a"<?php } ?> ><a href="<?php echo $dating_url_7ree;?>"><span>競猜大廳</span></a></li>
            <li <?php if(!$_GET['ac_7ree'] && $_GET['finish_7ree']==1) { ?> class="a"<?php } ?> ><a href="<?php echo $wangqiurl_7ree;?>"><span>往期競猜</span></a></li>
            <li <?php if(in_array($_GET['ac_7ree'],array('1','7','16','17'))) { ?> class="a"<?php } ?> id="wodejingcai_7ree" onmouseover="showMenu(this.id)"><a href="javascript:void(0);" title="領取獎勵"><span class="showmenu">個人中心</span></a></li>
            <li <?php if(in_array($_GET['ac_7ree'],array('5','6'))) { ?> class="a"<?php } ?> id="ranklist_7ree" onmouseover="showMenu(this.id)"><a href="javascript:void(0);"><span class="showmenu">競猜排行</span></a></li>
            <?php if($jingcai_7ree_var['fid_7ree']) { ?>
            <li><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $jingcai_7ree_var['fid_7ree'];?>" target="_blank"><span>交流論壇</span></a></li>
            <?php } ?>
            <?php if($_G['adminid']==1 || $isadmins_7ree) { ?>
            <li <?php if($_GET['ac_7ree'] == '2') { ?> class="a"<?php } ?> ><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2"><span>管理員操作台</span></a></li>
            <?php } ?>
</ul>

<ul id="wodejingcai_7ree_menu" class="p_pop" style="width:75px;display:none;">
<li><a href="<?php echo $wdjc_url_7ree;?>" title="領取獎勵" <?php if($_GET['ac_7ree'] == '1') { ?> class="li_now_7ree"<?php } ?>><span>我的競猜</span></a></li>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
            <li><a href="<?php echo $wdgz_url_7ree;?>" <?php if($_GET['ac_7ree'] == '7') { ?> class="li_now_7ree"<?php } ?>><span>我的關注</span></a></li>
            <?php } ?>
            <?php if($jingcai_7ree_var['fencheng_onoff_7ree']) { ?>
            <li><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=16" <?php if($_GET['ac_7ree'] == '16') { ?> class="li_now_7ree"<?php } ?>><span>我的推廣</span></a></li>
            <li><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=17" <?php if($_GET['ac_7ree'] == '17') { ?> class="li_now_7ree"<?php } ?>><span>我的分成</span></a></li>
            <?php } ?>
            <li><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=18" <?php if($_GET['ac_7ree'] == '18') { ?> class="li_now_7ree"<?php } ?>><span>查看收益</span></a></li>
</ul>


<ul id="ranklist_7ree_menu" class="p_pop" style="width:100px;display:none;">
            <?php if($jingcai_7ree_var['newrank_7ree']) { ?>
            <li><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=5" <?php if($_GET['ac_7ree'] == '5') { ?> class="li_now_7ree"<?php } ?> ><span>最新競猜榜</span></a></li>
            <?php } ?>
            <?php if($jingcai_7ree_var['allrank_7ree']) { ?>
            <li><a href="<?php echo $zyl_url_7ree;?>" <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==1) { ?> class="li_now_7ree"<?php } ?> ><span>總盈利排行榜單</span></a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['cutrank_7ree']) { ?>
            <li><a href="<?php echo $jyl_url_7ree;?>" <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==2) { ?> class="li_now_7ree"<?php } ?> ><span>淨盈利排行榜單</span></a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['winrank_7ree']) { ?>
            <li><a href="<?php echo $cangci_url_7ree;?>" <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==3) { ?> class="li_now_7ree"<?php } ?> ><span>猜贏場次排行榜單</span></a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['hitrank_7ree']) { ?>
            <li><a href="<?php echo $mingzhong_url_7ree;?>" <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==4) { ?> class="li_now_7ree"<?php } ?> ><span>命中率排行榜單</span></a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['lyrank_7ree']) { ?>
            <li><a href="<?php echo $liansheng_url_7ree;?>" <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==5) { ?> class="li_now_7ree"<?php } ?> ><span>重點連勝排行榜單</span></a></li> 
            <?php } ?>
</ul>	

<div class="datalist">
<?php if($_GET['ac_7ree'] == "") { include template('jingcai_7ree:jingcai_main_7ree'); } elseif($_GET['ac_7ree'] == "1") { include template('jingcai_7ree:jingcai_reward_7ree'); } elseif($_GET['ac_7ree'] == "2") { include template('jingcai_7ree:jingcai_admin_7ree'); } elseif($_GET['ac_7ree'] == "5") { include template('jingcai_7ree:jingcai_rank_7ree'); } elseif($_GET['ac_7ree'] == "6") { include template('jingcai_7ree:jingcai_top_7ree'); } elseif($_GET['ac_7ree'] == "7") { include template('jingcai_7ree:jingcai_guanzhu_7ree'); } elseif($_GET['ac_7ree'] == "10") { include template('jingcai_7ree:jingcai_viewlist_7ree'); } elseif($_GET['ac_7ree'] == "14") { include template('jingcai_7ree:jingcai_gaoshou_7ree'); } elseif($_GET['ac_7ree'] == "16") { include template('jingcai_7ree:jingcai_tuiguang_7ree'); } elseif($_GET['ac_7ree'] == "17") { include template('jingcai_7ree:jingcai_fencheng_7ree'); } elseif($_GET['ac_7ree'] == "18") { include template('jingcai_7ree:jingcai_vewpaylist_7ree'); } ?>
    	</div>


    </div>
</div>
</div>

<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="關閉">關閉
</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站長推薦<?php } ?>
<span id="focus_ctrl" class="fctrl">
<img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一條" title="上一條" id="focusprev" class="cur1" onclick="showfocus('prev');" /> 
<em><span id="focuscur"></span>/<?php echo $focusnum;?></em> 
<img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一條" title="下一條" id="focusnext" class="cur1" onclick="showfocus('next')" />
</span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>

    

    
    
    
    
    
    
<!-- footer begin -->


<div class="footer_yunzhan">
  
<p style="text-align:center">
    <?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
                    !$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile'))) { ?><?php echo $nav['code'];?><em></em><?php } } ?>
                    <em></em>
            <?php if($_G['setting']['icp']) { ?>(<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a>)<em></em><?php } ?>
            <?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
            <?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><em></em><?php } ?>  
            <?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" style="vertical-align: middle;" /></a><?php } ?> </p>

<p style="text-align:center; padding-bottom:30px;">Powered by <strong><a href="http://www.discuz.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?>
<span>&copy; 2001-2015 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a></span></p>

</div>
<!-- footer end --> 

   
    
     
      
       
        
         
           
    <?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隱身<?php } else { ?>在線<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回復"><b>快速回復</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回頂部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回頂部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版塊"><b>返回版塊</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>