<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="zhanwei_7ree"></div>
<div class="ftnav_7ree">
<div class="footnav_7ree">
<ul>
            <li><a href="<?php echo $dating_url_7ree;?>" class="dating_7ree <?php if(!$_GET['ac_7ree'] && !$_GET['finish_7ree']) { ?>now_7ree<?php } ?>">競猜大廳</a></li>
            <li><a href="<?php echo $wangqiurl_7ree;?>" class="wangqi_7ree <?php if(!$_GET['ac_7ree'] && $_GET['finish_7ree']) { ?>now_7ree<?php } ?>">往期競猜</a></li>
            <li><a href="<?php echo $wdjc_url_7ree;?>" class="wode_7ree <?php if($_GET['ac_7ree']==1) { ?>now_7ree<?php } ?>">我的競猜</a></li>
            <li><a href="javascript:void(0);" onclick='navmenu_7ree();' class="paihang_7ree <?php if($_GET['ac_7ree']==6) { ?>now_7ree<?php } ?>">競猜排行</a></li>
<li><a href="https://www.aihx888.com/home.php?mod=spacecp&amp;ac=credit&amp;op=buy&amp;mm=1" class="coin_7ree">序號充值</a></li>
</ul>
</div>
</div>
<div class="ftnav_menu_7ree" id="ftnav_menu_7ree" style="display:none;">
<ul>
            <?php if($jingcai_7ree_var['newrank_7ree']) { ?>
            <li <?php if($_GET['ac_7ree'] == '5') { ?>class="now_7ree"<?php } ?> ><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=5"><span>最新競猜榜</span></a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['allrank_7ree']) { ?>
            <li <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==1) { ?>class="now_7ree"<?php } ?> ><a href="<?php echo $zyl_url_7ree;?>">總盈利排行榜單</a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['cutrank_7ree']) { ?>
            <li <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==2) { ?>class="now_7ree"<?php } ?> ><a href="<?php echo $jyl_url_7ree;?>">淨盈利排行榜單</a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['winrank_7ree']) { ?>
            <li <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==3) { ?>class="now_7ree"<?php } ?> ><a href="<?php echo $cangci_url_7ree;?>">猜贏場次排行榜單</a></li> 
            <?php } ?>
            <?php if($jingcai_7ree_var['hitrank_7ree']) { ?>
            <li <?php if($_GET['ac_7ree'] == '6' && $_GET['how_7ree']==4) { ?>class="now_7ree"<?php } ?> ><a href="<?php echo $mingzhong_url_7ree;?>">命中率排行榜單</a></li> 
            <?php } ?>
</ul>
</div>

<script type="text/javascript">
function navmenu_7ree(){
if(document.getElementById('ftnav_menu_7ree').style.display!="block"){
document.getElementById('ftnav_menu_7ree').style.display="block";
}else{
document.getElementById('ftnav_menu_7ree').style.display="none";
}
}
</script>
