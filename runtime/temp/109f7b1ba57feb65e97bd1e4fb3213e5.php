<?php /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\admin\view\navigation\index.html";i:1573610849;s:75:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\admin\view\common\head.html";i:1573610849;s:75:"D:\phpStudy\PHPTutorial\WWW\clt_web\application\admin\view\common\foot.html";i:1573610849;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo config('sys_name'); ?>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="/static/admin/css/global.css" media="all">
    <link rel="stylesheet" href="/static/common/css/font.css" media="all">
</head>
<body class="skin-<?php if(!empty($_COOKIE['skin'])){echo $_COOKIE['skin'];}else{echo '0';setcookie('skin','0');}?>">
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend><?php echo htmlentities($title); ?></legend>
    </fieldset>
    <blockquote class="layui-elem-quote">
        <a href="<?php echo url('add'); ?>" class="layui-btn layui-btn-sm"><?php echo lang('add'); ?>栏目</a>
    </blockquote>
    <table class="layui-table">
        <thead>
        <tr>
            <th>编号</th>
            <th>导航</th>
            <th>方向</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody id="con">
          <?php foreach($na as $key=>$vo): ?> 
          <tr>
                <th><?php echo htmlentities($vo['id']); ?></th>
                <th><?php echo htmlentities($vo['name']); ?></th>
                <th><?php if($vo['type'] == 1): ?>
                        横向
                    <?php else: ?>
                        纵向
                    <?php endif; ?>
                </th>
              
                <th>
                   <a class="green" href='edit?id=<?php echo htmlentities($vo['id']); ?>' title="修改"><i class="icon icon-pencil2"></i></a> | 
                   <a class="red" href="javascript:del(<?php echo htmlentities($vo['id']); ?>)" title="删除"><i class="icon icon-bin"></i></a>
                </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
    </table>
</div>
<script type="text/javascript" src="/static/plugins/layui/layui.js"></script>


<script src="/static/common/js/jquery.2.1.1.min.js"></script>
<script>
    var layer;
    layui.use('table', function(){
        var $= layui.jquery,layer= layui.layer;
        $('body').on('blur','.list_order',function() {
            var id = $(this).attr('data-id');
            var sort = $(this).val();
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post('<?php echo url("cOrder"); ?>',{id:id,sort:sort},function(res){
                layer.close(loading);
                if(res.code === 1){
                    layer.msg(res.msg, {time: 1000, icon: 1}, function () {
                        location.href = res.url;
                    });
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                }
            })
        });
    });
    function del(id) {
        layer.confirm('你确定要删除吗？', {icon: 3}, function (index) {
            $.post('<?php echo url("del"); ?>', {id: id}, function (data) {
                if (data.status === 1) {
                    layer.alert(data.info, {icon: 6}, function(index){
                        layer.close(index);
                        window.location.href=data.url;
                    });
                }else{
                    layer.msg(data.info,{icon:5});
                }
            });
            layer.close(index);
        });
    }
</script>