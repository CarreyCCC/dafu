<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
{eval
	$sechash = 'S'.random(4);
	$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
	$ran = random(5, 1);
}
<!--{if $secqaacheck}-->
<!--{eval
	$message = '';
	$question = make_secqaa();
	$secqaa = lang('core', 'secqaa_tips').$question;
}-->
<!--{/if}-->
<!--{if $sectpl}-->
	<!--{if $secqaacheck}-->
		<p class="b_p">
	        {lang secqaa}: 
	        <span class="xg2">$secqaa</span>
			<input name="secqaahash" type="hidden" value="$sechash" />
	        <input name="secanswer" id="secqaaverify_$sechash" type="text" class="bz-input" />
        </p>
	<!--{/if}-->
	<!--{if $seccodecheck}-->
		<div class="sec_code vm">
			<input name="seccodehash" type="hidden" value="$sechash" />
			<input type="text" class="vm" style="ime-mode:disabled;width:115px;line-height:30px;float:left;padding-left:10px;background:#F4F4F4;" autocomplete="off" value="" id="seccodeverify_$sechash" name="seccodeverify" placeholder="{lang seccode}" fwin="seccode">
	        <img src="misc.php?mod=seccode&update={$ran}&idhash={$sechash}&mobile=2" class="seccodeimg"/>
		</div>
	<!--{/if}-->
<!--{/if}-->
<script type="text/javascript">
	(function() {
		$('.seccodeimg').on('click', function() {
			$('#seccodeverify_$sechash').attr('value', '');
			var tmprandom = 'S' + Math.floor(Math.random() * 1000);
			$('.sechash').attr('value', tmprandom);
			$(this).attr('src', 'misc.php?mod=seccode&update={$ran}&idhash='+ tmprandom +'&mobile=2');
		});
	})();
</script>
