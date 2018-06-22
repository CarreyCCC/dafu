<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->

<!--{template common/header}-->

<!--{if !$_GET['mycenter']}-->
	<div class="bz-header">
		<div class="bz-header-left"><a href="javascript:;" onclick="history.go(-1);" class="iconfont icon-fanhui1"></a></div>
		<h2><!--{if $_G['uid'] == $space['uid']}-->{lang myprofile}<!--{else}-->$space[username]{lang otherprofile}<!--{/if}--></h2>
	</div>
	<div class="userinfo">
		<div class="user_avatar">
			<div class="avatar_m"><span><img src="<!--{avatar($space[uid], big, true)}-->" /></span></div>
			<h2 class="name">$space[username]</h2>
		</div>
		<div class="user_box">
			<ul>
				<li><a>{lang credits}<span>$space[credits]</span></a></li>
				<!--{loop $_G[setting][extcredits] $key $value}-->
				<!--{if $value[title]}-->
				<li><a>$value[title]<span>{$space["extcredits$key"]} $value[unit]</span></a></li>
				<!--{/if}-->
				<!--{/loop}-->
			</ul>
		</div>
	</div>

<!--{else}-->

	<!--{if $_G['setting']['domain']['app']['mobile']}-->
		{eval $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];}
	<!--{else}-->
		{eval $nav = "forum.php";}
	<!--{/if}-->
	<div class="bz-mobile">
		<div class="bz-mobile-logo"><a title="$_G[setting][sitename]" href="$nav"><img src="template/banzhuan_touch000/images/logo.png" /></a></div>
		<div class="bz-mobile-right">
			<a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="iconfont icon-people_fill a"><!--{if $_G[member][newpm]}--><i class="iconfont icon-dian1"></i><!--{/if}--></a>
			<a href="search.php?mod=forum" class="iconfont icon-search1"></a>
			<a href="forum.php?forumlist=1" class="iconfont <!--{if $_G['setting']['mobile']['mobilehotthread']}-->icon-manage<!--{else}-->icon-home-o<!--{/if}-->"></a>
			<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
	        <a href="forum.php?mod=guide&view=hot" class="iconfont icon-home-o"></a>
	        <!--{/if}-->
		</div>
	</div>
	<div class="userinfo">
		<div class="user_avatar">
			<div class="avatar_m"><span><img src="<!--{avatar($_G[uid], big, true)}-->" /></span></div>
			<h2 class="name">$_G[username]</h2>
		</div>
		<div class="myinfo_list cl">
			<ul>
				<li class="bzbt1"><a href="home.php?mod=space&uid={$_G[uid]}&do=profile" class="bzbb1">{lang myprofile}<span class="y iconfont icon-gengduo"></span></a></li>
				<li><a href="home.php?mod=space&do=pm" class="bzbb1">{lang mypm}<!--{if $_G[member][newpm]}--><em class="iconfont icon-dian1"></em><!--{/if}--><span class="y iconfont icon-gengduo"></span></a></li>
				<li><a href="home.php?mod=space&do=favorite&type=all" class="bzbb1">{lang myfavorite}<span class="y iconfont icon-gengduo"></span></a></li>
				<li class="bzbb1"><a href="home.php?mod=space&uid={$_G[uid]}&do=thread&view=me">{lang mythread}<span class="y iconfont icon-gengduo"></span></a></li>
				<li class="mtm bzbt1 bzbb1"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout_mobile}<span class="y iconfont icon-gengduo"></span></a></li>
			</ul>
		</div>
	</div>
	
<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
