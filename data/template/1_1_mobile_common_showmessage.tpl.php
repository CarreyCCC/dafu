<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('showmessage');?><?php include template('common/header'); ?><div class="f_c">
<div id="messagetext">
<p><?php echo $show_message;?></p>
        <?php if($_G['forcemobilemessage']) { ?>
        	<p >
            	<a href="<?php echo $_G['setting']['mobile']['pageurl'];?>" class="mtn">繼續訪問</a><br />
                <a href="javascript:history.back();">返回上一頁</a>
            </p>
        <?php } if($url_forward) { ?>
<p><a href="<?php echo $url_forward;?>">點擊此鏈接進行跳轉</a></p>
<?php } elseif($allowreturn) { ?>
<p><a href="javascript:history.back();">[ 點擊這裡返回上一頁 ]</a></p>
<?php } ?>
</div>
</div><?php include template('common/footer'); ?>