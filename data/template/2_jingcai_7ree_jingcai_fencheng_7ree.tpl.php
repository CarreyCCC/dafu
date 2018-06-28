<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<tr class="colplural" >
<th ><h3>推廣分成說明</h3></th>
</tr>
<td >
<p><?php echo $jingcai_7ree_var['tuiguangnotice_7ree'];?></p>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<tr class="colplural" >
<th colspan="6"><h3>我的分成</h3></th>
</tr>
<tr>
<td align="center">會員</td>
      <td align="center">競猜時間</td>
<td align="center">賽事名稱</td>
<td align="center"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></td>	
<td align="center">支持<?php echo $exttitle_7ree;?></td>
<td align="center">我的分成</td>	
</tr>
<?php if($fenchenglist_7ree) { if(is_array($fenchenglist_7ree)) foreach($fenchenglist_7ree as $fenchenglist_value) { ?><tr>
<td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $fenchenglist_value['uid_7ree'];?>" target="_blank"><?php echo $fenchenglist_value['username'];?></a></td>
<td align="center"><?php echo $fenchenglist_value['time_7ree'];?></td>
<td align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $fenchenglist_value['main_id_7ree'];?>"><?php echo $fenchenglist_value['racename_7ree'];?></a></td>
<td align="center"><?php echo $fenchenglist_value['aname_7ree'];?> VS <?php echo $fenchenglist_value['bname_7ree'];?></td>
<td align="center"><?php echo $fenchenglist_value['odds_7ree'];?><?php echo $exttitle_7ree;?></td>	
<td align="center"><b><?php echo $fenchenglist_value['fencheng_7ree'];?></b><?php echo $exttitle_7ree;?></td>	

</tr>	
<?php } if($multipage) { ?>
<tr>
<td colspan="6"><div class="page"><?php echo $multipage;?></div></td>
</tr>
<?php } ?>	
<?php } else { ?>
<tr>
<td colspan="6"><div class="notice">您還沒有下線，快把上面的推廣鏈接發給你的好友，賺取分成吧。</div></td>
</tr>
<?php } ?>
</table>