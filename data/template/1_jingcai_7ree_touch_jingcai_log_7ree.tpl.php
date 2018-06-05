<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
        <tr class="colplural" >
        <td style="width:25px;">編號</td>
        <td>賽事名稱</td>
        <td>會員</td>
        <td style="width:50px;">支持<br>獎勵 </td>
        <td>競猜<br>競猜時間</td>
        </tr>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr class="colplural" >
        <td><?php echo $loglist_value['log_id_7ree'];?></td>
        <td><a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank"><?php echo $loglist_value['racename_7ree'];?></a></td>
        <td><a href="<?php echo $jilu_url_7ree;?><?php echo $loglist_value['uid_7ree'];?>" target="_blank"><?php echo $loglist_value['username_7ree'];?></a></td>
        <td><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><br><?php if($loglist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?></td>

        <td>
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
        <br><?php echo $loglist_value['log_time_7ree'];?></td>
        </tr>
        <?php } ?>
        <tr>
        <td colspan="7"><?php echo $mymultipage_7ree;?></td>
        </tr>