<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div id="modules">
<script src="static/js/calendar.js" type="text/javascript"></script>
<hr style="border-top: 1px dashed #8ADAF4">
<form name="modulesform" method="post" autocomplete="off" action="<?php echo $PL_ADMIN_URL;?>add">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<table class="tb" style="width: 100%">
<tbody>
<tr>
<th colspan="4" class="partition">添加期數</th>
</tr>
<tr class="header">
<th></th>
<th>期號</th>
<th>開始時間</th>
<th>結束時間</th>			
</tr>
<tr class="hover">
<td></td>
<td>
<input type="text" class="txt" size="15" id="" name="period" value="<?php echo $now_period;?>">
</td>
<td>
<input type="text" class="txt" size="25" name="s_time" value="" onclick="showcalendar(event, this, 1)">
</td>
<td>
<input type="text" class="txt" size="25" name="e_time" value="" onclick="showcalendar(event, this, 1)">
</td>
</tr>
</tbody>
<tbody>
<tr>
<td class="td25"></td>
<td colspan="15">
<div class="fixsel">
<input type="submit" class="btn" id="submit_editsubmit" title="添加" value="添加">
</div>
</td>
</tr>
</tbody>
</table>
</form>
<table class="tb" style="width: 90%">
<tbody>
<tr>
<th colspan="4" class="partition">期數列表</th>
</tr>
<tr class="header">
<th></th>
<th>期號</th>
<th>開始時間</th>
<th>結束時間</th>
<th>中獎號碼（格式︰01,02,03,02,03#08,09）</th>
<th>狀態</th>
<th>操作</th>
</tr><?php if(is_array($list)) foreach($list as $v) { ?><tr class="hover">
<td></td>
<td><span><?php echo $v['period'];?></span></td>
<td><span><?php echo $v['s_time'];?></span></td>
<td><span><?php echo $v['e_time'];?></span></td>
<td>
<input <?php if($v['status'] == 3) { ?>disabled="disabled" readonly="readonly"<?php } ?> type="text" class="txt SUN_key" size="35" name="win_num" rel="<?php echo $v['id'];?>" value="<?php echo $v['win_num_r'];?>#<?php echo $v['win_num_b'];?>">
</td>
<td><span><?php echo $PL_P_S[$v['status']];?></span></td>
<td>
<?php if($v['status'] == 2) { ?>
<input type="button" class="btn SUN_go" rel="<?php echo $v['id'];?>" title="開獎" value="開獎">
<?php } ?>
</td>
</tr>
<?php } ?>
<tr><td></td><td colspan="5" align="center"><?php echo $multipage;?></td></tr>
</tbody>
</table>
</div>
<script src="<?php echo $PL_STATIC;?>js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script>
var jq111 = jQuery.noConflict(true);
(function($){
function doAdminFormatJson(str){
var re = /{(.*)}/ig; 
var res = re.exec(str);
return $.parseJSON(res[0]);
}
$(".SUN_key").blur(function(){
var id = parseInt($(this).attr('rel'));
var key = trim($(this).val());
if(id ==0 || isNaN(id)){
alert("無法獲取ID值");
return;
}
if("" == key){
alert("數據填寫不完整，請完善每項數據");
return;
}
if(strlen(key) != 20){
alert("格式錯誤，請填寫正確的數據格式");
return;
}

$.post('<?php echo $PL_ADMIN_URL;?>key',{id:id,key:key,formhash:"<?php echo FORMHASH;?>"},function(e){
var e = doAdminFormatJson(e);
if(e.code == 99){
//window.location.reload();
}else{
alert(e.msg);
}
});
});

$(".SUN_go").click(function(){
var id = parseInt($(this).attr('rel'));
if(id ==0 || isNaN(id)){
alert("無法獲取ID值");
return;
}
var this_ = $(this);
this_.attr("disabled","disabled").val("正在開獎");
$.post('<?php echo $PL_ADMIN_URL;?>go',{id:id,formhash:"<?php echo FORMHASH;?>"},function(e){
var e = doAdminFormatJson(e);
if(e.code == 99){
this_.hide();
this_.parent().prev().children("span").html("<?php echo $PL_P_S['3'];?>");
this_.parent().prev().prev().children("input").attr({readonly:"readonly",disabled:"disabled",});
}else{
alert(e.msg);
}
});
});
})(jq111);
</script>