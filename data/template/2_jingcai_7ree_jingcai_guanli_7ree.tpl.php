<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<form method="post" action="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=js" name="jiesuan_forum_7ree">
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
        <tr ><td colspan="6"><h3>管理賽事</h3></td></tr>
        <tr class="colplural" >
        <td>結算<input type="checkbox" id="checkall_7ree" name="checkall_7ree" onClick="ChkAllClick('mod_7ree[]','checkall_7ree');" ></td><td>賽事名稱</td><td>比賽時間</td><td>主隊 VS 客隊</td><td>比賽結果</td><td>操作<input type="checkbox" id="checkall2_7ree" name="checkall2_7ree" onClick="ChkAllClick('mod2_7ree[]','checkall2_7ree');" </td>
        </tr>
        <?php if(is_array($racelist_7ree)) foreach($racelist_7ree as $racelist_value) { ?>        <tr>
                <td title="<?php if($racelist_value['jiesuan_7ree']) { ?>可結算<?php } else { ?>無需結算<?php } ?>"><?php echo $racelist_value['main_id_7ree'];?><?php if($racelist_value['jiesuan_7ree']) { ?><input type="checkbox" name="mod_7ree[]" id="mod_7ree[]" onclick="ChkSonClick('mod_7ree[]','checkall_7ree');" value="<?php echo $racelist_value['main_id_7ree'];?>"><?php } ?></td>
                <td><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;sp_7ree=more&amp;main_id_7ree=<?php echo $racelist_value['main_id_7ree'];?>" target="_blank"><?php echo $racelist_value['racename_7ree'];?></a></td>
                <td><?php echo $racelist_value['time_7ree'];?></td>
                <td><?php echo $racelist_value['aname_7ree'];?> VS <?php echo $racelist_value['bname_7ree'];?></td>
                <td><?php if($racelist_value['win_7ree'] == "a") { ?>
                	<?php echo $racelist_value['aname_7ree'];?>
                	<?php } elseif($racelist_value['win_7ree'] == "b") { ?>
                	<?php echo $racelist_value['bname_7ree'];?>
                	<?php } elseif($racelist_value['win_7ree'] == "c") { ?>
                	平局
                	<?php } elseif($racelist_value['win_7ree'] == "d") { ?>
                	流盤
                	<?php } else { ?>
                	未揭曉
                	<?php } ?>
                </td>
                <td>[<a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2&amp;sp_7ree=edit&amp;main_id_7ree=<?php echo $racelist_value['main_id_7ree'];?>">編輯</a>] [<a onclick="showDialog('您確認要刪除賽事「<b><?php echo $racelist_value['racename_7ree'];?></b>」嗎？', 'confirm', '不可逆刪除操作確認', function () { window.location.href='plugin.php?id=jingcai_7ree:jingcai_7ree&ac_7ree=2&sp_7ree=del&main_id_7ree=<?php echo $racelist_value['main_id_7ree'];?>&formhash=<?php echo FORMHASH;?>'; })" href="javascript:;">刪除</a>]<input type="checkbox" name="mod2_7ree[]" id="mod2_7ree[]" onclick="ChkSonClick('mod2_7ree[]','checkall2_7ree');" value="<?php echo $racelist_value['main_id_7ree'];?>"></td>
        </tr>
        <?php } ?>
        <tr>
        <td colspan="5">
        <input type="submit" name="submit_7ree" title="對於已揭曉但未領獎的會員，管理可以使用手動結算為其頒發獎勵，並更新其統計數據。" class="z pn pnc" style="display:inline-block; height:24px;width:100px;margin-bottom:5px;text-align:center;" value="手動結算">
        <?php echo $mymultipage_7ree;?>
        </td>
        <td>
        <input type="submit" name="submit2_7ree" title="對於已揭曉但未領獎的會員，管理可以使用手動結算為其頒發獎勵，並更新其統計數據。" class="y pn pnc" style="display:inline-block; height:24px;width:100px;margin-bottom:5px;text-align:center;" value="批量刪除">
        </td>
        </tr>
</form>