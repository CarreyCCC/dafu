<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('forumlist');?><?php include template('m/header'); ?><body>
    <div class="warp">
        <div class="interestBox"></div>
    </div>
    <div class="bottomBar">
        <div class="bottomBarCon">
            <a href="javascript:TOOLS.pageBack();" class="backBtn"><i class="iconAnswer commF back db"></i></a>
            <a id="bottomSiteName" class="centerContent"></a>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function (){
            TC.load("forumlist.htm");
            JC.file("navmenu.js");
            JC.file("forumlist.js");
            JC.run();
            $('#bottomSiteName').text(SITE_INFO.siteName);
        };
    </script><?php include template('m/footer'); ?>