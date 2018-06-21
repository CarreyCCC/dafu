<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{if $param['login']}-->
	<!--{if $_G['inajax']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login&inajax=1&infloat=1');exit;}-->
	<!--{else}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
	<!--{/if}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{if $_G['inajax']}-->
<div class="tip" style="height:150px;">
	<dt id="messagetext">
		<p>$show_message</p>
        <!--{if $_G['forcemobilemessage']}-->
        	<p >
            	<a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
                <a href="javascript:history.back();">{lang goback}</a>
            </p>
        <!--{/if}-->
		<!--{if $url_forward && !$_GET['loc']}-->
			<!--<p><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></p>-->
			<script type="text/javascript">
				setTimeout(function() {
					window.location.href = '$url_forward';
				}, '3000');
			</script>
		<!--{elseif $allowreturn}-->
			<p><input type="button" class="button" onclick="popup.close();" value="{lang close}"></p>
		<!--{/if}-->
	</dt>
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
		<a href="{if $_G[uid]}home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1{else}member.php?mod=logging&action=login{/if}" class="iconfont icon-people1"><!--{if $_G[member][newpm]}--><i class="iconfont icon-dian1"></i><!--{/if}--></a>
		<a href="search.php?mod=forum" class="iconfont icon-search1"></a>
		<a href="forum.php?forumlist=1" class="iconfont <!--{if $_G['setting']['mobile']['mobilehotthread']}-->icon-manage<!--{else}-->icon-home-o<!--{/if}-->"></a>
		<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
        <a href="forum.php?mod=guide&view=hot" class="iconfont icon-home-o"></a>
        <!--{/if}-->
	</div>
</div>
<div class="jump_c">
	<p>$show_message</p>
    <!--{if $_G['forcemobilemessage']}-->
		<p>
            <a href="{$_G['setting']['mobile']['pageurl']}" class="mtn">{lang continue}</a><br />
            <a href="javascript:history.back();">{lang goback}</a>
        </p>
    <!--{/if}-->
	<!--{if $url_forward}-->
		<p><a class="grey" href="$url_forward">{lang message_forward_mobile}</a></p>
	<!--{elseif $allowreturn}-->
		<p><a class="grey" href="javascript:history.back();">{lang message_go_back}</a></p>
	<!--{/if}-->
</div>

<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
