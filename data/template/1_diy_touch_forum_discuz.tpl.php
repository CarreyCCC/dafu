<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');?>
<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:forum.php?mod=guide&view=hot');exit;?><?php } include template('common/header'); ?><script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if($_GET['visitclient']) { ?>

<header class="header">
    <div class="nav">
<span>溫馨提示</span>
    </div>
</header>
<div class="cl">
<div class="clew_con">
<h2 class="tit">掌上論壇手機客戶端</h2>
<p>隨時隨地上論壇<input class="redirect button" id="visitclientid" type="button" value="點擊下載" href="" /></p>
<h2 class="tit">iPhone,Andriod等智能手機</h2>
<p>直接登錄手機版，閱讀體驗更佳<input class="redirect button" type="button" value="訪問手機版" href="<?php echo $_GET['visitclient'];?>" /></p>
</div>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
} else {
window.location.href = '<?php echo $_GET['visitclient'];?>';
}
</script>

<?php } else { ?>

<!-- header start -->
<?php if($showvisitclient) { ?>

<div class="visitclienttip vm" style="display:block;">
<a href="javascript:;" id="visitclientid" class="btn_download">立即下載</a>	
<p>
下載新版掌上論壇客戶端，尊享多項看帖特權!
</p>
</div>
<script type="text/javascript">
var visitclienthref = getvisitclienthref();
if(visitclienthref) {
$('#visitclientid').attr('href', visitclienthref);
$('.visitclienttip').css('display', 'block');
}
</script>

<?php } ?>

<header class="header">
<div class="hdc cl">
<?php if($_G['setting']['domain']['app']['mobile']) { $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];?><?php } else { $nav = "forum.php";?><?php } ?>
<h2><a title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $nav;?>"><img src="./template/yunzhan_zq/style/img/logo.png" /></a></h2>

<ul style="float: right;line-height: 50px;color: white;">
<li><a style="color:#fff" href="https://www.aihx888.com/plugin.php?id=jingcai_7ree:jingcai_7ree">我要預測</a></li>

</ul>

<ul class="user_fun" style="display:none">
<li><a href="search.php?mod=forum" class="icon_search">搜索</a></li>
<li class="on"><a href="forum.php?forumlist=1" class="icon_threadlist">版塊列表</a></li>
<li id="usermsg"><a href="<?php if($_G['uid']) { ?>home.php?mod=space&uid=<?php echo $_G['uid'];?>&do=profile&mycenter=1<?php } else { ?>member.php?mod=logging&action=login<?php } ?>" class="icon_userinfo">用戶信息</a><?php if($_G['member']['newpm']) { ?><span class="icon_msg"></span><?php } ?></li>
<?php if($_G['setting']['mobile']['mobilehotthread']) { ?>
<li><a href="forum.php?mod=guide&amp;view=hot" class="icon_hotthread">熱帖</a></li>
<?php } ?>
</ul>
</div>
</header>
<!-- header end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>

<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>

<head>

<link rel=stylesheet type="text/css" href="template/yunzhan_zq/style/css/bootstrap.css">
<link rel=stylesheet type="text/css" href="template/yunzhan_zq/style/css/yunzhan.css">
</head>

<div class="landing" >

    <header id="L_header">
        <div class="L_banner" >
            <a href="https://www.aihx888.com/plugin.php?id=jingcai_7ree:jingcai_7ree">
                    <img src="./template/aihx888/images/map.jpg" width="100%" class="img-responsive">
            </a>
        </div>
    </header>

     <!-- event -->
    <div class="section" id="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-style"><span class="title-style--bg">活動辦法</span></h2>
                </div>
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="event-info">
                      <p class="event__list ">
                            <span class="textbg" style="font-size: 13px;">活動時間</span>即日起～2018.07.15  21:59:59止
                        </p>
                        <p class="event__list" style="font-size: 13px;">
                            <span class="textbg" style="font-size: 13px;">活動方式</span>
