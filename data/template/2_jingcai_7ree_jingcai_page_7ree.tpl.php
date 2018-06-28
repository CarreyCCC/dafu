<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script language="JavaScript">
<?php if($jingcai_7ree_var['pagerefresh_7ree']) { ?>
function refreshpage(){
window.location.reload();
}
setTimeout('refreshpage()',63000); //ÿ63��ˢ��һ��
<?php } if($race_7ree['time2_7ree']) { ?>
    function getRTime(){

        var NowTime = new Date();
        var t = <?php echo $race_7ree['time2_7ree'];?> - NowTime.getTime();
        
        <?php if($next_mid_7ree && $jingcai_7ree_var['pageredirect_7ree']) { ?>
        if(t<=0){
        	window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&sp_7ree=more&main_id_7ree=<?php echo $next_mid_7ree;?>';
        }
        <?php } ?>
        
        var d=Math.floor(t/1000/60/60/24);
        var h=Math.floor(t/1000/60/60%24);
        var m=Math.floor(t/1000/60%60);
        var s=Math.floor(t/1000%60);
        if(d>0 || h>0 || m>0 || s>0 || t<=0){
        	document.getElementById("t_title").innerHTML = "距離競猜結束還有";
        }else{
        	document.getElementById("t_title").innerHTML = "";
        }
if(d>0){
        document.getElementById("t_d").innerHTML = d + "天";
}else{
        document.getElementById("t_d").innerHTML = '';
}
if(h>0){
        document.getElementById("t_h").innerHTML = h + "時";
}else{
        document.getElementById("t_h").innerHTML = '';
}
if(m>0){
        document.getElementById("t_m").innerHTML = m + "分";
}else{
        document.getElementById("t_m").innerHTML = '';
}
if(s>0){
        document.getElementById("t_s").innerHTML = s + "秒";
}else{
        document.getElementById("t_s").innerHTML = '';
}

        
    }
    setInterval(getRTime,1000);
<?php } ?>
</script>

        <tr><td colspan="5" align="middle" class="colplural">
        <h2 class="pageh2_7ree">
        <?php if($race_7ree['tid_7ree']) { ?>
        <a href="forum.php?mod=viewthread&amp;tid=<?php echo $race_7ree['tid_7ree'];?>" target="_blank"><?php echo $race_7ree['racename_7ree'];?></a>
        <?php } else { ?>
        <?php echo $race_7ree['racename_7ree'];?>
        <?php } ?>
        </h2>
        <h3 class="pageh3_7ree">
        		<?php if($race_7ree['win_7ree']) { ?>
        				<?php if($race_7ree['win_7ree'] == "a") { ?>
        				<?php echo $race_7ree['aname_7ree'];?>獲勝!
        				<?php } elseif($race_7ree['win_7ree'] == "b") { ?>
        				<?php echo $race_7ree['bname_7ree'];?>獲勝!
        				<?php } elseif($race_7ree['win_7ree'] == "c") { ?>
        				比賽結果:<?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>!
        				<?php } elseif($race_7ree['win_7ree'] == "d") { ?>
        				比賽結果:流盤!
        				<?php } ?>
        		<?php } else { ?>
        		比賽結果未揭曉
        		<?php } ?></h3>
        <?php if($race_7ree['ashot_7ree'] || $race_7ree['bshot_7ree']) { ?>
        <h3 class="pageh3_7ree red_7ree"><?php echo $race_7ree['ashot_7ree'];?>:<?php echo $race_7ree['bshot_7ree'];?></h3>
<?php } if($race_7ree['time2_7ree']) { ?>
<h3 class="pageh3_7ree">
<span id="t_title"></span>
<span id="t_d"></span>
<span id="t_h"></span>
<span id="t_m"></span>
<span id="t_s"></span>
</h3>
<?php } ?>
        </td></tr>

        <tr><td colspan="5" align="middle">
        <p style="padding:10px;">
         <?php echo $race_7ree['aname_7ree'];?>獲勝<?php if($race_7ree['odd_dynamic_7ree']) { ?>動態<?php } else { ?>靜態<?php } ?>賠率: <strong class="remarkspan_7ree"><?php echo $race_7ree['aodds_7ree'];?>倍</strong><span class="pipe">|</span>
         <?php if($race_7ree['codds_7ree']) { ?>
         <?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } if($race_7ree['odd_dynamic_7ree']) { ?>動態<?php } else { ?>靜態<?php } ?>賠率: <strong class="remarkspan_7ree"><?php echo $race_7ree['codds_7ree'];?>倍</strong><span class="pipe">|</span>
         <?php } ?>
         <?php echo $race_7ree['bname_7ree'];?>獲勝<?php if($race_7ree['odd_dynamic_7ree']) { ?>動態<?php } else { ?>靜態<?php } ?>賠率: <strong class="remarkspan_7ree"><?php echo $race_7ree['bodds_7ree'];?>倍</strong>
        </p>
        <?php if($race_7ree['rangqiufang_7ree']) { ?>
        <p>
        <?php if($race_7ree['fenlei2_7ree']==$zuqiu_7ree) { ?>
        	當前賽事的讓球為
        <?php } else { ?>        
        	當前賽事的讓分為
        <?php } ?>
        	:<strong class="rangqiuspan_7ree">
        	<?php if($race_7ree['rangqiufang_7ree']==1) { ?><?php echo $race_7ree['aname_7ree'];?>
        	<?php } elseif($race_7ree['rangqiufang_7ree']==2) { ?><?php echo $race_7ree['bname_7ree'];?>
        	<?php } ?>
        讓<?php echo $race_7ree['rangqiuway_7ree'];?></strong>
        </p>
        <?php } ?>
        </td>
        </tr>

        <?php include template('jingcai_7ree:jingcai_pagebody_7ree'); ?>        <?php if($mywin_7ree) { ?>
        <tr>
        <td colspan="5" align="middle">
        <p style="padding:5px;">
        <?php if($mywin_7ree['mywin_7ree'] == "a") { ?>我已競猜<strong class="rangqiuspan_7ree"><?php echo $race_7ree['aname_7ree'];?>獲勝</strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "b") { ?>我已競猜<strong class="rangqiuspan_7ree"><?php echo $race_7ree['bname_7ree'];?>獲勝</strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "c") { ?>我已競猜<strong class="rangqiuspan_7ree"><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "d") { ?>已返還<?php echo $mywin_7ree['myodds_7ree'];?><?php echo $exttitle_7ree;?>
        <?php } ?></strong>
        <?php if($mywin_7ree['mywin_7ree'] <> "d") { ?><span class="pipe">|</span>並支持了<strong class="rangqiuspan_7ree"><?php echo $mywin_7ree['myodds_7ree'];?><?php echo $exttitle_7ree;?></strong><?php } ?>
        <span class="pipe">|</span><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1" target="_blank">我的更多競猜記錄</a>
        </p>
        </td>
        </tr>
        <?php } ?>

        <?php if($notice_7ree) { ?>
        <td colspan="6">
<p><?php echo $notice_7ree;?></p>
</td>
</tr>
<?php } if($race_7ree['racemessage_7ree']) { ?>
<tr>
<td colspan="6">
<p style="padding:10px;"><?php echo $race_7ree['racemessage_7ree'];?></p>
</td>
</tr>
<?php } if($opengslist_7ree) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_opengs_7ree'); ?></td>
</tr>
<?php } if($newjingcailist_7ree) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_newlist_7ree'); ?></td>
</tr>
<?php } if($jingcai_7ree_var['history_7ree']) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_history_7ree'); ?></td>
</tr>
<?php } if($race_7ree['tid_7ree']) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_chat_7ree'); ?></td>
</tr>
<?php } ?>  