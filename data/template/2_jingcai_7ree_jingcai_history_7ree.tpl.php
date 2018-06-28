<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="dt mtm">
<tr class="colplural" >
    <th colspan="6">
    <h3>最近競猜賽事歷史</h3>
    </th>
</tr>
<tr>
<td align="center">賽事名稱</td>
<td align="center"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></td>
<td align="center">比賽結果</td>
<td align="center">競猜時間</td>
<td align="center">競猜詳情</td>
</tr><?php if(is_array($lishijingcailist_7ree)) foreach($lishijingcailist_7ree as $lishijingcailist_value) { ?><tr>
<td align="center"><?php echo $lishijingcailist_value['racename_7ree'];?></td>
<td align="center"><?php echo $lishijingcailist_value['aname_7ree'];?> VS <?php echo $lishijingcailist_value['bname_7ree'];?></td>
<td align="center">
<?php if($lishijingcailist_value['win_7ree'] == "a") { ?>
            <?php echo $lishijingcailist_value['aname_7ree'];?>
        <?php } elseif($lishijingcailist_value['win_7ree'] == "b") { ?>
        	<?php echo $lishijingcailist_value['bname_7ree'];?>
        <?php } elseif($lishijingcailist_value['win_7ree'] == "c") { ?>
        	平局
        <?php } elseif($lishijingcailist_value['win_7ree'] == "d") { ?>
        	流盤
        <?php } else { ?>
         	未揭曉
        <?php } ?>
        </td>
<td align="center"><?php echo $lishijingcailist_value['time_7ree'];?></td>
<td align="center"><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;sp_7ree=more&amp;main_id_7ree=<?php echo $lishijingcailist_value['main_id_7ree'];?>" target="_blank">競猜詳情</a></td>
</tr>
<?php } ?>
</table>
