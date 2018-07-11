<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./source/plugin/jingcai_7ree/template/jingcai_newedit_7ree.htm', './template/default/common/editor.htm', 1530582773, 'jingcai_7ree', './data/template/2_jingcai_7ree_jingcai_newedit_7ree.tpl.php', './source/plugin/jingcai_7ree/template', 'jingcai_newedit_7ree')
|| checktplrefresh('./source/plugin/jingcai_7ree/template/jingcai_newedit_7ree.htm', './template/default/common/editor_menu.htm', 1530582773, 'jingcai_7ree', './data/template/2_jingcai_7ree_jingcai_newedit_7ree.tpl.php', './source/plugin/jingcai_7ree/template', 'jingcai_newedit_7ree')
;?>
<style>
#<?php echo $editorid;?>_bold, #<?php echo $editorid1;?>_bold,#<?php echo $editorid2;?>_bold{
background-position:0 0;
}
#<?php echo $editorid;?>_italic, #<?php echo $editorid1;?>_italic, #<?php echo $editorid2;?>_italic{
background-position: -20px 0;
}
#<?php echo $editorid;?>_underline{
background-position: -40px 0;
}
#<?php echo $editorid;?>_forecolor{
background-position: -60px 0;
}
#<?php echo $editorid;?>_url{
background-position: -40px -20px;
}
#<?php echo $editorid;?>_unlink{
background-position: -60px -20px;
}
#<?php echo $editorid;?>_inserthorizontalrule{
background-position: -20px -60px;
}
#<?php echo $editorid;?>_tbl{
background-position: -160px -20px;
}
#<?php echo $editorid;?>_removeformat{
background-position: -60px -40px;
}
#<?php echo $editorid;?>_justifyleft{
background-position: -80px -20px;
}
#<?php echo $editorid;?>_justifycenter{
background-position: -240px -40px;
}
#<?php echo $editorid;?>_justifyright{
background-position: -260px -40px;
}
#<?php echo $editorid;?>_autotypeset{
background-position: -220px -40px;
}
#<?php echo $editorid;?>_insertorderedlist{
background-position: -100px -20px;
}
#<?php echo $editorid;?>_insertunorderedlist{
background-position: 0 -60px;
}
#<?php echo $editorid;?>_sml{
background-position: -3px -80px;
}
#<?php echo $editorid;?>_image{
background-position: -43px -80px;
}
#<?php echo $editorid;?>_code{
background-position: -120px -20px;
}
#<?php echo $editorid;?>_quote{
background-position: -140px -20px;
}
#<?php echo $editorid;?>_{
background-position: ;
}
#<?php echo $editorid;?>_{
background-position: ;
}			
</style>


        <form method="post" action="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=3" name="jingcai_add_form_7ree" onsubmit="return submitcheck_7ree(this);">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        <input type="hidden" name="main_id_7ree" value="<?php echo $race_7ree['main_id_7ree'];?>">
        <tr class="colplural" >
        <td colspan="2"><h3><?php if($race_7ree['main_id_7ree']) { ?>編輯<?php } else { ?>新增<?php } ?>賽事信息</h3></td>
         <tr>
        <td width="50%">賽事名稱: <input type="text" class="px" id="racename_7ree" name="racename_7ree" value="<?php echo $race_7ree['racename_7ree'];?>" style="width:320px;"> <font color="red">*</font><span id="getracemsg_7ree"><a href="javascript:;" title="讀取歷史賽事簡介信息" onclick="ajaxgetinfo_7ree('race')">[讀取]</a></span></td>
        <td width="50%">最低支持: <input type="text" class="px" name="reward_7ree" value="<?php echo $race_7ree['reward_7ree'];?>" style="width:320px;"><font color="red">*</font>(<?php echo $exttitle_7ree;?>)</td>
        </tr>
         <tr>
        <td>比賽地點: <input type="text" class="px" name="add_7ree" value="<?php echo $race_7ree['add_7ree'];?>" style="width:320px;"></td>
        <td>比賽時間: <input type="text" class="px" name="time_7ree"  onclick="showcalendar(event, this, true)" onfocus="showcalendar(event, this, true);if(this.value=='0000-00-00')this.value=''" value="<?php echo $race_7ree['time_7ree'];?>" readonly style="width:320px;"/> </td>
        </tr>
        <tr>
        <td><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>名稱: <input type="text" class="px" id="aname_7ree" name="aname_7ree" value="<?php echo $race_7ree['aname_7ree'];?>" style="width:320px;"> <font color="red">*</font><span id="ateammsg_7ree"><a href="javascript:;" title="讀取該球隊的歷史信息" onclick="ajaxgetinfo_7ree('ateam')">[讀取]</a></span></td>
        <td><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>名稱: <input type="text" class="px" id="bname_7ree" name="bname_7ree" value="<?php echo $race_7ree['bname_7ree'];?>" style="width:320px;"> <font color="red">*</font><span id="bteammsg_7ree"><a href="javascript:;" title="讀取該球隊的歷史信息" onclick="ajaxgetinfo_7ree('bteam')">[讀取]</a></span></td>
        </tr>
        <tr>
        <td><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>隊標: <input type="text" class="px" id="alogo_7ree" name="alogo_7ree" value="<?php echo $race_7ree['alogo_7ree'];?>" style="width:320px;"><p style="margin-left:60px;">請填寫隊標logo的url地址(最佳尺寸: <?php echo $width_7ree;?>*<?php echo $height_7ree;?>px)</p></td>
        <td><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>隊標: <input type="text" class="px" id="blogo_7ree" name="blogo_7ree" value="<?php echo $race_7ree['blogo_7ree'];?>" style="width:320px;"><p style="margin-left:60px;">請填寫隊標logo的url地址(最佳尺寸: <?php echo $width_7ree;?>*<?php echo $height_7ree;?>px)</p></td>
        </tr>
        <tr>
        <td><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>簡介: <textarea id="amessage_7ree" name="amessage_7ree" class="pt" style="width:320px;height:80px"><?php echo $race_7ree['amessage_7ree'];?></textarea></td>
        <td><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>簡介: <textarea id="bmessage_7ree" name="bmessage_7ree" class="pt" style="width:320px;height:80px"><?php echo $race_7ree['bmessage_7ree'];?></textarea></td>
        </tr>
        <tr>
  
        <tr>
        <td colspan="2">
