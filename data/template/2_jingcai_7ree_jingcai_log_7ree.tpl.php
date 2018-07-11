<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<form method="post" action="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=dells" name="dells_forum_7ree">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        <tr class="colplural" >
        <td>編號 <span class="pipe">|</span> 賽事名稱</td>
        <td>會員</td>
        <td>支持<?php echo $exttitle_7ree;?><span class="pipe">|</span>獎勵<?php echo $exttitle_7ree;?> </td>
        <td align="center">玩法</td>
        <td>競猜</td>
        <td>競猜時間</td>
        <td>操作<input type="checkbox" id="checkall_7ree" name="checkall_7ree" onClick="ChkAllClick('mod_7ree[]','checkall_7ree');" ></td>
        </tr>
        <?php if(is_array($loglist_7ree)) foreach($loglist_7ree as $loglist_value) { ?>        <tr>
        <td><?php echo $loglist_value['log_id_7ree'];?> <span class="pipe">|</span> <a href="<?php echo $xiangqing_url_7ree;?><?php echo $loglist_value['main_id_7ree'];?>" target="_blank"><?php echo $loglist_value['racename_7ree'];?></a></td>
        <td><a href="<?php echo $jilu_url_7ree;?><?php echo $loglist_value['uid_7ree'];?>" target="_blank"><?php echo $loglist_value['username_7ree'];?></a></td>
        <td><?php echo $loglist_value['myodds_7ree'];?><?php echo $exttitle_7ree;?><span class="pipe">|</span><?php if($loglist_value['mywin_7ree']=="d") { ?>已返還<?php } else { ?><?php echo $loglist_value['log_reward_7ree'];?><?php echo $exttitle_7ree;?><?php } ?></td>
        <td align="center"><?php if($loglist_value['type_7ree']) { ?>猜大小<?php } else { ?>猜結果<?php } ?>
        </td>
        <td>
<?php if($loglist_value['type_7ree']) { if($loglist_value['mywin_7ree']=="a") { ?>大 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?>小 <?php echo $loglist_value['daxiao_7ree'];?>
        <?php } ?>
     <?php } else { ?>
        <?php if($loglist_value['mywin_7ree']=="a") { ?><?php echo $loglist_value['aname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="b") { ?><?php echo $loglist_value['bname_7ree'];?>
        <?php } elseif($loglist_value['mywin_7ree']=="c") { if($jingcai_7ree_var['pingju_7ree'] && $loglist_value['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>平局<?php } ?>
        <?php } elseif($loglist_value['mywin_7ree']=="d") { ?>流盤
        <?php } ?>
         <?php } ?>
        </td>
        <td><?php echo $loglist_value['log_time_7ree'];?></td>
        <td>[<a onclick="showDialog('您確認要刪除該會員的競猜日誌（日誌編號：<b><?php echo $loglist_value['log_id_7ree'];?></b>，刪除後會員已獲得的積分不會返還）嗎？', 'confirm', '不可逆刪除操作確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=dellog&log_id_7ree=<?php echo $loglist_value['log_id_7ree'];?>&formhash=<?php echo FORMHASH;?>'; })" href="javascript:;">刪除</a>]
        <input type="checkbox" name="mod_7ree[]" id="mod_7ree[]" onclick="ChkSonClick('mod_7ree[]','checkall_7ree');" value="<?php echo $loglist_value['log_id_7ree'];?>">
        </td>
        </tr>
        <?php } ?>
        <tr>
        <td colspan="3"><?php echo $multipage;?></td>
        <td colspan="2">
        <?php if($_G['adminid']==1) { ?>
        <a onclick="showDialog('您確認要清空全部競猜日誌嗎？', 'confirm', '不可逆刪除操作確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=truncate&formhash=<?php echo FORMHASH;?>'; })" href="javascript:;" class="y pn" style="display:inline-block; height:24px;width:100px;margin-bottom:5px;text-align:center;">一鍵清空日誌</a>
        <?php } ?>
        </td>
        <td colspan="2">
        <input type="submit" name="submit_7ree" title="對於已揭曉但未領獎的會員，管理可以使用手動結算為其頒發獎勵，並更新其統計數據。" class="y pn pnc" style="display:inline-block; height:24px;width:100px;margin-bottom:5px;text-align:center;" value="批量刪除">
        </td>
        </tr>
</form>