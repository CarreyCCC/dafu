<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>


<!-- header start -->
<header class="header">

<div class="topnav_7ree">
<span class="name">
<?php if(!$_GET['ac_7ree'] ) { if($_GET['sp_7ree']=='more') { ?>
<?php echo $race_7ree['racename_7ree'];?>
<?php } else { if($_GET['finish_7ree']) { ?>
往期競猜
<?php } else { ?>
競猜大廳
<?php } } } elseif($_GET['ac_7ree']==1) { ?>
我的競猜
<?php } elseif($_GET['ac_7ree']==2) { if($_GET['sp_7ree']=='op') { ?>
管理賽事
<?php } elseif($_GET['sp_7ree']=='log') { ?>
競猜日誌
<?php } } elseif($_GET['ac_7ree']==6) { if($_GET['how_7ree']==1) { ?>
總盈利排行榜單
<?php } elseif($_GET['how_7ree']==2) { ?>
淨盈利排行榜單
<?php } elseif($_GET['how_7ree']==3) { ?>
猜贏場次排行榜單
<?php } elseif($_GET['how_7ree']==4) { ?>
命中率排行榜單
<?php } else { } } ?>
</span>
<div style="float: right;padding-right: 10px;font-size: 12px;color: white;position: absolute;z-index: 1001;top: 14px;right: 10px;">
<a title="登錄" style="color:white" href="member.php?mod=logging&amp;action=login&amp;mobile=2">登錄</a> | <a style="color:white" href="member.php?mod=register&amp;mobile=2" title="立即註冊">註冊</a>

</div>

</div>
<div class="topposi_7ree"></div>
<div></div>
<!-- 固定廣告版位圖-->
<div class="m_banner">
<img src="https://www.aihx888.com/source/plugin/jingcai_7ree/topad_img_7ree/banner414.jpg" height="auto" width="100%">

</div>

</header>
<!-- header end -->