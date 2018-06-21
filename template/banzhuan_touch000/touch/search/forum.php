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
		<a href="search.php?mod=forum" class="iconfont icon-searchfill a"></a>
		<a href="forum.php?forumlist=1" class="iconfont <!--{if $_G['setting']['mobile']['mobilehotthread']}-->icon-manage<!--{else}-->icon-home-o<!--{/if}-->"></a>
		<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
        <a href="forum.php?mod=guide&view=hot" class="iconfont icon-home-o"></a>
        <!--{/if}-->
	</div>
</div>
<form id="searchform" class="searchform" method="post" autocomplete="off" action="search.php?mod=forum&mobile=2">
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<!--{subtemplate search/pubsearch}-->
	<!--{eval $policymsgs = $p = '';}-->
	<!--{loop $_G['setting']['creditspolicy']['search'] $id $policy}-->
	<!--{block policymsg}--><!--{if $_G['setting']['extcredits'][$id][img]}-->$_G['setting']['extcredits'][$id][img] <!--{/if}-->$_G['setting']['extcredits'][$id][title] $policy $_G['setting']['extcredits'][$id][unit]<!--{/block}-->
	<!--{eval $policymsgs .= $p.$policymsg;$p = ', ';}-->
	<!--{/loop}-->
	<!--{if $policymsgs}--><p>{lang search_credit_msg}</p><!--{/if}-->
</form>
<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
	<!--{subtemplate search/thread_list}-->
<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
