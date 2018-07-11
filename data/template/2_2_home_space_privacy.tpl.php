<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('space_privacy');?>
<?php $_G['home_tpl_titles'] = array('提醒');?><?php include template('common/header'); $space['isfriend'] = $space['self'];
if(in_array($_G['uid'], (array)$space['friends'])) $space['isfriend'] = 1;
space_merge($space, 'count');
space_merge($space, 'field_home');?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首頁"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php"><?php echo $_G['setting']['navs']['4']['navname'];?></a> <em>&rsaquo;</em> 
隱私提醒
</div>
</div>
<div id="ct" class="wp cl">
<div class="nfl">
<div class="f_c mtw mbw">
<table cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
<tr>
<td valign="top" width="140" class="hm">
<div class="avt avtm"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo avatar($space[uid],middle);?></a></div>
<p class="mtm xw1 xi2 xs2"><a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>"><?php echo $space['username'];?></a></p>
</td>
<td width="14"></td>
<td valign="top" class="xs1">
<h2 class="xs2">
抱歉！由於 <?php echo $space['username'];?> 的隱私設置，您不能訪問當前內容 
</h2>
<p class="mtm mbm">
<a href="home.php?mod=space&amp;uid=<?php echo $space['uid'];?>&amp;do=friend">查看好友列表</a>
<?php if($isfriend) { ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=ignore&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=ignorefriendhk_<?php echo $space['uid'];?>" id="a_ignore" onclick="showWindow(this.id, this.href, 'get', 0);">解除好友</a>
<?php } else { ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=addfriendhk_<?php echo $space['uid'];?>" id="a_friend" onclick="showWindow(this.id, this.href, 'get', 0);">加為好友</a>
<?php } ?>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=poke&amp;op=send&amp;uid=<?php echo $space['uid'];?>&amp;handlekey=propokehk_<?php echo $space['uid'];?>" id="a_poke" onclick="showWindow(this.id, this.href, 'get', 0);">打個招呼</a>
<span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=pm&amp;op=showmsg&amp;handlekey=showmsg_<?php echo $space['uid'];?>&amp;touid=<?php echo $space['uid'];?>&amp;pmid=0&amp;daterange=4" id="a_pm" onclick="showWindow(this.id, this.href, 'get', 0);">發送消息</a>
<!--span class="pipe">|</span><a href="home.php?mod=spacecp&amp;ac=common&amp;op=report&amp;idtype=uid&amp;id=<?php echo $space['uid'];?>&amp;handlekey=reportbloghk_<?php echo $space['uid'];?>" id="a_report" onclick="showWindow(this.id, this.href, 'get', 0);">舉報</a-->
<?php if($_G['group']['allowedituser']) { ?>
<span class="pipe">|</span><a id="a_manage" href="admin.php?action=members&amp;operation=search&amp;uid=<?php echo $space['uid'];?>&amp;submit=1&amp;frames=yes">管理用戶</a>
<?php } ?>
</p>
<?php if($space['spacenote']) { ?>
<p><?php echo $space['spacenote'];?></p>
<?php } ?>

<div class="mtm pbm mbm bbda cl">
<h2 class="mbn">活躍概況</h2>
<ul class="xl xl2 cl">
<?php if($space['adminid']) { ?><li>管理組: <span style="color:<?php echo $space['admingroup']['color'];?>"><?php echo $space['admingroup']['grouptitle'];?></span> <?php echo $space['admingroup']['icon'];?></li><?php } ?>
<li>用戶組: <span style="color:<?php echo $space['group']['color'];?>"><?php echo $space['group']['grouptitle'];?></span> <?php echo $space['group']['icon'];?></li>
<?php if($space['extgroupids']) { ?><li>擴展用戶組: <?php echo $space['extgroupids'];?></li><?php } ?>
<li>註冊時間: <?php echo $space['regdate'];?></li>
<li>最後訪問: <?php echo $space['lastvisit'];?></li>
<?php if($_G['uid'] == $space['uid'] || $_G['group']['allowviewip']) { ?>
<li>註冊 IP: <?php echo $space['regip'];?> - <?php echo $space['regip_loc'];?></li>
<li>上次訪問 IP: <?php echo $space['lastip'];?> - <?php echo $space['lastip_loc'];?></li>
<?php } ?>
<li>上次活動時間: <?php echo $space['lastactivity'];?></li>
<li>上次發表時間: <?php echo $space['lastpost'];?></li>
<li>上次郵件通知: <?php echo $space['lastsendmail'];?></li>
<li>所在時區: <?php $timeoffset = array(
		'9999' => '使用系統默認',
		'-12' => '(GMT -12:00) 埃尼威托克島, 誇賈林環礁',
		'-11' => '(GMT -11:00) 中途島, 薩摩亞群島',
		'-10' => '(GMT -10:00) 夏威夷',
		'-9' => '(GMT -09:00) 阿拉斯加',
		'-8' => '(GMT -08:00) 太平洋時間(美國和加拿大), 提華納',
		'-7' => '(GMT -07:00) 山區時間(美國和加拿大), 亞利桑那',
		'-6' => '(GMT -06:00) 中部時間(美國和加拿大), 墨西哥城',
		'-5' => '(GMT -05:00) 東部時間(美國和加拿大), 波哥大, 利馬, 基多',
		'-4' => '(GMT -04:00) 大西洋時間(加拿大), 加拉加斯, 拉巴斯',
		'-3.5' => '(GMT -03:30) 紐芬蘭',
		'-3' => '(GMT -03:00) 巴西利亞, 布宜諾斯艾利斯, 喬治敦, 福克蘭群島',
		'-2' => '(GMT -02:00) 中大西洋, 阿森松群島, 聖赫勒拿島',
		'-1' => '(GMT -01:00) 亞速群島, 佛得角群島 [格林尼治標準時間] 都柏林, 倫敦, 里斯本, 卡薩布蘭卡',
		'0' => '(GMT) 卡薩布蘭卡，都柏林，愛丁堡，倫敦，里斯本，蒙羅維亞',
		'1' => '(GMT +01:00) 柏林, 布魯塞爾, 哥本哈根, 馬德里, 巴黎, 羅馬',
		'2' => '(GMT +02:00) 赫爾辛基, 加裡寧格勒, 南非, 華沙',
		'3' => '(GMT +03:00) 巴格達, 利雅得, 莫斯科, 奈洛比',
		'3.5' => '(GMT +03:30) 德黑蘭',
		'4' => '(GMT +04:00) 阿布扎比, 巴庫, 馬斯喀特, 特比利斯',
		'4.5' => '(GMT +04:30) 坎布爾',
		'5' => '(GMT +05:00) 葉卡特琳堡, 伊斯蘭堡, 卡拉奇, 塔什干',
		'5.5' => '(GMT +05:30) 孟買, 加爾各答, 馬德拉斯, 新德里',
		'5.75' => '(GMT +05:45) 加德滿都',
		'6' => '(GMT +06:00) 阿拉木圖, 科倫坡, 達卡, 新西伯利亞',
		'6.5' => '(GMT +06:30) 仰光',
		'7' => '(GMT +07:00) 曼谷, 河內, 雅加達',
		'8' => '(GMT +08:00) 北京, 香港, 帕斯, 新加坡, 台北',
		'9' => '(GMT +09:00) 大阪, 札幌, 首爾, 東京, 雅庫茨克',
		'9.5' => '(GMT +09:30) 阿德萊德, 達爾文',
		'10' => '(GMT +10:00) 堪培拉, 關島, 墨爾本, 悉尼, 海參崴',
		'11' => '(GMT +11:00) 馬加丹, 新喀裡多尼亞, 所羅門群島',
		'12' => '(GMT +12:00) 奧克蘭, 惠靈頓, 斐濟, 馬紹爾群島');?><?php echo $timeoffset[$space['timeoffset']];?>
