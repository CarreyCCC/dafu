<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<?php if($_GET['page']<2) { ?>
<tr class="colplural" >
<th colspan="9">
<h3>
<i class="y" style="font-weight:normal;">
<?php if($opengsdb_7ree) { ?>
<span><a href="plugin.php?id=x7ree_opengs:x7ree_opengs&amp;code_7ree=2" target='_blank'>我的開放競猜</a></span>
<span class="pipe">|</span>
<?php } ?>
<span <?php if(!$_GET['type_7ree']) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1">全部賽事</a></span>
<span class="pipe">|</span><?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <span id="fenlei_7ree_<?php echo $key_7ree;?>" onmouseover="showMenu({'ctrlid':this.id})"><a href="javascript:void(0);" <?php if($_GET['fenlei_7ree']==$value_7ree['0']) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree['0'];?></a></span><span class="pipe">|</span>
<?php } ?> 
</i>
數據統計
<?php if($type_7ree) { ?>[<?php echo $type_7ree;?>]<?php } ?>
</h3>

 	        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <div id="fenlei_7ree_<?php echo $key_7ree;?>_menu" class="p_pop" style="display:none">
        <?php if(is_array($value_7ree)) foreach($value_7ree as $key_7ree2 => $value_7ree2) { ?>        <?php if($key_7ree2 >0) { ?><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;type_7ree=&amp;type_7ree=<?php echo urlencode($value_7ree2);?>&amp;fenlei_7ree=<?php echo urlencode($value_7ree[0]);?>"<?php if($_GET['type_7ree']==$value_7ree2) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree2;?></a><?php } ?>
        <?php } ?>
        </div>
        <?php } ?>


