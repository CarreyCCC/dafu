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
</div>
<div class="topposi_7ree"></div>
<?php if($jingcai_7ree_var['mob_topad_7ree']) { ?>
<div>
<?php echo $jingcai_7ree_var['mob_topad_7ree'];?>
</div>
<?php } ?>
</header>
<!-- header end -->