</li>
</ul>
</div>

<ul class="pbm mbm bbda cl xl xl2 ">
<li>空間訪問量: <?php echo $space['views'];?></li>
<li>好友數: <?php echo $space['friends'];?></li>
<li>帖子數: <?php echo $space['posts'];?></li>
<li>主題數: <?php echo $space['threads'];?></li>
<li>精華數: <?php echo $space['digestposts'];?></li>
<li>記錄數: <?php echo $space['doings'];?></li>
<li>日誌數: <?php echo $space['blogs'];?></li>
<li>相冊數: <?php echo $space['albums'];?></li>
<li>分享數: <?php echo $space['sharings'];?></li>

<li>已用空間: <?php echo formatsize($space['attachsize'])?></li>
</ul>

<ul class="pbm mbm bbda cl xl xl2 ">
<li>積分: <?php echo $space['credits'];?></li><?php if(is_array($_G['setting']['extcredits'])) foreach($_G['setting']['extcredits'] as $key => $value) { if($value['title']) { ?>
<li><?php echo $value['title'];?>: <?php echo $space["extcredits$key"];?> <?php echo $value['unit'];?></li>
<?php } } ?>

<li>買家信用: <?php echo $space['buyercredit'];?></li>
<li>賣家信用: <?php echo $space['sellercredit'];?></li>
</ul>

<?php if($space['medals']) { ?>
<div class="pbm mbm bbda cl">
<h2 class="mbn">勳章</h2><?php if(is_array($space['medals'])) foreach($space['medals'] as $medal) { ?><img src="<?php echo STATICURL;?>/image/common/<?php echo $medal['image'];?>" border="0" alt="<?php echo $medal['name'];?>" title="<?php echo $medal['name'];?>" /> &nbsp;
<?php } ?>
</div>
<?php } if($_G['setting']['verify']['enabled']) { $showverify = true;?><?php if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available'] && $space['verify'.$vid] == 1) { if($showverify) { ?>
<div class="pbm mbm bbda cl">
<h2 class="mbn">用戶認證</h2><?php $showverify = false;?><?php } ?>
<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid=<?php echo $vid;?>" target="_blank"><?php if($verify['icon']) { ?><img src="<?php echo $verify['icon'];?>" class="vm" alt="<?php echo $verify['title'];?>" title="<?php echo $verify['title'];?>" /><?php } else { ?><?php echo $verify['title'];?><?php } ?></a>&nbsp;
<?php } } if(!$showverify) { ?></div><?php } } if($manage_forum) { ?>
<div class="pbm mbm bbda cl">
<h2 class="mbn">管理以下版塊</h2><?php if(is_array($manage_forum)) foreach($manage_forum as $key => $value) { ?><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $key;?>" target="_blank"><?php echo $value;?></a> &nbsp;
<?php } ?>
</div>
<?php } if(!$isfriend) { ?>
<p class="mtw xg1">請加入到我的好友中，您就可以瞭解我的近況，與我一起交流，隨時與我保持聯繫 </p>
<p class="mtm cl"><a href="home.php?mod=spacecp&amp;ac=friend&amp;op=add&amp;uid=<?php echo $space['uid'];?>" id="add_friend" onclick="showWindow(this.id, this.href, 'get', 0);" class="pn z" style="text-decoration: none;"><strong class="z">加為好友</strong></a></p>
<?php } ?>
</td>
</tr>
</table>
</div>
</div>
</div><?php include template('common/footer'); ?>