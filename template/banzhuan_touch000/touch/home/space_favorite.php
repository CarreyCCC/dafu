<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="bz-header">
	<div class="bz-header-left"><a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1" class="iconfont icon-fanhui1"></a></div>
	<h2>{lang myfavorite}</h2>
</div>
<!--{if $list}-->
<div class="threadlist">
	<ul>
		<!--{loop $list $k $value}-->
		<li><a href="$value[url]">$value[title]</a></li>
		<!--{/loop}-->
	</ul>
</div>
<!--{else}-->
<div class="b_p hm grey">{lang no_favorite_yet}</div>
<!--{/if}-->
$multi
<div class="clear"></div>
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
