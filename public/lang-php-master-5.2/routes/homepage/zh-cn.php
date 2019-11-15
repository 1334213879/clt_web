<!DOCTYPE HTML>
<html>
<head><!-- head -->
	<title>PHP 多国语框架 &amp; 官方网站</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="PHP,多国语框架 by @FengYi" />
	<meta name="keywords" content="PHP, PHP 框架, PHP框架, PHP 多国语框架, PHP多国语框架, PHP多语言, PHP多国语, 多语言, 多语言php, php网站多语言, php 切换页面语言, php 国家 语言, php实现多国语言切换, php 框架中英文切换, by @FengYi" />
	<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/init.zh-cn.js"></script>
	<script src="assets/js/lang.js"></script>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/skel.css" />
		<link rel="stylesheet" href="assets/css/style.zh-cn.css" />
		<link rel="stylesheet" href="assets/css/style-xlarge.css" />
	</noscript>
</head><!-- end head -->

<body class="page-landing"><!-- page-landing -->
<div id="wrapper"><!-- wrapper -->
	<section id="intro"><!-- intro -->
		<h1>PHP 多国语框架 v5.2</span></h1>
		<p>这是一个通过框架来实现的多国语程序，以多种不同的方式实现，框架设计不仅让你网站搭建起来很简单、很快、也很高效，足以满足你。</p>
		<footer><!-- Main Info -->
			<ul class="actions">
				<li><a href="https://lang-php.com/go/latest" class="button special">获取最新版</a></li>
				<li><a href="?load=docs" target="_blank" class="button alt">快速指南</a></li>
			</ul>
			<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
			<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2 )</a></dt>
			<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>
			<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>
			<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
			<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
		</footer><!-- Main Info -->
	</section><!-- end intro -->

	<section class="extra"><!-- extra1 -->
		<h2>用户自定义选择 &amp; 目录式</h2>
		<p>首次运行后转向 Worldwide 目录，选择后转向匹配的语言目录，带记忆功能。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="01-directory" target="_blank" class="button fit">演示</a></li>
				<li><a href="?load=docs#01-directory" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra1 -->

	<section class="extra"><!-- extra2 -->
		<h2>内部加载文件 &amp; 嵌入式</h2>
		<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="02-embed" target="_blank" class="button fit">演示</a></li>
				<li><a href="?load=docs#02-embed" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra2 -->

	<section class="extra"><!-- extra3 -->
		<h2>读取配置文件 &amp; 加载式</h2>
		<p>自动搜索匹配的语言文件并加载后调用，支持 HTML 混排；包括：字串符、数组、参数等。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="03-load" target="_blank" class="button">演示</a></li>
				<li><a href="?load=docs#03-load" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra3 -->

	<section class="extra"><!-- extra4 -->
		<h2>保存设置 &amp; 配置式</h2>
		<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="04-settings" target="_blank" class="button">演示</a></li>
				<li><a href="?load=docs#04-settings" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra4 -->

	<section class="extra"><!-- extra5 -->
		<h2>数据库 &amp; 数组式</h2>
		<p>通过 PDO 方式连接 SQL 数据库，支持 MySQL、SQLite。并使用数组（Array）功能列出所有可用的数据。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="05-database" target="_blank" class="button">演示</a></li>
				<li><a href="?load=docs#05-database" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra5 -->

	<section class="extra"><!-- extra6 -->
		<h2>独立版 &amp; 便携式</h2>
		<p>利用 array() 语言结构建一个数组，通过函数来完成所有操作；相对其它版本，便携版是由一个文件来完成。</p>
		<footer>
			<ul class="actions vertical">
				<li><a href="06-portable" target="_blank" class="button">演示</a></li>
				<li><a href="?load=docs#06-portable" target="_blank" class="button alt fit">文档</a></li>
			</ul>
		</footer>
	</section><!-- end extra6 -->

	<ul id="copyright"><!-- copyright -->
		<li>&copy; <a href="http://fengyi.tel">Yi Feng</a></li>
		<li><a href="?load=license">许可证</a></li>
	</ul><!-- end copyright -->
</div><!-- end wrapper -->
<!-- Analysis -->
<?php include "routes/analytics.php"; ?>
<!-- end Analysis -->
</body><!-- end page-landing -->
</html>