1. 手機掃碼QR CODE或登入活動網站,成功加入會員後,就送投票金幣100枚<br>
2. 加入會員必須信箱激活成功後才可以參加投票抽獎喔∼<br>
3. 結帳消費滿500就送一張投獎券(金幣100個),1000兩張,以此類推<br>
4. 登入會員後並輸入投票券序號馬上換金幣立刻參加投票<br>
5. 每場比賽只有一次競猜機會<br>
6. 每個人最高有32次投票權,不限場次,不限每場投次數,本次活動100個金幣為一次投票機會<br>
7. 每場賽事結束後翌日我們將抽出中獎者,名單將公布在活動網頁及FB粉絲頁<br>
8. 此活動為一次投票一個代幣,若活動結束未使用的代幣可累積至下一個活動使用</p>
                        <p class="event__list" style="font-size: 13px;">
                            <span class="textbg" style="font-size: 13px;">開獎方式</span>• 每場球賽結束後翌日將抽出得獎名單,公布於活動網頁及FB粉絲頁上<br>
                            • 中獎者官網系統會以Email方式發出中獎通知函,中獎玩家需另行與我方客服聯繫後續領獎事宜

                      </p>
                        <p class="event__list" style="font-size: 13px;">
                          <span class="textbg"style="font-size: 13px;" >領獎方式</span>• 填寫中獎確認單以郵寄或親領<br>• 客服需確認中獎者之身份<br>• 會計師確認無誤後即會通知領取/寄送獎品 </p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<!-- end event -->
<!-- lucky draw -->
    <div class="section" id="prize">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-style"><span class="title-style--bgw">活動獎品</span></h2>
                </div>
            </div>
<div class="row">
                <div class="col-md-4">
                    <div class="bigprize">
                        <img src="./template/aihx888/images/gift1.jpg" alt="" class="img-circle prize__img">
<h3 class="prize__title">決賽</h3>
                        <p class="prize__name">Apple Iphone X（64G)<br>產品價值：NT.33,000<span class="prize__price">場數：1場</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="otherprize">
                        <img src="./template/aihx888/images/gift2.jpg" alt="" class="img-circle prize__img">
<h3 class="prize__title">季軍</h3>
                        <p class="prize__name">任天堂Switch主機<br>產品價值：NT.10,000<span class="prize__price">場數：1場</span></p>
                    </div>
                    <div class="otherprize">
                        <img src="./template/aihx888/images/gift3.jpg" alt="" class="img-circle prize__img">
<h3 class="prize__title">4強</h3>
                        <p class="prize__name">Apple AirPods原廠無線藍牙耳機<br>產品價值：NT.5,000<span class="prize__price">場數：2場</span></p>
                    </div>
                </div>
 <div class="col-md-4">
                    <div class="otherprize">
                        <img src="./template/aihx888/images/gift4.jpg" alt="" class="img-circle prize__img">
<h3 class="prize__title">8強</h3>
                        <p class="prize__name">現金（郵政禮金）<br>產品價值：NT.3,500<span class="prize__price">場數：4場</span></p>
                    </div>
                    <div class="otherprize">
                        <img src="./template/aihx888/images/gift5.jpg" alt="" class="img-circle prize__img"> 
<h3 class="prize__title">16強</h3>
                        <p class="prize__name">Amazfit米動手錶青春版<br>產品價值：NT.2,000<span class="prize__price">場數：8場</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
      
    
    <!-- end lucky draw -->

    <!-- speaker -->
<div class="section section--bg" id="list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-style"><span class="title-style--bgc">中獎名單</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="speakerbox text-center">
                        <div class="speakerbox__img">
                            <img src="./template/aihx888/images/speaker.jpg" alt="" class="img-circle">
                        </div>
                        <h3 class="speakerbox__name">中獎名單-01</h3>
                        <h4 class="speakerbox__job">王小明</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="speakerbox text-center">
                        <div class="speakerbox__img">
                            <img src="./template/aihx888/images/speaker.jpg" alt="" class="img-circle">
                        </div>
                        <h3 class="speakerbox__name">中獎名單-02                        </h3>
                        <h4 class="speakerbox__job">王小明</h4>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="speakerbox text-center">
                        <div class="speakerbox__img">
                            <img src="./template/aihx888/images/speaker.jpg" alt="" class="img-circle">
                        </div>
                        <h3 class="speakerbox__name">中獎名單-03                        </h3>
                        <h4 class="speakerbox__job">王小明</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="speakerbox text-center">
                        <div class="speakerbox__img">
                            <img src="./template/aihx888/images/speaker.jpg" alt="" class="img-circle">
                        </div>
                        <h3 class="speakerbox__name">中獎名單-04                        </h3>
                        <h4 class="speakerbox__job">王小明</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- end speaker -->

</div>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', '<?php echo STATICURL;?>image/mobile/images/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', '<?php echo STATICURL;?>image/mobile/images/collapsed_no.png');
}
});
 })();
</script>

<?php } include template('common/footer'); ?>