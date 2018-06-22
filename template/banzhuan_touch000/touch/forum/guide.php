<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<!--{if $_G['setting']['domain']['app']['mobile']}-->
	{eval $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];}
<!--{else}-->
	{eval $nav = "forum.php";}
<!--{/if}-->
<div class="bz-mobile">
	<div class="bz-mobile-logo"><a title="$_G[setting][sitename]" href="$nav"><img src="template/banzhuan_touch000/images/logo.png" /></a></div>
	<div class="bz-mobile-right">
		<a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="iconfont icon-people1"><!--{if $_G[member][newpm]}--><i class="iconfont icon-dian1"></i><!--{/if}--></a>
		<a href="search.php?mod=forum" class="iconfont icon-search1"></a>
		<a href="forum.php?forumlist=1" class="iconfont icon-manage"></a>
        <a href="forum.php?mod=guide&view=hot" class="iconfont icon-home1 a"></a>
	</div>
</div>
<div class="threadlist">
	<!--{loop $data $key $list}-->
		<!--{subtemplate forum/guide_list_row}-->
	<!--{/loop}-->
</div>
$multipage
<div class="pullrefresh" style="display:none;"></div>
<!--{template common/footer}-->
