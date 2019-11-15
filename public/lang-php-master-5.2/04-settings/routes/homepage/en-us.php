<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<title>04-settings &#8250; Lang-Php</title>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/css.css" type="text/css" />
	<script src="assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 04-settings
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2>TO SAVE THE SETTINGS &AMP; PROFILE</h2>
	<p>This example is different from dynamic read and write Cookies; saving the configuration to XML/cfg, by reading the selected preferred language pack is available, does not accept the browser's default language preference.</p>

	<h2>CONFIGURATION</h2>
	<ol>
		<li>Current global language value: <?php echo lp::_getCurrentlp(); ?></li>
		<li>File operation: <?php echo lp::_getCurrentsetFileType(); ?></li>
		<li>Save the configuration file path: <?php echo lp::_getCurrentFileType(); ?></li>
		<li>The currently loaded file is: 04-settings/en-us/index.php</li>
	</ol>

	<h2>CHOOSE ONE OF THE AVAILABLE LANGUAGES</h2>
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

	<h2>HOW TO USE IT</h2>
	<ol>
		<li>Extract the file &lt; latest.zip &gt; ; </li>
		<li>Upload or copy '04-settings' File to your website's home directory in the directory;</li>
		<li>Change <?php echo lp::_getCurrentFileType(); ?> File permissions for 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp::_getCurrentFileType(); ?></dt>
		<li>Optional XML/cfg type (the default XML), edit the routes/lp-class.php file and modify the $setFileType variable;</li>
		<li>Browser access: http://&lt; Your domain name or IP &gt;;</li>
		<li>Start experimenting!</li>
	</ol>
<?php include "routes/analytics.php"; ?>
</body>
</html>