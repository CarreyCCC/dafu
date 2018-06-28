<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<table width="100%" border="0" cellpadding="5" cellspacing="0" class="dt mtm">
<tr class="colplural" >
    <th colspan="6"><h3>最新競猜榜</h3></th>
</tr>
<tr>		    
<td align="center">會員</td>
<td align="center">競猜</td>
<td style="text-align:center;width:60px;">支持<?php echo $exttitle_7ree;?><br>獎勵<?php echo $exttitle_7ree;?></td>
<td align="center">競猜時間</td>
</tr><?php if(is_array($newjingcailist_7ree)) foreach($newjingcailist_7ree as $newjingcailist_value) { ?><tr>
<td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $newjingcailist_value['uid_7ree'];?>" target="_blank"><?php echo $newjingcailist_value['username_7ree'];?></a></td>
<td align="center">
<?php if($jingcai_7ree_var['pagedetail_7ree'] || $race_7ree['win_7ree']) { if($newjingcailist_value['type_7ree']) { if($newjingcailist_value['mywin_7ree']=="a") { ?>大 <?php echo $race_7ree['daxiao_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?>小 <?php echo $race_7ree['daxiao_7ree'];?>       
        <?php } ?>
        <?php } else { if($newjingcailist_value['mywin_7ree']=="a") { ?><?php echo $race_7ree['aname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?><?php echo $race_7ree['bname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="c") { ?>平局
        <?php } elseif($newjingcailist_value['mywin_7ree']=="d") { ?>流盤        
        <?php } ?>
        <?php } ?>
        <?php } else { ?>
        <span title="賽事揭曉後顯示" style="color:gray;">已隱藏</span>
        <?php } ?>
</td>
<td align="center"><?php echo $newjingcailist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><br>
<?php if($newjingcailist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $newjingcailist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?></td>
<td align="center"><?php echo $newjingcailist_value['log_time_7ree'];?></td>
</tr>
<?php } ?>
</table>
<?php echo $multipage;?>