<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>

        <tr ><th colspan="6">
        <p class="y" style="padding-right:10px;">
        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <span id="fenlei_7ree_<?php echo $key_7ree;?>" onmouseover="showMenu({'ctrlid':this.id})"><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;finish_7ree=<?php echo $_GET['finish_7ree'];?>&amp;fenlei1_7ree=<?php echo urlencode($value_7ree[0]);?>#<?php echo saishi_7ree;?>"  <!--<?php if($_GET['fenlei1_7ree']==$value_7ree['0']) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree['0'];?></a></span><span class="pipe">|</span>
        <?php } ?> 
        <span <?php if(!$_GET['fenlei1_7ree'] && !$_GET['fenlei2_7ree']) { ?>style="font-weight:700;"<?php } ?>><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;finish_7ree=<?php echo $_GET['finish_7ree'];?>#<?php echo saishi_7ree;?>">全部賽事</a>
        </p> 
        <h3 id="saishi_7ree"><?php echo $navtitle;?></h3>
        
 	        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <div id="fenlei_7ree_<?php echo $key_7ree;?>_menu" class="p_pop" style="display:none">
        <?php if(is_array($value_7ree)) foreach($value_7ree as $key_7ree2 => $value_7ree2) { ?>        <?php if($key_7ree2 >0) { ?><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;finish_7ree=<?php echo $_GET['finish_7ree'];?>&amp;fenlei1_7ree=<?php echo urlencode($value_7ree[0]);?>&amp;fenlei2_7ree=<?php echo urlencode($value_7ree2);?>#<?php echo saishi_7ree;?>"<?php if($_GET['fenlei1_7ree']==$value_7ree['0'] && $_GET['fenlei2_7ree']==$value_7ree2) { ?>style="font-weight:700;"<?php } ?>><?php echo $value_7ree2;?></a><?php } ?>
        <?php } ?>
        </div>
        <?php } ?>        
        
        
        </th></tr>
        <tr class="colplural">
        <td align="center">賽事名稱</td>
        <td align="center"><?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?> VS <?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?></td>
        <td align="center">比分</td>
        <td align="center" width="150px;">猜結果</td>
        <td align="center" width="150px;">猜大小</td>
        <td align="center">競猜詳情</td>
        </tr>
        <?php if($racelist_7ree) { ?>
        <?php if(is_array($racelist_7ree)) foreach($racelist_7ree as $key_7ree => $racelist_value) { ?>        <tr class="datingcell_7ree">
        <td align="center" class="titlebg_7ree" style="background-color:<?php if($racelist_value['titlebg_7ree']) { ?><?php echo $racelist_value['titlebg_7ree'];?><?php } else { ?><?php echo $defaultbg_7ree;?>;<?php } ?>;">
        <?php echo $racelist_value['racename_7ree'];?>
        </td>
        <td align="left" >
        <div class="topline_7ree" style="padding-left:25px;"><strong><?php echo $racelist_value['aname_7ree'];?></strong>
        <?php if($racelist_value['rangqiufang_7ree']==1) { ?>
        <span class="rangqiuspan_7ree">讓 <?php echo $racelist_value['rangqiuway_7ree'];?></span>
        <?php } ?>
        </div>
        <div class="bottomline_7ree" style="padding-left:25px;"><strong><?php echo $racelist_value['bname_7ree'];?></strong>
        <?php if($racelist_value['rangqiufang_7ree']==2) { ?>
        <span class="rangqiuspan_7ree">讓 <?php echo $racelist_value['rangqiuway_7ree'];?></span>
        <?php } ?>
        </div>
        </td>
        <td align="center">
        <?php if($racelist_value['win_7ree']) { ?>
        <div class="topline_7ree"><span class="bifenspan_7ree"><?php echo $racelist_value['ashot_7ree'];?></span>
        </div>
        <div class="bottomline_7ree"><span class="bifenspan_7ree"><?php echo $racelist_value['bshot_7ree'];?></span>
        </div>
        <?php } else { ?> 
        未揭曉
        <?php } ?> 
        </td>        
        
        <td align="center">
        <div class="topline_7ree">
        	<?php if($jingcai_7ree_var['showodd_7ree']) { ?><span class="remarkspan_7ree z"><?php echo $racelist_value['aodds_7ree'];?>倍</span><?php } ?>
        	<a href="javascript:void(0);" onclick="showWindow('jccard_7ree_<?php echo $racelist_value['main_id_7ree'];?>', 'plugin.php?id=jingcai_7ree:jccard_7ree&optype_7ree=1&mid_7ree=<?php echo $racelist_value['main_id_7ree'];?>','get',0,{'cover':'1'});" class="pn actbtn_7ree y you_7ree">
        	<?php if($jingcai_7ree_var['atitle_7ree']) { ?><?php echo $jingcai_7ree_var['atitle_7ree'];?><?php } else { ?>主隊<?php } ?>
        	</a>          	
        </div>
        <div class="bottomline_7ree">
        	<?php if($jingcai_7ree_var['showodd_7ree']) { ?><span class="remarkspan_7ree z"><?php echo $racelist_value['bodds_7ree'];?>倍</span><?php } ?>
        	<a href="javascript:void(0);" onclick="showWindow('jccard_7ree_<?php echo $racelist_value['main_id_7ree'];?>', 'plugin.php?id=jingcai_7ree:jccard_7ree&optype_7ree=1&mid_7ree=<?php echo $racelist_value['main_id_7ree'];?>','get',0,{'cover':'1'});" class="pn actbtn_7ree y you_7ree">
        	<?php if($jingcai_7ree_var['btitle_7ree']) { ?><?php echo $jingcai_7ree_var['btitle_7ree'];?><?php } else { ?>客隊<?php } ?>
        	</a> 
</div>
        </td>
        <td align="center">
        <?php if($racelist_value['daxiao_7ree']) { ?>
        <div class="topline_7ree">
        	<span class="rangqiuspan_7ree z"><?php echo $racelist_value['daodds_7ree'];?>倍</span>
        	<a href="javascript:void(0);" onclick="showWindow('jccard_7ree_<?php echo $racelist_value['main_id_7ree'];?>', 'plugin.php?id=jingcai_7ree:jccard_7ree&optype_7ree=2&mid_7ree=<?php echo $racelist_value['main_id_7ree'];?>','get',0,{'cover':'1'});" class="pn actbtn_7ree y you_7ree">大<?php echo $racelist_value['daxiao_7ree'];?></a>
        </div>
        <div class="bottomline_7ree">
        	<span class="rangqiuspan_7ree z"><?php echo $racelist_value['xiaoodds_7ree'];?>倍</span>
        	<a href="javascript:void(0);" onclick="showWindow('jccard_7ree_<?php echo $racelist_value['main_id_7ree'];?>', 'plugin.php?id=jingcai_7ree:jccard_7ree&optype_7ree=2&mid_7ree=<?php echo $racelist_value['main_id_7ree'];?>','get',0,{'cover':'1'});" class="pn actbtn_7ree y you_7ree">小<?php echo $racelist_value['daxiao_7ree'];?></a>
<div>
        <?php } else { ?>--
        <?php } ?>
        </td>
        <td align="center" <?php if($racelist_value['myrace_7ree']) { ?>style="background-color:#FDF9DF;" title="我已經參與"<?php } else { ?> title="我還未參與"<?php } ?>>
        <div class="topline_7ree">
        <a href="<?php echo $xiangqing_url_7ree;?><?php echo $racelist_value['main_id_7ree'];?>" >
        <?php if($racelist_value['open_7ree']) { ?>
        <span class="pn canyu_btn_7ree">
        <?php if($jingcai_7ree_var['canyubtn_7ree']) { ?><?php echo $jingcai_7ree_var['canyubtn_7ree'];?><?php } else { ?>參加競猜<?php } ?>
        </span>
        <?php } else { ?>
        	<span style='color:gray;'><?php if($jingcai_7ree_var['chakanbtn_7ree']) { ?><?php echo $jingcai_7ree_var['chakanbtn_7ree'];?><?php } else { ?>查看賽事<?php } ?></span>
        <?php } ?>
        </a>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
        <a href="<?php echo $gaoshou_url_7ree;?><?php echo $racelist_value['main_id_7ree'];?>" title="高手競猜" target="_blank"><img src="./source/plugin/jingcai_7ree/template/image/gs_7ree.gif" align="absmiddle"></a>
        <?php } ?>
        </div>
        <div class="bottomline_7ree"><?php echo $racelist_value['time_7ree'];?></div>
        </td>
        </tr>
        <?php if($key_7ree+1 < COUNT($racelist_7ree)) { ?>
        <tr><td colspan="6" class="brline_7ree"></td></tr>
        <?php } ?>
        <?php } ?>
        <?php } else { ?>
        <tr ><td colspan="6"><div class="notice">暫無競猜活動可以參與，請稍後再來關注…</div></td></tr>
        <?php } ?>
        <?php if($multipage) { ?>
        <tr>
        <td colspan="6"><?php echo $multipage;?></td>
        </tr>
        <?php } ?>