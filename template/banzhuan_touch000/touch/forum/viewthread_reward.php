<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<div class="banzhuan-reward b_p">
		
		{lang thread_reward}
		
		<strong>
			<span class="xs3">$rewardprice</span>
		</strong>
		{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]} {if $_G['forum_thread']['price'] > 0}
		<span class="xi1">{lang unresolved}</span>
		{elseif $_G['forum_thread']['price'] < 0}
			<span class="xg1">
				{lang resolved}
			</span>
			{/if}
	</div>
	
	<div id="postmessage_$post[pid]" class="postmessage">$post[message]</div>


<!--{if $post['attachment']}-->
	<div class="warning">{lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em></div>
<!--{elseif $post['imagelist'] || $post['attachlist']}-->
    <!--{if $post['imagelist']}-->
         {echo showattach($post, 1)}
    <!--{/if}-->
    <!--{if $post['attachlist']}-->
         {echo showattach($post)}
    <!--{/if}-->
<!--{/if}-->
<!--{eval $post['attachment'] = $post['imagelist'] = $post['attachlist'] = '';}-->

<!--{if $bestpost}-->
	<div class="rwdbst banzhuan-reward b_p">
		<h3 class="psth">{lang reward_bestanswer}</h3>
		<div class="pstl">
			<div class="psti">
				<div class="z">$bestpost[avatar]</div><a href="home.php?mod=space&uid=$bestpost[authorid]&do=profile&mobile=2" class="color-c">$bestpost[author]</a>
				<div>$bestpost[message]</div>
			</div>
		</div>
	</div>
<!--{/if}-->