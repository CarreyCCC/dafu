<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="dt mtm">
<tr class="colplural" >
    <th colspan="8">
    <div class="y"><?php if($fenlei2_7ree) { ?><?php echo $fenlei2_7ree;?><?php } else { ?>全部賽事<?php } ?><span class="pipe">|</span>季場次:<?php echo $memberrank_7ree['a_changci_7ree'];?> <span class="pipe">|</span> 季命中:<?php echo $memberrank_7ree['a_mingzhong_7ree'];?>% <span class="pipe">|</span> <span style="color:blue;">命中排行:<?php echo $memberrank_7ree['a_mzlrank_7ree'];?></span></div>
    <h3><?php echo $loglist_7ree['0']['username_7ree'];?>的競猜記錄</h3>
    </th>
</tr>
<tr>
<td align="center">賽事名稱</td>
<td align="center"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></td>
<td align="center">競猜時間</td>
<td align="center">支持<?php echo $exttitle_7ree;?><span class="pipe">|</span>獎勵<?php echo $exttitle_7ree;?></td>
<td align="center">玩法</td>
<td align="center">競猜</td>
<td align="center">比賽結果</td>
<td align="center">推薦級別</td>
</tr><?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $newjingcailist_value) { ?><tr>
<td align="center" style="color:#FFFFFF;background-color:<?php if($newjingcailist_value['titlebg_7ree']) { ?><?php echo $newjingcailist_value['titlebg_7ree'];?><?php } else { ?><?php echo $defaultbg_7ree;?>;<?php } ?>;"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $newjingcailist_value['main_id_7ree'];?>" target="_blank" style="color:<?php echo $jingcai_7ree_var['titlecolor_7ree'];?>;"><?php echo $newjingcailist_value['racename_7ree'];?></a></td>
<td align="center"><?php echo $newjingcailist_value['aname_7ree'];?> VS <?php echo $newjingcailist_value['bname_7ree'];?></td>
<td align="center" title="<?php echo $newjingcailist_value['log_time2_7ree'];?>"><?php echo $newjingcailist_value['log_time_7ree'];?></td>
<td align="center"><?php echo $newjingcailist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span>
<?php if($newjingcailist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $newjingcailist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?></td>
<td align="center"><?php if($newjingcailist_value['type_7ree']) { ?>猜大小<?php } else { ?>猜結果<?php } ?></td>
<td align="center">
<?php if($newjingcailist_value['needpay_7ree'] && !$newjingcailist_value['win_7ree'] && !$newjingcailist_value['viewpay_7ree']) { ?>

<a onclick="showDialog('查看會員<b><?php echo $newjingcailist_value['username_7ree'];?></b>的競猜場次需要支付<?php if($newjingcailist_value['point_7ree']) { ?><?php echo $jingcai_7ree_var['viewcost2_7ree'];?><?php } else { ?><?php echo $jingcai_7ree_var['viewcost_7ree'];?><?php } ?><?php echo $viewexttitle_7ree;?><br>推薦級別:<?php if($newjingcailist_value['point_7ree']) { ?><font color=red>重點</font><?php } else { ?>普通<?php } ?>', 'confirm', '付費查看', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=12&uid_7ree=<?php echo $newjingcailist_value['uid_7ree'];?>&lid_7ree=<?php echo $newjingcailist_value['log_id_7ree'];?>&formhash=<?php echo FORMHASH;?>'; })" href="javascript:;" class="pn" style="padding:3px 10px 3px 10px;" >付費查看</a>

<?php } else { if($newjingcailist_value['type_7ree']) { if($newjingcailist_value['mywin_7ree']=="a") { ?>大 <?php echo $newjingcailist_value['daxiao_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?>小 <?php echo $newjingcailist_value['daxiao_7ree'];?>
        <?php } ?>
        <?php } else { if($newjingcailist_value['mywin_7ree']=="a") { ?><?php echo $newjingcailist_value['aname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?><?php echo $newjingcailist_value['bname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="c") { if($jingcai_7ree_var['pingju_7ree'] && $newjingcailist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="d") { ?>流盤
        <?php } ?>
        <?php } ?>
        <?php } ?>
        </td>
        <td align="center">
            <?php if($newjingcailist_value['type_7ree']) { ?>
            <?php if($newjingcailist_value['daxiaowin_7ree']=="a") { ?><span style="color:<?php if($newjingcailist_value['daxiaowin_7ree']==$newjingcailist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>">大 <?php echo $newjingcailist_value['daxiao_7ree'];?></span>
        	<?php } elseif($newjingcailist_value['daxiaowin_7ree']=="b") { ?><span style="color:<?php if($newjingcailist_value['daxiaowin_7ree']==$newjingcailist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>">小 <?php echo $newjingcailist_value['daxiao_7ree'];?></span>
        	<?php } else { ?>未揭曉
        	<?php } ?>
        	<?php } else { ?>
            <?php if($newjingcailist_value['win_7ree']=="a") { ?><span style="color:<?php if($newjingcailist_value['win_7ree']==$newjingcailist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>"><?php echo $newjingcailist_value['aname_7ree'];?></span>
        	<?php } elseif($newjingcailist_value['win_7ree']=="b") { ?><span style="color:<?php if($newjingcailist_value['win_7ree']==$newjingcailist_value['mywin_7ree']) { ?>red<?php } else { ?>green<?php } ?>"><?php echo $newjingcailist_value['bname_7ree'];?></span>
        	<?php } elseif($newjingcailist_value['win_7ree']=="c") { ?><span style="color:blue"><?php if($jingcai_7ree_var['pingju_7ree'] && $newjingcailist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?></span>
        	<?php } elseif($newjingcailist_value['win_7ree']=="d") { ?>流盤
        	<?php } else { ?>未揭曉
        	<?php } ?>
         	<?php } ?>
       	</td>
       	<td align="center">
       	<?php if($newjingcailist_value['point_7ree']) { ?><font color='red'>重點</font><?php } else { ?>普通<?php } ?>
       	</td>
</tr>
<?php } ?>
</table>
<?php echo $multipage;?>