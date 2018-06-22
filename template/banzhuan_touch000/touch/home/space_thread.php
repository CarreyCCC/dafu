<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="bz-header">
	<div class="bz-header-left"><a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1" class="iconfont icon-fanhui1"></a></div>
	<h2>{lang mythread}</h2>
</div>
<!--{if $list}-->
<div class="threadlist">
	<ul>
		<!--{loop $list $thread}-->
			<li>
				<!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->
				<a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$thread[pid]">
					$thread[subject]
					<p>
						<span class="grey fz14">
						<!--{if $thread['authorid'] && $thread['author']}-->
						$thread[author]&nbsp;
						<!--{else}-->
						$_G[setting][anonymoustext]&nbsp;
						<!--{/if}-->
						</span>
						<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
						<i class="color-blue fz12 bor">&#32622;&#39030;</i>
						<!--{/if}-->
						<!--{if $thread['attachment'] == 2}-->
						<i class="grey fz12 bor">&#26377;&#22270;</i>
						<!--{/if}-->
						<span class="y grey fz12">&#22238;&#22797;&nbsp;{$thread[replies]}</span>
					</p>
				</a>
				<!--{else}-->
				<a href="forum.php?mod=viewthread&tid=$thread[tid]">
					$thread[subject]
					<p>
						<span class="grey fz14">
						<!--{if $thread['authorid'] && $thread['author']}-->
						$thread[author]&nbsp;
						<!--{else}-->
						$_G[setting][anonymoustext]&nbsp;
						<!--{/if}-->
						</span>
						<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
						<i class="color-blue fz12 bor">&#32622;&#39030;</i>
						<!--{/if}-->
						<!--{if $thread['attachment'] == 2}-->
						<i class="grey fz12 bor">&#26377;&#22270;</i>
						<!--{/if}-->
						<span class="y grey fz12">&#22238;&#22797;&nbsp;{$thread[replies]}</span>
					</p>
				</a>
				<!--{/if}-->
			</li>
		<!--{/loop}-->
	</ul>
</div>
<!--{else}-->
<div class="b_p hm grey">{lang no_related_posts}</div>
<!--{/if}-->
$multi
<div class="clear"></div>
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
