<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('jingcai_index_7ree');?><?php include template('common/header'); ?><!--
ID: jingcai_7ree
[www.7ree.com] (C)2007-2017 7ree.com.
This is NOT a freeware, use is subject to license terms
Update: 2017/10/28 17:19
Agreement: http://addon.discuz.com/?@7.developer.doc/agreement_7ree_html
More Plugins: http://addon.discuz.com/?@7ree
-->

<link rel="stylesheet" type="text/css" href="source/plugin/jingcai_7ree/template/touch/image/touch_css_7ree.css?<?php echo VERHASH;?>">

<script type="text/javascript">

function escape_7ree(target){
return target.replace(/&amp;/g, "%%%%%");
}

function unescape_7ree(target){
return target.replace(/%%%%%/g, "&");
}

function goto_7ree(msg_7ree,url_7ree){
if(confirm(msg_7ree)){
url_7ree = unescape_7ree(url_7ree);
window.location = url_7ree;
 		return true;
}else return false;
}



function newjc_7ree(type_7ree,value_7ree,rid_7ree,option_7ree){
document.getElementById('zhichicard_7ree').style.display='block';
if(type_7ree==1){//≤¬Ω·π˚

if(value_7ree=='a'){
document.getElementById('wanfa_name_7ree').innerText='<?php echo $race_7ree['aname_7ree'];?>';
}else if(value_7ree=='b'){
document.getElementById('wanfa_name_7ree').innerText='<?php echo $race_7ree['bname_7ree'];?>';
}else if(value_7ree=='c'){
document.getElementById('wanfa_name_7ree').innerText="<?php if($jingcai_7ree_var['pingju_7ree'] && $race_7ree['rangqiufang_7ree']>0) { ?><?php echo $jingcai_7ree_var['pingju_7ree'];?><?php } else { ?>Âπ≥Â±Ä<?php } ?>";
}
document.getElementById('url_7ree').value=escape_7ree("plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=4&amp;win_7ree="+value_7ree+"&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree=");
}else if(type_7ree==2){//≤¬¥Û–°
if(value_7ree=='a'){
document.getElementById('wanfa_name_7ree').innerText='Â§ß<?php echo $race_7ree['daxiao_7ree'];?>';
}else if(value_7ree=='b'){
document.getElementById('wanfa_name_7ree').innerText='Â∞è<?php echo $race_7ree['daxiao_7ree'];?>';
}
document.getElementById('url_7ree').value=escape_7ree("plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=4&amp;daxiao_7ree=1&amp;win_7ree="+value_7ree+"&main_id_7ree=<?php echo $race_7ree['main_id_7ree'];?>&tid_7ree=<?php echo $race_7ree['tid_7ree'];?>&formhash=<?php echo FORMHASH;?>&myodds_7ree=");
}else if(type_7ree==3){//ø™∑≈ Ωæ∫≤¬
document.getElementById('wanfa_name_7ree').innerText=option_7ree;
document.getElementById('url_7ree').value=escape_7ree("plugin.php?id=x7ree_opengs:x7ree_opengs&amp;code_7ree=12&amp;id_7ree="+rid_7ree+"&option_7ree="+value_7ree+"&from_7ree=jc&formhash=<?php echo FORMHASH;?>&ext_7ree=");
}
}


function add_7ree(num_7ree){
    var num_7ree = parseInt(num_7ree);
    var oldnum_7ree = parseInt(document.getElementById('myodds_7ree').value);
    var nownum_7ree = isnan_7ree(oldnum_7ree)+num_7ree;
document.getElementById('myodds_7ree').value=MMsize_7ree(nownum_7ree);

}

function minus_7ree(num_7ree){
    var num_7ree = parseInt(num_7ree);
    var oldnum_7ree = parseInt(document.getElementById('myodds_7ree').value);
    var nownum_7ree = isnan_7ree(oldnum_7ree)-num_7ree;
document.getElementById('myodds_7ree').value=MMsize_7ree(nownum_7ree);
}

function isnan_7ree(Nnum_7ree){ 
    var Nnum_7ree;
    if(isNaN(Nnum_7ree)){
      Nnum_7ree = parseInt(<?php echo $race_7ree['reward_7ree'];?>);
    }else{
      Nnum_7ree = parseInt(Nnum_7ree);
    }
    return Nnum_7ree;
}

function MMsize_7ree(Snum_7ree){
    var Snum_7ree;
 
    if(Snum_7ree<<?php echo $race_7ree['reward_7ree'];?>){
Snum_7ree = <?php echo $race_7ree['reward_7ree'];?>; 
    }else if(Snum_7ree><?php echo $cost_7ree;?>){
        Snum_7ree = <?php echo $cost_7ree;?>;
    }  

    return Snum_7ree;
}

</script><?php include template('jingcai_7ree:jingcai_header_7ree'); ?><div id="ct" class="wp cl n">
<div class="mn">


<div class="datalist">
<?php if($_GET['ac_7ree'] == "") { include template('jingcai_7ree:jingcai_main_7ree'); } elseif($_GET['ac_7ree'] == "1") { include template('jingcai_7ree:jingcai_reward_7ree'); } elseif($_GET['ac_7ree'] == "2") { include template('jingcai_7ree:jingcai_admin_7ree'); } elseif($_GET['ac_7ree'] == "5") { include template('jingcai_7ree:jingcai_rank_7ree'); } elseif($_GET['ac_7ree'] == "6") { include template('jingcai_7ree:jingcai_top_7ree'); } elseif($_GET['ac_7ree'] == "7") { include template('jingcai_7ree:jingcai_guanzhu_7ree'); } elseif($_GET['ac_7ree'] == "10") { include template('jingcai_7ree:jingcai_viewlist_7ree'); } elseif($_GET['ac_7ree'] == "14") { include template('jingcai_7ree:jingcai_gaoshou_7ree'); } ?>
    	</div>

           <?php if($_G['adminid']==1 || $isadmins_7ree) { ?>
           	<ul class="tb cl">
            <li class="li_7ree <?php if($_GET['ac_7ree'] == '2') { ?> ths_7ree<?php } ?>" ><a href="plugin.php?id=jingcai_7ree:jingcai_7ree&amp;ac_7ree=2"><span>ÁÆ°ÁêÜÂì°Êìç‰ΩúÂè∞</span></a></li>
</ul>
            <?php } ?>

    </div>
</div><?php include template('jingcai_7ree:jingcai_footer_7ree'); include template('common/footer'); ?>