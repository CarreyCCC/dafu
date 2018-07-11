<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="dt mtm">
<tr class="colplural" >
    <th colspan="8">
    <div class="y">季命中:<?php echo $thisrank_7ree['a_mingzhong_7ree'];?>% <span class="pipe">|</span> <span style="color:blue;">命中排行:<?php echo $thisrank_7ree['a_mzlrank_7ree'];?></span></div>
    <h3><?php echo $loglist_7ree['0']['username_7ree'];?>的競猜記錄</h3>	    
    </th>
</tr>
<tr>		    
<td align="center" style="width:40px;">會員</td>
<td align="center">賽事名稱<br>競猜時間</td>		
<td align="center">支持<br><?php echo $exttitle_7ree;?></td>		
<td align="center" style="width:50px;">玩法<br>推薦級別</td>
<td align="center">競猜</td>		
</tr><?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $newjingcailist_value) { ?><tr>
<td align="center"><a href="home.php?mod=space&amp;uid=<?php echo $newjingcailist_value['uid_7ree'];?>" target="_blank"><?php echo $newjingcailist_value['username_7ree'];?></a></td>
<td align="center"><a href="<?php echo $xiangqing_url_7ree;?><?php echo $newjingcailist_value['main_id_7ree'];?>" target="_blank"><?php echo $newjingcailist_value['racename_7ree'];?></a><br><?php echo $newjingcailist_value['log_time_7ree'];?></td>
<td align="center"><?php echo $newjingcailist_value['myodds_7ree'];?></td>		
<td align="center">
<?php if($needpay_7ree && !$newjingcailist_value['win_7ree'] && !$newjingcailist_value['viewpay_7ree']) { ?>

<a  onclick="goto_7ree('查看會員<?php echo $newjingcailist_value['username_7ree'];?>的競猜場次需要支付<?php if($newjingcailist_value['point_7ree']) { ?><?php echo $jingcai_7ree_var['viewcost2_7ree'];?><?php } else { ?><?php echo $jingcai_7ree_var['viewcost_7ree'];?><?php } ?><?php echo $viewexttitle_7ree;?>\n推薦級別:<?php if($newjingcailist_value['point_7ree']) { ?>重點<?php } else { ?>普通<?php } ?>', 'plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=12&uid_7ree=<?php echo $newjingcailist_value['uid_7ree'];?>&lid_7ree=<?php echo $newjingcailist_value['log_id_7ree'];?>&formhash=<?php echo FORMHASH;?>')" href="javascript:;" class="opbtn_7ree">查看</a>

<?php } else { if($newjingcailist_value['type_7ree']) { if($newjingcailist_value['mywin_7ree']=="a") { ?>大 <?php echo $newjingcailist_value['daxiao_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?>小 <?php echo $newjingcailist_value['daxiao_7ree'];?>       
        <?php } ?>
        <?php } else { if($newjingcailist_value['mywin_7ree']=="a") { ?><?php echo $newjingcailist_value['aname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="b") { ?><?php echo $newjingcailist_value['bname_7ree'];?>
        <?php } elseif($newjingcailist_value['mywin_7ree']=="c") { ?>平局
        <?php } elseif($newjingcailist_value['mywin_7ree']=="d") { ?>流盤        
        <?php } ?>
        <?php } ?>
        <br>
        <?php } ?>
        <?php if($newjingcailist_value['point_7ree']) { ?><font color='red'>重點</font><?php } else { ?>普通<?php } ?> 
        </td>
        <td align="center">
            <?php if($newjingcailist_value['type_7ree']) { ?>
            <?php if($newjingcailist_value['daxiaowin_7ree']=="a") { ?>大 <?php echo $newjingcailist_value['daxiao_7ree'];?>
        	<?php } elseif($newjingcailist_value['daxiaowin_7ree']=="b") { ?>小 <?php echo $newjingcailist_value['daxiao_7ree'];?>
        	<?php } else { ?>未揭曉
        	<?php } ?>
        	<?php } else { ?>
            <?php if($newjingcailist_value['win_7ree']=="a") { ?><?php echo $newjingcailist_value['aname_7ree'];?>
        	<?php } elseif($newjingcailist_value['win_7ree']=="b") { ?><?php echo $newjingcailist_value['bname_7ree'];?>
        	<?php } elseif($newjingcailist_value['win_7ree']=="c") { ?>平局
        	<?php } elseif($newjingcailist_value['win_7ree']=="d") { ?>流盤
        	<?php } else { ?>未揭曉
        	<?php } ?>        	
         	<?php } ?>  
      	
       	</td>
      
</tr>
<?php } ?>
</table>
<?php echo $multipage;?>

<script type="text/javascript">
function goto_7ree(msg_7ree,url_7ree){
if(confirm(msg_7ree)){
window.location = url_7ree; 
 		return true;
}else return false;
}
</script>
