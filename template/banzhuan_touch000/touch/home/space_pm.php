<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang pm}');}-->
<!--{template common/header}-->
<!--{if in_array($filter, array('privatepm')) || in_array($_GET[subop], array('view'))}-->

	<!--{if in_array($filter, array('privatepm'))}-->

	<div class="bz-header">
		<div class="bz-header-left"><a href="home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1" class="iconfont icon-fanhui1"></a></div>
		<h2>{lang pm_center}</h2>
		<div class="bz-header-right"><a href="home.php?mod=spacecp&ac=pm"><em>{lang send_pm}</em></a></div>
	</div>
	<!--{if !$list}-->
	<div class="b_p hm grey">{lang no_corresponding_pm}</div>
	<!--{else}-->
	<div class="pmbox">
		<ul>
			<!--{loop $list $key $value}-->
			<li>
			<div class="avatar_img"><img style="height:35px;width:35px;" src="<!--{if $value[pmtype] == 2}-->{STATICURL}image/common/grouppm.png<!--{else}--><!--{avatar($value[touid] ? $value[touid] : ($value[lastauthorid] ? $value[lastauthorid] : $value[authorid]), big, true)}--><!--{/if}-->" /></div>
				<a href="{if $value[touid]}home.php?mod=space&do=pm&subop=view&touid=$value[touid]{else}home.php?mod=space&do=pm&subop=view&plid={$value['plid']}&type=1{/if}">
					<div class="cl">
						<!--{if $value[new]}--><span class="num">$value[pmnum]</span><!--{/if}-->
						<!--{if $value[touid]}-->
							<!--{if $value[msgfromid] == $_G[uid]}-->
								<span class="name">{lang me}{lang you_to} {$value[tousername]} {lang say}:</span>
							<!--{else}-->
								<span class="name">{$value[tousername]} {lang you_to}{lang me} {lang say}:</span>
							<!--{/if}-->
						<!--{elseif $value['pmtype'] == 2}-->
							<span class="name">{lang chatpm_author}:$value['firstauthor']</span>
						<!--{/if}-->
					</div>
					<div class="cl grey">
						<span class="time"><!--{date($value[dateline], 'u')}--></span>
						<span><!--{if $value['pmtype'] == 2}-->[{lang chatpm}]<!--{if $value[subject]}-->$value[subject]<br><!--{/if}--><!--{/if}--><!--{if $value['pmtype'] == 2 && $value['lastauthor']}--><div style="padding:0 0 0 20px;">......<br>$value['lastauthor'] : $value[message]</div><!--{else}-->$value[message]<!--{/if}--></span>
					</div>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
	</div>
	<!--{/if}-->

	<!--{elseif in_array($_GET[subop], array('view'))}-->

	<div class="bz-header">
		<div class="bz-header-left"><a href="home.php?mod=space&do=pm" class="iconfont icon-fanhui1"></a></div>
		<h2>{lang viewmypm}</h2>
	</div>
	<div class="wp">
		<div class="msgbox b_m">
			<!--{if !$list}-->
				<div class="b_p hm grey">{lang no_corresponding_pm}</div>
			<!--{else}-->
				<!--{loop $list $key $value}-->
					<!--{subtemplate home/space_pm_node}-->
				<!--{/loop}-->
				$multi
			<!--{/if}-->
		</div>
		<!--{if $list}-->
            <form id="pmform" class="pmform" name="pmform" method="post" action="home.php?mod=spacecp&ac=pm&op=send&pmid=$pmid&daterange=$daterange&pmsubmit=yes&mobile=2" >
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<!--{if !$touid}-->
				<input type="hidden" name="plid" value="$plid" />
				<!--{else}-->
				<input type="hidden" name="touid" value="$touid" />
				<!--{/if}-->
				<div class="reply b_m"><input type="text" value="" class="px" autocomplete="off" id="replymessage" name="message"></div>
				<div class="reply b_m"><input type="button" name="pmsubmit" id="pmsubmit" class="formdialog button2" value="{lang reply}" /></div>
            </form>
		<!--{/if}-->
	</div>

	<!--{/if}-->

<!--{else}-->

	<div class="b_p hm grey">{lang user_mobile_pm_error}</div>
	
<!--{/if}-->

<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
