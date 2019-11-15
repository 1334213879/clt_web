<?php /*a:3:{s:51:"D:\www\cltphp\application\home\view\chat_index.html";i:1573605935;s:52:"D:\www\cltphp\application\home\view\common_head.html";i:1566879096;s:54:"D:\www\cltphp\application\home\view\common_footer.html";i:1566879096;}*/ ?>
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
</div>


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