<?php if($_GET['sp_7ree'] == "add") { ?>              
        賽事分類: 
        <select name="fenlei1_7ree" id="fenlei1_7ree" onchange="showfenlei2_7ree(this.id)">
        	<option value="<?php echo $value_7ree['0'];?>">一級分類</option>
        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        	<option value="<?php echo $value_7ree['0'];?>"><?php echo $value_7ree['0'];?></option>
         <?php } ?>       
        </select>
        <span class="pipe">|</span>
         <span style="margin-left:20px;">二級分類:</span> 
            <span id="yijitips_7ree">先選一級分類</span> 
           <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <select id="fenlei_select_7ree_<?php echo $value_7ree['0'];?>" name="fenlei2_7ree_<?php echo $value_7ree['0'];?>" style="margin-left:10px;display:none;" onchange="$('fenlei2_7ree').value=this.value;">
        <option value="">請選擇</option>
        <?php if(is_array($value_7ree)) foreach($value_7ree as $key_7ree2 => $value_7ree2) { ?>        <?php if($key_7ree2 >0) { ?><option value="<?php echo $value_7ree2;?>"><?php echo $value_7ree2;?></option><?php } ?>
        <?php } ?>
        </select>
        <?php } ?>
        <input type='hidden' id="fenlei2_7ree" name="fenlei2_7ree" value="">

