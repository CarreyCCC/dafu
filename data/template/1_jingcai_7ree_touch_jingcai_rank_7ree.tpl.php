<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="6"><h3>最新競猜榜</h3></th>
</tr>
<?php if($loglist_7ree) { ?>

        <tr class="colplural" >
        <td style="text-align:center;width:70px;">賽事名稱</td><td style="text-align:center;width:70px;">會員<br>競猜時間</td><td style="text-align:center;width:50px;">支持<?php echo $exttitle_7ree;?><br>獎勵<?php echo $exttitle_7ree;?></td><td style="text-align:center;width:50px;">競猜<br>獲勝</td>
        </tr>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr>
        <td align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank"><?php echo $loglist_value['racename_7ree'];?></a></td>
        <td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $loglist_value['uid_7ree'];?>" target="_blank"><?php echo $loglist_value['username_7ree'];?></a><br><?php echo $loglist_value['log_time_7ree'];?></td>
        <td align="center"><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><br>        
        <?php if($loglist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </td>
        <td align="center">
                <?php if($loglist_value['type_7ree']) { if($loglist_value['mywin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } ?>
     <?php } else { ?>           
        <?php if($loglist_value['mywin_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="c") { ?>平局
        <?php } elseif($loglist_value['mywin_7ree']=="d") { ?>流盤        
        <?php } ?>
         <?php } ?>
         <br>		<?php if($loglist_value['ltype_7ree']) { if($loglist_value['daxiaowin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
<?php } elseif($loglist_value['daxiaowin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
<?php } else { ?>未揭曉
<?php } } else { if($loglist_value['win_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
<?php } elseif($loglist_value['win_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
<?php } elseif($loglist_value['win_7ree']=="c") { ?>平局
<?php } elseif($loglist_value['win_7ree']=="d") { ?>流盤
<?php } else { ?>未揭曉
<?php } } ?>
</td>        
        </tr>
        <?php } ?>
        <tr>
        <td colspan="6"><?php echo $multipage;?></td>
        </tr>

<?php } else { ?>
<tr>
<td colspan="7"><div class="notice">暫時無人上榜。</div></td>
</tr>
<?php } ?>
</table>