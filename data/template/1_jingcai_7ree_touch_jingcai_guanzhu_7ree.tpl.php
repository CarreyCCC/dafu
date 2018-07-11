<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="7"><?php include template('jingcai_7ree:jingai_mynav_7ree'); ?></th>
</tr>
<tr class="colplural" >
<th colspan="3">
<h3>我的關注</h3>
您可以通過論壇提醒信息接收到關注者參與競猜的賽事
</th>
</tr>
<tr>
<td align="middle">關注會員</td>
<td align="middle">參與場次</td>
<td align="middle">操作</td>
</tr>
<?php if($myguanzhulist_7ree) { if(is_array($myguanzhulist_7ree)) foreach($myguanzhulist_7ree as $myguanzhulist_value) { ?><tr>
<td align="middle"><a href="home.php?mod=space&amp;uid=<?php echo $myguanzhulist_value['touid_7ree'];?>" target="_blank"><?php echo $myguanzhulist_value['toname_7ree'];?></a></td>
<td align="middle"><a href="<?php echo $jilu_url_7ree;?><?php echo $myguanzhulist_value['uid_7ree'];?>" class="opbtn_7ree" ><?php echo $myguanzhulist_value['count_7ree'];?>/查看</a></td>
<td align="middle"><a onclick="goto_7ree('您確認要取消對「<?php echo $myguanzhulist_value['toname_7ree'];?>」的關注嗎，取消後將無法收聽TA的競猜消息', 'plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=9&uid_7ree=<?php echo $myguanzhulist_value['touid_7ree'];?>&formhash=<?php echo FORMHASH;?>')" href="javascript:;" class="opbtn_7ree">取消關注</a></td>
</tr>
<?php } } else { ?>
<tr>
<td colspan="3">
<div class="notice">您暫未關注任何會員，可在排行榜中進行關注操作哦。</div>
</td>
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
