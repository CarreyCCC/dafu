<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_credit_base');
0
|| checktplrefresh('./template/default/home/spacecp_credit_base.htm', './template/default/common/seccheck.htm', 1530527970, '1', './data/template/1_1_home_spacecp_credit_base.tpl.php', './template/default', 'home/spacecp_credit_base')
;?>
<?php if($_GET['mm'] == '1') { include template('m/header'); ?><!-- header start -->
<header class="header">


<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>


    <div class="nav">
<a href="javascript:;" onclick="history.go(-1);" class="z"><img src="static/image/mobile/images/icon_back.png" /></a>
<span>回到體育競猜網</span>
    </div>

    <style type="text/css">
td {
    height: 50px;
}
</style>
</header>
<!-- header end -->
<?php } else { include template('common/header'); } ?>
<div style="padding:50px;">

<?php if(in_array($_GET['op'], array('base', 'buy', 'transfer', 'exchange'))) { ?>
<ul class="creditl mtm bbda cl"><?php $creditid=0;?><?php if($_GET['op'] == 'base' && $_G['setting']['creditstrans']) { $creditid=$_G['setting']['creditstrans'];?><?php if($_G['setting']['extcredits'][$creditid]) { $credit=$_G['setting']['extcredits'][$creditid];?><li class="xi1 cl"><em><?php if($credit['img']) { ?> <?php echo $credit['img'];?><?php } ?> 目前金幣: </em><?php echo getuserprofile('extcredits'.$creditid);; ?> <?php echo $credit['unit'];?> &nbsp; <?php if(($_G['setting']['ec_ratio'] && ($_G['setting']['ec_tenpay_opentrans_chnid'] || $_G['setting']['ec_tenpay_bargainor'] || $_G['setting']['ec_account'])) || $_G['setting']['card']['open']) { ?><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=buy" class="xi2">立即充值&raquo;</a><?php } ?></li>
<?php } } if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $id => $credit) { if($id!=$creditid) { ?>
<li><em><?php if($credit['img']) { ?> <?php echo $credit['img'];?><?php } ?> 目前金幣: </em><?php echo getuserprofile('extcredits'.$id);; ?> <?php echo $credit['unit'];?></li>
<?php } } if($_GET['op'] == 'base') { ?>
<li class="cl"><em>積分: </em><?php echo $_G['member']['credits'];?> <span class="xg1">( <?php echo $creditsformulaexp;?> )</span></li>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_credit_extra'])) echo $_G['setting']['pluginhooks']['spacecp_credit_extra'];?>
</ul>
<?php } if($_GET['op'] == 'base') { ?>
<table summary="轉賬與兌換" cellspacing="0" cellpadding="0" class="dt mtm">
<caption>
<h2 class="mbm xs2">
<a href="home.php?mod=spacecp&amp;ac=credit&amp;op=log" class="xi2 xs1 xw0 y">查看更多&raquo;</a>積分記錄
</h2>
</caption>
<tr>
<th width="80">操作</th>
<th width="80">積分變更</th>
<th>詳情</th>
<th width="100">變更時間</th>
</tr>
<?php if($loglist) { if(is_array($loglist)) foreach($loglist as $value) { $value = makecreditlog($value, $otherinfo);?><tr>
<td><?php if($value['operation']) { ?><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=log&amp;optype=<?php echo $value['operation'];?>"><?php echo $value['optype'];?></a><?php } else { ?><?php echo $value['title'];?><?php } ?></td>
<td><?php echo $value['credit'];?></td>
<td><?php if($value['operation']) { ?><?php echo $value['opinfo'];?><?php } else { ?><?php echo $value['text'];?><?php } ?></td>
<td><?php echo $value['dateline'];?></td>
</tr>
<?php } } else { ?>
<tr><td colspan="4"><p class="emp">目前沒有積分交易記錄</p></td></tr>
<?php } ?>
</table>

<?php } elseif($_GET['op'] == 'buy') { if(($_G['setting']['ec_ratio'] && ($_G['setting']['ec_account'] || $_G['setting']['ec_tenpay_opentrans_chnid'] || $_G['setting']['ec_tenpay_bargainor'])) || $_G['setting']['card']['open']) { ?>
<form id="addfundsform" name="addfundsform" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=credit&amp;op=buy" onsubmit="ajaxpost(this.id, 'return_addfundsform');">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="addfundssubmit" value="true" />
<input type="hidden" name="handlekey" value="buycredit" />
<table cellspacing="0" cellpadding="0" class="tfm mtn">
<tr  style="display:none">
<th>參加活動方式</th>
<td colspan="2">
<?php if($_G['setting']['ec_ratio'] && ($_G['setting']['ec_tenpay_bargainor'] || $_G['setting']['ec_tenpay_opentrans_chnid'])) { ?>
<div class="mbm pbn bbda cl">
<div id="div#tenpayBankList"></div><span id="#bank_type_value"></span>
<link rel="stylesheet" type="text/css" href="http://union.tenpay.com/bankList/css_col3.css" />
<script type="text/javascript">
$('div#tenpayBankList').html = function(){$('div#tenpayBankList').innerHTML = htmlString.replace(/<span.+?\/span>/g, ''); };
$("#bank_type_value").val = function(){<?php if($_G['setting']['card']['open']) { ?>$('cardbox').style.display='none';if($('card_box_sec')){$('card_box_sec').style.display='none';}$('paybox').style.display='';<?php } ?>};
appendscript('http://union.tenpay.com/bankList/bank.js', '');
</script>
</div>
<?php } ?>
<div class="long-logo mbw">
<ul>
<?php if($_G['setting']['ec_ratio'] && $_G['setting']['ec_account']) { ?>
<li class="z">
<input name="bank_type" type="radio" value="alipay" class="vm" id="apitype_alipay" <?php echo $ecchecked;?> onclick="checkValue(this)" /><label class="vm" style="margin-right:18px;width:135px;height:32px;background:#FFF url(<?php echo STATICURL;?>image/common/alipay_logo.gif) no-repeat;border:1px solid #DDD;display:inline-block;" onclick="<?php if($_G['setting']['card']['open']) { ?>$('cardbox').style.display='none';if($('card_box_sec')){$('card_box_sec').style.display='none';}$('paybox').style.display='';<?php } ?>" for="apitype_alipay"></label>
</li>
<?php } if($_G['setting']['card']['open']) { ?>
<li>
<input name="bank_type" type="radio" value="card" id="apitype_card" class="vm" checked /><label class="vm" style="padding-left:10px;width:125px;height:32px;line-height:32px;background:#FFF;border:1px solid #DDD;display:inline-block;" onclick="activatecardbox();"><span class="xs2">活動序號輸入</span></label>
</li>
<?php } ?>
</ul>
</div>
</td>
</tr>
<?php if($_G['setting']['card']['open']) { ?>
<tr id="cardbox">
<th style="padding-right: 20px;width:70px">活動序號</th>
<td colspan="2" style="padding-right:20px">
<input type="text" class="px" id="cardid" name="cardid" />
</td>
</tr>


</table><?php
$sectpl = <<<EOF
<table id="card_box_sec" cellspacing="0" cellpadding="0" class="tfm mtn"><tr><th style="padding-right: 20px;width:70px" ><sec></th><td colspan="2"><span id="sec<hash>" onclick="showMenu({'ctrlid':this.id,'win':'{$_GET['handlekey']}'})"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div></td></tr></table>
EOF;
?><?php $sechash = !isset($sechash) ? 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'] : $sechash.random(3);
$sectpl = str_replace("'", "\'", $sectpl);?><?php if($secqaacheck) { ?>
<span id="secqaa_q<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updatesecqaa('q<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } if($seccodecheck) { ?>
<span id="seccode_c<?php echo $sechash;?>"></span>		
<script type="text/javascript" reload="1">updateseccode('c<?php echo $sechash;?>', '<?php echo $sectpl;?>', '<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>');</script>
<?php } ?><table cellspacing="0" cellpadding="0" class="tfm mtn" style="width: 100%;">

<?php } ?>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<div  style="position: relative;padding-top: 30px; text-align:center;">
<button type="submit" name="addfundssubmit_btn" style="width: 100px;height: 50px;background-image: url(https://www.aihx888.com/source/plugin/jingcai_7ree/template/image/009a.png)" id="addfundssubmit_btn" value="true"><em>充值</em></button>
</div>
</td>
</tr>

</table>
</form>
<span style="display: none" id="return_addfundsform"></span>
<script type="text/javascript">
function addcalcredit() {
var addfundamount = $('addfundamount').value.replace(/^0/, '');
var addfundamount = parseInt(addfundamount);
$('desamount').innerHTML = !isNaN(addfundamount) ? Math.ceil(((addfundamount / <?php echo $_G['setting']['ec_ratio'];?>) * 100)) / 100 : 0;
}
<?php if($_G['setting']['card']['open']) { ?>
function activatecardbox() {
$('apitype_card').checked=true;
$('cardbox').style.display='';
if($('card_box_sec')){
$('card_box_sec').style.display='';
}
}
<?php } ?>
</script>
<?php } } elseif($_GET['op'] == 'transfer') { if($_G['setting']['transferstatus'] && $_G['group']['allowtransfer']) { ?>
<form id="transferform" name="transferform" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=credit&amp;op=transfer" onsubmit="ajaxpost(this.id, 'return_transfercredit');">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="transfersubmit" value="true" />
<input type="hidden" name="handlekey" value="transfercredit" />
<table cellspacing="0" cellpadding="0" class="tfm mtn">
<tr>
<th>轉賬</th>
<td class="pns">
<input type="text" name="transferamount" id="transferamount" class="px" size="5" style="width: auto;" value="0" />
&nbsp;<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['9']]['title'];?>&nbsp;
給&nbsp;
<input type="text" name="to" id="to" class="px" size="15" style="width: auto;" />
</td>
<td width="300" class="d">
轉賬後最低餘額 <?php echo $_G['setting']['transfermincredits'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['9']]['unit'];?><br />
<?php if(intval($taxpercent) > 0) { ?>積分交易稅 <?php echo $taxpercent;?><?php } ?>
</td>
</tr>
<tr>
<th><span class="rq">*</span>登錄密碼</th>
<td><input type="password" name="password" class="px" value="" /></td>
</tr>
<tr>
<th>轉賬留言</th>
<td><input type="text" name="transfermessage" class="px" size="40" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<button type="submit" name="transfersubmit_btn" id="transfersubmit_btn" class="pn" value="true"><em>轉賬</em></button>
<span style="display: none" id="return_transfercredit"></span>
</td>
</tr>
</table>
</form>
<?php } } elseif($_GET['op'] == 'exchange') { if($_G['setting']['exchangestatus'] && ($_G['setting']['extcredits'] || $_CACHE['creditsettings'])) { ?>
<form id="exchangeform" name="exchangeform" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=credit&amp;op=exchange&amp;handlekey=credit" onsubmit="showWindow('credit', 'exchangeform', 'post');">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="operation" value="exchange" />
<input type="hidden" name="exchangesubmit" value="true" />
<input type="hidden" name="outi" value="" />
<table cellspacing="0" cellpadding="0" class="tfm mtn">
<tr>
<th>兌換</th>
<td class="pns">
<input type="text" id="exchangeamount" name="exchangeamount" class="px" size="5" style="width: auto;" value="0" onkeyup="exchangecalcredit()" />
<select name="tocredits" id="tocredits" class="ps" onChange="exchangecalcredit()"><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $id => $ecredits) { if($ecredits['allowexchangein'] && $ecredits['ratio']) { ?>
<option value="<?php echo $id;?>" unit="<?php echo $ecredits['unit'];?>" title="<?php echo $ecredits['title'];?>" ratio="<?php echo $ecredits['ratio'];?>"><?php echo $ecredits['title'];?></option>
<?php } } $i=0;?><?php if(is_array($_CACHE['creditsettings'])) foreach($_CACHE['creditsettings'] as $id => $data) { $i++;?><?php if($data['title']) { ?>
<option value="<?php echo $id;?>" outi="<?php echo $i;?>"><?php echo $data['title'];?></option>
<?php } } ?>
</select>
&nbsp;所需&nbsp;
<input type="text" id="exchangedesamount" class="px" size="5" style="width: auto;" value="0" disabled="disabled" />
<select name="fromcredits" id="fromcredits_0" class="ps" style="display: none" onChange="exchangecalcredit();"><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $id => $credit) { if($credit['allowexchangeout'] && $credit['ratio']) { ?>
<option value="<?php echo $id;?>" unit="<?php echo $credit['unit'];?>" title="<?php echo $credit['title'];?>" ratio="<?php echo $credit['ratio'];?>"><?php echo $credit['title'];?></option>
<?php } } ?>
</select><?php $i=0;?><?php if(is_array($_CACHE['creditsettings'])) foreach($_CACHE['creditsettings'] as $id => $data) { $i++;?><select name="fromcredits_<?php echo $i;?>" id="fromcredits_<?php echo $i;?>" class="ps" style="display: none" onChange="exchangecalcredit()"><?php if(is_array($data['creditsrc'])) foreach($data['creditsrc'] as $id => $ratio) { ?><option value="<?php echo $id;?>" unit="<?php echo $_G['setting']['extcredits'][$id]['unit'];?>" title="<?php echo $_G['setting']['extcredits'][$id]['title'];?>" ratiosrc="<?php echo $data['ratiosrc'][$id];?>" ratiodesc="<?php echo $data['ratiodesc'][$id];?>"><?php echo $_G['setting']['extcredits'][$id]['title'];?></option>
<?php } ?>
</select>
<?php } ?>
<script type="text/javascript">
var tocredits = $('tocredits');
var fromcredits = $('fromcredits_0');
if(fromcredits.length > 1 && tocredits.value == fromcredits.value) {
fromcredits.selectedIndex = tocredits.selectedIndex + 1;
}
</script>
</td>
<td width="300" class="d">
<?php if($_G['setting']['exchangemincredits']) { ?>
兌換後最低餘額 <?php echo $_G['setting']['exchangemincredits'];?><br />
<?php } ?>
<span id="taxpercent">
<?php if(intval($taxpercent) > 0) { ?>
積分交易稅 <?php echo $taxpercent;?>
<?php } ?>
</span>
</td>
</tr>
<tr>
<th><span class="rq">*</span>登錄密碼</th>
<td colspan="2"><input type="password" name="password" class="px" value="" size="20" /></td>
</tr>
<tr>
<th>&nbsp;</th>
<td colspan="2">
<button type="submit" name="exchangesubmit_btn" id="exchangesubmit_btn" class="pn" value="true" tabindex="2"><em>兌換</em></button>
</td>
</tr>
</table>
</form>
<script type="text/javascript">
function exchangecalcredit() {
with($('exchangeform')) {
tocredit = tocredits[tocredits.selectedIndex];
if(!tocredit) {
return;
}<?php $i=0;?><?php if(is_array($_CACHE['creditsettings'])) foreach($_CACHE['creditsettings'] as $id => $data) { $i++;?>$('fromcredits_<?php echo $i;?>').style.display = 'none';
<?php } ?>
if(tocredit.getAttribute('outi')) {
outi.value = tocredit.getAttribute('outi');
fromcredit = $('fromcredits_' + tocredit.getAttribute('outi'));
$('taxpercent').style.display = $('fromcredits_0').style.display = 'none';
fromcredit.style.display = '';
fromcredit = fromcredit[fromcredit.selectedIndex];
$('exchangeamount').value = $('exchangeamount').value.toInt();
if($('exchangeamount').value != 0) {
$('exchangedesamount').value = Math.floor( fromcredit.getAttribute('ratiosrc') / fromcredit.getAttribute('ratiodesc') * $('exchangeamount').value);
} else {
$('exchangedesamount').value = '';
}
} else {
outi.value = 0;
$('taxpercent').style.display = $('fromcredits_0').style.display = '';
fromcredit = fromcredits[fromcredits.selectedIndex];
$('exchangeamount').value = $('exchangeamount').value.toInt();
if(fromcredit.getAttribute('title') != tocredit.getAttribute('title') && $('exchangeamount').value != 0) {
if(tocredit.getAttribute('ratio') < fromcredit.getAttribute('ratio')) {
$('exchangedesamount').value = Math.ceil( tocredit.getAttribute('ratio') / fromcredit.getAttribute('ratio') * $('exchangeamount').value * (1 + <?php echo $_G['setting']['creditstax'];?>));
} else {
$('exchangedesamount').value = Math.floor( tocredit.getAttribute('ratio') / fromcredit.getAttribute('ratio') * $('exchangeamount').value * (1 + <?php echo $_G['setting']['creditstax'];?>));
}
} else {
$('exchangedesamount').value = '';
}
}
}
}
String.prototype.toInt = function() {
var s = parseInt(this);
return isNaN(s) ? 0 : s;
}
exchangecalcredit();
</script>
<?php } } else { $_TPL['cycletype'] = array(
'0' => '一次性',
'1' => '每天',
'2' => '整點',
'3' => '間隔分鐘',
'4' => '不限週期'
);?><div class="tbmu bw0">
<p>進行以下事件動作，會得到積分獎勵。不過，在一個週期內，您最多得到的獎勵次數有限制 </p>
</div>
<table cellspacing="0" cellpadding="0" class="dt valt">
<tr>
<th class="xw1">動作名稱</th>
<th class="xw1">週期範圍</th>
<th class="xw1">週期內最多獎勵次數</th><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $value) { ?><th class="xw1"><?php echo $value['title'];?></th>
<?php } ?>
</tr><?php $i = 0;?><?php if(is_array($list)) foreach($list as $key => $value) { $i++;?><tr<?php if($i % 2 == 0) { ?> class="alt"<?php } ?>>
<td><?php echo $value['rulename'];?></td>
<td><?php echo $_TPL['cycletype'][$value['cycletype']];?></td>
<td><?php if($value['rewardnum']) { ?><?php echo $value['rewardnum'];?><?php } else { ?>不限次數<?php } ?></td><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $credit) { $creditkey = 'extcredits'.$key;?><td><?php if($value[$creditkey] > 0) { ?>+<?php echo $value[$creditkey];?><?php } elseif($value[$creditkey] < 0) { ?><?php echo $value[$creditkey];?><?php } else { ?>0<?php } ?></td>
<?php } ?>
</tr>
<?php } ?>
</table>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_credit_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_credit_bottom'];?>
</div>
</div>
</div>
</div>
