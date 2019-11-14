<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<title>02-embed &#8250; Lang-Php</title>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/css.chs.css" type="text/css" />
	<script src="assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 02-embed
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2>内部加载文件 &amp; 嵌入式</h2>
	<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。</p>

	<h2>配置信息</h2>
	<ol>
		<li>当前 Cookies 全局 'lang' 变量值：<?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo "未设置"; ?></li>
		<li>浏览器 'HTTP_ACCEPT_LANGUAGE' 请求值：<?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li>当前加载的文件是：02-embed/zh-cn/index.php</li>
	</ol>

	<h2>选择可用的语言</h2>
	<dl>
		<!-- <h3>North America</h3> -->
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>

		<!-- <h3>Europe</h3> -->
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>

		<!-- <h3>Asia - Pacific</h3> -->
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>如何使用它</h2>
	<ol>
		<li>解压文件 &lt; latest.zip &gt;； </li>
		<li>上传或复制 '02-embed' 目录中的文件到你的网站主目录；</li>
		<li>浏览器访问：http://&lt; 你的域名或 IP &gt;；</li>
		<li>开始体验吧！</li>
	</ol>
<?php include "routes/analytics.php"; ?>
</body>
</html>