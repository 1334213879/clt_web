<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<title>04-settings &#8250; Lang-Php</title>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/css.chs.css" type="text/css" />
	<script src="assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 04-settings
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2>保存设置 &amp; 配置式</h2>
	<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。</p>

	<h2>配置信息</h2>
	<ol>
		<li>当前全局语言值：<?php echo lp::_getCurrentlp(); ?></li>
		<li>文件操作方式：<?php echo lp::_getCurrentsetFileType(); ?></li>
		<li>配置文件保存路径：<?php echo lp::_getCurrentFileType(); ?></li>
		<li>当前加载的文件是：04-settings/zh-cn/index.php</li>
	</ol>

	<h2>选择可用的语言</h2>
	<dl>
		<!-- <h3>North America</h3> -->
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:refreshlang('en-US')">Mode 2</a> )</dt>

		<!-- <h3>Europe</h3> -->
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:refreshlang('ru-RU')">режим 2</a> )</dt>

		<!-- <h3>Asia - Pacific</h3> -->
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:refreshlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:refreshlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:refreshlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:refreshlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>如何使用它</h2>
	<ol>
		<li>解压文件 &lt; latest.zip &gt;； </li>
		<li>上传或复制 '04-settings' 目录中的文件到你的网站主目录；</li>
		<li>更改 lp-golbal-setting.cfg 或 lp-golbal-setting.xml 文件权限为 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp::_getCurrentFileType(); ?></dt>
		<li>可选类型 xml 或 cfg（默认xml），编辑 routes/lp-class.php 文件并修改 $setFileType 变量；</li>
		<li>浏览器访问：http://&lt; 你的域名或 IP &gt;；</li>
		<li>开始体验吧！</li>
	</ol>
<?php include "routes/analytics.php"; ?>
</body>
</html>