<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="bz-header">
	<div class="bz-header-left"><a href="forum.php?forumlist=1" class="iconfont icon-fanhui1"></a></div>
	<h2><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></h2>
	<div class="bz-header-right"><a href="forum.php?mod=post&action=newthread&fid=$_G['fid']" class="iconfont icon-post"></a></div>
</div>
<!--{if $subexists && $_G['page'] == 1}-->
<div class="bz-sub-nav bzbb1">
	<ul class="cl">
	<!--{loop $sublist $sub}-->
	<li><a href="forum.php?mod=forumdisplay&fid={$sub[fid]}">{$sub['name']}</a><em>/</em></li>
	<!--{/loop}-->
	</ul>
</div>
<div class="clear"></div>
<!--{/if}-->
<!--{hook/forumdisplay_top_mobile}-->
<!--{if !$subforumonly}-->
<!--{if $_G['forum_threadcount']}-->
<div class="threadlist cl">
	<ul>
		<!--{loop $_G['forum_threadlist'] $key $thread}-->
			<!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
				{eval continue;}
			<!--{/if}-->
        	<!--{if $thread['displayorder'] > 0 && !$displayorder_thread}-->
        		{eval $displayorder_thread = 1;}
            <!--{/if}-->
			<!--{if $thread['moved']}-->
				<!--{eval $thread[tid]=$thread[closed];}-->
			<!--{/if}-->
			<li>
				<!--{hook/forumdisplay_thread_mobile $key}-->
	            <a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" $thread[highlight] >
					{$thread[subject]}
					<p>
						<span class="grey fz14">
						<!--{if $thread['authorid'] && $thread['author']}-->
						$thread[author]&nbsp;<!--{if !empty($verify[$thread['authorid']])}-->$verify[$thread[authorid]]&nbsp;<!--{/if}-->
						<!--{else}-->
						$_G[setting][anonymoustext]&nbsp;
						<!--{/if}-->
						</span>
						<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
						<i class="color-blue fz12 bor">&#32622;&#39030;</i>
						<!--{/if}-->
						<!--{if $thread['digest'] > 0}-->
						<i class="color-red fz12 bor">&#31934;&#21326;</i>
						<!--{/if}-->
						<!--{if $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
						<i class="grey fz12 bor">&#26377;&#22270;</i>
						<!--{/if}-->
						<span class="y grey fz12">&#22238;&#22797;&nbsp;{$thread[replies]}</span>
					</p>
				</a>
			</li>
        <!--{/loop}-->
	</ul>
</div>
<!--{else}-->
<div class="b_p hm grey">{lang forum_nothreads}</div>
<!--{/if}-->
$multipage
<!--{/if}-->
<!--{hook/forumdisplay_bottom_mobile}-->
<!--{template common/footer}-->
