<?php /*a:3:{s:73:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\chat_index.html";i:1573630289;s:74:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\common_head.html";i:1573639500;s:76:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\home\view\common_footer.html";i:1573610849;}*/ ?>
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



<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
$(function() {    
    var socket;
    var readyState = ["connecting", "connected", "closing", "closed"];
    /* 打开连接事件 */
    $("#open").click(function() {
        try {
             /* 连接 */
             socket = new WebSocket("ws://127.0.0.1:8282");
             
             /* 绑定事件 */
             socket.onopen = function() {
                 $("#msg").html("连接成功...");
             };
             
            socket.onmessage = function(e) {
                // console.log(e)
                 $("#msg").html($("#msg").html() + "<br />" + e.data);
             };
             
             socket.onclose = function() {
                 $("#msg").html($("#msg").html() + "<br />关闭连接...");
             };
        } catch(exception) {
            $("#msg").html($("#msg").html() + "<br />有错误发生");
        }
    });
    
    /* 发送数据事件 */
    $("#send").click(function() {
        /* 检查文本框是否为空 */
        if($("#data").val() == "") {
            alert("请输入数据！");
            return;
        }
   
        try {
            socket.send($("#data").val());
            $("#msg").html($("#msg").html() + "<br />发送数据：" + $("#data").val());
        } catch (exception) {
            $("#msg").html($("#msg").html() + "<br />发送数据出错");
        }
        
        /* 清空文本框 */
        $("#data").val("");
    });
    
    /* 断开连接 */
    $("#off").click(function() {
        socket.close();
    });
});
</script>
<!DOCTYPE html>
<html>
<head>
    <title>聊天室</title>
</head>
<body>
    <div style="width: 100%;height: 70px;background-color: blue">
        <div>某某某公司</div>
    </div>
    <div style="width: 100%;height: 100px;">
        <p id="msg">
			
        </p>
    </div>
    <div>
        <button id="open">开启链接</button>
        <input type="text" name="content" id="data">
        <button id="send">发送</button>
        <button id="off">断开</button>
    </div>

</body>
</html>
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
</script>