<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<?php if(!$_GET['sp_7ree']) { if($notice_7ree) { ?>
<tr class="colplural" >
<th colspan="8"><h3>競猜公告</h3></th>
</tr>
<tr>
<td colspan="8">
<p><?php echo $notice_7ree;?></p>
</td>
</tr>
<?php } } if(!$_GET['sp_7ree']) { if($jingcai_7ree_var['dating_7ree']) { include template('jingcai_7ree:jingcai_dating_7ree'); } else { include template('jingcai_7ree:jingcai_dating2_7ree'); } } elseif($_GET['sp_7ree'] == "more") { include template('jingcai_7ree:jingcai_page_7ree'); } ?>
</table>