<?php } elseif($_GET['sp_7ree'] == "edit") { ?> 

        賽事分類: 

        <input type='text' id="fenlei1_7ree" name="fenlei1_7ree" value="<?php if($race_7ree['fenlei1_7ree']) { ?><?php echo $race_7ree['fenlei1_7ree'];?><?php } else { ?>未選擇分類一<?php } ?>" style="text-align:center;border:none;width:50px;">
    <input type='text' id="fenlei2_7ree" name="fenlei2_7ree" value="<?php if($race_7ree['fenlei2_7ree']) { ?><?php echo $race_7ree['fenlei2_7ree'];?><?php } else { ?>未選擇分類二<?php } ?>" style="text-align:center;border:none;width:50px;">
        <span style="margin-left:5px;">重新選擇分類:</span>
        <select name="fenlei1_7ree_select" id="fenlei1_7ree_select" onchange="$('fenlei1_7ree').value=this.value;showfenlei2_7ree(this.id);">
        	<option value="<?php echo $value_7ree['0'];?>">一級分類</option>
        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        	<option value="<?php echo $value_7ree['0'];?>"><?php echo $value_7ree['0'];?></option>
         <?php } ?>       
        </select>
        <span class="pipe">|</span>
         <span style="margin-left:5px;">二級分類:</span> 
            <span id="yijitips_7ree">先選一級分類</span> 
           <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <select id="fenlei_select_7ree_<?php echo $value_7ree['0'];?>" name="fenlei2_7ree_<?php echo $value_7ree['0'];?>" style="margin-left:5px;display:none;" onchange="$('fenlei2_7ree').value=this.value;">
        <option value="">請選擇</option>
        <?php if(is_array($value_7ree)) foreach($value_7ree as $key_7ree2 => $value_7ree2) { ?>        <?php if($key_7ree2 >0) { ?><option value="<?php echo $value_7ree2;?>"><?php echo $value_7ree2;?></option><?php } ?>
        <?php } ?>
        </select>
        <?php } } ?> 

        </td>


        </tr>
           
      
        <td colspan="2">
        賠率設置: <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>賠率: <input type="text" class="px" name="aodds_7ree" value="<?php echo $race_7ree['aodds_7ree'];?>" style="width:50px"> 倍<span class="pipe">|</span>
        <?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>賠率:<input type="text" class="px" name="bodds_7ree" value="<?php echo $race_7ree['bodds_7ree'];?>" style="width:50px"> 倍<span class="pipe">|</span>
        平局賠率: <input type="text" class="px" name="codds_7ree" value="<?php echo $race_7ree['codds_7ree'];?>" style="width:50px"> 倍
        <font color="red">*</font>(請填寫正整數或小數，平局賠率不填寫則表示不啟用《平局》的競猜項目)
        </td>
        </tr>
        <tr>
        <td colspan="2">
        是否開啟動態賠率:         
        <select name="odd_dynamic_7ree" id="odd_dynamic_7ree">
        	<option value="0"  <?php if($race_7ree['odd_dynamic_7ree']==0) { ?>selected<?php } ?>>關閉</option>
        	<option value="1"  <?php if($race_7ree['odd_dynamic_7ree']==1) { ?>selected<?php } ?>>開啟</option>
        </select>
        <span class="pipe">|</span>動態賠率會根據主隊客隊（如果有平局的競猜選項也包含平局）的支持情況動態調整，用戶獲得的獎勵按照賽事的最終賠率計算。
        </td>
        </tr> 
        <tr>
        <td>
        動態賠率計算係數 (r): <input type="text" class="px" name="odd_ratio_7ree" value="<?php echo $race_7ree['odd_ratio_7ree'];?>" style="width:80px"> (請填寫正整數或小數)<br>
        動態賠率最終結果上限: <input type="text" class="px" name="max_odd_7ree" value="<?php echo $race_7ree['max_odd_7ree'];?>" style="width:80px"> (請填寫正整數或小數)<br>
        動態賠率最終結果下限: <input type="text" class="px" name="min_odd_7ree" value="<?php echo $race_7ree['min_odd_7ree'];?>" style="width:80px"> (請填寫正整數或小數)
        </td>
        <td>
        主隊動態賠率計算公式（A表示主隊總支持金額）: (A+B+C)*r/A
        <br>客隊動態賠率計算公式（B表示客隊總支持金額）: (A+B+C)*r/B
        <br>平局動態賠率計算公式（C表示平局總支持金額）: (A+B+C)*r/C
        </td>
        </tr>
        <tr>
        <td>
        讓球\讓分方: 
         <select name="rangqiufang_7ree" id="rangqiufang_7ree">
        	<option value="0" <?php if(!$race_7ree['rangqiufang_7ree']) { ?>selected<?php } ?>>關閉讓球\讓分玩法</option>
        	<option value="1" <?php if($race_7ree['rangqiufang_7ree']==1) { ?>selected<?php } ?>><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?></option>
        	<option value="2" <?php if($race_7ree['rangqiufang_7ree']==2) { ?>selected<?php } ?>><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></option>
        </select>
        </td>
        <td>
        讓球\讓分形式: 
         <select name="rangqiuway_7ree" id="rangqiuway_7ree">
        <?php if(is_array($rangqiu_7ree)) foreach($rangqiu_7ree as $rangqiu_value) { ?>        	<option value="<?php echo $rangqiu_value;?>"  <?php if($race_7ree['rangqiuway_7ree']==$rangqiu_value) { ?>selected<?php } ?>><?php echo $rangqiu_value;?></option>
        	<?php } ?>
        </select>
        </td>
        </tr> 
        <tr>
        	<td>猜大小（球/分）: <input type="text" class="px" name="daxiao_7ree" value="<?php echo $race_7ree['daxiao_7ree'];?>" style="width:80px">不填寫則不啟用賽事猜大小玩法</td>
        	<td>
        	猜大賠率: <input type="text" class="px" name="daodds_7ree" value="<?php echo $race_7ree['daodds_7ree'];?>" style="width:50px">倍<span class="pipe">|</span>
        	猜小賠率: <input type="text" class="px" name="xiaoodds_7ree" value="<?php echo $race_7ree['xiaoodds_7ree'];?>" style="width:50px">倍
        	</td>
        </tr>
        <tr>
        <td colspan="2">
        賽事簡介
        </td>
        </tr>
        <tr>
        <td colspan="2">
