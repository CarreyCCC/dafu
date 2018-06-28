<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<tr class="colplural" >
<th colspan="6"><h3>我獲得的查看收益<span class='y'>稅率:<?php echo $viewtax_7ree;?>%</span></h3></th>
</tr>
<tr>
<td align="center">賽事名稱</td>
<td align="center"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></td>	
<td align="center">購買查看會員</td>
<td align="center">購買查看時間</td>
<td align="center">購買查看<?php echo $exttitle_7ree;?></td>
</tr>
<?php if($list_7ree) { if(is_array($list_7ree)) foreach($list_7ree as $list_value) { ?><tr>
<td align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $list_value['race_7ree']['main_id_7ree'];?>"><?php echo $list_value['race_7ree']['racename_7ree'];?></a></td>
<td align="center"><?php echo $list_value['race_7ree']['aname_7ree'];?> VS <?php echo $list_value['race_7ree']['bname_7ree'];?></td>
<td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $list_value['uid_7ree'];?>" target="_blank"><?php echo $list_value['username'];?></a></td>
<td align="center"><?php echo $list_value['time_7ree'];?></td>
<td align="center"><?php echo $list_value['payment_7ree'];?><?php echo $exttitle_7ree;?></td>

</tr>	
<?php } if($multipage) { ?>
<tr>
<td colspan="2"><div class="page"><?php echo $multipage;?></div></td>
</tr>
<?php } ?>	
<?php } else { ?>
<tr>
<td colspan="2"><div class="notice">您還沒有下線，快把上面的推廣鏈接發給你的好友，賺取分成吧。</div></td>
</tr>
<?php } ?>
</table>