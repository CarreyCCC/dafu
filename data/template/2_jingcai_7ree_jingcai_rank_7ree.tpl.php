<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="7"><h3>最新競猜榜</h3></th>
</tr>
<?php if($loglist_7ree) { ?>

        <tr class="colplural" >
        <td align="center">賽事名稱</td>
        <td align="center">會員</td>
        <td align="center">支持<?php echo $exttitle_7ree;?><span class="pipe">|</span>獎勵<?php echo $exttitle_7ree;?></td><td align="center">競猜時間</td>
        <td align="center">玩法</td>
        <td align="center">競猜</td>
        <td align="center">獲勝</td>
        </tr>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr>
        <td align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank"><?php echo $loglist_value['racename_7ree'];?></a></td>
        <td align="center">
        <a href="home.php?mod=space&amp;uid=<?php echo $loglist_value['uid_7ree'];?>" target="_blank"><?php echo $loglist_value['username_7ree'];?></a>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=10&amp;uid_7ree=<?php echo $loglist_value['uid_7ree'];?>&amp;fenlei2_7ree=<?php echo $loglist_value['fenlei2_7ree'];?>" title="競猜詳情" target="_blank"><img src="./source/plugin/jingcai_7ree/template/image/gs_7ree.gif" align="absmiddle" class="y"></a>
        <?php } ?>
        </td>
        <td align="center"><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span>
        <?php if($loglist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </td>
        <td align="center"><?php echo $loglist_value['log_time_7ree'];?></td>
        <td align="center"><?php if($loglist_value['type_7ree']) { ?>猜大小<?php } else { ?>猜結果<?php } ?></td>
        <td align="center">
        <?php if($loglist_value['win_7ree']) { if($loglist_value['type_7ree']) { if($loglist_value['mywin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } ?>
     <?php } else { ?>           
        <?php if($loglist_value['mywin_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="c") { ?>平局
        <?php } elseif($loglist_value['mywin_7ree']=="d") { ?>流盤
        <?php } ?>
         <?php } ?>
         <?php } else { ?>
         -
         <?php } ?>
        </td>
<td align="center">
<?php if($loglist_value['ltype_7ree']) { if($loglist_value['daxiaowin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
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
        <td colspan="7"><?php echo $multipage;?></td>
        </tr>

<?php } else { ?>
<tr>
<td colspan="7"><div class="notice">暫時無人上榜。</div></td>
</tr>
<?php } ?>
</table>