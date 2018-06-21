<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<div class="threadlist">
	<div class="fz12 b_p grey bzbb1"><!--{if $keyword}-->{lang search_result_keyword} <!--{if $modfid}--><a href="forum.php?mod=modcp&action=thread&fid=$modfid&keywords=$modkeyword&submit=true&do=search&page=$page" target="_blank">{lang goto_memcp}</a><!--{/if}--><!--{else}-->{lang search_result}<!--{/if}--></div>
	<!--{if empty($threadlist)}-->
	<ul><li><a href="javascript:;">{lang search_nomatch}</a></li></ul>
	<!--{else}-->
	<ul>
		<!--{loop $threadlist $thread}-->
		<li>
			<a href="forum.php?mod=viewthread&tid=$thread[realtid]&highlight=$index[keywords]" target="_blank" $thread[highlight]>$thread[subject]</a>
		</li>
		<!--{/loop}-->
	</ul>
	<!--{/if}-->
	$multipage
</div>