<div class="edt" id="<?php echo $editorid;?>_body">
<div id="<?php echo $editorid;?>_controls" class="bar">

<div class="y">

<div class="z">

<label id="<?php echo $editorid;?>_switcher" class="bar_swch ptn"><input id="<?php echo $editorid;?>_switchercheck" type="checkbox" class="pc" name="checkbox" value="0" <?php if(!$editor['editormode']) { ?>checked="checked"<?php } ?> onclick="switchEditor(this.checked?0:1)" />純文本</label>
</div>
</div>
<div id="<?php echo $editorid;?>_button" class="btn cl">
<div class="b2r nbl nbr" id="<?php echo $editorid;?>_adv_s2">
<a id="<?php echo $editorid;?>_fontname" class="dp" title="設置字體"><span id="<?php echo $editorid;?>_font">字體</span></a>
<a id="<?php echo $editorid;?>_fontsize" class="dp" title="設置文字大小"><span id="<?php echo $editorid;?>_size">大小</span></a>
<br id="<?php echo $editorid;?>_adv_1" />
<a id="<?php echo $editorid;?>_bold" title="文字加粗">B</a>
<a id="<?php echo $editorid;?>_italic" title="文字斜體">I</a>
<a id="<?php echo $editorid;?>_underline" title="文字加下劃線">U</a>
<a id="<?php echo $editorid;?>_forecolor" title="設置文字顏色">Color</a>
<a id="<?php echo $editorid;?>_url" title="添加鏈接">Url</a>
<span id="<?php echo $editorid;?>_adv_8">
<a id="<?php echo $editorid;?>_unlink" title="移除鏈接">Unlink</a>
<a id="<?php echo $editorid;?>_inserthorizontalrule" title="分隔線">Hr</a>
</span>
</div>
<div class="b2r nbl" id="<?php echo $editorid;?>_adv_2">
<p id="<?php echo $editorid;?>_adv_3">
<a id="<?php echo $editorid;?>_tbl" title="添加表格">Table</a>
</p>
<p>
<a id="<?php echo $editorid;?>_removeformat" title="清除文本格式">Removeformat</a>
</p>
</div>
<div class="b2r">
<p>
<a id="<?php echo $editorid;?>_justifyleft" title="居左">Left</a>
<a id="<?php echo $editorid;?>_justifycenter" title="居中">Center</a>
<a id="<?php echo $editorid;?>_justifyright" title="居右">Right</a>
</p>
<p id="<?php echo $editorid;?>_adv_4">
<a id="<?php echo $editorid;?>_autotypeset" title="自動排版">Autotypeset</a>
<a id="<?php echo $editorid;?>_insertorderedlist" title="排序的列表">Orderedlist</a>
<a id="<?php echo $editorid;?>_insertunorderedlist" title="未排序列表">Unorderedlist</a>
</p>
</div>
<div class="b1r" id="<?php echo $editorid;?>_adv_s1">
<a id="<?php echo $editorid;?>_sml" title="添加表情">表情</a>
<div id="<?php echo $editorid;?>_imagen" style="display:none">!</div>
<a id="<?php echo $editorid;?>_image" title="添加圖片">圖片</a>
</div>
<div class="b2r" id="<?php echo $editorid;?>_adv_6">
<p>
<a id="<?php echo $editorid;?>_code" title="添加代碼文字">代碼</a>
</p>
<p>
<a id="<?php echo $editorid;?>_quote" title="添加引用文字">引用</a>
</p>
</div>
</div>
</div>

