<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="7" class="mybet"><?php include template('jingcai_7ree:jingai_mynav_7ree'); ?></th>
</tr>

        <tr class="colplural" >
        <th style="text-align:center;width:90px;">賽事名稱<br>競猜時間</th>
        <th style="text-align:center;width:70px;">競猜<br>獲勝</th>
        <th style="text-align:center;width:60px;">支持<?php echo $exttitle_7ree;?><br>已得獎勵 </th>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
        <th style="text-align:center;width:40px;">操作</th>
        <?php } ?>
        </tr>
        <?php if($loglist_7ree) { ?>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr>
        <td style="text-align:center;"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank"><?php echo $loglist_value['racename_7ree'];?></a><br><?php echo $loglist_value['log_time_7ree'];?></td>
        <td style="text-align:center;">
       		<?php if($loglist_value['type_7ree']) { if($loglist_value['mywin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } ?>
     	<?php } else { ?>
        <?php if($loglist_value['mywin_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="c") { if($jingcai_7ree_var['pingju_7ree'] && $loglist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>
        <?php } elseif($loglist_value['mywin_7ree']=="d") { ?>流盤
        <?php } ?>
         	<?php } ?>
        <br>
        <?php if($loglist_value['type_7ree']) { ?> 
<?php if($loglist_value['mywin_7ree'] == $loglist_value['daxiaowin_7ree'] && $loglist_value['win_7ree']<>"d") { ?>
 <span class="opbtn_7ree"><?php if(!$loglist_value['log_reward_7ree']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=get&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='red'>立刻領取</font></a><?php } else { ?><font color='green'>已經領取</font><?php } ?></span>
<?php } elseif($loglist_value['win_7ree'] == "d") { if($loglist_value['mywin_7ree'] == "d") { ?>
<font color="gray">已返還<?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?></font>
<?php } else { ?><span class="opbtn_7ree">
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=quit&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='darkorange'>返還<?php echo $exttitle_7ree;?></font></a></span>
<?php } } else { ?>
<span style="padding:4px 12px 4px 12px;color:gray;">
<?php if($loglist_value['win_7ree']) { ?>
未猜對
<?php } else { ?>
未揭曉
<?php } ?>
    </span>
<?php } ?> 
        <?php } else { if($loglist_value['mywin_7ree'] == $loglist_value['win_7ree'] && $loglist_value['win_7ree']<>"d") { ?>
        <span class="opbtn_7ree"><?php if(!$loglist_value['log_reward_7ree']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=get&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='red'>立刻領取</font></a><?php } else { ?><font color='green'>已經領取</font><?php } ?></span>
<?php } elseif($loglist_value['win_7ree'] == "d") { if($loglist_value['mywin_7ree'] == "d") { ?>
<font color="gray">已返還<?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?></font>
<?php } else { ?><span class="opbtn_7ree">
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=quit&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='darkorange'>返還<?php echo $exttitle_7ree;?></font></a></span>
<?php } } else { ?>
<span style="padding:4px 12px 4px 12px;color:gray;">
<?php if($loglist_value['win_7ree']) { ?>
未猜對
<?php } else { ?>
未揭曉
<?php } ?>
    </span>
<?php } ?>        
        <?php } ?> 

        </td>        
        <td style="text-align:center;"><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><br> <?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?> (<?php echo $loglist_value['teamodds_7ree'];?>倍)
        </td>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
        <td align="center">
<?php if($loglist_value['time_7ree']<$_G['timestamp']) { ?>
        <?php if($loglist_value['point_7ree']) { ?>
已推薦
<?php } else { ?>
--
<?php } } else { ?>
        <?php if($loglist_value['point_7ree']) { ?>
已推薦
<?php } else { ?>
<a onclick="goto_7ree('您確認要把這個場次的競猜設定為重點推薦嗎？\n重點推薦被查看的含稅收益為<?php echo $jingcai_7ree_var['viewcost2_7ree'];?><?php echo $viewexttitle_7ree;?>\n普通推薦被查看的含稅收益為<?php echo $jingcai_7ree_var['viewcost_7ree'];?><?php echo $viewexttitle_7ree;?>\n24小時內您最多設定重點推薦的數量為:<?php echo $jingcai_7ree_var['pointnum_7ree'];?>\n獲得查看收益必須保證您的競猜排名高於:<?php echo $jingcai_7ree_var['viewfreenum_7ree'];?>','plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=13&lid_7ree=<?php echo $loglist_value['log_id_7ree'];?>&formhash=<?php echo FORMHASH;?>')" href="javascript:;" class="opbtn_7ree">推薦</a>
<?php } } ?>
</td>
<?php } ?> 
        </tr>
        <?php } ?>
        <tr>
        <td colspan="7"><?php echo $multipage;?></td>
        </tr>
        <tr>
        <td colspan="7">
        <?php if($viewextname_7ree && $jingcai_7ree_var['qingkongcost_7ree'] && $jingcai_7ree_var['qingkongday_7ree']) { ?>
        <a onclick="goto_7ree('如果您對自己的競猜表現不滿意，可以確認清空最近<?php echo $jingcai_7ree_var['qingkongday_7ree'];?>天的競猜記錄。\n本操作不會影響已獲得的積分獎勵，但會影響排行榜成績.\n本操作需消耗論壇積分：<?php echo $jingcai_7ree_var['qingkongcost_7ree'];?><?php echo $viewexttitle_7ree;?>','plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=11')" href="javascript:;" class="opbtn_7ree"  title="!htm_lang_qingkongmsg1_7ree!">清空最近<?php echo $jingcai_7ree_var['qingkongday_7ree'];?>天的競猜記錄</a></td>
        <?php } ?>
        </tr>        
        
        <?php } else { ?>
        <tr>
        <td colspan="7">
        <div class="notice">您還未參與競猜活動，參與活動就有可能獲得獎勵哦！</div>
        <div class="notice"><a href="plugin.php?id=jingcai_7ree:jingcai_7ree">現在就去參與競猜活動！</a></div></td>
        </tr> 
        <?php } ?>
</table>

<script type="text/javascript">
function goto_7ree(msg_7ree,url_7ree){
if(confirm(msg_7ree)){
window.location = url_7ree; 
 		return true;
}else return false;
}
</script>