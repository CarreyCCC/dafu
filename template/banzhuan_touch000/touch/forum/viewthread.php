<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{eval $threadsort = $threadsorts = null;}-->
<!--{template common/header}-->
<div class="bz-header">
	<div class="bz-header-left"><a href="<!--{if $_GET[fromguid] == 'hot'}-->forum.php?mod=guide&view=hot&page=$_GET[page]<!--{else}-->forum.php?mod=forumdisplay&fid=$_G[fid]&<!--{eval echo rawurldecode($_GET[extra]);}--><!--{/if}-->" class="iconfont icon-fanhui1"></a></div>
	<h2><!--{eval echo strip_tags($_G['forum']['name']) ? strip_tags($_G['forum']['name']) : $_G['forum']['name'];}--></h2>
	<div class="bz-header-right"><a href="forum.php" class="iconfont icon-home-o"></a></div>
</div>
<!--{hook/viewthread_top_mobile}-->
<div class="postlist">
	<h2>
        	<!--{if $_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}-->
			[{$_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}]
        <!--{/if}-->
        <!--{if $threadsorts && $_G['forum_thread']['sortid']}-->
            [{$_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']]}]
		<!--{/if}-->
		$_G[forum_thread][subject]
        <!--{if $_G['forum_thread'][displayorder] == -2}--> <span>({lang moderating})</span>
        <!--{elseif $_G['forum_thread'][displayorder] == -3}--> <span>({lang have_ignored})</span>
        <!--{elseif $_G['forum_thread'][displayorder] == -4}--> <span>({lang draft})</span>
        <!--{/if}-->
	</h2>
	<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
	<p>
	<!--{if !IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']}-->
		<a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page&authorid=$_G[forum_thread][authorid]" rel="nofollow" class="blue" style="font-size:12px;font-weight:normal;margin-left:10px;">{lang viewonlyauthorid}</a>
	<!--{elseif !$_G['forum_thread']['archiveid']}-->
		<a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page" rel="nofollow" class="blue" style="font-size:12px;font-weight:normal;margin-left:10px;">{lang thread_show_all}</a>
	<!--{/if}-->
	</p>
	<!--{/if}-->
	<div class="clear"></div>
	<!--{eval $postcount = 0;}-->
	<!--{loop $postlist $post}-->
	<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
	<!--{hook/viewthread_posttop_mobile $postcount}-->
   	<div class="plc cl" id="pid$post[pid]">
        <div class="display pi" href="#replybtn_$post[pid]">
        		<div class="cl" style="position: relative;">
        			<span class="avatar"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, middle, true)}--><!--{else}--><!--{avatar($post[authorid], middle, true)}--><!--{/if}-->" style="width:34px;height:34px;" /></span>
        			<ul class="authi">
					<li class="grey">
						<em>
							<!--{if isset($post[isstick])}-->
								<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
							<!--{elseif $post[number] == -1}-->
								{lang recommend_post}
							<!--{else}-->
								<!--{if !empty($postno[$post[number]])}-->
								    $postno[$post[number]]
								<!--{else}-->
								    {$post[number]}&#27004;
								<!--{/if}-->
							<!--{/if}-->
						</em>
						<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
						<b><a href="home.php?mod=space&uid=$post[authorid]&do=profile" class="blue">$post[author]</a></b>
						<!--{else}-->
							<!--{if !$post['authorid']}-->
							<a>{lang guest} <i>$post[useip]{if $post[port]}:$post[port]{/if}</i></a>
							<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
								<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]&do=profile" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
							<!--{else}-->
							$post[author] <em>{lang member_deleted}</em>
							<!--{/if}-->
						<!--{/if}-->
					</li>
					<li class="grey rela">
						<!--{if $_G['forum']['ismoderator']}-->
						<!-- manage start -->
						<!--{if $post[first]}-->
							<em><a href="#moption_$post[pid]" class="popup blue" style="margin-left: 10px;">{lang manage}</a></em>
							<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
								<!--{if !$_G['forum_thread']['special']}-->
								<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
								<!--{/if}-->
								<input type="button" value="{lang delete}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
								<input type="button" value="{lang close}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
								<input type="button" value="{lang admin_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
								<input type="button" value="{lang topicadmin_warn_add}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
							</div>
						<!--{else}-->
							<em><a href="#moption_$post[pid]" class="popup blue" style="margin-left: 10px;">{lang manage}</a></em>
							<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
								<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
								<!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="dialog button" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
								<!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
								<!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							</div>
						<!--{/if}-->
						<!-- manage end -->
						<!--{/if}-->
						<!--{if $post[first]}-->
						<em><a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="favbtn blue">{lang favorite}</a></em>
						<!--{/if}-->
						<!--{if $post[first]}-->
						<!--{else}-->
						<!--{if $_G[uid] && $allowpostreply && !$post[first]}-->
						<em><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" class="blue">{lang reply}</a></em>
						<!--{/if}-->
						<!--{/if}-->
						$post[dateline]
					</li>
	            	</ul>
        		</div>

			<div class="message">
                	<!--{if $post['warned']}-->
                        <span class="grey quote">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="grey quote">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="grey quote">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="grey quote">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->
						<!--{template forum/viewthread_pay}-->
					<!--{else}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                            <div class="grey quote">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="grey quote">{lang admin_message_single_banned}</div>
                        <!--{/if}-->
                        <!--{if $_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0}-->
                            {lang pay_threads}: <strong>$_G[forum_thread][price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]} </strong> <a href="forum.php?mod=misc&action=viewpayments&tid=$_G[tid]" >{lang pay_view}</a>
                        <!--{/if}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow}-->
                        	<!--{if $threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']}-->
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                    <div class="box_ex2 viewsort">
                                        <h4>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h4>
                                    <!--{loop $threadsortshow['optionlist'] $option}-->
                                        <!--{if $option['type'] != 'info'}-->
                                            $option[title]: <!--{if $option['value']}-->$option[value] $option[unit]<!--{else}--><span class="grey">--</span><!--{/if}--><br />
                                        <!--{/if}-->
                                    <!--{/loop}-->
                                    </div>
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
                            <!--{if !$_G[forum_thread][special]}-->
                                $post[message]
                            <!--{elseif $_G[forum_thread][special] == 1}-->
                                <!--{template forum/viewthread_poll}-->
                            <!--{elseif $_G[forum_thread][special] == 2}-->
                                <!--{template forum/viewthread_trade}-->
                            <!--{elseif $_G[forum_thread][special] == 3}-->
                                <!--{template forum/viewthread_reward}-->
                            <!--{elseif $_G[forum_thread][special] == 4}-->
                                <!--{template forum/viewthread_activity}-->
                            <!--{elseif $_G[forum_thread][special] == 5}-->
                                <!--{template forum/viewthread_debate}-->
                            <!--{elseif $threadplughtml}-->
                                $threadplughtml
                                $post[message]
                            <!--{else}-->
                            	$post[message]
                            <!--{/if}-->
                        <!--{else}-->
                            $post[message]
                        <!--{/if}-->

					<!--{/if}-->
			</div>
			<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
			<!--{if $post['attachment']}-->
            <div class="grey quote">
               {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
            </div>
            <!--{elseif $post['imagelist'] || $post['attachlist']}-->
               <!--{if $post['imagelist']}-->
				<!--{if count($post['imagelist']) == 1}-->
				<ul class="img_one">{echo showattach($post, 1)}</ul>
				<!--{else}-->
				<ul class="img_list cl vm">{echo showattach($post, 1)}</ul>
				<!--{/if}-->
				<!--{/if}-->
                <!--{if $post['attachlist']}-->
				<ul>{echo showattach($post)}</ul>
				<!--{/if}-->
			<!--{/if}-->
			<!--{/if}-->
       </div>
   	</div>
   	<!--{hook/viewthread_postbottom_mobile $postcount}-->
   	<!--{eval $postcount++;}-->
   	<!--{/loop}-->
	<!--{subtemplate forum/forumdisplay_fastpost}-->
</div>

$multipage

<!--{hook/viewthread_bottom_mobile}-->

<script type="text/javascript">
	$('.favbtn').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
			data:{'favoritesubmit':'true', 'formhash':'{FORMHASH}'},
			dataType:'xml',
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
			evalscript(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			window.location.href = obj.attr('href');
			popup.close();
		});
		return false;
	});
</script>

<a href="javascript:;" title="{lang scrolltop}" class="scrolltop bottom"></a>
<!--{template common/footer}-->
