<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="6">
<p class="y" style="padding-right:10px;">
<span <?php if($_GET['cycle_7ree']==2) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=2">本年排行</a>
</span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==1) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>">本季排行</a>
</span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==3) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=3">本月排行</a></span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==4) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=4">本周排行</a></span>
</p>

<h3><font color="blue"><?php if($_GET['how_7ree']==1) { ?>總盈利排行榜單<?php } elseif($_GET['how_7ree']==2) { ?>淨盈利排行榜單<?php } elseif($_GET['how_7ree']==3) { ?>猜贏場次排行榜單<?php } elseif($_GET['how_7ree']==4) { ?>命中率排行榜單<?php } ?></font></h3></th>
</tr>
<tr>
<td align="middle">競猜排行</td>
<td align="middle">會員</td>
<td align="middle"><?php if($_GET['how_7ree']==2) { ?>參與<?php } else { ?>猜中<?php } ?>場次
<br>
<?php if($_GET['how_7ree']==1) { ?>
競猜獎勵總盈利
<?php } elseif($_GET['how_7ree']==2) { ?>
競猜獎勵淨盈利
<?php } elseif($_GET['how_7ree']==3) { ?>
競猜獎勵總盈利
<?php } elseif($_GET['how_7ree']==4) { ?>
競猜命中率
<?php } ?>
</td>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
<td align="middle">關注</td>
<td align="middle">操作</td>
<?php } ?>
</tr>

<?php if($toplist_7ree) { $key_7ree = 1?><?php if(is_array($toplist_7ree)) foreach($toplist_7ree as $key => $topvalue_7ree) { ?><tr>
<td align="middle"><font color="red" size="4"><b><?php echo $key_7ree;?></b></font></td>
<td align="middle"><a href="home.php?mod=space&amp;uid=<?php echo $topvalue_7ree['uid_7ree'];?>" target="_blank"><?php echo $topvalue_7ree['username_7ree'];?></td>
<td align="middle">
<b><?php echo $topvalue_7ree['log_num_7ree'];?></b>場次
<br><?php if($_GET['how_7ree']==4) { ?><b><?php echo $topvalue_7ree['hitrate_7ree'];?></b>%<?php } else { ?><b><?php echo $topvalue_7ree['sum_reward_7ree'];?></b><?php echo $exttitle_7ree;?><?php } ?>
</td>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
<td align="middle">
<?php if($topvalue_7ree['guanzhu_7ree']) { ?>
已關注
<?php } else { if($topvalue_7ree['uid_7ree']<>$_G['uid']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=8&amp;uid_7ree=<?php echo $topvalue_7ree['uid_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>" class="opbtn_7ree" title="點擊可關注該會員的競猜動態">關注</a>
<?php } else { ?>
-
<?php } } ?>
</td>
<td align="middle">
<a href="<?php echo $jilu_url_7ree;?><?php echo $topvalue_7ree['uid_7ree'];?>" class="opbtn_7ree" >查看</a>
</td>
<?php } ?>
</tr><?php $key_7ree++;?><?php } } else { ?>
<tr>
<td colspan="6"><div class="notice">暫時無人上榜。</div></td>
</tr>
<?php } ?>
</table>