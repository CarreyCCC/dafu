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
 		}else{ 		
formobj_7ree.racemessage_7ree.value = wysiwyg ? html2bbcode(getEditorContents()) : formobj_7ree.racemessage_7ree.value;
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

// --��ͷȫѡ�򱻵���---
function ChkAllClick(sonName, cbAllId){
    var arrSon = document.getElementsByName(sonName);
 var cbAll = document.getElementById(cbAllId);
 var tempState=cbAll.checked;
 for(i=0;i<arrSon.length;i++) {
  if(arrSon[i].checked!=tempState)
           arrSon[i].click();
 }
}

// --���ѡ�򱻵���---
function ChkSonClick(sonName, cbAllId) {
 var arrSon = document.getElementsByName(sonName);
 var cbAll = document.getElementById(cbAllId);
 for(var i=0; i<arrSon.length; i++) {
     if(!arrSon[i].checked) {
     cbAll.checked = false;
     return;
     }
 }
 cbAll.checked = true;
}

// --��ѡ������---
function ChkOppClick(sonName){
 var arrSon = document.getElementsByName(sonName);
 for(i=0;i<arrSon.length;i++) {
  arrSon[i].click();
 }
}
</script>


<table width="100%" border="0" cellpadding="5" cellpadding="0" class="dt mtm">


        <tr class="colplural">
        <th colspan="7">
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=zd" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'zd') { ?>b_7ree<?php } ?>">賽事自動採集</a>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=add" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'add') { ?>b_7ree<?php } ?>">新增賽事</a>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=op" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'op') { ?>b_7ree<?php } ?>">管理賽事</a>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=log" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'log') { ?>b_7ree<?php } ?>">競猜日誌</a> 
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=tj" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'tj') { ?>b_7ree<?php } ?>">數據統計</a> 
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=sj" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'sj') { ?>b_7ree<?php } ?>">手機觸屏版</a>
        <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=diy" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'diy') { ?>b_7ree<?php } ?>">DIY擴展</a> 
         <a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=wjt" class="adminbtn_7ree <?php if($_GET['sp_7ree']== 'wjt') { ?>b_7ree<?php } ?>">短域名偽靜態</a>
        <?php if($_G['adminid']==1) { ?>                       
        <a href="admin.php?action=plugins" class="adminbtn_7ree" target="_blank">後台管理</a>
        <?php } ?> 
        </th>
        </tr>
        <?php if(!$_GET['sp_7ree']) { ?>
        <tr>
        <td colspan="6">
        	<div class="notice">請點擊上面的按鈕選擇需要進行的管理操作。</div>
        </td>
        </tr>
        <?php } elseif($_GET['sp_7ree'] == "add" || $_GET['sp_7ree'] == "edit") { ?>
            <?php include template('jingcai_7ree:jingcai_newedit_7ree'); ?>        <?php } elseif($_GET['sp_7ree'] == "op" ) { ?>
            <?php include template('jingcai_7ree:jingcai_guanli_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "log" ) { ?>
            <?php include template('jingcai_7ree:jingcai_log_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "tj" ) { include template('jingcai_7ree:jingcai_tongji_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "zd" ) { include template('jingcai_7ree:jingcai_zidong_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "sj" ) { include template('jingcai_7ree:jingcai_shouji_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "diy" ) { include template('jingcai_7ree:jingcai_diykuozhan_7ree'); ?>         <?php } elseif($_GET['sp_7ree'] == "wjt" ) { include template('jingcai_7ree:jingcai_weijingtai_7ree'); ?>        <?php } ?>
        </table>
