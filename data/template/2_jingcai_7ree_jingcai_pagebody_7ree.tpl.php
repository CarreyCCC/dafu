<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
        <?php if((!$mywin_7ree || (!$mywin2_7ree && $race_7ree['daxiao_7ree']) || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['open_7ree']) { ?>
         <tr>
         	<td colspan="5" align="middle">
       			<p style="padding:5px;">
        		<h3 style="font-size:14px;">我要支持: <input type="text" class="px myodds_7ree" name="myodds_7ree" value="<?php echo $race_7ree['reward_7ree'];?>"><span style="color:red;"><?php echo $exttitle_7ree;?></span></h3>
        		最低支持: <?php echo $race_7ree['reward_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span>最高支持: <?php echo $cost_7ree;?><?php echo $exttitle_7ree;?>
        		<span class="pipe">|</span>支持積分倍數: 
<?php if($jingcai_7ree_var['beishu_7ree']) { ?>必須是<?php echo $jingcai_7ree_var['beishu_7ree'];?>的倍數<?php } else { ?>不限制<?php } ?>
        		<?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><span class="pipe">|</span>手續費: <?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%<?php } ?>
        		<span class="pipe">|</span>我共有<?php echo $myext_7ree;?><?php echo $exttitle_7ree;?>
        		</p>
        	</td>
        </tr>
        <?php } ?>
        <?php if((!$mywin2_7ree || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['daxiao_7ree'] && $race_7ree['open_7ree']) { ?>
        <tr>
        	<td align="middle" valign="top"><button name="da" class="jingcaibtn_7ree" onclick="showDialog('猜大賠率:<strong><?php echo $race_7ree['daodds_7ree'];?>倍</strong><br>我要支持<strong>'+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value+'<?php echo $exttitle_7ree;?></strong><?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><br>手續費: <strong><?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</strong><?php } ?>', 'confirm', '您確認要競猜大<?php echo $race_7ree['daxiao_7ree'];?>嗎？', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&daxiao_7ree=1&win_7ree=a&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value; })"><strong>大<?php echo $race_7ree['daxiao_7ree'];?>/<?php echo $race_7ree['daodds_7ree'];?>倍</strong></button></td>
        	<td align="middle" valign="top"><strong>猜大小</strong></td>
        	<td align="middle" valign="top"><button name="xiao" class="jingcaibtn_7ree" onclick="showDialog('猜小賠率:<strong><?php echo $race_7ree['xiaoodds_7ree'];?>倍</strong><br>我要支持<strong>'+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value+'<?php echo $exttitle_7ree;?></strong><?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><br>手續費: <strong><?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</strong><?php } ?>', 'confirm', '您確認要競猜小<?php echo $race_7ree['daxiao_7ree'];?>嗎？', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&daxiao_7ree=1&win_7ree=b&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value; })"><strong>小<?php echo $race_7ree['daxiao_7ree'];?>/<?php echo $race_7ree['xiaoodds_7ree'];?>倍</strong></button></td>
        </tr>
        <?php } ?>
        <tr>
        
        <td align="middle" valign="top" width="40%">
        <?php if((!$mywin_7ree || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['open_7ree']) { ?>
        <p class="tbmu" style="height:35px;line-height:35px;">
        <button name="ateam" class="jingcaibtn_7ree" onclick="showDialog('您確認要競猜<strong><?php echo $race_7ree['aname_7ree'];?></strong>獲勝嗎？<br>我要支持<strong>'+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value+'<?php echo $exttitle_7ree;?></strong><br><?php echo $race_7ree['aname_7ree'];?>賠率: <strong><?php echo $race_7ree['aodds_7ree'];?>倍</strong><?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><br>手續費: <strong><?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</strong><?php } ?>', 'confirm', '支持球隊確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=a&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value; })"><strong>支持<?php echo $race_7ree['aname_7ree'];?></strong></button></p>
        <?php } ?>
        <p>
        <?php if($race_7ree['alogo_7ree']) { ?>
        <img src="<?php echo $race_7ree['alogo_7ree'];?>" border="0" width="<?php echo $width_7ree;?>" height="<?php echo $height_7ree;?>" onerror="this.src='./source/plugin/jingcai_7ree/template/image/A_7ree.gif'" >
        <?php } else { ?>
         <img src="./source/plugin/jingcai_7ree/template/image/A_7ree.gif" border="0" width="<?php echo $width_7ree;?>" height="<?php echo $height_7ree;?>">       
        <?php } ?>                
        </p>

        <p <?php if($race_7ree['amessage_7ree']) { ?>class="tbmu"<?php } ?> >
        <font size="3px"><strong><?php echo $race_7ree['aname_7ree'];?></strong></font><br>
        <?php if($jingcai_7ree_var['shownum_7ree']) { ?>
        <?php if($anum_7ree['num_7ree']) { ?><?php echo $anum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持
        <?php } ?>
        <?php if($jingcai_7ree_var['shownum_7ree'] && $jingcai_7ree_var['showext_7ree'] && $anum_7ree['num_7ree']) { ?><span class="pipe">|</span><?php } ?>
        <?php if($jingcai_7ree_var['showext_7ree']) { if($anum_7ree['odds_7ree']) { ?><?php echo $anum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } } ?>
        </p>
        <?php if($race_7ree['amessage_7ree']) { ?>
        <p style="padding:10px;"><?php echo $race_7ree['amessage_7ree'];?></p>
        <?php } ?> 
        </td>
        
        <td align="middle" valign="top" width="20%" >



        <?php if((!$mywin_7ree || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['open_7ree'] && $race_7ree['codds_7ree']) { ?>
        <p class="tbmu" style="height:35px;line-height:35px;">
        <button name="ateam"  class="jingcaibtn_7ree" onclick="showDialog('您確認要競猜<strong><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong>嗎？<br>我要支持<strong>'+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value+'<?php echo $exttitle_7ree;?></strong><br><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>賠率: <strong><?php echo $race_7ree['codds_7ree'];?>倍</strong><?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><br>手續費: <strong><?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</strong><?php } ?>', 'confirm', '支持球隊確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=c&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value; })"><strong>支持<?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong></button>
        </p>
        <?php } ?>
        <p >
        <strong>猜結果</strong>
        </p>
        
        
       <p <?php if($race_7ree['codds_7ree']) { ?>class="tbmu"<?php } ?> style="padding:20px 0 20px 0;">
        <img src="./source/plugin/jingcai_7ree/template/image/vs_big_7ree.gif">
        </p> 
        
        
       <?php if($race_7ree['fenlei1_7ree'] || $race_7ree['fenlei2_7ree']) { ?> 
        <p class="tbmu">
        <?php echo $race_7ree['fenlei1_7ree'];?><br>
        <?php echo $race_7ree['fenlei2_7ree'];?>
        </p>
        <?php } ?>        
        <p class="tbmu">
        比賽時間<br><strong><?php echo $race_7ree['time_7ree'];?></strong>
        </p>
        <?php if($race_7ree['add_7ree']) { ?>
        <p class="tbmu">
        比賽地點<br><strong><?php echo $race_7ree['add_7ree'];?></strong> 
        </p>
        <?php } ?>

        <?php if($race_7ree['codds_7ree']) { ?>
        <p>
        <font size="3px"><strong><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong></font><br>
        <?php if($jingcai_7ree_var['shownum_7ree']) { ?>
        <?php if($cnum_7ree['num_7ree']) { ?><?php echo $cnum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持
        <?php } ?>
        <?php if($jingcai_7ree_var['shownum_7ree'] && $jingcai_7ree_var['showext_7ree'] && $cnum_7ree['num_7ree']) { ?><span class="pipe">|</span><?php } ?>
        <?php if($jingcai_7ree_var['showext_7ree']) { ?>
        <?php if($cnum_7ree['odds_7ree']) { ?><?php echo $cnum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </p>
        <?php } ?>
        <?php } ?>
        
        </div>
        </td>
        
        
        
        <td align="middle" valign="top" width="40%">
        <?php if((!$mywin_7ree || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['open_7ree']) { ?>
        <p class="tbmu" style="height:35px;line-height:35px;">
        <button name="bteam" class="jingcaibtn_7ree" onclick="showDialog('您確認要競猜<strong><?php echo $race_7ree['bname_7ree'];?></strong>獲勝嗎？<br>我要支持<strong>'+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value+'<?php echo $exttitle_7ree;?></strong><br><?php echo $race_7ree['bname_7ree'];?>賠率: <strong><?php echo $race_7ree['bodds_7ree'];?>倍</strong><?php if($jingcai_7ree_var['shouxufei_7ree']) { ?><br>手續費: <strong><?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</strong><?php } ?>', 'confirm', '支持球隊確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=b&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value;})"><strong>支持<?php echo $race_7ree['bname_7ree'];?></strong></button></p>
        <?php } ?>
        <p>
        <?php if($race_7ree['blogo_7ree']) { ?>        
        <img src="<?php echo $race_7ree['blogo_7ree'];?>" border="0" width="<?php echo $width_7ree;?>" height="<?php echo $height_7ree;?>"  onerror="this.src='./source/plugin/jingcai_7ree/template/image/B_7ree.gif'" >
        <?php } else { ?>
         <img src="./source/plugin/jingcai_7ree/template/image/B_7ree.gif" border="0" width="<?php echo $width_7ree;?>" height="<?php echo $height_7ree;?>">       
        <?php } ?>                
        </p>
        <p <?php if($race_7ree['bmessage_7ree']) { ?>class="tbmu"<?php } ?> >
        <font size="3px"><strong><?php echo $race_7ree['bname_7ree'];?></strong></font><br>
<?php if($jingcai_7ree_var['shownum_7ree']) { if($bnum_7ree['num_7ree']) { ?><?php echo $bnum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持
<?php } if($jingcai_7ree_var['shownum_7ree'] && $jingcai_7ree_var['showext_7ree'] && $bnum_7ree['num_7ree']) { ?><span class="pipe">|</span>
<?php if($bnum_7ree['odds_7ree']) { ?><?php echo $bnum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } } ?>
        </p>
        <?php if($race_7ree['bmessage_7ree']) { ?>
        <p style="padding:10px;"><?php echo $race_7ree['bmessage_7ree'];?></p>
        <?php } ?> 
        </td></tr>