<div class="area">
<textarea name="<?php echo $editor['textarea'];?>" id="<?php echo $editorid;?>_textarea" class="pt" tabindex="1" rows="15"><?php echo $race_7ree['racemessage_7ree'];?></textarea>
</div><link rel="stylesheet" type="text/css" href='<?php echo $_G['setting']['csspath'];?><?php echo STYLEID;?>_editor.css?<?php echo VERHASH;?>' />
<script src="<?php echo $_G['setting']['jspath'];?>editor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>bbcode.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var editorid = '<?php echo $editorid;?>';
var textobj = $(editorid + '_textarea');
var wysiwyg = (BROWSER.ie || BROWSER.firefox || (BROWSER.opera >= 9)) && parseInt('<?php echo $editor['editormode'];?>') == 1 ? 1 : 0;
var allowswitcheditor = parseInt('<?php echo $editor['allowswitcheditor'];?>');
var allowhtml = parseInt('<?php echo $editor['allowhtml'];?>');
var allowsmilies = parseInt('<?php echo $editor['allowsmilies'];?>');
var allowbbcode = parseInt('<?php echo $editor['allowbbcode'];?>');
var allowimgcode = parseInt('<?php echo $editor['allowimgcode'];?>');
var simplodemode = parseInt('<?php if($editor['simplemode'] > 0) { ?>1<?php } else { ?>0<?php } ?>');
var fontoptions = new Array("細明體", "新細明體", "黑體", "微軟雅黑", "Arial", "Verdana", "mingliu", "Helvetica", "Trebuchet MS", "Tahoma", "Impact", "Times New Roman", "仿宋,仿宋_GB2312", "楷體,標楷體");
var smcols = <?php echo $_G['setting']['smcols'];?>;
var custombbcodes = new Array();
<?php if($_G['cache']['bbcodes_display'][$_G['groupid']]) { if(is_array($_G['cache']['bbcodes_display'][$_G['groupid']])) foreach($_G['cache']['bbcodes_display'][$_G['groupid']] as $tag => $bbcode) { ?>custombbcodes["<?php echo $tag;?>"] = {'prompt' : '<?php echo $bbcode['prompt'];?>'};
<?php } } ?>
</script>

