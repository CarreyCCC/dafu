<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_promotion');
0
|| checktplrefresh('./template/default/home/spacecp_promotion.htm', './template/default/home/spacecp_header.htm', 1530589572, '2', './data/template/2_2_home_spacecp_promotion.tpl.php', './template/yunzhan_zq', 'home/spacecp_promotion')
|| checktplrefresh('./template/default/home/spacecp_promotion.htm', './template/default/home/spacecp_footer.htm', 1530589572, '2', './data/template/2_2_home_spacecp_promotion.tpl.php', './template/yunzhan_zq', 'home/spacecp_promotion')
|| checktplrefresh('./template/default/home/spacecp_promotion.htm', './template/default/home/spacecp_header_name.htm', 1530589572, '2', './data/template/2_2_home_spacecp_promotion.tpl.php', './template/yunzhan_zq', 'home/spacecp_promotion')
|| checktplrefresh('./template/default/home/spacecp_promotion.htm', './template/default/home/spacecp_header_name.htm', 1530589572, '2', './data/template/2_2_home_spacecp_promotion.tpl.php', './template/yunzhan_zq', 'home/spacecp_promotion')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">設置</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
個人資料
<?php } elseif($actives['verify']) { ?>
認證
<?php } elseif($actives['avatar']) { ?>
修改頭像
<?php } elseif($actives['credit']) { ?>
積分
<?php } elseif($actives['usergroup']) { ?>
用戶組
<?php } elseif($actives['privacy']) { ?>
隱私篩選
<?php } elseif($actives['sendmail']) { ?>
郵件提醒
<?php } elseif($actives['password']) { ?>
密碼安全
<?php } elseif($actives['promotion']) { ?>
訪問推廣
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
個人資料
<?php } elseif($actives['verify']) { ?>
認證
<?php } elseif($actives['avatar']) { ?>
修改頭像
<?php } elseif($actives['credit']) { ?>
積分
<?php } elseif($actives['usergroup']) { ?>
用戶組
<?php } elseif($actives['privacy']) { ?>
隱私篩選
<?php } elseif($actives['sendmail']) { ?>
郵件提醒
<?php } elseif($actives['password']) { ?>
密碼安全
<?php } elseif($actives['promotion']) { ?>
訪問推廣
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_promotion_top'])) echo $_G['setting']['pluginhooks']['spacecp_promotion_top'];?>
<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<div class="bbda pbm mbm">
<?php if($_G['setting']['creditspolicy']['promotion_visit']) { ?><p>
如果您的朋友通過下面任意一個鏈接訪問站點，您將獲得積分獎勵 <span class="xi1"><?php echo $visitstr;?></span>
</p><?php } if($_G['setting']['creditspolicy']['promotion_register']) { ?>
<p>
<?php if($_G['setting']['creditspolicy']['promotion_visit']) { ?>
如果您的朋友不但訪問並且註冊成為會員，您將再獲得積分獎勵 <span class="xi1"><?php echo $regstr;?></span>
<?php } else { ?>
如果您的朋友通過下面任意一個鏈接訪問站點並註冊新會員，您將獲得積分獎勵 <span class="xi1"><?php echo $regstr;?></span>
<?php } ?>
</p>
<?php } ?>
</div>
<table cellspacing="0" cellpadding="0" class="tfm">
<tr>
<th colspan="2" class="xs2 xw1">方式一：</th>
</tr>
<tr>
<th>推廣鏈接1</th>
<td class="pns">
<input type="text" class="px vm" onclick="this.select();setCopy('<?php echo $copystr;?>'+'\n'+this.value, '推廣鏈接複製成功');" value="<?php echo $_G['siteurl'];?>?fromuid=<?php echo $_G['uid'];?>" size="50" />
<button type="submit" class="pn vm" onclick="setCopy('<?php echo $copystr;?>'+'\n'+'<?php echo $_G['siteurl'];?>?fromuid=<?php echo $_G['uid'];?>', '推廣鏈接複製成功');" type="submit"><em>複製</em></button>
</td>
</tr>
<tr>
<th>推廣鏈接2</th>
<td class="pns">
<input type="text" class="px vm" onclick="this.select();setCopy('<?php echo $copystr;?>'+'\n'+this.value, '推廣鏈接複製成功');" value="<?php echo $_G['siteurl'];?>?fromuser=<?php echo rawurlencode($_G['username']); ?>" size="50" />
<button type="submit" class="pn vm" onclick="setCopy('<?php echo $copystr;?>'+'\n'+'<?php echo $_G['siteurl'];?>?fromuser=<?php echo rawurlencode($_G['username']); ?>', '推廣鏈接複製成功');"><em>複製</em></button>
</td>
</tr>
<tr>
<th colspan="2" class="xs2 xw1 ptw">方式二：</th>
</tr>
<tr>
<th colspan="2">通過點擊帖子標題旁的「複製鏈接」，推廣成功後也可以獲得積分獎勵 &nbsp; <a href="forum.php" class="xi2">去推廣帖子&raquo;</a></th>
</tr>
</table>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_promotion_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_promotion_bottom'];?>
</div>
</div>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">設置</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">修改頭像</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">個人資料</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify()) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">認證</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">積分</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">用戶組</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">隱私篩選</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">郵件提醒</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">密碼安全</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">訪問推廣</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
</div><?php include template('common/footer'); ?>