<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{if $_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1}-->
	<!--{eval dheader('Location:forum.php?mod=guide&view=hot');exit;}-->
<!--{/if}-->
<!--{template common/header}-->

<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{if $_GET['visitclient']}-->

<header class="header">
    <div class="nav">
		<span>{lang warmtip}</span>
    </div>
</header>
<div class="cl">
	<div class="clew_con">
		<h2 class="tit">{lang zsltmobileclient}</h2>
		<p>{lang visitbbsanytime}<input class="redirect button" id="visitclientid" type="button" value="{lang clicktodownload}" href="" /></p>
		<h2 class="tit">{lang iphoneandriodmobile}</h2>
		<p>{lang visitwapmobile}<input class="redirect button" type="button" value="{lang clicktovisitwapmobile}" href="$_GET[visitclient]" /></p>
	</div>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
	} else {
		window.location.href = '$_GET[visitclient]';
	}
</script>

<!--{else}-->

<!--{if $showvisitclient}-->
<div class="visitclienttip vm" style="display:block;">
	<a href="javascript:;" id="visitclientid" class="btn_download">{lang downloadnow}</a>	
	<p>
		{lang downloadzslttoshareview}
	</p>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
		$('.visitclienttip').css('display', 'block');
	}
</script>
<!--{/if}-->

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
		<a href="forum.php?forumlist=1" class="iconfont <!--{if $_G['setting']['mobile']['mobilehotthread']}-->icon-manage_fill<!--{else}-->icon-home1<!--{/if}--> a"></a>
		<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
        <a href="forum.php?mod=guide&view=hot" class="iconfont icon-home-o"></a>
        <!--{/if}-->
	</div>
</div>

<!--{hook/index_top_mobile}-->
<div class="wp" id="wp">
	<!--{loop $catlist $key $cat}-->
	<div class="bm bmw fl bzbt1 bzbb1">
		<div class="subforumshow bm_h cl bzbb1" href="#sub_forum_$cat[fid]">
			<h2><a href="javascript:;">$cat[name]</a></h2>
		</div>
		<div id="sub_forum_$cat[fid]" class="sub_forum bm_c">
			<ul>
				<!--{loop $cat[forums] $forumid}-->
				<!--{eval $forum=$forumlist[$forumid];}-->
				<li><a href="forum.php?mod=forumdisplay&fid={$forum['fid']}"><!--{if $forum[todayposts] > 0}--><span class="num">$forum[todayposts]</span><!--{/if}-->{$forum[name]}</a></li>
				<!--{/loop}-->
			</ul>
		</div>
	</div>
	<!--{/loop}-->
</div>
<!--{hook/index_middle_mobile}-->
<script type="text/javascript">
	(function() {
		<!--{if !$_G[setting][mobile][mobileforumview]}-->
			$('.sub_forum').css('display', 'block');
		<!--{else}-->
			$('.sub_forum').css('display', 'none');
		<!--{/if}-->
		$('.subforumshow').on('click', function() {
			var obj = $(this);
			var subobj = $(obj.attr('href'));
			if(subobj.css('display') == 'none') {
				subobj.css('display', 'block');
			} else {
				subobj.css('display', 'none');
			}
		});
	 })();
</script>

<!--{/if}-->
<!--{template common/footer}-->
