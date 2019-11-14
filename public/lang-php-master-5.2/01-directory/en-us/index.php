<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../assets/logo/logo.ico" type="image/icon"/>
	<title>01-directory &#8250; Lang-Php</title>
	<link rel="stylesheet" href="../assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/css.css" type="text/css" />
	<script src="../assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="../assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 01-directory
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2>USER-DEFINED SELECTION &amp; DIRECTORY</h2>
	<p>After running for the first time turned to the 'Worldwide' directory, select shift after matching language directory, with memory function.</p>

	<h2>CONFIGURATION</h2>
	<ol>
		<li>Currently Cookies the global 'mark_lang' variable value: <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['mark_lang']; else echo "Is not set"; ?></li>
		<li>The currently loaded file is: 01-directory/en-us/index.php</li>
	</ol>

	<h2>CHOOSE ONE OF THE AVAILABLE LANGUAGES</h2>
	<dl>
		<!-- <h3>North America</h3> -->
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="../?lang=en-US">Mode 1</a> &amp; <a href="javascript:qlang('en-US')">Mode 2</a> )</dt>

		<!-- <h3>Europe</h3> -->
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="../?lang=ru-RU">режим 1</a> &amp; <a href="javascript:qlang('ru-RU')">режим 2</a> )</dt>

		<!-- <h3>Asia - Pacific</h3> -->
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="../?lang=zh-CN">模式 1</a> &amp; <a href="javascript:qlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="../?lang=zh-TW">模式 1</a> &amp; <a href="javascript:qlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="../?lang=ja-JP">モード 1</a> &amp; <a href="javascript:qlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="../?lang=ko-KR">모드 1</a> &amp; <a href="javascript:qlang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2>HOW TO USE IT</h2>
	<ol>
		<li>Extract the file &lt; latest.zip &gt;;</li>
		<li>Upload or copy '01-directory' File to your website's home directory in the directory;</li>
		<li>Browser access: http://&lt; Your domain name or IP &gt;;</li>
		<li>Start experimenting!</li>
	</ol>
<?php include "../routes/analytics.php"; ?>
</body>
</html>