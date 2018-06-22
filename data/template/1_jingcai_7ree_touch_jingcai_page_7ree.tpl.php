<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
        <tr>
        
        <td align="middle" valign="top" width="40%">

        <p>
        <?php if($race_7ree['alogo_7ree']) { ?>
        <img src="<?php echo $race_7ree['alogo_7ree'];?>" border="0" width="90px" height="90px" onerror="this.src='./source/plugin/jingcai_7ree/template/image/A_7ree.gif'" >
        <?php } else { ?>
         <img src="./source/plugin/jingcai_7ree/template/image/A_7ree.gif" border="0" width="90px" height="90px">
        <?php } ?>
        </p>

        <p <?php if($race_7ree['amessage_7ree']) { ?>class="tbmu"<?php } ?> >
        <font size="3px"><strong><?php echo $race_7ree['aname_7ree'];?></strong></font><br>
        <?php if($anum_7ree['num_7ree']) { ?><?php echo $anum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持<?php if($anum_7ree['odds_7ree']) { ?><span class="pipe">|</span><?php echo $anum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </p>
        <p>
        <?php if($race_7ree['odd_dynamic_7ree']) { ?>
        動態
        <?php } else { ?>
        靜態
        <?php } ?>
        賠率: <strong><?php echo $race_7ree['aodds_7ree'];?>倍</strong>
        </p>
        
        <?php if($race_7ree['amessage_7ree']) { ?>
        <p style="padding:10px;"><?php echo $race_7ree['amessage_7ree'];?></p>
        <?php } ?> 

        </td>
        
        <td align="middle" valign="top" width="20%" >

        <p <?php if($race_7ree['codds_7ree']) { ?>class="tbmu"<?php } ?> style="padding-top:30px;">
        <img src="./source/plugin/jingcai_7ree/template/image/vs_big_7ree.gif">
        </p> 
        
        <?php if($race_7ree['codds_7ree']) { ?>
        <p style="padding-top:5px;">
        <font size="3px"><strong><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong></font><br>
        <?php if($cnum_7ree['num_7ree']) { ?><?php echo $cnum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持<?php if($cnum_7ree['odds_7ree']) { ?><span class="pipe">|</span><?php echo $cnum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </p>

        <?php } ?>
        
        </div>
        </td>
        
        
        
        <td align="middle" valign="top" width="40%">
        <p>
        <?php if($race_7ree['blogo_7ree']) { ?>
        <img src="<?php echo $race_7ree['blogo_7ree'];?>" border="0" width="90px" height="90px"  onerror="this.src='./source/plugin/jingcai_7ree/template/image/B_7ree.gif'" >
        <?php } else { ?>
         <img src="./source/plugin/jingcai_7ree/template/image/B_7ree.gif" border="0" width="90px" height="90px">
        <?php } ?>
        </p>
        <p <?php if($race_7ree['bmessage_7ree']) { ?>class="tbmu"<?php } ?> >
        <font size="3px"><strong><?php echo $race_7ree['bname_7ree'];?></strong></font><br>
        <?php if($bnum_7ree['num_7ree']) { ?><?php echo $bnum_7ree['num_7ree'];?><?php } else { ?>暫無<?php } ?>人支持<?php if($bnum_7ree['odds_7ree']) { ?><span class="pipe">|</span><?php echo $bnum_7ree['odds_7ree'];?><?php echo $exttitle_7ree;?><?php } ?>
        </p>
        
        
        <?php if($race_7ree['odd_dynamic_7ree']) { ?>
        	動態
        <?php } else { ?>
        	靜態
        <?php } ?>
        賠率: <strong><?php echo $race_7ree['bodds_7ree'];?>倍</strong>
        
        
        
        <?php if($race_7ree['bmessage_7ree']) { ?>
        <p style="padding:10px;"><?php echo $race_7ree['bmessage_7ree'];?></p>
        <?php } ?> 
        </td></tr>


        <tr>
        <td colspan="5" align="middle" class="colplural">
        <h3 style="padding:5px;font-size:16px;color:#f33355">
        		<?php if($race_7ree['win_7ree']) { ?>
        				<?php if($race_7ree['win_7ree'] == "a") { ?>
        				<?php echo $race_7ree['aname_7ree'];?>獲勝!
        				<?php } elseif($race_7ree['win_7ree'] == "b") { ?>
        				<?php echo $race_7ree['bname_7ree'];?>獲勝!
        				<?php } elseif($race_7ree['win_7ree'] == "c") { ?>
        				比賽結果:<?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>!
        				<?php } elseif($race_7ree['win_7ree'] == "d") { ?>
        				比賽結果:流盤!
        				<?php } ?>
        		<?php } else { ?>
        		比賽結果未揭曉
        		<?php } ?></h3>
        <?php if($race_7ree['ashot_7ree'] || $race_7ree['bshot_7ree']) { ?>
        <h3 style="padding:5px;font-size:16px;color:#f33355"><?php echo $race_7ree['ashot_7ree'];?>:<?php echo $race_7ree['bshot_7ree'];?></h3>
<?php } if($race_7ree['rangqiufang_7ree']) { ?>
        <p>
        <?php if($race_7ree['fenlei2_7ree']==$zuqiu_7ree) { ?>
        	當前賽事的讓球為
        <?php } else { ?>        
        	當前賽事的讓分為
        <?php } ?>
        	:<?php if($race_7ree['rangqiufang_7ree']==1) { ?><?php echo $race_7ree['aname_7ree'];?>
        	<?php } elseif($race_7ree['rangqiufang_7ree']==2) { ?><?php echo $race_7ree['bname_7ree'];?>
        	<?php } ?>
        	讓<strong><?php echo $race_7ree['rangqiuway_7ree'];?></strong>
        </p>
        <?php } ?>
        </td>
        </tr>
        
        <?php if($mywin_7ree) { ?>
        <tr><td colspan="5" align="middle">
        <p style="padding:5px;">
        <?php if($mywin_7ree['mywin_7ree'] == "a") { ?>我已競猜<strong><?php echo $race_7ree['aname_7ree'];?>獲勝</strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "b") { ?>我已競猜<strong><?php echo $race_7ree['bname_7ree'];?>獲勝</strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "c") { ?>我已競猜<strong><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></strong>
        <?php } elseif($mywin_7ree['mywin_7ree'] == "d") { ?>已返還<?php echo $mywin_7ree['myodds_7ree'];?><?php echo $exttitle_7ree;?>
        <?php } ?></strong>
        <?php if($mywin_7ree['mywin_7ree'] <> "d") { ?><span class="pipe">|</span>並支持了<strong><?php echo $mywin_7ree['myodds_7ree'];?><?php echo $exttitle_7ree;?></strong><?php } ?>
        </p>
        </td></tr>
        <?php } ?>
        
        <tr>
        <td colspan="5" align="middle">
        <!--����ʱ��ص����Ϣ-->
        
        <p >
        比賽時間:<strong><?php echo $race_7ree['time_7ree'];?></strong>
        </p>
        <?php if($race_7ree['add_7ree']) { ?>
        <p>
        比賽地點: <strong><?php echo $race_7ree['add_7ree'];?></strong>
        </p>
        <?php } ?>
        <?php if($race_7ree['fenlei1_7ree'] || $race_7ree['fenlei2_7ree']) { ?>
        <p>
        <?php echo $race_7ree['fenlei1_7ree'];?> <strong><?php echo $race_7ree['fenlei2_7ree'];?></strong>
        </p>
        <?php } ?>
         </td>
         </tr>
        


        <tr>
        <td colspan="5" align="middle">
        <!--����ע������-->
<p>
最低支持: <?php echo $race_7ree['reward_7ree'];?><?php echo $exttitle_7ree;?> <span class="pipe">|</span> 
最高支持: <?php echo $cost_7ree;?><?php echo $exttitle_7ree;?> <span class="pipe">|</span> 
我共有<?php echo $myext_7ree;?><?php echo $exttitle_7ree;?>
</p>
<?php if($jingcai_7ree_var['beishu_7ree']) { ?>
<p>支持積分倍數: 必須是<?php echo $jingcai_7ree_var['beishu_7ree'];?>的倍數</p>
<?php } if($jingcai_7ree_var['shouxufei_7ree']) { ?>
<p>手續費: <?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%</p>
<?php } if($race_7ree['open_7ree']) { ?>
<div id="zhichicard_7ree" class="zhichicard_7ree" style="display:none;">
        <?php if((!$mywin_7ree || (!$mywin2_7ree && $race_7ree['daxiao_7ree']) || $jingcai_7ree_var['duplicate_7ree'])) { ?>
        <table>
         <tr>
         	<td>
         		競猜: <strong id="wanfa_name_7ree">請從上方選擇</strong>
         		<input type="hidden" id="url_7ree" value="">
         		<input type="hidden" id="wanfa_7ree" value="">
         	</td>
         	<td>
         	<select name='myodds_7ree' id="myodds_7ree">
         <?php if(is_array($zhichilist_7ree)) foreach($zhichilist_7ree as $zhichilist_value) { ?>         	<option value='<?php echo $zhichilist_value;?>'>支持<?php echo $zhichilist_value;?><?php echo $exttitle_7ree;?></option>
         	<?php } ?>
         	</select>
         	<!--
         		我共有: }<?php echo $exttitle_7ree;?>
         		-->
        	</td>
         	<td>
         		<button class='pn' onclick="goto_7ree('您確認要競猜'+document.getElementById('wanfa_name_7ree').innerText+'嗎？',document.getElementById('url_7ree').value+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value)">確認競猜</button>
         	</td>
        </tr>
        </table>
        <?php } ?>
        </div>
        <?php } ?>
        
         </td>
         </tr>
         
        <tr>
        <td colspan="5" align="middle">
        <?php if(!$mywin_7ree || $jingcai_7ree_var['duplicate_7ree']) { ?>
        <table class="opengstable_7ree">
        <tr>
<td align="middle" valign="top">
<span name="ateam" onclick="newjc_7ree(1,'a')">
<h5>支持<?php echo $race_7ree['aname_7ree'];?></h5>
<i><?php echo $race_7ree['aodds_7ree'];?>倍</i>
</span>
</td>
<?php if($race_7ree['codds_7ree']) { ?>
<td align="middle" valign="top">
<span name="pingju"  onclick="newjc_7ree(1,'c')">
<h5>支持<?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></h5>
<i><?php echo $race_7ree['codds_7ree'];?>倍
</i>
</span>
</td>
<?php } ?>
<td align="middle" valign="top">
<span name="bteam" onclick="newjc_7ree(1,'b')">
<h5>支持<?php echo $race_7ree['bname_7ree'];?></h5>
<i><?php echo $race_7ree['bodds_7ree'];?>倍</i>
</span>
        </tr>
</table>
        <?php } ?>
        <?php if((!$mywin2_7ree || $jingcai_7ree_var['duplicate_7ree']) && $race_7ree['daxiao_7ree']) { ?>
        <table class="opengstable_7ree">
        <tr>
        	<td align="middle" valign="top"><span name="da" onclick="newjc_7ree(2,'a')"><h5>大<?php echo $race_7ree['daxiao_7ree'];?></h5><i><?php echo $race_7ree['daodds_7ree'];?>倍</i></span></td>
        	<td align="middle" valign="middel" ><strong style="width:110px;height:30px;overflow:hidden;">猜大小</strong></td>
        	<td align="middle" valign="top"><span name="xiao"  onclick="newjc_7ree(2,'b')"><h5>小<?php echo $race_7ree['daxiao_7ree'];?></h5><i><?php echo $race_7ree['xiaoodds_7ree'];?>倍</i></span></td>
        </tr>
</table>
<?php } ?>
         </td>
         </tr>         
         
         
<?php if($opengslist_7ree) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_opengs_7ree'); ?></td>
</tr>
<?php } if($race_7ree['racemessage_7ree']) { ?>
<tr>
<td colspan="6">
<p style="padding:10px;"><?php echo $race_7ree['racemessage_7ree'];?></p>
</td>
</tr>
<?php } if($newjingcailist_7ree) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_newlist_7ree'); ?></td>
</tr>
<?php } if($race_7ree['tid_7ree']) { ?>
 			<tr>
<td colspan="6"><?php include template('jingcai_7ree:jingcai_chat_7ree'); ?></td>
</tr>
<?php } ?>  

