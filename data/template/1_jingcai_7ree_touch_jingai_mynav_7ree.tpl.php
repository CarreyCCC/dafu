<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class='touch_mynav_7ree'>
<?php if($opengsdb_7ree) { ?>
<a href="plugin.php?id=x7ree_opengs:x7ree_opengs&amp;code_7ree=2" target='_blank' class="adminbtn_7ree">我的開放競猜</a>
<?php } ?>
<a href="<?php echo $wdjc_url_7ree;?>" class="adminbtn_7ree <?php if($_GET['ac_7ree']==1) { ?>ths_7ree<?php } ?>">我的競猜</a>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
<a href="<?php echo $wdgz_url_7ree;?>" class="adminbtn_7ree <?php if($_GET['ac_7ree']==7) { ?>ths_7ree<?php } ?>">我的關注</a>
<?php } ?>
</div>
