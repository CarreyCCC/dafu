<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="loginbox registerbox">
	<div class="login_from">
		<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod={$_G[setting][regname]}&mobile=2">
			<input type="hidden" name="regsubmit" value="yes" />
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<!--{eval $dreferer = str_replace('&amp;', '&', dreferer());}-->
			<input type="hidden" name="referer" value="$dreferer" />
			<input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
			<input type="hidden" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" />
			<ul>
				<li><input type="text" tabindex="1" class="bz-input" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['username']}" placeholder="{lang registerinputtip}" fwin="login"></li>
				<li><input type="password" tabindex="2" class="bz-input" size="30" value="" name="{$_G['setting']['reginput']['password']}" placeholder="{lang login_password}" fwin="login"></li>
				<li><input type="password" tabindex="3" class="bz-input" size="30" value="" name="{$_G['setting']['reginput']['password2']}" placeholder="{lang registerpassword2}" fwin="login"></li>
				<li class="bl_none"><input type="email" tabindex="4" class="bz-input" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['email']}" placeholder="{lang registeremail}" fwin="login"></li>
				<!--{if empty($invite) && ($_G['setting']['regstatus'] == 2 || $_G['setting']['regstatus'] == 3)}-->
				<li><input type="text" name="invitecode" autocomplete="off" tabindex="5" class="bz-input" size="30" value="" placeholder="{lang invite_code}" fwin="login"></li>
				<!--{/if}-->
				<!--{if $_G['setting']['regverify'] == 2}-->
				<li><input type="text" name="regmessage" autocomplete="off" tabindex="6" class="bz-input" size="30" value="" placeholder="{lang register_message}" fwin="login"></li>
				<!--{/if}-->
			</ul>
			<!--{if $secqaacheck || $seccodecheck}-->
				<!--{subtemplate common/seccheck}-->
			<!--{/if}-->
		</form>
	</div>
	<div class="btn_register"><button tabindex="7" value="true" name="regsubmit" type="submit" class="formdialog pn"><span>{lang quickregister}</span></button></div>
	<p class="reg_link hm">
		<a href="forum.php" class="grey">{lang homepage}</a>&nbsp;&nbsp;<em style="color: #D7D7D7;">|</em>&nbsp;&nbsp;
		<a href="member.php?mod=logging&action=login" class="grey">{lang login}<em class="iconfont icon-gengduo"></em></a>
	</p>
</div>

<!--{eval updatesession();}-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
