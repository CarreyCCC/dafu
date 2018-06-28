<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

<table width="100%" border="0" cellpadding="5" cellspacing="0"  class="dt mtm">
<tr class="colplural" >
<th colspan="7">
<p class="y" style="padding-right:10px;">
<?php if($_GET['how_7ree']!=5) { ?>
<span <?php if($_GET['cycle_7ree']==2) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=2">本年排行</a>
</span><span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==1) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>">本季排行</a>
</span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==3) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=3">本月排行</a></span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==4) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=4">本周排行</a></span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==5) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=5">上月排行</a></span>
<span class="pipe">|</span>
<span <?php if($_GET['cycle_7ree']==6) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=6">上周排行</a></span>

<span class="pipe">|</span>
<span class="pipe">|</span>
<?php } ?>

<span <?php if(!$_GET['type_7ree']) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=<?php echo $_GET['cycle_7ree'];?>">全部賽事</a></span>
<span class="pipe">|</span><?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <span id="fenlei_7ree_<?php echo $key_7ree;?>" onmouseover="showMenu({'ctrlid':this.id})"><a href="javascript:void(0);" <?php if($_GET['fenlei_7ree']==$value_7ree['0']) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree['0'];?></a></span><span class="pipe">|</span>
<?php } ?> 


</p>


 	        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <div id="fenlei_7ree_<?php echo $key_7ree;?>_menu" class="p_pop" style="display:none">
        <?php if(is_array($value_7ree)) foreach($value_7ree as $key_7ree2 => $value_7ree2) { ?>        <?php if($key_7ree2 >0) { ?><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=6&amp;how_7ree=<?php echo $_GET['how_7ree'];?>&amp;cycle_7ree=<?php echo $_GET['cycle_7ree'];?>&amp;fenlei_7ree=<?php echo urlencode($value_7ree[0]);?>&amp;type_7ree=<?php echo urlencode($value_7ree2);?>"<?php if($_GET['type_7ree']==$value_7ree2) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree2;?></a><?php } ?>
        <?php } ?>
        </div>
        <?php } ?>





<h3>競猜
<font color="blue">
<?php echo $_GET['type_7ree'];?>
<?php if($_GET['how_7ree']==1) { ?>總盈利排行榜單
<?php } elseif($_GET['how_7ree']==2) { ?>淨盈利排行榜單
<?php } elseif($_GET['how_7ree']==3) { ?>猜贏場次排行榜單
<?php } elseif($_GET['how_7ree']==4) { ?>命中率排行榜單
<?php } elseif($_GET['how_7ree']==5) { ?>重點連勝排行榜單
<?php } ?></font>: TOP100
</h3>
</th>
</tr>
<tr><td align="middle">競猜排行</td><td align="middle">會員</td><td align="middle"><?php if($_GET['how_7ree']==2) { ?>參與<?php } else { ?>猜中<?php } ?>場次</td><td align="middle">
<?php if($_GET['how_7ree']==1) { ?>
競猜獎勵總盈利
<?php } elseif($_GET['how_7ree']==2) { ?>
競猜獎勵淨盈利
<?php } elseif($_GET['how_7ree']==3) { } elseif($_GET['how_7ree']==4) { ?>
競猜命中率
<?php } elseif($_GET['how_7ree']==5) { ?>
重點連勝
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
<td align="middle"><b><?php echo $topvalue_7ree['log_num_7ree'];?></b>場次</td>
<td align="middle"><b><?php if($_GET['how_7ree']==4) { ?><?php echo $topvalue_7ree['hitrate_7ree'];?></b>%<?php } elseif($_GET['how_7ree']==5) { ?><?php echo $topvalue_7ree['zdly_7ree'];?>場<?php } else { } ?></td>
<?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
<td align="middle">
<?php if($topvalue_7ree['guanzhu_7ree']) { ?>
已關注
<?php } else { if($topvalue_7ree['uid_7ree']<>$_G['uid']) { ?>
<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=8&amp;uid_7ree=<?php echo $topvalue_7ree['uid_7ree'];?>&amp;formhash=<?php echo FORMHASH;?>" class="pn" style="padding:3px 10px 3px 10px;" title="點擊可關注該會員的競猜動態">關注</a>
<?php } else { ?>
-
<?php } } ?>
</td>
<td align="middle">
<a href="<?php echo $jilu_url_7ree;?><?php echo $topvalue_7ree['uid_7ree'];?>&fenlei2_7ree=<?php echo $topvalue_7ree['type_7ree'];?>" class="pn" style="padding:3px 10px 3px 10px;" target="_blank">查看</a>
</td>
<?php } ?>
</tr><?php $key_7ree++;?><?php } } else { ?>
<tr>
<td colspan="7"><div class="notice">暫時無人上榜。</div></td>
</tr>
<?php } ?>
</table>