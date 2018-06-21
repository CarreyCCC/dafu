<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('jingcai_card_7ree');?><?php include template('common/header'); ?><link rel="stylesheet" type="text/css" href="source/plugin/jingcai_7ree/template/image/css_7ree.css?<?php echo VERHASH;?>">
<div class="fwinmask">
<h3 style="cursor: move;" class="flb">
<em><?php echo $navtitle;?>-<?php if($optype_7ree==1) { } elseif($optype_7ree==2) { } ?></em>
<span style="float:right;margin-right:10px;">
<a href="javascript:void(0);" class="flbc" onclick="hideWindow('jccard_7ree_<?php echo $mid_7ree;?>')" title="Close">Close</a>
</span>

</h3>


<div class="jccard_7ree">
<table >
<tr>
<td colspan="2" class="cardtitle_7ree"><?php echo $race_7ree['racename_7ree'];?></td>
</tr>
<tr>
<td><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>: </td>
<td><strong><?php echo $race_7ree['aname_7ree'];?></strong>
<?php if($race_7ree['rangqiufang_7ree']==1) { ?><span class="rangqiuspan_7ree">讓 <?php echo $race_7ree['rangqiuway_7ree'];?></span><?php } ?>
</td>
</tr>
<tr>
<td><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>: </td>
<td><strong><?php echo $race_7ree['bname_7ree'];?></strong>
<?php if($race_7ree['rangqiufang_7ree']==2) { ?><span class="rangqiuspan_7ree">讓 <?php echo $race_7ree['rangqiuway_7ree'];?></span><?php } ?>
</td>
</tr>


<tr>
<td>比賽時間: </td>
<td><?php echo $race_7ree['time_7ree'];?></td>
</tr>			
<tr>
<td>我要支持: </td>
<td><input type="text" class="px myodds_7ree" name="myodds_7ree" value="<?php echo $race_7ree['reward_7ree'];?>"><span style="color:red;"><?php echo $exttitle_7ree;?></span></td>
</tr>
<tr>
<td colspan="2" >
最低支持: <?php echo $race_7ree['reward_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span>
最高支持: <?php echo $cost_7ree;?><?php echo $exttitle_7ree;?>
</td>
</tr>
<tr>
<td colspan="2" >
支持積分倍數: 
<?php if($jingcai_7ree_var['beishu_7ree']) { ?>必須是<?php echo $jingcai_7ree_var['beishu_7ree'];?>的倍數<?php } else { ?>不限制<?php } if($jingcai_7ree_var['shouxufei_7ree']) { ?><span class="pipe">|</span>手續費: <?php echo $jingcai_7ree_var['shouxufei_7ree'];?>%<?php } ?></td>
</td>
<tr>
<td colspan="2" >
我共有: <?php echo $myext_7ree;?><?php echo $exttitle_7ree;?>
</td>
</tr>
</tr>
<?php if($optype_7ree==1) { ?>
<tr>
<td colspan="2" id="btntd_7ree" class="btntd_7ree">
<button onclick="card_op_7ree('plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=a&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value);"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?><span class="remarkspan_7ree"><?php echo $race_7ree['aodds_7ree'];?>倍</span></button>
<button onclick="card_op_7ree('plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=b&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value);"><?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?><span class="remarkspan_7ree"><?php echo $race_7ree['bodds_7ree'];?>倍</span></button>
<?php if($race_7ree['codds_7ree']) { ?>
<button onclick="card_op_7ree('plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&win_7ree=c&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value);"><?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?><span class="remarkspan_7ree"><?php echo $race_7ree['codds_7ree'];?>倍</span></button>
<?php } ?>
</td>
</tr>
<?php } elseif($optype_7ree==2) { ?>
<tr><td>猜大小（球/分）:</td><td><?php echo $race_7ree['daxiao_7ree'];?></td></tr>
<tr><td colspan="2" id="btntd_7ree" class="btntd_7ree">
<button onclick="card_op_7ree('plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&daxiao_7ree=1&win_7ree=a&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value);">大<span class="rangqiuspan_7ree"><?php echo $race_7ree['daodds_7ree'];?>倍</span></button>
<button onclick="card_op_7ree('plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=4&daxiao_7ree=1&win_7ree=b&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree='+document.getElementsByName(&quot;myodds_7ree&quot;)[0].value);">小<span class="rangqiuspan_7ree"><?php echo $race_7ree['xiaoodds_7ree'];?>倍</span></button>
</td>
</tr>
<?php } ?>
</table>
</div>

</div>
<script type="text/javascript">
function card_op_7ree(url_7ree){
document.getElementById('btntd_7ree').innerHTML="<span>正在提交，請稍候……</span>";
window.location.href=url_7ree;
}
</script><?php include template('common/footer'); ?>