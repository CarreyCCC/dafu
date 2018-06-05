<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script src="static/js/calendar.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript">
function submitcheck_7ree(formobj_7ree){
var format_7ree = /^[0-9]+([.]{1}[0-9]{1,3})?$/;	    
var rerurn_7ree = true;
        var jstips_7ree = "以下項目沒有填寫或填寫不正確：";
 	    

if(formobj_7ree.racename_7ree.value=='') {
jstips_7ree += "賽事名稱, ";
rerurn_7ree = false;	
}
if(formobj_7ree.reward_7ree.value=='') {
jstips_7ree += "最低支持, ";
rerurn_7ree = false;	
}
if(formobj_7ree.time_7ree.value=='') {
jstips_7ree += "比賽時間, ";
rerurn_7ree = false;	
}		
if(formobj_7ree.aname_7ree.value=='') {
jstips_7ree += "主隊名稱, ";
rerurn_7ree = false;	
}	
if(formobj_7ree.bname_7ree.value=='') {
jstips_7ree += "客隊名稱, ";
rerurn_7ree = false;	
}	
if(formobj_7ree.aodds_7ree.value=='' || !format_7ree.test(formobj_7ree.aodds_7ree.value)) {
jstips_7ree += "主隊贏賠率, ";
rerurn_7ree = false;	
}			
if(formobj_7ree.bodds_7ree.value=='' || !format_7ree.test(formobj_7ree.bodds_7ree.value)) {
jstips_7ree += "客隊贏賠率, ";
rerurn_7ree = false;	
}	
if(formobj_7ree.codds_7ree.value!='' && !format_7ree.test(formobj_7ree.codds_7ree.value)) {
jstips_7ree += "平局賠率, ";
rerurn_7ree = false;	
}			

if(!rerurn_7ree){
 			showPrompt(null, null, "<span>"+jstips_7ree+"</span>", 5000);
 		}
return rerurn_7ree;
}

function showfenlei2_7ree(id_7ree){
$('yijitips_7ree').style.display="none";
var t = document.getElementById(id_7ree);

if(t.options[t.selectedIndex].value){

    for(var i = 1; i < t.options.length; i++) {
$('fenlei_select_7ree_'+t.options[i].value).style.display = "none";
} 
   			$('fenlei_select_7ree_'+t.options[t.selectedIndex].value).style.display = "";
   		}
}

function ajaxgetinfo_7ree(target_7ree){

if(target_7ree=='race'){
if($('racename_7ree').value){
ajaxget('plugin.php?id=jingcai_7ree:ajaxgetinfo_7ree&target_7ree=race&name_7ree='+$('racename_7ree').value,'getracemsg_7ree');
}else{
alert('請先輸入賽事名稱再讀取本賽事簡介的歷史信息。');
$('racename_7ree').focus();
}
}else if(target_7ree=='ateam'){
if($('aname_7ree').value){		
ajaxget('plugin.php?id=jingcai_7ree:ajaxgetinfo_7ree&target_7ree=ateam&name_7ree='+$('aname_7ree').value,'ateammsg_7ree');
}else{
alert('請先輸入賽事名稱再讀取本賽事簡介的歷史信息。');
$('aname_7ree').focus();
}
}else if(target_7ree=='bteam'){
if($('bname_7ree').value){
ajaxget('plugin.php?id=jingcai_7ree:ajaxgetinfo_7ree&target_7ree=bteam&name_7ree='+$('bname_7ree').value,'bteammsg_7ree');
}else{
alert('請先輸入賽事名稱再讀取本賽事簡介的歷史信息。');
$('bname_7ree').focus();
}
}

}

</script>
<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">


        <tr class="colplural">
        <th colspan="6">
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=op" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'op') { ?>b_7ree<?php } ?>">管理賽事</a>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=log" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'log') { ?>b_7ree<?php } ?>">競猜日誌</a> 
        </th>
        </tr>
        <?php if(!$_GET['sp_7ree']) { ?>
        <tr>
        <td colspan="6">
        	<div class="notice">請點擊上面的按鈕選擇需要進行的管理操作。</div>
        </td>
        </tr>

        <?php } elseif($_GET['sp_7ree'] == "op" ) { ?>
        <tr class="colplural" >
        <td>編號</td>
        <td>賽事名稱</td>
        <td>比賽時間</td>
        <td>主隊 <br> 客隊</td>
        <td>比賽結果</td>
        </tr>
        <?php if(is_array($racelist_7ree)) foreach($racelist_7ree as $racelist_value) { ?>        <tr class="colplural" >
                <td><?php echo $racelist_value['main_id_7ree'];?></td>
                <td><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;sp_7ree=more&amp;main_id_7ree=<?php echo $racelist_value['main_id_7ree'];?>" target="_blank"><?php echo $racelist_value['racename_7ree'];?></a></td>
                <td style="width:70px;"><?php echo $racelist_value['time_7ree'];?></td>
                <td><?php echo $racelist_value['aname_7ree'];?><br><?php echo $racelist_value['bname_7ree'];?></td>
                <td><?php if($racelist_value['win_7ree'] == "a") { ?>
                	<?php echo $racelist_value['aname_7ree'];?>
                	<?php } elseif($racelist_value['win_7ree'] == "b") { ?>
                	<?php echo $racelist_value['bname_7ree'];?>
                	<?php } elseif($racelist_value['win_7ree'] == "c") { ?>
                	平局
                	<?php } elseif($racelist_value['win_7ree'] == "d") { ?>
                	流盤
                	<?php } else { ?>
                	未揭曉
                	<?php } ?>
                </td>
        </tr>
        <?php } ?>
        <tr>
        <td colspan="6"><?php echo $mymultipage_7ree;?></td>
        </tr>
         <?php } elseif($_GET['sp_7ree'] == "log" ) { include template('jingcai_7ree:jingcai_log_7ree'); ?>        <?php } ?>
        </table>
