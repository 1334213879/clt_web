<?php /*a:2:{s:74:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\index_index.html";i:1573638985;s:74:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\common_head.html";i:1573639500;}*/ ?>
<html lang="zh_cn">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($info['title']) ? htmlentities($info['title']) : ($title ? $title : $config['title']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php echo isset($info['keywords']) ? htmlentities($info['keywords']) : ($keywords ? $keywords : $config['keyword']); ?>">
    <meta name="description" content="<?php echo isset($info['description']) ? htmlentities($info['description']) : ($description ? $description : $config['info']); ?>">
    <link rel="stylesheet" href="/static/home/css/common_index.css">
    <link rel="stylesheet" href="/static/home/css/index.css" />
    <link rel="stylesheet" href="/static/home/css/animate.min.css" />
    <script src="/static/home/js/jquery-3.2.1.min.js"></script>
    <script src="/static/home/js/wow.min.js"></script>
</head>
<body>
<!-- <div class="fly-header layui-bg-black">
    <div class="layui-container">
        <a class="fly-logo" href="<?php echo htmlentities($config['domain']); ?>">
            <img src="<?php echo htmlentities($config['logo']); ?>" alt="layui">
        </a>
        <ul class="layui-nav fly-nav layui-hide-xs">
            <li class="layui-nav-item <?php if($controller == 'index'): ?>layui-this<?php endif; ?>">
            <a href="<?php echo htmlentities($config['domain']); ?>">首页</a>
            </li>
            <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="layui-nav-item <?php if($controller == $vo['catdir']): ?>layui-this<?php endif; ?>" >

            <?php if($vo['child'] == 1): ?>
            <a href="javascript:;"><?php echo htmlentities($vo['catname']); ?></a>
            <dl class="layui-nav-child">
                <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                <dd><a href="<?php echo htmlentities($v['url']); ?>" <?php if($v['type'] == 1): ?> target="_blank"<?php endif; ?>><?php echo htmlentities($v['catname']); ?></a></dd>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
            <?php else: ?>
            <a href="<?php echo htmlentities($vo['url']); ?>" <?php if($vo['type'] == 1): ?> target="_blank"<?php endif; ?>><?php echo htmlentities($vo['catname']); ?></a>
            <?php endif; ?>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <ul class="layui-nav fly-nav-user">

            <?php if($userInfo): ?>
            <li class="layui-nav-item">
                <a class="fly-nav-avatar" href="<?php echo url('user/index/index'); ?>">
                    <cite class="layui-hide-xs"><?php echo htmlentities($userInfo['username']); ?></cite>
                    <i class="layui-badge fly-badge-vip layui-hide-xs"><?php echo htmlentities($userInfo['level']); ?></i>
                    <img src="<?php echo session('user.avatar'); ?>">
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="<?php echo url('user/index/index'); ?>"><i class="layui-icon" style="margin-left: 2px; font-size: 22px;">&#xe68e;</i>我的主页</a></dd>
                    <dd><a href="<?php echo url('user/set/index'); ?>"><i class="layui-icon">&#xe620;</i>基本设置</a></dd>
                    <dd><a href="<?php echo url('user/message/index'); ?>"><i class="iconfont icon-tongzhi" style="top: 4px;"></i>我的消息</a></dd>
                    <hr style="margin: 5px 0;">
                    <dd><a href="<?php echo url('user/index/loginout'); ?>" style="text-align: center;">退出</a></dd>
                </dl>
            </li>
            <?php else: ?>
            <!-- 未登入的状态 -->
            <!-- <li class="layui-nav-item">
                <a class="iconfont icon-touxiang layui-hide-xs" href="<?php echo url('user/login/index'); ?>"></a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo url('user/login/index'); ?>">登入</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div> -->
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
            <div class="tel">淘钉智能财税
               
            </div>
            <div class="phone">
               
            </div>
        </div>
    </div>
    <div class="contact clearfix">
        <div class="center clearfix">
            <h1>
                <a href="javascript:;"><img src="/static/home/picture/logo.png" alt="LOGO" style="width: 85%;"/></a>
                <img src="/static/home/picture/top1.png" alt="wenzi" class="char"/>
            </h1>

            <div class="top-right">
                <ul class="clearfix" id="types">
                    <li><a href="chat/1" class="moren" id="service">找服务</a></li>
                    <li><a href="http://tb.53kf.com/code/client/10180830/" id="zdz">找代账</a></li>
                    <li><a href="http://tb.53kf.com/code/client/10180830/" id="cgs">查公司</a></li>
                    <li><a href="http://tb.53kf.com/code/client/10180830/" id="csb">查商标</a></li>
                </ul>
                <div class="form">
                    <input type="text" name="" id="search" placeholder="请输入您要查找的服务"/><button  id="sousu"><img src="/static/home/picture/top2.png" alt="箭头"/>搜索</button>
                </div>
                <div class="bot_nav">
                    <a href="http://tb.53kf.com/code/client/10180830/">公司注册</a><a href="http://tb.53kf.com/code/client/10180830/">商标注册</a><a href="http://tb.53kf.com/code/client/10180830/">资质代办</a><a href="http://tb.53kf.com/code/client/10180830/">代理记账</a>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="center">
            <ul class="clearfix aaa">
                <li class="all"><a href="javascript:;"><img src="/static/home/picture/menu_03.png" alt="菜单" /><span>快速办理</span></a></li>
                <li class="er_li"><a href="/">网站首页</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">公司注册</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">代理记账</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">资质代办</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">知识产权</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">公司变更</a></li>
                <li><a href="<?php echo url("","",true,false);?>" target="_blank">公司注销</a></li>
                <li class="hot_line"><img src="/static/home/picture/hot_line_03.png" alt="联系电话" /><span>400-029-1105</span></li>
            </ul>
        <div class="navv">
            <ul>
                <li><span class="i i1"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要注册公司</a><!--<span class="jt"></span>--></li>
                <li><span class="i i2"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要代理记账</a><!--<span class="jt"></span>--></li>
                <li><span class="i i3"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要变更公司</a><!--<span class="jt"></span>--></li>
                <li><span class="i i4"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要代办资质</a><!--<span class="jt"></span>--></li>
                <li><span class="i i5"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要办理知识产权</a><!--<span class="jt"></span>--></li>
                <li><span class="i i6"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要注销公司</a><!--<span class="jt"></span>--></li>
                <li><span class="i i7"></span><a href="http://tb.53kf.com/code/client/10180830/" target="_blank">我要办理高级财税</a><!--<span class="jt"></span>--></li>
            </ul>
        </div>
        </div>
    </nav>
</header>

<div class="main">
<!--网站bannner-->
<div class="home-banner">
    <ul>
        <li>
            <a href="javascript:;" target="_blank">
                <img src="/static/home/picture/banner_02.jpg" alt="http://www.taoding.cn/sem/pc/img/index/banner_02.jpg">
            </a>
        </li>
      <li>
            <a href="http://www.tdcaiwu.com/active_201903/pc/" target="_blank">
                <img src="/static/home/picture/banner_03.jpg" alt="http://www.taoding.cn/sem/pc/img/index/banner_03.jpg">
            </a>
        </li>
    </ul>
    <ol></ol>
</div>
<!--优惠和活动-->
<div class="discounts wow fadeInUp">
    <div class="center">
        <div class="dis_title clearfix">
            <div class="a2"><p class="huodong_h3">活动优惠 <span>热销</span></p></div> <div class="a1"><p class="huodong_h3">热门推荐 <span>Hot</span></p></div>
        </div>
        <div class="item">
            <ul class="clearfix">
                <li class="one_li">
                    <p class="eat_h4">餐饮服务许可证</p>
                    <div class="item1">
                        <div class="">
                            <p>￥3500起</p>
                            <a	href="chat/1" id="shangwutong">我要办理</a>
                        </div>
                        <img src="/static/home/picture/hot_03.png" alt="" />
                    </div>
                </li>
                <li class="two_li">
                    <p class="eat_h4">小规模纳税人代账</p>
                    <div class="item1">
                        <div class="">
                            <p>￥199起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要代账</a>
                        </div>
                        <img src="/static/home/picture/hot_05.png" alt="" />
                    </div>
                </li>
                <li class="san_li">
                    <p class="eat_h4">有限责任公司注册</p>
                    <div class="item1">
                        <div class="">
                            <p>￥0起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">立即注册</a>
                        </div>
                        <img src="/static/home/picture/hot_07.png" alt="" />
                    </div>
                </li>
                <li class="four_li">
                    <p class="eat_h4">普通商标注册</p>
                    <div class="item1">
                        <div class="">
                            <p>￥1200起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要注册</a>
                        </div>
                        <img src="/static/home/picture/hot_09.png" alt="" />
                    </div>
                </li>
                <li class="five_li">
                    <p class="eat_h4">食品经营许可证</p>
                    <div class="item1">
                        <div class="">
                            <p>￥3000起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要代办</a>
                        </div>
                        <img src="/static/home/picture/hot_11.png" alt="" />
                    </div>
                </li>
            </ul>
        </div>
        <div class="item div_item">
            <ul class="clearfix">
                <li class="one_li">
                    <p class="eat_h4">餐饮服务许可证</p>
                    <div class="item1">
                        <div class="">
                            <p>￥3500起</p>
                            <a	href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要办理</a>
                        </div>
                        <img src="/static/home/picture/hot_03.png" alt="" />
                    </div>
                </li>
                <li class="two_li">
                    <p class="eat_h4">小规模纳税人代账</p>
                    <div class="item1">
                        <div class="">
                            <p>￥199起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要代账</a>
                        </div>
                        <img src="/static/home/picture/hot_05.png" alt="" />
                    </div>
                </li>
                <li class="san_li">
                    <p class="eat_h4">有限责任公司注册</p>
                    <div class="item1">
                        <div class="">
                            <p>￥0起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">立即注册</a>
                        </div>
                        <img src="/static/home/picture/hot_07.png" alt="" />
                    </div>
                </li>
                <li class="four_li">
                    <p class="eat_h4">普通商标注册</p>
                    <div class="item1">
                        <div class="">
                            <p>￥1200起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要注册</a>
                        </div>
                        <img src="/static/home/picture/hot_09.png" alt="" />
                    </div>
                </li>
                <li class="five_li">
                    <p class="eat_h4">食品经营许可证</p>
                    <div class="item1">
                        <div class="">
                            <p>￥3000起</p>
                            <a href="http://tb.53kf.com/code/client/10180830/" id="shangwutong">我要代办</a>
                        </div>
                        <img src="/static/home/picture/hot_11.png" alt="" />
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--创业必备服务-->
<div class="essential wow fadeInUp">
    <div class="center">
        <p class="h22">创业必备服务</p>
        <p class="h55">淘钉智能财税助您快速创业</p>
        <div class="item">
            <ul class="clearfix">
                <li>
                    <a href="javascript:;">
                        <img src="/static/home/picture/ess_03.png" alt="" />
                        <p class="chuangye_h4">注册公司</p>
                        <p>创业者精选服务，为您的企业发展助力</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/static/home/picture/ess_05.png" alt="" />
                        <p class="chuangye_h4">代理记账</p>
                        <p>会计核算不健全，淘钉智能财税解决您的记账问题</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/static/home/picture/ess_07.png" alt="" />
                        <p class="chuangye_h4">资质代办</p>
                        <p>创业企业必备，高效安全，一步到位，超高性价比</p>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <img src="/static/home/picture/ess_09.png" alt="" />
                        <p class="chuangye_h4">知识产权</p>
                        <p>商标服务、专利申请、版权登记多项服务，专人全程跟进</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--服务流程-->
<div class="flow wow fadeInUp">
    <div class="center">
        <p class="h22">服务流程</p>
        <p class="h55">5分钟快速响应，综合化管理，只需5步</p>
        <div class="item">
            <ul class="clearfix">
                <li>
                    <p class="zixun_h4">在线咨询</p>
                    <div class="p">
                        <p>-咨询客户</p>
                        <p>-400电话</p>
                        <p>-需求分析</p>
                        <p>-分配对接</p>
                    </div>
                </li>
                <li class="even">
                    <div class="p1">
                        <p>-私人定制</p>
                        <p>-介绍业务</p>
                        <p>-详谈巨细</p>
                    </div>
                    <p class="zixun_h4">商务咨询</p>
                </li>
                <li>
                    <p class="zixun_h4">签订合同</p>
                    <div class="p">
                        <p>-资料收集</p>
                        <p>-填写信息</p>
                        <p>-签订合同</p>
                    </div>
                </li>
                <li class="even">
                    <div class="p1">
                        <p>-立即办理</p>
                        <p>-进度告知</p>
                        <p>-完成服务</p>
                    </div>
                    <p class="zixun_h4">业务办理</p>
                </li>
                <li>
                    <p class="zixun_h4">售后服务</p>
                    <div class="p">
                        <p>-全程跟踪</p>
                        <p>-客户回访</p>
                        <p>-服务评价</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--服务优势-->
<div class="advantage wow fadeInUp">
    <div class="center">
        <p class="h22">服务优势</p>
        <p class="h55">实力说明一切</p>
        <div class="item clearfix">
            <ul>
                <li>
                    <p class="youshi_h4">我们的经验</p>
                    <p>数年行业经验，已成功为46000多家公司免费注册公司，59000余家代账客户资源，数万家客户的选择，值得信赖；</p>
                </li>
                <li class="nth_2">
                    <p class="youshi_h4">我们的实力</p>
                    <p>服务人员均数年以上从业经验，10年以上会计68名，3年以上会计128名，均是业内经验丰富人员，专业，放心；</p>
                </li>
                <li>
                    <p class="youshi_h4">我们的服务</p>
                    <p>专属淘钉一站式全程服务，业务范围广泛，满足各类不同业务办理需求；</p>
                </li>
            </ul>
            <div class="title">
                <p class="youshi_h4">6大优势</p>
                <p>打造行业标杆</p>
            </div>
            <ul class="ul_two">
                <li>
                    <p class="youshi_h4">我们的流程</p>
                    <p>5分钟快速响应，互联网+标准化流程，简单快捷，科学高效，为企业保驾护航；</p>
                </li>
                <li class="nth_2">
                    <p class="youshi_h4">我们的承诺</p>
                    <p>全程透明，服务产品化定制规范，全程监控跟踪业务，进度实时查询跟进；</p>
                </li>
                <li>
                    <p class="youshi_h4">我们的售后</p>
                    <p>定期进行质量跟踪服务，随时了解服务的办理情况，随时提供支持，根据需要，进行服务支持。</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--常见问题-->
<div class="faq wow fadeInUp">
    <div class="center">
        <p class="h22">资讯动态</p>
        <p class="h55">您想看的都在这里，咨询就解决</p>
        <div class="item clearfix">
            <div class="ul">
                <div class="faq_title clearfix">
                    <h2><a href="javascript:;">公司动态</a></h2><a href="javascript:;">更多</a>
                </div>
                <div class="faq_img">
                    <a href="javascript:;"><img src="/static/home/picture/faq_03.png" alt="公司动态" /></a>
                </div>
                <ul>
                    <li class="clearfix"><a href="javascript:;">◆ 10.1新规：无证无照经营将面临这7大…</a> <span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 2017最新劳动法：这5种…</a><span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票… </a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 注册公司起名下月起不必盲选”…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 政策"3个月出商标受理通知书"商标局…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票…</a><span>09-15</span></li>
                </ul>
            </div>

            <div class="ul">
                <div class="faq_title clearfix">
                    <h2><a href="javascript:;">最新文章</a></h2><a href="javascript:;">更多</a>
                </div>
                <div class="faq_img">
                    <a href="javascript:;"><img src="/static/home/picture/faq_05.png" alt="最新文章" /></a>
                </div>
                <ul>
                    <li class="clearfix"><a href="javascript:;">◆ 10.1新规：无证无照经营将面临这7大…</a> <span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 2017最新劳动法：这5种…</a><span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票… </a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 注册公司起名下月起不必盲选”…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 政策"3个月出商标受理通知书"商标局…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票…</a><span>09-15</span></li>
                </ul>
            </div>
            <div class="ul">
                <div class="faq_title clearfix">
                    <h2><a href="javascript:;">推荐阅读</a></h2><a href="javascript:;">更多</a>
                </div>
                <div class="faq_img">
                    <a href="javascript:;"><img src="/static/home/picture/faq_07.png" alt="推荐阅读" /></a>
                </div>
                <ul>
                    <li class="clearfix"><a href="javascript:;">◆ 10.1新规：无证无照经营将面临这7大…</a> <span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 2017最新劳动法：这5种…</a><span>09-15</span></li>
                    <li  class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票… </a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 注册公司起名下月起不必盲选”…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 政策"3个月出商标受理通知书"商标局…</a><span>09-15</span></li>
                    <li class="clearfix"><a href="javascript:;">◆ 企业及员工必须要知道的5大发票…</a><span>09-15</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--合作伙伴-->
<div class="partner wow fadeInUp">
    <div class="center">
        <p class="h22">合作伙伴</p>
        <p class="h55">数百家企业已经选择了我们</p>
        <div class="item clearfix wow bounceInLeft">
            <img src="/static/home/picture/coom_13.png" alt="阿里云" class="i1"/>
            <img src="/static/home/picture/coom_15.png" alt="百度"  class="i1 i2"/>
            <img src="/static/home/picture/coom_17.png" alt="京东云"  class="i1 i2"/>
            <img src="/static/home/picture/coom_19.png" alt="阿里巴巴"  class="i1 i2"/>
            <img src="/static/home/picture/coom_21.png" alt="云创空间"  class="i1 i2"/>
            <img src="/static/home/picture/coom_28.png" alt="公司吧" />
            <img src="/static/home/picture/coom_29.png" alt="猪八戒" class="i2"/>
            <img src="/static/home/picture/coom_30.png" alt="百度云"  class="i2"/>
            <img src="/static/home/picture/coom_31.png" alt="阿里云创客" class="i2"/>
            <img src="/static/home/picture/coom_32.png" alt="腾讯开放平台" class="i2"/>
        </div>
    </div>
</div>
<!--五大特色-->
<div class="feature wow fadeInUp">
    <div class="center clearfix">
        <div class="div div1">
            <img src="/static/home/picture/feat_03.png" alt="" />
            <div>
                <p class="guwen_h3">顾问团队</p>
                <p>资深顾问团队<br>严格监督把控流程</p>
            </div>
        </div>
        <div class="div div2">
            <img src="/static/home/picture/feat_05.png" alt="性价比" />
            <div>
                <p class="guwen_h3">性价比高</p>
                <p>价格公开透明 <br>创建业界良好口碑</p>
            </div>
        </div>
        <div class="div div3">
            <img src="/static/home/picture/feat_07.png" alt="平台保障" />
            <div>
                <p class="guwen_h3">平台保障</p>
                <p>专业顾问<br>一站式一对一服务</p>
            </div>
        </div>

        <div class="div div4">
            <img src="/static/home/picture/feat_09.png" alt="高速快捷" />
            <div>
                <p class="guwen_h3">高速快捷</p>
                <p>全天快速响应，流程简单<br>办理进度实时推送</p>
            </div>
        </div>
        <div class="div div5">
            <img src="/static/home/picture/feat_11.png" alt="" />
            <div>
                <p class="guwen_h3">安全保密</p>
                <p>客户信息保密防泄露<br>省时省心，让您信赖选择</p>
            </div>
        </div>
    </div>
</div>
<!--服务分支-->
<div class="branch wow fadeInUp">
    <div class="center">
        <p class="service_h3">服务分支</p>
        <ul class="clearfix">
            <li><a href="javascript:;">西安</a>|</li>
            <li><a href="javascript:;">郑州</a>|</li>
            <li><a href="javascript:;">武汉</a>|</li>
            <li><a href="javascript:;">长沙</a>|</li>
            <li><a href="javascript:;">石家庄</a></li>
        </ul>
    </div>
</div>
<!--淘钉智能财税热门服务-->
<div class="tdservice wow fadeInUp">
    <div class="center clearfix">
        <div class="item">
            <p class="reme_h3">热门服务</p>
            <ul class="clearfix ul_one">
                <li><a href="dljz.php">代理记账</a>|</li>
                <li><a href="javascript:;">股权转让</a>|</li>
                <li><a href="zscq.php">知识产权</a>|</li>
                <li><a href="javascript:;">买卖公司</a>|</li>
                <li><a href="javascript:;">银行开户</a>|</li>
                <li><a href="javascript:;">食品经营许可证</a></li>
            </ul>
            <p class="reme_h3">淘钉智能财税</p>
            <ul class="clearfix">
                <li><a href="javascript:;">关于我们</a>|</li>
                <li><a href="javascript:;">联系我们</a>|</li>
                <li><a href="javascript:;">加入我们</a>|</li>
                <li><a href="javascript:;">商务合作</a>|</li>
                <li><a href="javascript:;">财税知识</a></li>
            </ul>
        </div>
        <div class="item line"></div>
        <div class="item code">
            <div class="code_ul">
                <p class="o_li">全国统一客服热线：</p>
                <p class="t_li">400-029-1105</p>
                <p class="h_li">工作日： 8：30-18：00</p>
            </div>
            <div class="ewm">
                <img src="/static/home/picture/code_03.png" alt="二维码" />
                <p>— 关注微信 —</p>
            </div>

        </div>
    </div>
</div>

<!--网站尾部-->
<footer>
<div class="center">
    <p class="mowei">Copyright © 2013-2017 陕西淘丁实业集团有限公司. All rights reserved. <a href="http://www.miitbeian.gov.cn" target="
_blank">陕ICP备15016384号-8</a><br>投诉电话：029-62322809 / 029-62591376 sitemap</p>
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
<script src="js/xslider.js"></script>
<script>
$(function(){
    //banner初始化
    var banner = $('div.home-banner');
    banner.cur = 0,list_length=0;
    banner.ul = banner.find('ul:first');
    banner.ol = banner.find('ol:first');
    banner.timer = null;

    banner.on('mouseenter',function(){
        clearInterval(banner.timer);
    });

    banner.on('mouseleave',function(){
        setTimer();
    })

    banner.init = function(){
        var ollist = '',cur = 0;
        list_length = banner.ul.find('li').length;
        for(var i=0;i<list_length;i++){
            ollist += '<li></li>';
        }
        banner.ol.html(ollist);
        banner.display(cur);
        banner.ul.css('left',(banner.width()-banner.ul.width())/2);
        banner.ol.css('left',(banner.width()-banner.ol.width())/2);
    }

    //渲染显示效果
    banner.display = function(cur){
        banner.ul.find('li').hide().end().find('li').eq(cur).fadeIn('fast');
        banner.ol.find('li').removeClass('current').end().find('li').eq(cur).addClass('current');
    }
    //事件绑定
    banner.ol.on('click','li',function(index){
        banner.cur = $(this).index();
        banner.display(banner.cur);
    });

    //计时器
    function setTimer(){
        banner.timer = setInterval(function(){
            if(banner.cur>=list_length-1){
                banner.cur=0;
            }else{
                ++banner.cur;
            }
            banner.display(banner.cur);
        },5000);
    };
    setTimer();
    $(window).resize(banner.init);
    banner.init();
})

$(function(){
    //<div class="a2"><h3>活动优惠 <span>热销</span></h3></div> <div class="a1"><h3>热门推荐 <span>Hot</span></h3></div>
    $("div.a1").hover(function(){
        $("div.a1").addClass("aa2");
        $("div.a2").addClass("aa1");
        $(".discounts .center .item").css("display","none");
        $(".discounts .center .item+.div_item").css("display","block");
    })
    $("div.a2").hover(function(){
        $("div.a1").removeClass("aa2");
        $("div.a2").removeClass("aa1");
        $(".discounts .center .item").css("display","block");
        $(".discounts .center .item+.div_item").css("display","none");
    })
});
</script>
  <script src="js/53kf.js"></script></div>

</body>
</html>