</th>
</tr>
<tr>
<td colspan="9">
<table style="text-align:center;">
<tr>
<td width="16%">
<a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" class="avt"><?php echo(avatar($_G['uid'],'small'));?></a>
<p><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank"><?php echo $_G['username'];?></a></p>
<p>我共有: <?php echo $myext_7ree;?><?php echo $exttitle_7ree;?></p>
</td>
<?php if($myinfo_7ree['y_changci_7ree']) { ?>
<td width="28%">
<p>年場次: <?php echo $myinfo_7ree['y_changci_7ree'];?>場</p>
<p>年猜對: <?php echo $myinfo_7ree['y_caidui_7ree'];?>場</p>
<p>年盈利: <?php echo $myinfo_7ree['y_yingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>年淨利: <?php echo $myinfo_7ree['y_jingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>年命中: <?php if($myinfo_7ree['y_mingzhong_7ree']) { ?><?php echo $myinfo_7ree['y_mingzhong_7ree'];?>%<?php } else { ?>-<?php } ?></p>
</td>
<td width="28%">
<p>季場次: <?php echo $myinfo_7ree['a_changci_7ree'];?>場</p>
<p>季猜對: <?php echo $myinfo_7ree['a_caidui_7ree'];?>場</p>
<p>季盈利: <?php echo $myinfo_7ree['a_yingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>季淨利: <?php echo $myinfo_7ree['a_jingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>季命中: <?php if($myinfo_7ree['a_mingzhong_7ree']) { ?><?php echo $myinfo_7ree['a_mingzhong_7ree'];?>%<?php } else { ?>-<?php } ?></p>
</td>
<td width="28%">
<p>月場次: <?php echo $myinfo_7ree['m_changci_7ree'];?>場</p>
<p>月猜對: <?php echo $myinfo_7ree['m_caidui_7ree'];?>場</p>
<p>月盈利: <?php echo $myinfo_7ree['m_yingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>月淨利: <?php echo $myinfo_7ree['m_jingli_7ree'];?><?php echo $exttitle_7ree;?></p>
<p>月命中: <?php if($myinfo_7ree['m_mingzhong_7ree']) { ?><?php echo $myinfo_7ree['m_mingzhong_7ree'];?>%<?php } else { ?>-<?php } ?></p>
</td>
<?php } else { ?>
<td width="84%">
您還未參與競猜活動，參與活動就有可能獲得獎勵哦！
</td>
<?php } ?>
</tr>
</table>
</td>
</tr>
<?php } ?>
        <tr class="colplural" >
        <th style="text-align:center;">賽事名稱</th>
        <th style="text-align:center;"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></th>
        <th style="text-align:center;">競猜時間</th>
        <th style="text-align:center;">支持<?php echo $exttitle_7ree;?><span class="pipe">|</span> 已得獎勵 </th>        
        <th style="text-align:center;">玩法</th>
        <th style="text-align:center;">競猜<span class="pipe">|</span>賠率</th>
        <th style="text-align:center;">比賽結果</th>
        <th style="text-align:center;width:80px;">領獎狀態</th>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
        <th style="text-align:center;width:60px;">操作</th>
        <?php } ?>
        </tr>
        <?php if($loglist_7ree) { ?>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr>
        <td style="text-align:center;background-color:<?php if($loglist_value['titlebg_7ree']) { ?><?php echo $loglist_value['titlebg_7ree'];?><?php } else { ?><?php echo $defaultbg_7ree;?>;<?php } ?>;" align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank" style="color:<?php echo $jingcai_7ree_var['titlecolor_7ree'];?>;" ><?php echo $loglist_value['racename_7ree'];?></a></td>
        <td align="center"><?php echo $loglist_value['aname_7ree'];?> VS <?php echo $loglist_value['bname_7ree'];?></td>
        <td align="center" title="<?php echo $loglist_value['log_time2_7ree'];?>"><?php echo $loglist_value['log_time_7ree'];?></td>
        <td align="center"><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span><?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?> </td>        
        <td align="center"><?php if($loglist_value['type_7ree']) { ?>猜大小<?php } else { ?>猜結果<?php } ?></td>
        <td align="center">
       		<?php if($loglist_value['type_7ree']) { if($loglist_value['mywin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } ?>
     	<?php } else { ?> 
        <?php if($loglist_value['mywin_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="c") { if($jingcai_7ree_var['pingju_7ree'] && $loglist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>
        <?php } elseif($loglist_value['mywin_7ree']=="d") { ?>流盤        
        <?php } ?>
         	<?php } ?>
         	<span class="pipe">|</span><?php echo $loglist_value['teamodds_7ree'];?>倍
</td>
        <td align="center">
            <?php if($loglist_value['type_7ree']) { ?>
            <?php if($loglist_value['daxiaowin_7ree']=="a") { ?><span style="color:<?php if($loglist_value['daxiaowin_7ree']==$loglist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>">大 <?php echo $loglist_value['daxiao_7ree'];?></span>
        	<?php } elseif($loglist_value['daxiaowin_7ree']=="b") { ?><span style="color:<?php if($loglist_value['daxiaowin_7ree']==$loglist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>">小 <?php echo $loglist_value['daxiao_7ree'];?></span>
        	<?php } elseif($loglist_value['daxiaowin_7ree']=="c") { ?><span style="color:blue"><?php if($jingcai_7ree_var['pingju_7ree']) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?> <?php echo $loglist_value['daxiao_7ree'];?></span>
        	<?php } else { ?>未揭曉
        	<?php } ?>
        	<?php } else { ?>
            <?php if($loglist_value['win_7ree']=="a") { ?><span style="color:<?php if($loglist_value['win_7ree']==$loglist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>"><?php echo $loglist_value['aname_7ree'];?></span>
        	<?php } elseif($loglist_value['win_7ree']=="b") { ?><span style="color:<?php if($loglist_value['win_7ree']==$loglist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>"><?php echo $loglist_value['bname_7ree'];?></span>
        	<?php } elseif($loglist_value['win_7ree']=="c") { ?><span style="color:blue"><?php if($jingcai_7ree_var['pingju_7ree'] && $loglist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></span>
        	<?php } elseif($loglist_value['win_7ree']=="d") { ?>流盤
        	<?php } else { ?>未揭曉
        	<?php } ?>
         	<?php } ?>
        	</td>

        <td align="center">
        <?php if($loglist_value['type_7ree']) { ?> 
<?php if($loglist_value['mywin_7ree'] == $loglist_value['daxiaowin_7ree'] && $loglist_value['win_7ree']<>"d") { ?>
 <span class="pn" style="padding:4px 5px 4px 5px;"><?php if(!$loglist_value['log_reward_7ree']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=get&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='red'>立刻領取</font></a><?php } else { ?><font color='green'>已經領取</font><?php } ?></span>
<?php } elseif($loglist_value['win_7ree'] == "d") { if($loglist_value['mywin_7ree'] == "d") { ?>
<font color="gray">已返還<?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?></font>
<?php } else { ?><span class="pn" style="padding:4px 5px 4px 5px;">
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=quit&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='darkorange'>返還<?php echo $exttitle_7ree;?></font></a></span>
<?php } } else { ?>
<span style="padding:4px 12px 4px 12px;color:gray;">
<?php if($loglist_value['win_7ree']) { ?>
未猜對
<?php } else { ?>
未揭曉
<?php } ?>
    </span>
<?php } ?> 
        <?php } else { if($loglist_value['mywin_7ree'] == $loglist_value['win_7ree'] && $loglist_value['win_7ree']<>"d") { ?>
        <span class="pn" style="padding:4px 5px 4px 5px;"><?php if(!$loglist_value['log_reward_7ree']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=get&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='red'>立刻領取</font></a><?php } else { ?><font color='green'>已經領取</font><?php } ?></span>
<?php } elseif($loglist_value['win_7ree'] == "d") { if($loglist_value['mywin_7ree'] == "d") { ?>
<font color="gray">已返還<?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?></font>
<?php } else { ?><span class="pn" style="padding:4px 5px 4px 5px;">
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=1&amp;op_7ree=quit&amp;log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>"><font color='darkorange'>返還<?php echo $exttitle_7ree;?></font></a></span>
<?php } } else { ?>
<span style="padding:4px 12px 4px 12px;color:gray;">
<?php if($loglist_value['win_7ree']) { ?>
未猜對
<?php } else { ?>
未揭曉
<?php } ?>
    </span>
<?php } ?>
        <?php } ?> 
</td>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
<td align="center">
<?php if($loglist_value['time_7ree']<$_G['timestamp']) { ?>
        <?php if($loglist_value['point_7ree']) { ?>
已推薦
<?php } else { ?>
--
<?php } } else { ?>
        <?php if($loglist_value['point_7ree']) { ?>
已推薦
<?php } else { ?>
<a onclick="showDialog('您確認要把這個場次的競猜設定為重點推薦嗎？<br>重點推薦被查看的含稅收益為<?php echo $jingcai_7ree_var['viewcost2_7ree'];?><?php echo $viewexttitle_7ree;?><br>普通推薦被查看的含稅收益為<?php echo $jingcai_7ree_var['viewcost_7ree'];?><?php echo $viewexttitle_7ree;?><br>24小時內您最多設定重點推薦的數量為:<?php echo $jingcai_7ree_var['pointnum_7ree'];?><br>獲得查看收益必須保證您的競猜排名高於:<?php echo $jingcai_7ree_var['viewfreenum_7ree'];?>', 'confirm', '推薦級別操作', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=13&lid_7ree=<?php echo $loglist_value['log_id_7ree'];?>&formhash=<?php echo FORMHASH;?>'; })" href="javascript:;" class="pn" style="padding:3px 5px 3px 5px;" >推薦</a>
<?php } } ?>
</td>
<?php } ?>
        </tr>
        <?php } ?>
        <tr>
        <?php if($viewextname_7ree && $jingcai_7ree_var['qingkongcost_7ree'] && $jingcai_7ree_var['qingkongday_7ree']) { ?>
        <td colspan="9"><span  class="z"><a onclick="showDialog('如果您對自己的競猜表現不滿意，可以確認清空最近<?php echo $jingcai_7ree_var['qingkongday_7ree'];?>天的競猜記錄。<br>本操作不會影響已獲得的積分獎勵，但會影響排行榜成績.<br>本操作需消耗論壇積分：<strong><?php echo $jingcai_7ree_var['qingkongcost_7ree'];?><?php echo $viewexttitle_7ree;?></strong>', 'confirm', '清空操作提示', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=11'; })" href="javascript:;" class="pn" style="padding:3px;" title="!htm_lang_qingkongmsg1_7ree!">清空最近<?php echo $jingcai_7ree_var['qingkongday_7ree'];?>天的競猜記錄</a></span>
        <?php } ?>
        <div class="y"><?php echo $multipage;?></div>
        
        </td>
        </tr>
        <?php } else { ?>
        <tr>
        <td colspan="9">
        <div class="notice">您還未參與競猜活動，參與活動就有可能獲得獎勵哦！</div>
        <div class="notice"><a href="plugin.php?id=jingcai_7ree:jingcai_7ree">現在就去參與競猜活動！</a></div></td>
        </tr> 
        <?php } ?>
</table>