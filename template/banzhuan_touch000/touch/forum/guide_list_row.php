<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{if $list['threadcount']}-->
<ul class="hotlist">
	<!--{loop $list['threadlist'] $key $thread}-->
		<li>
			<a href="forum.php?mod=viewthread&tid=$thread[tid]&fromguid=hot&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra">
				<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
					<!--{eval $thread[tid]=$thread[closed];}-->
				<!--{/if}-->
				$thread[typehtml] $thread[sorthtml]
				$thread[subject]
				<p>
					<span class="grey fz14">
					<!--{if $thread['authorid'] && $thread['author']}-->
					$thread[author]&nbsp;<!--{if !empty($verify[$thread['authorid']])}-->$verify[$thread[authorid]]&nbsp;<!--{/if}-->
					<!--{else}-->
					$_G[setting][anonymoustext]&nbsp;
					<!--{/if}-->
					</span>
					<!--{if $thread['digest'] > 0}-->
					<i class="color-red fz12 bor">&#31934;&#21326;</i>
					<!--{/if}-->
					<!--{if $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<i class="grey fz12 bor">&#26377;&#22270;</i>
					<!--{/if}-->
					<span class="y grey fz12">&#22238;&#22797;&nbsp;<!--{if $thread['isgroup'] != 1}-->$thread[replies]<!--{else}-->{$groupnames[$thread[tid]][replies]}<!--{/if}--></span>
				</p>
			</a>
		</li>
	<!--{/loop}-->
</ul>
<!--{else}-->
<p class="b_p">{lang guide_nothreads}</p>
<!--{/if}-->
