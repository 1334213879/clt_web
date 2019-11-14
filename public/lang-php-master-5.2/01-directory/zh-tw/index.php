<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../assets/logo/logo.ico" type="image/icon"/>
	<title>01-directory &#8250; Lang-Php</title>
	<link rel="stylesheet" href="../assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="../assets/css/css.chs.css" type="text/css" />
	<script src="../assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="../assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 01-directory
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2>使用者自訂選擇 &amp; 目錄式</h2>
	<p>首次運行後轉向 'Worldwide' 目錄，選擇後轉向匹配的語言目錄，帶記憶功能。</p>

	<h2>配置資訊</h2>
	<ol>
		<li>當前 Cookies 全域 'mark_lang' 變數值：<?php if(isset($_COOKIE["lang"])) echo $_COOKIE['mark_lang']; else echo "未設置"; ?></li>
		<li>當前載入的檔是：01-directory/zh-tw/index.php</li>
	</ol>

	<h2>選擇可用的語言</h2>
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

	<h2>如何使用它</h2>
	<ol>
		<li>解壓檔 &lt; latest.zip &gt;； </li>
		<li>上傳或複製 '01-directory' 目錄中的檔到你的網站主目錄；</li>
		<li>瀏覽器訪問：http://&lt; 你的功能變數名稱或 IP &gt;；</li>
		<li>開始體驗吧！</li>
	</ol>
<?php include "../routes/analytics.php"; ?>
</body>
</html>