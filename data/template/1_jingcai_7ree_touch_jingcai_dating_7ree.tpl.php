<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
		<?php if(!$_GET['finish_7ree']) { ?>
<tr class="colplural" >
<th colspan="6"><h3>競猜公告</h3></th>
</tr>
<tr>
<td colspan="6">
<p><?php echo $notice_7ree;?></p>
</td>
</tr>
<?php } ?>

        <tr ><th colspan="6">
        <p class="y" style="padding-right:10px;">
        <?php if(is_array($fenlei_array2)) foreach($fenlei_array2 as $key_7ree => $value_7ree) { ?>        <span><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;finish_7ree=<?php echo $_GET['finish_7ree'];?>&amp;fenlei1_7ree=<?php echo urlencode($value_7ree[0]);?>#<?php echo saishi_7ree;?>"  <?php if($_GET['fenlei1_7ree']==$value_7ree['0']) { ?>style="color:#0954A6;"<?php } ?>><?php echo $value_7ree['0'];?></a></span> <span class="pipe">|</span>
        <?php } ?> 
        <span><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;finish_7ree=<?php echo $_GET['finish_7ree'];?>#<?php echo saishi_7ree;?>" <?php if(!$_GET['fenlei1_7ree'] && !$_GET['fenlei2_7ree']) { ?>style="color:#0954A6;"<?php } ?>>全部賽事</a></span>
        </p> 
        <h3 id="saishi_7ree"><?php echo $navtitle;?></h3>
        </th></tr>
        
     
        
        <?php if($racelist_7ree) { ?>
        <?php if(is_array($racelist_7ree)) foreach($racelist_7ree as $racelist_value) { ?>        <tr class="mracelist_7ree">
        <td colspan="3">
        <?php echo $racelist_value['aname_7ree'];?> 
        <span style="color:red;"><?php if($racelist_value['win_7ree']) { ?><?php echo $racelist_value['ashot_7ree'];?>:<?php echo $racelist_value['bshot_7ree'];?><?php } else { ?>VS<?php } ?></span> 
        <?php echo $racelist_value['bname_7ree'];?>
        <?php if($jingcai_7ree_var['gaoshou_onoff_7ree']) { ?>
         <a href="<?php echo $gaoshou_url_7ree;?><?php echo $racelist_value['main_id_7ree'];?>" title="高手競猜"><img src="./source/plugin/jingcai_7ree/template/image/gs_7ree.gif"></a>
         <?php } ?>
        </td>
        </tr>  
        <tr class="mracelist2_7ree">
        <td align="center"><?php echo $racelist_value['racename_7ree'];?></td>
        <td align="center"><?php echo $racelist_value['time_7ree'];?></td>
        <td align="center">
        <a href="<?php echo $xiangqing_url_7ree;?><?php echo $racelist_value['main_id_7ree'];?>">
        <?php if($racelist_value['open_7ree']) { ?>
        <span class='canjia_btn_7ree'>參加競猜</span>
        <?php } else { ?>
        <span  class='chakan_btn_7ree'>查看賽事</span>
        <?php } ?>
        </a>
        </td>
        </tr>
        <?php } ?>
        <?php } else { ?>
        <tr ><td colspan="6"><div class="notice">暫無競猜活動可以參與，請稍後再來關注…</div></td></tr>
        <?php } ?>
        <tr>
        <td colspan="6"><?php echo $multipage;?></td>
        </tr>