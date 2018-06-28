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
<th><h3>我的推廣鏈接</h3></th>
</tr>
<td>
<input type="text" id="tuiguangurl_7ree" value="<?php echo $_G['siteurl'];?>member.php?mod=register&fromuid=<?php echo $_G['uid'];?>" class="" style="font-size:16px;width:600px;" onclick="setCopy($('tuiguangurl_7ree').value);">
<button style="font-size:16px;width:100px;" onclick="setCopy($('tuiguangurl_7ree').value);">複製鏈接</button>
</td>
</tr>
<tr class="colplural" >
<th><h3>我的推廣二維碼</h3></th>
</tr>
<td>
<img src="http://qr.liantu.com/api.php?text=<?php echo $_G['siteurl'];?>member.php?mod=register%26fromuid=<?php echo $_G['uid'];?>" class="woderqrimg_7ree"><br>
<button onclick='SaveAs5("http://qr.liantu.com/api.php?text=<?php echo $_G['siteurl'];?>member.php?mod=register%26fromuid=<?php echo $_G['uid'];?>")'>點擊這裡下載二維碼，發送給好友。</button>
</td>
</tr>	
</table>
<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">
<tr class="colplural" >
<th colspan="6"><h3>我的下線</h3></th>
</tr>
<tr>
<td align="center">會員</td>
<td align="center">推廣時間</td>
</tr>
<?php if($xiaxianlist_7ree) { if(is_array($xiaxianlist_7ree)) foreach($xiaxianlist_7ree as $xiaxianlist_value) { ?><tr>
<td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $xiaxianlist_value['uid_7ree'];?>" target="_blank"><?php echo $xiaxianlist_value['username'];?></a></td>
<td align="center"><?php echo $xiaxianlist_value['time_7ree'];?></td>
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
</tr>
</table>


<script> 
function SaveAs5(imgURL) 
{ 
var oPop = window.open(imgURL,"","width=1, height=1, top=5000, left=5000"); 
for(; oPop.document.readyState != "complete"; ) 
{ 
if (oPop.document.readyState == "complete")break; 
} 
oPop.document.execCommand("SaveAs"); 
oPop.close(); 
} 
</script> 