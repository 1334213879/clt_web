<?php /*a:3:{s:74:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\index_index.html";i:1573610849;s:74:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\common_head.html";i:1573610849;s:76:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\common_footer.html";i:1573610849;}*/ ?>
<html lang="zh_cn">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($info['title']) ? htmlentities($info['title']) : ($title ? $title : $config['title']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?php echo isset($info['keywords']) ? htmlentities($info['keywords']) : ($keywords ? $keywords : $config['keyword']); ?>">
    <meta name="description" content="<?php echo isset($info['description']) ? htmlentities($info['description']) : ($description ? $description : $config['info']); ?>">
    <link rel="stylesheet" href="/fly/layui/css/layui.css">
    <link rel="stylesheet" href="/static/home/css/global.css">
    <script src="/fly/layui/layui.js"></script>
</head>
<body>
<div class="fly-header layui-bg-black">
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
            <li class="layui-nav-item">
                <a class="iconfont icon-touxiang layui-hide-xs" href="<?php echo url('user/login/index'); ?>"></a>
            </li>
            <li class="layui-nav-item">
                <a href="<?php echo url('user/login/index'); ?>">登入</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div><div style="margin:auto;">
    <style>

</style>
<div class="layui-col-md12 cms-index-module-adv1">
    <div class="layui-carousel" id="carousel">
        <div carousel-item id="adv_content" nctype="object_module_edit">
            <div class="img_li picture"><a href="http://demo.cltphp.com" data-url="http://demo.cltphp.com" data-pic="http://cltdemo.test/uploads/20190305/b3607f45c4f6cf56456edbe3ab096e1a.jpg" data-title="简单、高效、简洁" class="title" target="_blank"><div class="banner-title">简单、高效、简洁</div><img src="http://cltdemo.test/uploads/20190305/b3607f45c4f6cf56456edbe3ab096e1a.jpg" alt="简单、高效、简洁" class="t-img"></a></div><div class="img_li picture"><a href="http://demo.cltphp.com" data-url="http://demo.cltphp.com" data-pic="http://cltdemo.test/uploads/20190305/959887756be1af9bcc1a78ca0565fc8d.jpg" data-title="集万千宠爱于一身" class="title" target="_blank"><div class="banner-title">集万千宠爱于一身</div><img src="http://cltdemo.test/uploads/20190305/959887756be1af9bcc1a78ca0565fc8d.jpg" alt="集万千宠爱于一身" class="t-img"></a></div><div class="img_li picture"><a href="http://demo.cltphp.com" data-url="http://demo.cltphp.com" data-pic="http://cltdemo.test/uploads/20190305/b043970c33f6a88529b332b4c5d0727b.jpg" data-title="精益求精" class="title" target="_blank"><div class="banner-title">精益求精</div><img src="http://cltdemo.test/uploads/20190305/b043970c33f6a88529b332b4c5d0727b.jpg" alt="精益求精" class="t-img"></a></div>        </div>
    </div>
    </div>
<script>
    layui.use(['util','carousel'], function() {
        var util = layui.util, $ = layui.$, carousel = layui.carousel;
        //建造实例
        carousel.render({
            elem: '#carousel'
            , width: '100%' //设置容器宽度
            , arrow: 'hover' //悬停显示箭头
            , height: '460px'
            , anim: 'fade' //切换动画方式
            ,autoplay:true
        });
    });
</script><div class="layui-container cms-index-module-index1 module-style-style1">
    <div class="layui-row layui-col-space15 cms-index-module-index1-1">
        <div class="layui-col-md8">
            <div class="fly-panel clt-panel">
                <div class="fly-panel-title fly-filter title-bar">
                    <a id="index1_2_1_title" nctype="object_module_edit">最新动态</a>
                                    </div>
                <div class="content-box content-big">
                    <ul class="fly-list" id="index1_2_1_1_content" nctype="object_module_edit">
                                                    
                                                    
                                                    <li class="cms-index-article-normal">
            <a nctype="cms_index_not_display" href="http://show.cltphp.com/info/5/44.html" class="fly-avatar">
                <img src="/static/img/no_pic.png" alt="CLTPHP5.2.2发布">
            </a>
            <h2>
                <a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/44.html" target="_blank" data-cname="CLTPHP动态" data-id="44" data-url="http://show.cltphp.com/info/5/44.html" data-time="2017-10-13" data-thumb="/static/img/no_pic.png" data-hits="1659" data-title="CLTPHP5.2.2发布" data-curl="">
                    CLTPHP5.2.2发布                </a>
            </h2>
            <div nctype="cms_index_not_display" class="fly-list-info">
                <a href="" nctype="cms_index_not_display">CLTPHP动态</a>
                <span>2017-10-13</span>
                <span class="fly-list-nums"><i class="iconfont" title="点击"></i> 1659</span>
            </div>
            
        </li><li class="cms-index-article-normal">
            <a nctype="cms_index_not_display" href="http://show.cltphp.com/info/5/42.html" class="fly-avatar">
                <img src="/static/img/no_pic.png" alt="CLTPHP5.2.1发布">
            </a>
            <h2>
                <a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/42.html" target="_blank" data-cname="CLTPHP动态" data-id="42" data-url="http://show.cltphp.com/info/5/42.html" data-time="2017-09-27" data-thumb="/static/img/no_pic.png" data-hits="250" data-title="CLTPHP5.2.1发布" data-curl="">
                    CLTPHP5.2.1发布                </a>
            </h2>
            <div nctype="cms_index_not_display" class="fly-list-info">
                <a href="" nctype="cms_index_not_display">CLTPHP动态</a>
                <span>2017-09-27</span>
                <span class="fly-list-nums"><i class="iconfont" title="点击"></i> 250</span>
            </div>
            
        </li><li class="cms-index-article-normal">
            <a nctype="cms_index_not_display" href="http://show.cltphp.com/info/5/41.html" class="fly-avatar">
                <img src="/static/img/no_pic.png" alt="CLTPHP5.2发布">
            </a>
            <h2>
                <a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/41.html" target="_blank" data-cname="CLTPHP动态" data-id="41" data-url="http://show.cltphp.com/info/5/41.html" data-time="2017-09-20" data-thumb="/static/img/no_pic.png" data-hits="1554" data-title="CLTPHP5.2发布" data-curl="">
                    CLTPHP5.2发布                </a>
            </h2>
            <div nctype="cms_index_not_display" class="fly-list-info">
                <a href="" nctype="cms_index_not_display">CLTPHP动态</a>
                <span>2017-09-20</span>
                <span class="fly-list-nums"><i class="iconfont" title="点击"></i> 1554</span>
            </div>
            
        </li><li class="cms-index-article-normal">
            <a nctype="cms_index_not_display" href="http://show.cltphp.com/info/5/39.html" class="fly-avatar">
                <img src="/static/img/no_pic.png" alt="CLTPHP5.1.3发布">
            </a>
            <h2>
                <a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/39.html" target="_blank" data-cname="CLTPHP动态" data-id="39" data-url="http://show.cltphp.com/info/5/39.html" data-time="2017-09-14" data-thumb="/static/img/no_pic.png" data-hits="701" data-title="CLTPHP5.1.3发布" data-curl="">
                    CLTPHP5.1.3发布                </a>
            </h2>
            <div nctype="cms_index_not_display" class="fly-list-info">
                <a href="" nctype="cms_index_not_display">CLTPHP动态</a>
                <span>2017-09-14</span>
                <span class="fly-list-nums"><i class="iconfont" title="点击"></i> 701</span>
            </div>
            
        </li>                                                                                                                                    </ul>
                                    </div>
            </div>
        </div>

        <div class="layui-col-md4">
            <div class="fly-panel">
                <div class="title-bar">
                    <h3 class="fly-panel-title" id="index1_2_title" nctype="object_module_edit">热门头条</h3>
                                    </div>
                <div class="content-box mall-class">
                    <ul class="fly-panel-main fly-list-static" id="index1_2_1_2_content" nctype="object_module_edit">
                                                    
                                                    <li class="cms-index-article-normal"><a class="title" nctype="article_item" href="http://show.cltphp.com/info/6/20.html" target="_blank" data-cname="相关知识 " data-id="20" data-url="http://show.cltphp.com/info/6/20.html" data-time="2017-08-07" data-thumb="/static/img/no_pic.png" data-hits="410" data-title="PHP格式化字节大小" data-curl="">
                    PHP格式化字节大小                </a></li><li class="cms-index-article-normal"><a class="title" nctype="article_item" href="http://show.cltphp.com/info/6/43.html" target="_blank" data-cname="相关知识 " data-id="43" data-url="http://show.cltphp.com/info/6/43.html" data-time="2017-10-08" data-thumb="/static/img/no_pic.png" data-hits="104" data-title="纯CSS实现页面的尖角、小三角、不同方向尖角的方法小结" data-curl="">
                    纯CSS实现页面的尖角、小三角、不同方向尖角的方法小结                </a></li><li class="cms-index-article-normal"><a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/45.html" target="_blank" data-cname="CLTPHP动态" data-id="45" data-url="http://show.cltphp.com/info/5/45.html" data-time="2018-07-31" data-thumb="/static/img/no_pic.png" data-hits="136" data-title="给我们一点点时间  我们给你一个新突破" data-curl="">
                    给我们一点点时间  我们给你一个新突破                </a></li><li class="cms-index-article-normal"><a class="title" nctype="article_item" href="http://show.cltphp.com/info/5/25.html" target="_blank" data-cname="CLTPHP动态" data-id="25" data-url="http://show.cltphp.com/info/5/25.html" data-time="2017-08-22" data-thumb="/static/img/no_pic.png" data-hits="1102" data-title="CLTPHP手册更新自定义标签" data-curl="">
                    CLTPHP手册更新自定义标签                </a></li><li class="cms-index-article-normal"><a class="title" nctype="article_item" href="http://show.cltphp.com/info/6/40.html" target="_blank" data-cname="相关知识 " data-id="40" data-url="http://show.cltphp.com/info/6/40.html" data-time="2017-09-14" data-thumb="/static/img/no_pic.png" data-hits="176" data-title="php验证输入的邮件地址是否合法" data-curl="">
                    php验证输入的邮件地址是否合法                </a></li>                                                                                        </ul>
                                    </div>
            </div>
            <div class="fly-panel fly-signin clt-panel">
                <div class="title-bar">
                    <div class="fly-panel-title" id="index1_3_title" nctype="object_module_edit">热门标签</div>
                                    </div>
                <div class="fly-panel-main content-box">
                    <ul class="tags" id="index1_3_tag" nctype="object_module_edit">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li nctype="btn_tag_select" data-tag-id="1">
                    <a href="http://show.cltphp.com/tags/cltphp.html" title="cltphp" target="_blank">cltphp</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="2">
                    <a href="http://show.cltphp.com/tags/时间.html" title="时间" target="_blank">时间</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="3">
                    <a href="http://show.cltphp.com/tags/CLTPHP.html" title="CLTPHP" target="_blank">CLTPHP</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="5">
                    <a href="http://show.cltphp.com/tags/CSS.html" title="CSS" target="_blank">CSS</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="4">
                    <a href="http://show.cltphp.com/tags/更新.html" title="更新" target="_blank">更新</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="7">
                    <a href="http://show.cltphp.com/tags/PC端.html" title="PC端" target="_blank">PC端</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="6">
                    <a href="http://show.cltphp.com/tags/邮箱验证.html" title="邮箱验证" target="_blank">邮箱验证</a><i></i>
                </li><li nctype="btn_tag_select" data-tag-id="8">
                    <a href="http://show.cltphp.com/tags/手机端.html" title="手机端" target="_blank">手机端</a><i></i>
                </li>                                            </ul>
                                    </div>
            </div>
        </div>
    </div>
</div><div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md12 cms-index-module-ad1">
            <div id="ad_content" nctype="object_module_edit">
                <div class="img_li picture"><div class="cms-thumb"><a href="http://www.cltphp.com" target="_blank"><img src="http://cltdemo.test/uploads/20190308/6567360287d3f812af0c611a05ce8fa2.png"  alt="" class="t-img"></a></div></div>            </div>
        </div>
            </div>
</div><div class="layui-container cms-index-module-debris1 module-style-style6">
    <div class="debris cms-index-module-debris1-1">
        <div class="layui-row mf15">
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md4">
                <div class="site-idea">
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>
                            <a href="JavaScript:void(0);" id="debris1_1_title" nctype="object_module_edit">我们的差异化</a>
                                                    </legend>

                        <div class="content-box">
                            <div class="info" id="debris1_1_content" nctype="object_module_edit">CLTPHP内容管理系统给您自由的模型构建权利，让您的想法通过您亲自操作实现。不要再为传统的数据库字段限制而发愁。一步删除，一步增加，您想要的，就是这一步。</div>
                                                    </div>
                    </fieldset>
                </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md4">
                <div class="site-idea">
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>
                            <a href="JavaScript:void(0);" id="debris1_2_title" nctype="object_module_edit">完整的建站理念</a>
                                                    </legend>
                        <div class="content-box">
                            <div class="info" id="debris1_2_content" nctype="object_module_edit">CLTPHP可以轻松构建模型，让数据库随心而动，让内容表单随意而变。模型和栏目的绑定，是为了让前台页面能更好的为您的想法服务，让您不再为建站留下遗憾。</div>
                                                    </div>
                    </fieldset>
                </div>
            </div>
            <div class="layui-col-xs12 layui-col-sm12 layui-col-md4">
                <div class="site-idea">
                    <fieldset class="layui-elem-field layui-field-title">
                        <legend>
                            <a href="JavaScript:void(0);" id="debris1_3_title" nctype="object_module_edit">简单、高效、简洁</a>
                                                    </legend>
                        <div class="content-box">
                            <div class="info" id="debris1_3_content" nctype="object_module_edit">CLTPHP内容管理系统，全程鼠标操作，不用手动建立数据库，不用画网站结构图，也不用打开编译器。网站后台直接编辑模版，让网站建设达到前所未有的极致简单。</div>
                                                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div><div class="layui-container cms-index-module-article1 module-style-style8">
    <div class="layui-row layui-col-space15 cms-index-module-article1-1">
        <div class="layui-col-md12">
            <div class="fly-panel fly-link">
                <div class="title-bar">
                    <div class="fly-panel-title" id="index1_3_title" nctype="object_module_edit">友情链接</div>
                                    </div>
                <div class="content-box">
                    <dl class="fly-panel-main" id="index1_3_link" nctype="object_module_edit">
                                                    
                                                    <dd data-link-id="13">
                <a href="http://cltphp.com/news-51.html">CLTPHP相关知识</a><i></i>
            </dd><dd data-link-id="12">
                <a href="http://cltphp.com/about-8.html">关于我们</a><i></i>
            </dd><dd data-link-id="11">
                <a href="http://www.cltphp.com/news-49.html">CLTPHP动态</a><i></i>
            </dd><dd data-link-id="8">
                <a href="http://www.cltphp.com/">CLTPHP内容管理系统</a><i></i>
            </dd><dd data-link-id="10">
                <a href="http://www.cltphp.com/">CLTPHP</a><i></i>
            </dd>                                                                                        </dl>
                                    </div>
            </div>
        </div>
    </div>
</div></div>
<div class="fly-footer">
    <p>
        <a href="<?php echo htmlentities($config['domain']); ?>" target="_blank">CLTPHP.Pro</a>
        <?php echo htmlentities($config['copyright']); ?> &copy;
        <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo htmlentities($config['number']); ?></a>
        <a href="http://www.cltphp.com/" target="_blank">CLTPHP 出品</a>
    </p>
    <p>
        <?php if(is_array($linkList) || $linkList instanceof \think\Collection || $linkList instanceof \think\Paginator): $i = 0; $__LIST__ = $linkList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo htmlentities($vo['title']); ?></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </p>
</div>
<script>
    layui.cache.page = 'jie';
    layui.cache.user = {
        username: '<?php echo session("user.username"); ?>'?'<?php echo session("user.username"); ?>':'游客'
        ,uid: -1
        ,avatar: '<?php echo session("user.avatar"); ?>'?'<?php echo session("user.avatar"); ?>':'/static/home/images/avatar/00.jpg'
        ,experience: '<?php echo session("user.id"); ?>'?'<?php echo session("user.id"); ?>':''
        ,sex: '<?php echo session("user.sex"); ?>'?'<?php echo session("user.sex"); ?>':'男'
    };
</script><script>
    layui.config({
        version: "3.0.0"
        ,base: '/static/home/mods/' //这里实际使用时，建议改成绝对路径
    }).extend({
        fly: 'index'
    }).use('fly');
</script>
</body>
</html>