<div id="<?php echo $editorid;?>_bbar" class="bbar">
<em id="<?php echo $editorid;?>_tip"></em>
<span id="<?php echo $editorid;?>_svdsecond"></span>
<a href="javascript:;" onclick="discuzcode('svd');return false;" id="<?php echo $editorid;?>_svd">保存數據</a> |
<a href="javascript:;" onclick="discuzcode('rst');return false;" id="<?php echo $editorid;?>_rst">恢複數據</a> &nbsp;&nbsp;
<?php if($editor['allowchecklength']) { ?>
<a href="javascript:;" onclick="discuzcode('chck');return false;" id="<?php echo $editorid;?>_chck">字數檢查</a> |
<?php } if($editor['allowtopicreset']) { ?>
<a href="javascript:;" onclick="discuzcode('tpr');return false;" id="<?php echo $editorid;?>_tpr">清除內容</a> &nbsp;&nbsp;
<?php } if($editor['allowresize']) { ?>
<span id="<?php echo $editorid;?>_resize"><a href="javascript:;" onclick="editorsize('+');return false;">加大編輯框</a> | <a href="javascript:;" onclick="editorsize('-');return false;">縮小編輯框</a><img src="<?php echo STATICURL;?>image/editor/resize.gif" onmousedown="editorresize(event)" /></span>
<?php } ?>
</div></div>

<div id="<?php echo $editorid;?>_menus" class="editorrow" style="overflow: hidden; margin-top: -5px; height: 0; border: none; background: transparent;"><div id="<?php echo $editorid;?>_editortoolbar" class="editortoolbar"><?php $fontoptions = array("細明體", "新細明體", "黑體", "微軟雅黑", "Arial", "Verdana", "mingliu", "Helvetica", "Trebuchet MS", "Tahoma", "Impact", "Times New Roman", "仿宋,仿宋_GB2312", "楷體,標楷體")?><div class="p_pop fnm" id="<?php echo $editorid;?>_fontname_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($fontoptions)) foreach($fontoptions as $fontname) { ?><li onclick="discuzcode('fontname', '<?php echo $fontname;?>')" style="font-family: <?php echo $fontname;?>" unselectable="on"><a href="javascript:;" title="<?php echo $fontname;?>"><?php echo $fontname;?></a></li>
<?php } ?>
</ul>
</div><?php $sizeoptions = array(1, 2, 3, 4, 5, 6, 7)?><div class="p_pop fszm" id="<?php echo $editorid;?>_fontsize_menu" style="display: none">
<ul unselectable="on"><?php if(is_array($sizeoptions)) foreach($sizeoptions as $size) { ?><li onclick="discuzcode('fontsize', <?php echo $size;?>)" unselectable="on"><a href="javascript:;" title="<?php echo $size;?>"><font size="<?php echo $size;?>" unselectable="on"><?php echo $size;?></font></a></li>
<?php } ?>
</ul>
</div>

</div>

<script type="text/javascript">smilies_show('smiliesdiv', <?php echo $_G['setting']['smcols'];?>, editorid + '_');showHrBox(editorid+'_inserthorizontalrule');showHrBox(editorid+'_postbg', 'postbg');</script>
</div>

<div class="p_pof uploadfile" id="<?php echo $editorid;?>_image_menu" style="display: none" unselectable="on">
<div class="p_opt popupfix" unselectable="on" id="<?php echo $editorid;?>_www">
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
<th width="74%">請輸入圖片地址</th>
<th width="13%">寬(可選)</th>
<th width="13%">高(可選)</th>
</tr>
<tr>
<td><input type="text" id="<?php echo $editorid;?>_image_param_1" onchange="loadimgsize(this.value)" style="width: 95%;" value="" class="px" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_2" size="1" value="" class="px p_fre" autocomplete="off" /></td>
<td><input id="<?php echo $editorid;?>_image_param_3" size="1" value="" class="px p_fre" autocomplete="off" /></td>
</tr>
<tr>
<td colspan="3" class="pns mtn">
<button type="button" class="pn pnc" id="<?php echo $editorid;?>_image_submit"><strong>提交</strong></button>
<button type="button" class="pn" onclick="hideMenu();"><em>取消</em></button>
</td>
</tr>
</table>
</div>
</div>

