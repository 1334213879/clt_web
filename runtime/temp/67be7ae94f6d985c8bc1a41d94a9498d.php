<?php /*a:1:{s:70:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\dh_zscq.html";i:1573726786;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>淘钉智能财税-知识产权</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/static/home/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/css/zscq.css"/>
    <link rel="stylesheet" href="/static/home/css/animate.min.css">
    <script src="/static/home/js/jquery-3.2.1.min.js"></script>
    <!--[if lte IE 8]>
    <script src="js/html5-shiv.js"></script>
    <script src="js/jquery-1.11.3.js"></script>
    <![endif]-->
    <!--<script src="<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10180830/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>"></script>-->
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
</script><!--网站主体-->
<div class="main">
    <!--banner-->
    <div class="banner">
        <div class="center">
            <p class="second">注册成功率高，20000+成功注册经验</p>
            <div class="item">
                <form action="" class="clearfix">
                    <div class="kuang clearfix">
                        <div class="select clearfix" id="selects">
                            <select id="edu" name="edu">
                                <option value="0">商标</option>
                                <option value="1">商标</option>
                                <option value="2">商标</option>

                            </select>
                        </div>
                        <input type="text" placeholder="请输入商标名称，如淘钉智能财税…">
                    </div>
                    <a id="button">免费查询能否注册</a>
                </form>
                <p>累计成交：<span class="counter">23905</span>件 上月成交：<span class="counter">568</span>件 昨日成交：<span class="counter">19</span>件</p>
                <div class="optgroup">
                    <p class="op1">商标1</p>
                    <p class="op2">商标2</p>
                    <p class="op3">商标3</p>
                </div>
            </div>
        </div>
    </div>
    <!--我们的服务-->
    <div class="service wow fadeInUp">
        <div class="center">
            <h2>我们的服务</h2>
            <h5>全程一站式知识产权注册平台</h5>
            <div class="item">
                <ul class="clearfix">
                    <li>
                        <div class="clearfix">
                            <img src="/static/home/picture/server_06.png" alt="商标注册">
                            <p><span class="title">商标服务</span><span class="cont">品牌建设，开启创业之路</span></p>
                        </div>
                        <p class="line"></p>
                        <a href="javascript:;" id="shangwutongzscq">我要申请></a>
                    </li>
                    <li class="li_er">
                        <div class="clearfix">
                            <img src="/static/home/picture/server_03.png" alt="专利申请">
                            <p><span class="title">专利申请</span><span class="cont">独占技术，保护创新成果</span></p>
                        </div>
                        <p class="line"></p>
                        <a>我要申请></a>
                    </li>
                    <li>
                        <div class="clearfix">
                            <img src="/static/home/picture/server_09.png" alt="版权登记">
                            <p><span class="title">版权登记</span><span class="cont">杜绝剽窃，维护权益创意</span></p>
                        </div>
                        <p class="line"></p>
                        <a>我要申请></a>
                    </li>
                </ul>
            </div>
            <div class="public_button clearfix">
                <img src="/static/home/picture/pic_03_1.png" alt="" class="char">
                <img src="/static/home/picture/24h.png" alt="" class="es">
                <p class="hot">免费热线</p>
                <img src="/static/home/picture/pic_05.png" alt="" class="phone_mobile">
            </div>
        </div>
    </div>
    <!--广告-->
   <!-- <div class="guanggao">
        <div class="center">
            <a href="javascript:;" id="shangwutongzscq"><img src="picture/1200x130_5.jpg" alt=""></a>
        </div>
    </div>-->
    <!--一次选择-享5大超值服务-->
    <div class="acme wow fadeInUp">
        <div class="center">
            <h2>一次选择-享5大超值服务</h2>
            <h5>业内出色的知识产权注册平台</h5>
            <div class="item">
                <ul class="clearfix">
                    <li><img src="/static/home/picture/acme1_03.png" alt="">
                        <p>免费专业分析服务</p>
                    </li>
                    <li><img src="/static/home/picture/acme1_05.png" alt="">
                        <p>及时申报服务</p>
                    </li>
                    <li><img src="/static/home/picture/acme1_07.png" alt="">
                        <p>办理状态随时通知</p>
                    </li>
                    <li><img src="/static/home/picture/acme1_09.png" alt="">
                        <p>快递正规服务</p>
                    </li>
                    <li><img src="/static/home/picture/acme1_11.png" alt="">
                        <p>免费享受售后服务</p>
                    </li>
                </ul>
            </div>
            <div class="promptly">
                <a href="javascript:;" id="shangwutongzscq">立即咨询详情</a>
                <img src="/static/home/picture/xiaoshou_03.png" alt="">
            </div>
        </div>
    </div>

    <!--服务优势-->
    <div class="advantage wow fadeInUp">
        <div class="center">
            <h2>服务优势</h2>
            <h5>你的专利，我们贴心保障</h5>
            <div class="item" style=" width:1200px;height:520px; box-shadow:0px 6px 14px 1px #dfdfdf;padding-top:50px;box-sizing: border-box">
                <div class="title">
                    <div class="title_kuang clearfix">
                        <span class="left">传统代理机构</span>
                        <span class="right">淘钉智能财税知识产权</span>
                    </div>
                    <span class="center">vs</span>
                    <h4>淘钉智能财税知识产权</h4>
                    <h4>传统知识产权公司</h4>
                </div>
                <div class="cont clearfix">
                    <ul>
                        <li>
                        明码标价，价格透明
                        <span></span>
                        </li>
                        <li>严格按照承诺时间完成全部流程，将申请时间缩短 <span></span></li>
                        <li>平台监管，随时处理服务质量问题 <span></span></li>
                        <li>专业团队，快速高效，数百名专业顾问随时 <span></span></li>
                    </ul>


                    <ul>

                        <li>价格混乱，需要用心甄别<span></span></li>
                        <li>正常情况下，提交材料颁发证书需要3-4个月<span></span></li>
                        <li>服务态度差，敢怒不敢言<span></span></li>
                        <li>缺少人手，增加沟通时间成本<span></span></li>
                    </ul>

                     <ol>
                            <li>价格</li>
                            <li>办证时间</li>
                            <li>服务</li>
                            <li>团队</li>
                    </ol>

                </div>
            </div>
            <div class="public_button clearfix">
                <img src="/static/home/picture/pic_09.png" alt="" class="char">
                <img src="/static/home/picture/24h.png" alt="" class="es">
                <p class="hot">免费热线</p>
                <img src="/static/home/picture/pic_05.png" alt="" class="phone_mobile">
            </div>
        </div>
    </div>
    <!--免费专业分析服务-->
    <div class="major wow fadeInUp">
        <div class="center">
            <h2>免费专业分析服务</h2>
            <h5>有效提高成功率</h5>
            <div class="item">
                <ul class="clearfix">
                    <li><img src="/static/home/picture/major_03.png" alt="">
                        <div>
                            <p>免费查询</p>
                            <span>30秒快速反馈查询结果</span>
                        </div>
                    </li>
                    <li><img src="/static/home/picture/major_05.png" alt="">
                        <div>
                            <p>双重检索</p>
                            <span>严格把关，降低注册风险</span>
                        </div>
                    </li>
                    <li><img src="/static/home/picture/major_07.png" alt="">
                        <div>
                            <p>多种解决方案</p>
                            <span>提高注册成功率</span>
                        </div>
                    </li>
                    <li><img src="/static/home/picture/major_09.png" alt="">
                        <div>
                            <p>一对一专属顾问</p>
                            <span>7x24小时提供专业解答</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="promptly">
                <a href="javascript:;" id="shangwutongzscq">立即咨询详情</a>
                <img src="/static/home/picture/xiaoshou_03.png" alt="">
            </div>
        </div>
    </div>
    <!--及时申报服务-->
    <div class="declare wow fadeInUp">
        <div class="center">
            <h2>及时申报服务</h2>
            <h5>产权注册，快人一步</h5>
            <div class="item">
                <ul class="clearfix">
                    <li>
                        <p class="title">无延时</p>
                        <p class="cont">极速注册，无延时报送，抢先拿证，防止被注册</p>
                        <a href="javascript:;" id="shangwutongzscq">了解极速注册</a></li>
                    <li>
                        <p class="title">高效可靠</p>
                        <p class="cont">及时申请，快速高效即时反馈；报送回执安全可靠</p>
                        <a href="javascript:;" id="shangwutongzscq">了解进度</a></li>
                    <li>
                        <p class="title">成功率高</p>
                        <p class="cont">淘钉专业团队，确保下发受理通知书，提高注册成功率</p>
                        <a href="javascript:;" id="shangwutongzscq">了解受理通知书</a></li>
                </ul>
            </div>
            <div class="public_button clearfix">
                <img src="/static/home/picture/pic_03_1.png" alt="" class="char">
                <img src="/static/home/picture/24h.png" alt="" class="es">
                <p class="hot">免费热线</p>
                <img src="/static/home/picture/pic_05.png" alt="" class="phone_mobile">
            </div>
        </div>
    </div>
    <!--办理状态随时通知-->
    <div class="inform wow fadeInUp">
        <div class="center">
            <h2>办理状态随时通知</h2>
            <h5>随时随地掌握办理信息</h5>
            <div class="item clearfix">
                <div class="title">全程一站式<br/>知识产权服务机构</div>
                <ul>
                    <li>服务流程节点透明，办理状态实时跟踪</li>
                    <li class="erji">采用专业软件APP、短信、微信、QQ等多种方式，及时通知客户服务进程，及相关事宜</li>
                    <li>随时监测注册动态，异常情况及时通知</li>
                    <li class="erji">淘钉智能财税沿用自主研发的管理软件，与之数据库同步，跟踪监测，一有状况随即告知</li>
                    <li>重要文件重点通知，极速寄送安全到家</li>
                    <li class="erji">受理通知书等相关证件下达，第一时间通知客户，并在同时为您免费寄送</li>
                </ul>
            </div>
            <div class="promptly">
                <a href="javascript:;"  id="shangwutongzscq">立即咨询详情</a>
                <img src="/static/home/picture/xiaoshou_03.png" alt="">
            </div>
        </div>
    </div>
    <!--发票快递正规服务-->
    <div class="invoice wow fadeInUp">
        <div class="center">
            <h2>发票快递正规服务</h2>
            <h5>顺丰快递保安全</h5>
            <div class="item">
                <ul class="clearfix">
                    <li><img src="/static/home/picture/icon_07.png" alt=""></li>
                    <li class="pinkage"><p>包邮</p></li>
                    <li class="operation equal">=</li>
                    <li class="char">
                        <img src="/static/home/picture/icon_13.png" alt="">
                        <p>国家正规发票</p>
                    </li>
                    <li class="operation plus">+</li>
                    <li class="char"><img src="/static/home/picture/icon_15.png" alt="">
                        <p>受理通知书</p>
                    </li>
                    <li class="operation plus">+</li>
                    <li class="char"><img src="/static/home/picture/icon_17.png" alt="">
                        <p>其他重要证件</p>
                    </li>
                </ul>
            </div>
            <div class="public_button clearfix">
                <img src="/static/home/picture/pic_03_1.png" alt="" class="char">
                <img src="/static/home/picture/24h.png" alt="" class="es">
                <p class="hot">免费热线</p>
                <img src="/static/home/picture/pic_05.png" alt="" class="phone_mobile">
            </div>
        </div>
    </div>
    <!--免费终身享受售后服务-->
    <div class="after_sale wow fadeInUp">
        <div class="center">
            <h2>免费终身享受售后服务</h2>
            <h5>一个诠释着业内精心服务的品牌</h5>
            <div class="item clearfix">
                <div class="left">
                    <p class="title">免费查询</p>
                    <p class="cont">只要输入名称，便可查到办理进度及相关<br/>状态</p>
                    <p class="title">免费品牌推广</p>
                    <p class="cont">公司推出免费品牌推广服务，为企业量身<br/>定制推广方案</p>
                </div>
                <div class="center">
                    <p class="cont">您办理一次业务</p>
                    <p class="title">终身享受售后服务</p>

                </div>
                <div class="right">
                    <p class="title">免费建立终身档案</p>
                    <p class="cont">建立信息终身档案，提供完善信息备份，进<br/>行整合式管理</p>
                    <p class="title">免费终身享受售后服务</p>
                    <p class="cont">免费检测服务，提供知识产权保护咨询<br/>建议，终身享受淘钉智能财税售后服务</p>
                </div>
            </div>
            <div class="promptly">
                <a href="javascript:;" id="shangwutongzscq">立即咨询详情</a>
                <img src="/static/home/picture/xiaoshou_03.png" alt="">
            </div>
        </div>
    </div>
    <!--广告-->
    <!--<div class="guanggao">
        <div class="center">
            <a href="javascript:;" id="shangwutongzscq"><img src="picture/1200x130_6.jpg" alt=""></a>
        </div>
    </div>-->
    <!--客户评价-->
    <div class="evaluate wow fadeInUp">
        <div class="center">
            <h2>客户评价</h2>
            <h5>我们成功为15000家公司长期记账报税，听听他们的声音</h5>
            <div class="item">
                <ul class="clearfix">
                    <li><img src="/static/home/picture/pingjia_03.png" alt="">
                        <p><span>合作了好多次了，淘钉财税不二选择。下次还来这里！</span></p>
                    </li>
                    <li><img src="/static/home/picture/pingjia_04.png" alt="">
                        <p><span>真心服务很好，工作人员很热心耐心，办起事来就是不错，我喜欢！</span></p>
                    </li>
                    <li><img src="/static/home/picture/pingjia_05.png" alt="">
                        <p><span>很早就听说淘钉了，感觉还不赖！办事效率和注册速度都很快，感谢淘钉</span></p>
                    </li>
                    <li><img src="/static/home/picture/pingjia_06.png" alt="">
                        <p><span>我就是在淘钉财税注册的，速度快、服务好！你们可以来看看</span></p>
                    </li>
                    <li><img src="/static/home/picture/pingjia_07.png" alt="">
                        <p><span>合作3年了，淘钉办事我们从来都很放心，不仅效率高，收费还比其他公司便宜不少。</span></p>
                    </li>
                    <li><img src="/static/home/picture/pingjia_08.png" alt="">
                        <p><span>在淘钉办理的发明专利申请，费用不仅比别的公司低，办事效率还很高，很满意。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_10.png" alt="">
                        <p><span>不得不给淘钉智能财税公司一个好评，淘钉智能财税的业务办理团队和过硬的服务质量为我节省了大把时间，我很满意。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_11.png" alt="">
                        <p><span>淘钉在业界口碑一直很好，这得力于淘钉的售前服务与售后跟踪非常到位，我是贴身体验过的，选择淘钉没有错。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_12.png" alt="">
                        <p><span>我们公司成立之初就选择了淘钉智能财税，初创企业非常需要淘钉智能财税这样的平台。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_13.png" alt="">
                        <p><span>淘钉智能财税服务效率非常高、非常专业、价格也很公道，所有专利在知识产权都有存档，让我们省去了不少麻烦。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_14.png" alt="">
                        <p><span>我对知识产权保护方面几乎完全不懂，淘钉智能财税为我们做出了很好的方案，非常感谢淘钉智能财税的帮助。</span></p>
                    </li>
                    <li class="q_se"><img src="/static/home/picture/pingjia_15.png" alt="">
                        <p><span>选择淘钉智能财税，等于选择了成功</span></p>
                    </li>
                </ul>
            </div>
            <div class="public_button clearfix">
                <img src="/static/home/picture/pic_03_1.png" alt="" class="char">
                <img src="/static/home/picture/24h.png" alt="" class="es">
                <p class="hot">免费热线</p>
                <img src="/static/home/picture/pic_05.png" alt="" class="phone_mobile">
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
<script src="/static/home/js/jquery.waypoints.min.js"></script>
<script src="/static/home/js/jquery.countup.min.js"></script>
<script src="/static/home/js/wow.min.js"></script>
<script src="/static/home/js/common.js"></script>
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
