<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<?php if(!$_GET['sp_7ree']) { if($jingcai_7ree_var['ad_img_7ree'] && !$_GET['finish_7ree'] && !$_GET['page']) { ?>
<tr class="colplural" >
<td colspan="8" align="center" style="margin:5px;height:368px;background-image: url(<?php echo $jingcai_7ree_var['ad_img_7ree'];?>);background-repeat:no-repeat;background-position:center;">
<a <?php if($jingcai_7ree_var['ad_url_7ree']) { ?>href="<?php echo $jingcai_7ree_var['ad_url_7ree'];?>" target="_blank"<?php } else { ?>href="javascript:;"<?php } ?> style="display:block;width:820px;height:350px;float:left;">
</a>
<?php if($jingcai_7ree_var['touchon_7ree'] && $qrimg_7ree) { ?>
<img src="<?php echo $qrimg_7ree;?>" style='float:right;margin-right:13px;'/>
<?php } ?>
</td>
</tr>
<tr>
<?php } if($notice_7ree) { ?>
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