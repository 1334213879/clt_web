<?php /*a:1:{s:70:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\dh_gszc.html";i:1573715985;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>淘钉智能财税-注册公司</title>
    <meta charset="utf-8" />
<link rel="stylesheet" href="/static/home/css/common_1.css" />
<link rel="stylesheet" type="text/css" href="/static/home/css/zcgs.css"/>
<link rel="stylesheet" href="/static/home/css/animate.min.css">
<script src="/static/home/js/jquery-3.2.1.min.js"></script>
<!--[if lte IE 8]>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/html5-shiv.js"></script>
<![endif]-->
<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10180830/1";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script></head>
<body style="position: relative;">
<!--网站头部-->

<!-- 10月淘钉智能财税活动 -->
<style>
    .anniver_nav {width: 100%;height: 62px;background: url(images/10yue_nav.gif) top center;cursor: pointer;position: fixed;left: 0;top: 0; z-index: 888;}
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
    <div class="banner">
        <div class="center">
            <h3>注册公司第一步，从公司核名开始</h3>
            <p class="title_2"><span>免费查询名称</span><em>|</em>3-5个工作日急速注册</p>
            <div class="form">
                <div class="seach clearfix">
                    <div class="input">
                        <img src="/static/home/picture/ban_03.png" alt="sear"><input type="text" class="i1" placeholder="  请输入您要查询的公司名称">
                    </div>
                    <button id="button">查询能否注册</button>
                </div>
                <div class="item clearfix">
                    <div class="item1 aaaa">
                        <img src="/static/home/picture/ban_07.png" alt="">
                        <p>查询结果</p>
                    </div>
                    <div class="item1">
                        <p>截止目前已有<span class="counter">  5871235</span>客户完成了查询</p>
                        <div class="lunxun">
                            <ul id="ul">
                                <li>西安**出国留学咨询服务有限公司<span>不能注册</span></li>
                                <li>西安**西餐饮娱乐有限公司<span>可以注册</span></li>
                                <li>陕西**科技有限公司<span>不能注册</span></li>
                                <li>陕西**信息科技有限公司<span>不能注册</span></li>
                                <li>西安**投资集团有限公司<span>不能注册</span></li>
                                <li>西安**实业集团有限公司<span>可以注册</span></li>
                                <li>陕西**地产开发有限公司<span>不能注册</span></li>
                                <li>西安**股份有限公司<span>可以注册</span></li>
                                <li>陕西**文化产业发展有限公司<span>不能注册</span></li>
                                <li>西安**能源科技有限公司<span>可以注册</span></li>
                                <li>陕西**实业集团有限公司<span>不能注册</span></li>
                                <li>西安**环境科技有限公司<span>不能注册</span></li>
                                <li>西安**商贸有限公司<span>不能注册</span></li>
                                <li>西安**电气有限公司<span>可以注册</span></li>
                                <li>陕西**投资控股有限公司<span>不能注册</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--数据统计-->
    <div class="statistics wow fadeInUp">
        <div class="center">
            <ul class="clearfix">
                <li>
                    <h3><span>5</span>年</h3>
                    <p>专注财税服务</p>
                </li>
                <li>
                    <h3><span class="counter">46814</span>家</h3>
                    <p>公司已成功注册</p>
                </li>
                <li>
                    <h3><span class="counter">500万</span>+</h3>
                    <p>公司名从这里核查</p>
                </li>
                <li>
                    <h3><span>100</span>+</h3>
                    <p>代理商遍布国内各地</p>
                </li>
            </ul>
        </div>
    </div>
    <!--真正极简 快捷流程-->
    <div class="flow wow fadeInUp">
        <div class="center">
            <h2>真正极简&nbsp;&nbsp;快捷流程</h2>
            <h5>3~5个工作日，急速注册</h5>
            <div class="item clearfix">
                <div class="a1">
                    <img src="/static/home/picture/flow_05_01.png" alt="heming" />
                    <p>核名</p>
                </div>
                <div class="a2">
                    <img src="/static/home/picture/flow_07_01.png" alt="sheli" />
                    <p>设立</p>
                </div>
                <div class="a3">
                    <img src="/static/home/picture/flow_09_01.png" alt="lqzz" />
                    <p>领取执照</p>
                </div>
                <div class="a4">
                    <img src="/static/home/picture/flow_11.png" alt="zcwc" />
                    <p>注册完成</p>
                </div>
            </div>
            <div class="heatray"><p>您在准备资料时，如遇到任何问题，都可以免费电话咨询：</p></div>
        </div>
    </div>
    <!--注册公司所需资料-->
    <div class="material wow fadeInUp">
        <div class="center">
            <h2>注册公司所需资料</h2>
            <h5>在淘钉智能财税，您只需要提供</h5>
            <div class="item">
                <div class="clearfix">
                    <ul class="ul_1">
                        <li>客户准备</li>
                        <li>1. 内资公司设立登记申请书</li>
                        <li>2. 企业名称预先核准通知书</li>
                        <li>3. 指定（委托）书</li>
                        <li>4. 补充信息登记表</li>
                    </ul>
                    <ul>
                        <li>工商部门领取或下载</li>
                        <li>1. 公司章程</li>
                        <li>2. 股东资格证明</li>
                        <li>3. 住所使用证明</li>
                        <li>4. 许可项目审批文件</li>
                    </ul>
                </div>
                <p>淘钉智能财税致力于给您最好的服务体验，咨询电话：400-029-1105<a href="javascript:;" id="shangwutongzcgs">立即咨询<img src="/static/home/picture/hand_13.png" alt="小手"></a></p>
            </div>
        </div>
    </div>
    <!--您能拿到的材料-->
    <div class="mater wow fadeInUp">
        <div class="center">
            <h2>您能拿到的材料</h2>
            <h5>从2016年10月起全国统一实行五证合一</h5>
            <div class="item">
                <div class="photo clearfix">
                    <div class="c1"><img src="/static/home/picture/mater_35.png" alt="ssss" /></div>
                    <div class="c2"><img src="/static/home/picture/mater_37.png" alt="charter" /></div>
                    <div class="c3">
                        <img src="/static/home/picture/mater_39.png" alt="License" />
                        <p>1.营业执照(正、副本)</p>
                        <p>2.企业统一社会信息代码证明</p>
                        <p>3.公司章程</p>
                        <p>4.房屋租赁合同</p>
                        <p>5.公司印章及印鉴留存卡</p>
                    </div>
                </div>
                <p class="redian"><em></em>注册如有什么问题,请拨打我们的客户热线： <span>400-029-1105</span><a href="javascript:;"  id="shangwutongzcgs">立即咨询<img src="/static/home/picture/heade_05.jpg" alt="小手"></a></p>
            </div>
        </div>
    </div>
    <!--公司成立后-->
    <div class="setup wow fadeInUp">
        <div class="center">
            <h2>公司成立后</h2>
            <h5>您还可能需要</h5>
            <div class="item">
                <ul class="clearfix">
                    <li>
                        <img src="/static/home/picture/setup_09.png" alt="刻章">
                        <p>刻章</p>
                    </li><li>
                        <img src="/static/home/picture/setup_11.png" alt="银行开户">
                        <p>银行开户</p>
                    </li><li>
                        <img src="/static/home/picture/setup_13.png" alt="征管鉴定">
                        <p>征管鉴定</p>
                    </li><li>
                        <img src="/static/home/picture/setup_16.png" alt="税务记账">
                        <p>税务记账</p>
                    </li>
                </ul>
                <div class="consult">
                    <p><em></em>淘钉智能财税致力于给您最好的服务体验，咨询电话：<span>400-029-1105</span><a href="javascript:;" id="shangwutongzcgs">立即咨询<img src="/static/home/picture/hand_13.png" alt="小手"></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--为什么要选择淘钉智能财税-->
    <div class="advantage wow fadeInUp">
        <div class="center">
            <h2>为什么要选择淘钉智能财税</h2>
            <h5>5家直属分支机构，50000+客户的共同选择</h5>
            <div class="item">
                <ul class="clearfix">
                    <li>
                        <h4>省钱<img src="/static/home/picture/advv_03.png" alt="省钱"></h4>
                        <p>全程专业化办理，标准化操作，无隐形收费，让您省钱；</p>
                    </li>
                    <li>
                        <h4>省时<img src="/static/home/picture/advv_03.png" alt="省时"></h4>
                        <p>复杂的事情交给我们，提高办事效率的同时为您节约时间；</p>
                    </li>
                    <li>
                        <h4>省心<img src="/static/home/picture/advv_03.png" alt="省心"></h4>
                        <p>从注册、报到、税控审批，专业服务，让您做到省心；</p>
                    </li>
                    <li>
                        <h4>省力<img src="/static/home/picture/advv_03.png" alt="省力"></h4>
                        <p>一次性准备资料，专人帮你办理，一站式服务，让您做到省力</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--认真解答 常见问题-->
    <div class="faq wow fadeInUp">
        <div class="center">
            <h2>认真解答 常见问题</h2>
            <h5>您想问的都在这里</h5>
            <div class="item">
                <ul>
                    <li>
                        <h4>我没有注册地址， 听说虚拟地址可以注册公司，你们这里提供虚拟地址吗？</h4>
                        <p><span>答：</span>当您不想花高额的租金租写字楼，您可以用我们提供的虚拟地址来注册公司，我们提供的这些虚拟地址都是在工商局备过案的，您可以放心使用。</p>
                    </li>
                    <li>
                        <h4>注册100万的公司 ，需要一次缴清吗？</h4>
                        <p><span>答：</span>不用，2014年3月1日后，公司注册改革，注册资本从实缴改为认缴。也就说，你现在只需拿出1元，即可注册。</p>
                    </li>
                    <li>
                        <h4>认缴是随便写注册资本数额吗？</h4>
                        <p><span>答：</span>公司认缴的出资额将通过"市企业信用信息网"向社会公示，因此，请股东在认缴出资时充分考虑到自身所具有的投资能力，理性确定认缴金额。</p>
                    </li>
                    <li>
                        <h4>我以前注册的公司 被吊销了？能注册新公司吗？</h4>
                        <p><span>答：</span>不行，被吊销后你会上工商和税务机关的黑名单，工商一般3年自动解除，税务必须缴纳罚款后才能解除。</p>
                    </li>
                </ul>
                <p class="redian"><em></em>注册如有什么问题,请拨打我们的客户热线： <span>400-029-1105</span><a href="javascript:;" id="shangwutongzcgs">立即咨询<img src="/static/home/picture/heade_05.jpg" alt="小手"></a></p>
            </div>
        </div>
    </div>
    <!--他们都在这里-->
    <div class="client wow fadeInUp">
        <div class="center">
            <h2>他们都在这里</h2>
            <h5>源自优质服务</h5>
            <div class="item clearfix">
                <div class="rw">
                    <img src="/static/home/picture/pic_39.png" alt="程总" class="m"/>
                    <h6 class="n"><span>想要注册公司，但不知道哪个代理机构比较好，结果朋友给我推荐了淘钉智能财税，真心不错，果然没让我失望。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_41.png" alt="田总" class="m"/>
                    <h6 class="n"><span>找淘钉智能财税代理注册公司真是个不错的选择，工作人员不仅服务态度比较好而且办事效率也很高，值得信赖。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_43.png" alt="祁总" />
                    <h6><span>选择淘钉智能财税注册公司是我创业路上最正确的选择，委托淘钉完全放心。一站式的服务，非常感谢淘钉。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_45.png" alt="陈总" />
                    <h6><span>创业路上有淘钉智能财税相伴，对于我们来说是非常有帮助的，感谢淘钉能够从刚开始一直帮助我们。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_47.png" alt="段总" />
                    <h6><span>开始还在犹豫，但是来淘钉智能财税了解了一下，果断选择淘钉智能财税，结果让我非常的开心，感谢淘钉。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_49.png" alt="赵总" />
                    <h6><span>听说了淘钉很多次了，这次注册公司找了淘钉，果然，淘钉办事效率很高，而且不乱收费用，所以我很庆幸选择了淘钉。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_51.png" alt="张总" />
                    <h6><span>淘钉办理注册公司是全程化透明的服务，既方便又快速，只需提交相关材料就能够进行办理，我非常喜欢。</span></h6>
                </div>
                <div class="rw">
                    <img src="/static/home/picture/pic_60.png" alt="许总" />
                    <h6><span>朋友推荐我来淘钉注册公司，刚开始还有些担心，但是来公司接触过之后发现淘钉不仅拥有专业的团队，非常值得信任。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_61.png" alt="贾总" />
                    <h6><span>当时想要注册公司，什么都不懂，还好选择了淘钉智能财税帮我们代办，只需要提交材料，很快速的就帮我们拿到了营业执照。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_62.png" alt="张总" />
                    <h6><span>注册公司选择了淘钉智能财税，并且工作人员详细的给我讲解了我不懂的问题，这服务态度绝对满分，很不错。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_63.png" alt="陈总" />
                    <h6><span>注册公司时不知道可以注册哪种类型的，淘钉员工不厌其烦的给我解说，帮助我注册的公司，所以说选择淘钉真的很棒。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_64.png" alt="杨总" />
                    <h6><span>在淘钉注册公司已经有一年多了，淘钉售后工作做的特别到位，有朋友注册公司我都会推荐淘钉智能财税的。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_65.png" alt="马总" />
                    <h6><span>淘钉的业界口碑很好，办理事情起来也是非常的迅速，相比同行业，价格也是非常合理的，我非常看好淘钉。</span></h6>
                </div>
                <div>
                    <img src="/static/home/picture/pic_66.png" alt="韩总" />
                    <h6><span>注册公司时选择了淘钉智能财税，并且在注册完公司之后也给了我很多帮助，就选淘钉智能财税，真是个不错的决定。</span></h6>
                </div>
            </div>
        </div>
    </div>
    <!--常见问题-->
    <div class="regfaq wow fadeInUp">
        <div class="center">
            <h2>更多问题</h2>
            <h5>您想看的都在这里，咨询就解决</h5>
            <div class="item clearfix">
                <ul>
                    <li><a href="javascript:;"><img src="/static/home/picture/faq_03.png" alt="问题1" /></a></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 办理餐饮营业执照需要什么资料？</a> <em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 办理个体工商户营业执照需要什么资料…</a><em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 租赁公司的注册条件是什么？</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 住宅可以注册公司吗？</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 资产管理公司注册，都需要哪些资料？</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 注册物业公司需要什么条件？</a><em>09-15</em></li>
                </ul>
                <ul>
                    <li><a href="javascript:;"><img src="/static/home/picture/faq_051.png" alt="问题2" /></a></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 注册投资管理公司需要什么条件？</a> <em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 注册教育公司的经营范围？</a><em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 在西安注册公司到哪里注册？ </a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 成立物流公司需要什么条件…</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 代办公司注册费用是多少钱？</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 没有地址可以注册公司吗？</a><em>09-15</em></li>
                </ul>
                <ul>
                    <li><a href="javascript:;"><img src="/static/home/picture/faq_07.png" alt="问题3" /></a></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 电子商务公司的注册流程…</a> <em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 劳务派遣公司注册，条件是什么？</a><em>09-15</em></li>
                    <li  class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 注册有限责任公司需要什么资料？ </a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 房地产开发公司注册流程…</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 分公司需要注册资金吗…</a><em>09-15</em></li>
                    <li class="clearfix"><a href="http://tb.53kf.com/code/client/10180830/">◆ 自贸区内怎么注册公司？条件是什么？</a><em>09-15</em></li>
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
        <a href="http://tb.53kf.com/code/client/10180830/1" target="_blank"><img src="picture/10yuepic.png"></a>
    </div>
</div>

<div class="left_anniver">
    <div class="close"><img src="/static/home/picture/anniver_close.png"></div>
    <a href="http://tb.53kf.com/code/client/10180830/1" target="_blank">
        <img src="picture/10yuepic_l.png">
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
<script type="text/javascript" src="js/20190723.js"></script>



</body>
</html>