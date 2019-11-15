<?php /*a:1:{s:70:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\dh_gsbg.html";i:1573716721;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>淘钉智能财税-变更公司</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/static/home/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/css/gsbg.css"/>
    <link rel="stylesheet" href="/static/home/css/animate.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <!--[if lte IE 8]>
    <script src="js/html5-shiv.js"></script>
    <script src="js/jquery-1.11.3.js"></script>
    <![endif]-->
    <script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10180830/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script></head>
<body>
<!--网站头部-->

<!-- 10月淘钉智能财税活动 -->
<style>
    .anniver_nav {width: 100%;height: 62px;background: url(/static/home/images/10yue_nav.gif) top center;cursor: pointer;position: fixed;left: 0;top: 0; z-index: 888;}
    .anniver_nav a {display: block;height: 62px;}
</style>
<div style="height:62px" class="otherp"></div>
<div class="anniver_nav">
    <a href="http://tb.53kf.com/code/client/10180830/1" target="_blank"></a>
</div>
<script>
    var otherp=location.search.slice(1,3);
    if(otherp=="op"){
        $(".anniver_nav").hide();
        $(".otherp").hide();
    }
</script>
<!-- 10月淘钉智能财税活动 end-->
<header>
    <div class="top">
        <div class="center clearfix">
            <div class="tel"><a href="javascript:;">淘钉智能财税首页</a></div>
            <div class="phone">
                <ul>
                    <li><a href="./zcgs.php">注册公司</a>|</li>
                    <li><a href="./dljz.php">代理记账</a>|</li>
                    <li><a href="./cqzc.php">商标注册</a>|</li>
                    <li><a href="./cqzc.php">专利申请</a>|</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact clearfix">
        <div class="center clearfix">
            <h1>
                <a href="index.php"><img src="/static/home/picture/logo1.png"/></a>
            </h1>
            <nav>

                <ul class="clearfix">
                    <li><a href="./index.php">网站首页</a></li>
                    <li><a href="./zcgs.php">注册公司</a></li>
                    <li><a href="./dljz.php">代理记账</a></li>
                    <li><a href="./zzdb.php">资质代办</a></li>
                    <li><a href="./zscq.php">知识产权</a></li>
                    <li><a href="./gsbg.php">公司变更</a></li>
<!--                    <li><a href="./3a.php">证书办理</a></li>-->
                    <li><a href="./zxgs.php">注销公司</a></li>
                </ul>
            </nav>
            <div class="dh clearfix">
                <img src="/static/home/picture/tel_03.png" alt="电话">
                <h3>400-029-1105</h3>
            </div>
        </div>
    </div>
</header>

<script>
    $(function(){
        $("#cut,.cut_zhe,.cut_city").hover(function(){
            $(".cut_city").css("display","block");
            $(".cut_zhe").css("display","block");
            var a = $(".site").html();
            $(".need").html(a);
        },function(){
            $(".cut_city").css("display","none");
            $(".cut_zhe").css("display","none");
        })

    })
</script>
<!--网站主体-->
<div class="main">
    <!--banner-->
    <div class="banner">
        <div class="center">
            <a href="javascript:;" id="shangwutonggsbg"></a>
        </div>
    </div>
    <!--我们的优势-->
    <div class="advantage wow fadeInUp">
        <div class="center">
            <h2>我们的优势</h2>
            <h5>用心打造专业服务</h5>
            <div class="item">
                <ul class="clearfix">
                    <li class="clearfix">
                        <div class="left">快</div>
                        <div class="right">
                            <p>速度快</p>
                            <p>最快只需5天</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="left">省</div>
                        <div class="right">
                            <p>费用少</p>
                            <p>1000元起，最多节省30%</p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <div class="left">好</div>
                        <div class="right">
                            <p>服务好</p>
                            <p>精细服务，提高办理效率</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--新加下边-->
            <div class="change clearfix">
                <p>淘钉智能财税3大变更优势，助您快速完成变更</p>
                <a href="javascript:;" id="shangwutonggsbg">立即咨询</a>
            </div>
        </div>
    </div>
    <!--变更范围-->
    <div class="scope wow fadeInUp">
        <div class="center">
            <h2>变更范围</h2>
            <h5>全程一站式工商变更平台</h5>
            <div class="item">
                <ul class="clearfix">
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_03.png" alt="公司变更名称" class="bgfw"><img src="picture/scope_03.png" alt="公司变更名称" class="bgfw_hover">
                            <p>公司变更名称</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_05.png" alt="变更经营范围" class="bgfw"><img src="picture/scope_05.png" alt="变更经营范围"  class="bgfw_hover">
                            <p>变更经营范围</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_07.png" alt="变更注册资金" class="bgfw"><img src="picture/scope_07.png" alt="变更注册资金" class="bgfw_hover" >
                            <p>变更注册资金</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_09.png" alt="变更地址 " class="bgfw"><img src="picture/scope_09.png" alt="变更地址 " class="bgfw_hover">
                            <p>变更地址 </p></a>
                    </li>
                </ul>
                <ul class="clearfix">
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_21.png" alt="变更法定代表人" class="bgfw"><img src="picture/scope_21.png" alt="变更法定代表人" class="bgfw_hover">
                            <p>变更法定代表人</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_24.png" alt="变更董事/监事" class="bgfw"><img src="picture/scope_24.png" alt="变更董事/监事" class="bgfw_hover" >
                            <p>变更董事/监事</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_16.png" alt="变更股权/股东" class="bgfw"><img src="picture/scope_16.png" alt="变更股权/股东"  class="bgfw_hover">
                            <p>变更股权/股东</p></a>
                    </li>
                    <li id="shangwutonggsbg"><a href="http://tb.53kf.com/code/client/10180830/" target="_blank"><img src="/static/home/picture/scope_18.png" alt="咨询更多变更"   class="bgfw"><img src="picture/scope_18.png" alt="咨询更多变更"  class="bgfw_hover">
                            <p>咨询更多变更</p></a>
                    </li>
                </ul>
            </div>
            <!--新加下边-->
            <div class="change clearfix">
                <p>24小时免费变更电话：<span>400-029-1105</span></p>
                <a href="javascript:;" id="shangwutonggsbg">立即咨询</a>
            </div>
        </div>
    </div>
    <!--广告-->
    <!--<div class="guanggao">
        <div class="center">
            <a href="javascript:;" id="shangwutonggsbg"><img src="picture/1200x130_7.jpg" alt=""></a>
        </div>
    </div>-->
    <!--变更流程-->
    <div class="flow wow fadeInUp">
        <div class="center">
            <h2>变更流程</h2>
            <h5>交给淘钉智能财税，一切就是这么简单</h5>
            <div class="item">
                <ul class="clearfix">
                    <li class="li1">收集材料</li>
                    <li class="li2">网上登记</li>
                    <li class="li3">材料提交</li>
                    <li class="li4">领取执照</li>
                </ul>
                <div class="line"></div>
            </div>
            <!--新加下边-->
            <div class="change clearfix">
                <p>变更如有任何问题，都可以联系我们的在线客服</p>
                <a href="javascript:;" id="shangwutonggsbg">立即咨询</a>
            </div>
        </div>
    </div>
    <!--未及时变更的风险-->
    <div class="risk wow fadeInUp">
        <div class="center">
            <h2>未及时变更的风险</h2>
            <h5>营业执照信息发生变化，随即变更，避免一切风险</h5>
            <div class="item">
                <ul class="clearfix">
                    <li>
                        <div class="rs1">
                            <p>面临罚款</p>
                        </div>
                        <p class="describe">逾期不登记的，处以1万元以上10万元以下的罚款</p>
                    </li>
                    <li>
                        <div class="rs2">
                            <p>承担败诉风险</p>
                        </div>
                        <p class="describe">预期不变更，未接受法院文书无法出庭，承担败诉风险</p>
                    </li>
                    <li>
                        <div class="rs3">
                            <p>吊销营业执照</p>
                        </div>
                        <p class="describe">逾期不办理，情节严重，吊销营业执照</p>
                    </li>
                    <li>
                        <div class="rs4">
                            <p>无法收债</p>
                        </div>
                        <p class="describe">注册登记地和经营地不一致，导致债务履行困难</p>
                    </li>
                </ul>
            </div>
            <!--新加下边-->
            <div class="change clearfix">
                <p>24小时免费变更电话：<span>400-029-1105</span></p>
                <a href="javascript:;" id="shangwutonggsbg">立即咨询</a>
            </div>
        </div>
    </div>

    <!--淘钉智能财税变更优势对比-->
    <div class="comparison wow fadeInUp">
        <div class="center">
            <h2>淘钉智能财税变更优势对比</h2>
            <h5>选择淘钉智能财税，变更公司快人一步</h5>
            <div class="item clearfix">
                <div class="comp_head clearfix">
                    <p class="diyige">淘钉智能财税代办</p>
                    <p class="dierge">vs</p>
                    <p class="disange">传统财税公司代办</p>
                </div>
                <div style="width:100%;overflow:hidden;border:1px solid #f1f1f1;margin-top:50px">
                <ul class="comp_left">
                    <li>经验</li>
                    <li>服务</li>
                    <li>价格</li>
                    <li>售后</li>
                </ul>
                <ul class="comp_center">
                    <li>
                        <p class="title"><span>10年服务经验</span><span>专业顾问团队，拥有海量资源热情为您及时提供所需的政策信息</span></p>
                        <i></i>
                    </li>
                    <li>
                        <p class="title"><span>一对一专属顾问</span><span>真诚贴心服务，“金牌”信誉高</span></p>
                         <i></i>

                    </li>
                    <li>
                        <p class="title"><span>价格透明</span><span>关键节点考虑周全享受担保服务，公信力强</span></p>
                         <i></i>

                    </li>
                    <li>
                        <p class="title"><span>后续服务完善</span><span>方案实施后，对客户执行结果进行定期沟通了解</span></p>
                         <i></i>

                    </li>
                </ul>
                <ul class="comp_right">
                    <li>从业时间短，经验不丰富，服务项目单一 <i></i></li>
                    <li>多人接洽，效率低下，较为混乱<i></i></li>
                    <li>价格不统一，因人报价，忽悠消费者<i></i></li>
                    <li>后续客户无人管理，没有方向。找不到相关负责人，干着急<i></i></li>
                </ul>
                </div>
            </div>
            <div class="change clearfix">
                <p>变更如有任何问题，都可以联系我们的在线客服</p>
                <a href="javascript:;" id="shangwutonggsbg">立即咨询</a>
            </div>
        </div>
    </div>
    <!--广告-->
    <!--<div class="guanggao">
        <div class="center">
            <a href="javascript:;" id="shangwutonggsbg"><img src="picture/1200x130_8.jpg" alt=""></a>
        </div>
    </div>-->
    <!--客户评价-->
    <div class="evaluate wow fadeInUp">
        <div class="center">
            <h2>客户评价</h2>
            <h5>他们都选择了淘钉智能财税</h5>
            <div class="item">
                <ul class="clearfix">
                    <li class="left_1 hov">
                        <img src="/static/home/picture/appra_03.png" alt="潘晓明">
                        <p><span>淘钉智能财税公司同事细心负责，外勤态度也很好办事情速度快！能时时刻刻为客户着想！不会因客户大小而影响服务态度。随着公司的不断壮大，更加需要与淘钉智能财税的紧密合作，也衷心希望淘钉智能财税的服务越来越好，做出品质，公司业务交给淘钉做，我很放心！</span></p>
                    </li>
                    <li class="left_2">
                        <div class="hov">
                            <img src="/static/home/picture/appra_05.png" alt="">
                            <p><span>淘钉一次性就协助我准备好了全部资料，5天就公司变更就下来了，服务很好，我很满意。</span></p>
                        </div>
                        <div class="hov">
                            <img src="/static/home/picture/appra_14.png" alt="">
                            <p><span>选择淘钉办理了公司名称变更，准备好资料以后基本上我都没怎么管，公司变更就完成了，非常省事。</span></p>
                        </div>
                    </li>
                    <li class="center">
                        <div class="hov">
                            <img src="/static/home/picture/appra_07.png" alt="">
                            <p><span>在公司变更过程中，我不懂的问题一直都很详细的给我讲解，帮助我公司快速的完成了公司名称变更，服务很周到，我很满意。</span></p>
                        </div>
                        <div class="hov">
                            <img src="/static/home/picture/appra_18.png" alt="">
                            <p><span>淘钉办事效率很高，从开始准备变更到最后变更完成，中间只用了一个星期就完成了，很不错。</span></p>
                        </div>
                    </li>
                    <li class="right_1">
                        <div class="hov">
                            <img src="/static/home/picture/appra_09.png" alt="">
                            <p><span>公司变更经营范围的时候是在淘钉办理的，只用了10个工作日就办理好了，高效又及时，选择淘钉准没错。</span></p>
                        </div>
                        <div class="hov">
                            <img src="/static/home/picture/appra_16.png" alt="">
                            <p><span>感谢刘会计的尽心尽力，才让我们公司很快走上正轨。</span></p>
                        </div>
                    </li>
                    <li class="right_2 hov">
                        <img src="/static/home/picture/appra_11.png" alt="">
                        <p><span>我们是家外资企业，注册变更委托了淘钉智能财税，办证件都在约定的时间内提前办好，非常专业！所以代理记账也敢选择淘钉智能财税了，事实证明，会计专业有水准，服务好，办事效率高。</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--合作伙伴-->
<div class="partner wow fadeInUp">
    <div class="center">
        <h2>合作伙伴</h2>
        <h5>强强联手，淘钉智能财税助您创业</h5>
        <div class="item clearfix">
            <img src="/static/home/picture/coom_05.png" alt="阿里云" class="i1"/>
            <img src="/static/home/picture/coom_07.png" alt="百度"  class="i1 i2"/>
            <img src="/static/home/picture/coom_09.png" alt="京东云"  class="i1 i2"/>
            <img src="/static/home/picture/coom_11.png" alt="阿里巴巴"  class="i1 i2"/>
            <a href="http://www.cetpsp.com" target="_blank"><img src="/static/home/picture/coom_13.png" alt="云创空间"  class="i1 i2"/></a>
            <a href="http://www.gongsiba.com" target="_blank"><img src="/static/home/picture/coom_20.png" alt="公司吧" /></a>
            <img src="/static/home/picture/coom_21.png" alt="猪八戒" class="i2"/>
            <img src="/static/home/picture/coom_22.png" alt="百度云"  class="i2"/>
            <img src="/static/home/picture/coom_23.png" alt="阿里云创客" class="i2"/>
            <img src="/static/home/picture/coom_24.png" alt="腾讯开放平台" class="i2"/>
        </div>
    </div>
</div>
<!--五大特色-->
<div class="feature">
    <div class="center clearfix">
        <div class="div div1">
            <img src="/static/home/picture/feat_03.png" alt="" />
            <div>
                <h3>顾问团队</h3>
                <p>资深顾问团队<br>严格监督把控流程</p>
            </div>
        </div>
        <div class="div div2">
            <img src="/static/home/picture/feat_05.png" alt="性价比" />
            <div>
                <h3>性价比高</h3>
                <p>价格公开透明 <br>创建业界良好口碑</p>
            </div>
        </div>
        <div class="div div3">
            <img src="/static/home/picture/feat_07.png" alt="平台保障" />
            <div>
                <h3>平台保障</h3>
                <p>专业顾问<br>一站式一对一服务</p>
            </div>
        </div>

        <div class="div div4">
            <img src="/static/home/picture/feat_09.png" alt="高速快捷" />
            <div>
                <h3>高速快捷</h3>
                <p>全天快速响应，流程简单<br>办理进度实时推送</p>
            </div>
        </div>
        <div class="div div5">
            <img src="/static/home/picture/feat_11.png" alt="" />
            <div>
                <h3>安全保密</h3>
                <p>客户信息保密防泄露<br>省时省心，让您信赖选择</p>
            </div>
        </div>
    </div>
</div></div>
<!--网站尾部-->

<!--网站尾部-->
<footer>
    <div class="center">
        <div class="nav clearfix">
            <div><a href="zcgs.php">注册公司</a></div>
            <div class="line"></div>
            <div><a href="dljz.php">代理记账</a></div>
            <div class="line"></div>
            <div><a href="zzdb.php">资质代办</a></div>
            <div class="line"></div>
            <div><a href="zscq.php">知识产权</a></div>
            <div class="line"></div>
            <div><a href="gsbg.php">公司变更</a></div>
            <div class="line"></div>
            <div><a href="zxgs.php">注销公司</a></div>
        </div>
        <div class="item">
            <p>Copyright © 2013-2017 陕西淘丁实业集团有限公司. All rights reserved. 陕ICP备15016384号-8</p>
            <p>版权所有 抄袭必究 投诉拨打:029-68579161或17795782523</p>
        </div>
    </div>
</footer>


<!-- 10月淘钉智能财税活动 -->
<style>
    .bottom_anniver {position: fixed;bottom: 0;left: 0;width: 100%;z-index: 999;}
    .bottom_anniver .sectionBody {position: relative;margin:0 auto;width:1000px;}
    .bottom_anniver img {width: 100%;height: auto;display: block;margin: 0 auto;}
    .bottom_anniver .close,.left_anniver .close {position: absolute;top:0;right: 0;cursor: pointer;}
    .left_anniver {position: fixed;width:260px;height:240px;bottom: 0;left: 0;z-index: 999;display: none;}
    .left_anniver .aabtn{width:107px;height:25px;line-height:25px;display:block;border-radius:13px;background-color:#fff;text-align:center;color:#E02B30;position:absolute;bottom:12px;left:52px;font-size:13px;font-weight:bold;}
</style>
<div class="bottom_anniver">
    <div class="sectionBody">
        <div class="close"><img src="/static/home/picture/anniver_close.png"></div>
        <a href="http://tb.53kf.com/code/client/10180830/1" target="_blank"><img src="/static/home/picture/10yuepic.png"></a>
    </div>
</div>

<div class="left_anniver">
    <div class="close"><img src="/static/home/picture/anniver_close.png"></div>
    <a href="http://tb.53kf.com/code/client/10180830/1" target="_blank">
        <img src="/static/home/picture/10yuepic_l.png">
    </a>
</div>
<script>
    $('.bottom_anniver .close').click(function () {
        $('.bottom_anniver').hide();
        $('.left_anniver').show();
    })
    $('.left_anniver .close').click(function () {
        $('.left_anniver').hide();
    });
    var otherp=location.search.slice(1,3);
    if(otherp=="op"){
        $(".bottom_anniver").hide();
    }
</script>
<!-- 10月淘钉智能财税活动 end-->

<div class="tanchuang"></div>
<div id="alert">
    <a href="javascript:;" class="close">x</a>
    <!--<img src="picture/logo.png" alt="">-->
    <p>填写信息,获取查询结果</p>
    <form>
        <input type="text" name="uname" id="uname" placeholder="您的称呼" class="phone"  >
        <input type="text" name="mobile" id="phone" placeholder="您的电话号码" class="phone"  >
        <input type="button" value="获取结果" class="button" id="getrs">
    </form>
</div>

<!--如果需要加回到顶部 直接打开-->
<!--<div class="back2top" id="back2top">
    <a href="javascript:void(0);" title="回到顶部"></a>
</div>-->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
<script>
    /*实例化wow.js 文件*/
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
     new WOW().init();
     }
</script>



<script  type="text/javascript">var  cnzz_protocol  =  (("https:"  ==  document.location.protocol)  ?  "https://"  :  "http://");document.write(unescape("%3Cspan  id='cnzz_stat_icon_1277836527'%3E%3C/span%3E%3Cscript  src='"  +  cnzz_protocol  +  "s96.cnzz.com/z_stat.php%3Fid%3D1277836527%26show%3Dpic1'  type='text/javascript'%3E%3C/script%3E"));</script>
<script type="text/javascript" src="/static/home/js/20190723.js"></script>



</body>
</html>