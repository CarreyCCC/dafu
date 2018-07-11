<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="dt mtm" style="background-color:#E6E7E1;">
<tr class="colplural" >
    <th colspan="2" style="height:30px;line-height:30px;">
    <span class="y"><?php echo $race_7ree['aname_7ree'];?> <span style="font-size:13px;color:darkred;font-weight:700;padding:5px;">VS</span> <?php echo $race_7ree['bname_7ree'];?></span>
    <h3>高手競猜 : <a href="<?php echo $xiangqing_url_7ree;?><?php echo $race_7ree['main_id_7ree'];?>"><?php echo $race_7ree['racename_7ree'];?></a></h3>	    
    </th>
</tr>
<?php if($newjingcailist_7ree) { ?>
<tr><?php if(is_array($newjingcailist_7ree)) foreach($newjingcailist_7ree as $newjingcailist_value) { ?>    <td width="98%">
    <div id="gaoshoubox_7ree" class="gaoshoubox_7ree">
    	    		<div id='view_7ree' class="view_7ree <?php if($newjingcailist_value['tuijian_7ree']) { ?>tuijian_7ree<?php } ?>">
    		<a href="<?php echo $jilu_url_7ree;?><?php echo $newjingcailist_value['uid_7ree'];?>">查看</a>
    		</div>	
    		<div id='avatar_7ree' class='avatar_7ree'>
    		<a href="home.php?mod=space&amp;uid=<?php echo $newjingcailist_value['uid_7ree'];?>" target="_blank"><img src="<?php echo $newjingcailist_value['avatar_7ree'];?>" border=0  onerror="this.onerror=null;this.src='<?php echo $_G['setting']['ucenterurl'];?>/images/noavatar_small.gif'"></a>
    		
    		</div>
    		<div id='data_7ree' class='data_7ree'>
    		<h3>
    		<a href="home.php?mod=space&amp;uid=<?php echo $newjingcailist_value['uid_7ree'];?>" target="_blank"><?php echo $newjingcailist_value['username_7ree'];?></a>
    		<a href="<?php echo $mingzhong_url_7ree;?>" target="_blank"><span class="titlespan_7ree">命中排行:<?php echo $key_7ree+1;?></span></a>
    		</h3>
    		<p>季場次:<?php echo $newjingcailist_value['a_changci_7ree'];?> 月場次:<?php echo $newjingcailist_value['m_changci_7ree'];?>
    		<!--	    		
    		 周場次:<?php echo $newjingcailist_value['w_changci_7ree'];?>
    		-->	    		 
    		 </p>
    		<p>季猜對:<?php echo $newjingcailist_value['a_caidui_7ree'];?> 月猜對:<?php echo $newjingcailist_value['m_caidui_7ree'];?>
    		<!--	    		
    		 周猜對:<?php echo $newjingcailist_value['w_caidui_7ree'];?>
    		-->		    		 
    		 </p>
    		<!--
    		<p>季淨利:<?php echo $newjingcailist_value['a_jingli_7ree'];?> 月淨利:<?php echo $newjingcailist_value['m_jingli_7ree'];?> 周淨利:<?php echo $newjingcailist_value['w_jingli_7ree'];?></p>
    		-->
    		<p>季命中:<?php echo $newjingcailist_value['a_mingzhong_7ree'];?>% <br>
    		月命中:<?php echo $newjingcailist_value['m_mingzhong_7ree'];?>% 
    		<!--	    		
    		周命中:<?php echo $newjingcailist_value['w_mingzhong_7ree'];?>%
    		-->	    		
    		</p>	    		
    		</div>
    			    
    </div>
    </td>
</tr>	    
<?php } } else { ?>
<tr class="colplural" >
    <td colspan="2">
    <div class="notice">暫無會員參與競猜活動，請稍後再來關注…</div>
    </td>
</tr>
<?php } ?>
</table>
<?php echo $multipage;?>



