<?php echo 'Made by banzhuan,QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="tip">
<!--{if ($_GET['optgroup'] == 3 && $operation == 'delete') || ($_GET['optgroup'] == 4 && $operation == '')}-->
    <form id="moderateform" method="post" autocomplete="off" action="forum.php?mod=topicadmin&action=moderate&optgroup=$optgroup&modsubmit=yes&mobile=2" >
        <input type="hidden" name="frommodcp" value="$frommodcp" />
        <input type="hidden" name="formhash" value="{FORMHASH}" />
        <input type="hidden" name="fid" value="$_G[fid]" />
        <input type="hidden" name="redirect" value="{echo dreferer()}" />
        <input type="hidden" name="reason" value="{lang topicadmin_mobile_mod}" />
        <!--{loop $threadlist $thread}-->
            <input type="hidden" name="moderate[]" value="$thread[tid]" />
        <!--{/loop}-->
        <!--{if $_GET['optgroup'] == 3}-->
            <!--{if $operation == 'delete'}-->
                <!--{if $_G['group']['allowdelpost']}-->
                    <input name="operations[]" type="hidden" value="delete"/>
                    <dt>{lang admin_delthread_confirm}</dt>
					<dd><input type="submit" class="formdialog button2" name="modsubmit" id="modsubmit"  value="{lang confirms}"><a href="javascript:;" onclick="popup.close();">{lang cancel}</a></dd>
                <!--{else}-->
                    <dt>{lang admin_delthread_nopermission}</dt>
                <!--{/if}-->
            <!--{/if}-->
        <!--{elseif $_GET['optgroup'] == 4}-->
				<dt style="height:110px;">
                <p>{lang expire}:&nbsp;</p>
                <p>
                    <input type="text" name="expirationclose" id="expirationclose" class="px" autocomplete="off" value="$expirationclose"  />
                </p>
                <p>{lang admin_close_expire_comment}</p>
                <p>
                    <label><input type="radio" name="operations[]" class="pr" value="open" $closecheck[0] />{lang admin_open}</label></p>
                <p>
                    <label><input type="radio" name="operations[]" class="pr" value="close" $closecheck[1] />{lang admin_close}</label></p>
				</dt>
				<dd><input type="submit" name="modsubmit" id="modsubmit"  value="{lang confirms}" class="formdialog button2"><a href="javascript:;" onclick="popup.close();">{lang cancel}</a></dd>
        <!--{/if}-->
    </form>
<!--{else}-->
    	<dt>{lang admin_threadtopicadmin_error}</dt>
		<dd><input type="button" onclick="popup.close();" value="{lang confirms}" class="button2"></dd>
<!--{/if}-->
</div>
<!--{template common/footer}-->