<input type="hidden" name="wysiwyg" id="<?php echo $editorid;?>_mode" value="<?php echo $editormode;?>" />
        </td>
        </tr>        
        
        
        
        
        <?php if($_GET['sp_7ree'] == "edit") { ?>
         
        <tr>
        <td>比賽結果: 
        <input type="radio" name="win_7ree" value="" <?php if(!$race_7ree['win_7ree']) { ?>checked<?php } ?> >未揭曉<span class="pipe">|</span> 
        <input type="radio" name="win_7ree" value="a" <?php if($race_7ree['win_7ree']=="a") { ?>checked<?php } ?> ><?php echo $race_7ree['aname_7ree'];?>獲勝<span class="pipe">|</span>
        <input type="radio" name="win_7ree" value="b" <?php if($race_7ree['win_7ree']=="b") { ?>checked<?php } ?> ><?php echo $race_7ree['bname_7ree'];?>獲勝<span class="pipe">|</span>
        <input type="radio" name="win_7ree" value="c" <?php if($race_7ree['win_7ree']=="c") { ?>checked<?php } ?> ><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?><span class="pipe">|</span>
        <input type="radio" name="win_7ree" value="d" <?php if($race_7ree['win_7ree']=="d") { ?>checked<?php } ?> >流盤
        <?php if($race_7ree['rangqiufang_7ree']) { ?>
        	<span class="pipe">|</span>
        	當前賽事的讓球為:
        	<?php if($race_7ree['rangqiufang_7ree']==1) { ?><?php echo $race_7ree['aname_7ree'];?>
        	<?php } elseif($race_7ree['rangqiufang_7ree']==2) { ?><?php echo $race_7ree['bname_7ree'];?>
        	<?php } ?>
        	讓<strong><?php echo $race_7ree['rangqiuway_7ree'];?></strong>	
        <?php } ?>        
        </td>
        <td>比賽結果由《比賽比分》和《讓球數》雙重因素確定，請計算好再輸入！
        </td>
        </tr>        
        <tr>
        <td>比分: 
        <?php echo $race_7ree['aname_7ree'];?>得分: <input type="text" class="px" name="ashot_7ree" value="<?php echo $race_7ree['ashot_7ree'];?>" style="width:80px"><span class="pipe">|</span>
        <?php echo $race_7ree['bname_7ree'];?>得分: <input type="text" class="px" name="bshot_7ree" value="<?php echo $race_7ree['bshot_7ree'];?>" style="width:80px">
        </td>
        <td>猜大小結果: 
        <input type="radio" name="daxiaowin_7ree" value="" <?php if(!$race_7ree['daxiaowin_7ree']) { ?>checked<?php } ?> >未揭曉 <span class="pipe">|</span>
        <input type="radio" name="daxiaowin_7ree" value="a" <?php if($race_7ree['daxiaowin_7ree']=="a") { ?>checked<?php } ?> >大 <span class="pipe">|</span>
        <input type="radio" name="daxiaowin_7ree" value="b" <?php if($race_7ree['daxiaowin_7ree']=="b") { ?>checked<?php } ?> >小<span class="pipe">|</span>
        <input type="radio" name="daxiaowin_7ree" value="c" <?php if($race_7ree['daxiaowin_7ree']=="c") { ?>checked<?php } ?> ><?php if($jingcai_7ree_var['pingju_7ree']) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>
        </td>
        </tr>
        <?php } ?>
        <tr class="colplural" >
        <td colspan="2"><input type="submit" name="add_submit_7ree" value="確認提交賽事信息" class="pn" style="padding:5px;height:30px;"></td>
        </tr>
        </form>
        
<script type="text/javascript">
if(wysiwyg) {
newEditor(1, bbcode2html(textobj.value));
} else {
newEditor(0, textobj.value);
}


</script>