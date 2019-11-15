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
	<h2>사용자 정의 선택 &amp; 디렉토리-데모</h2>
	<p>처음 실행 후 설정 되어 'Worldwide' 디렉터리와 선택 메모리 기능을 가진 언어 디렉터리를 일치 시킨 후 설정 합니다.</p>

	<h2>구성 정보</h2>
	<ol>
		<li>전류 Cookies 글로벌 'mark_lang' 변수 값: <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['mark_lang']; else echo "설정 하지 않으면"; ?></li>
		<li>현재 로드 된 파일은: 01-directory/ko-kr/index.php</li>
	</ol>

	<h2>사용 가능한 언어 중 하나를 선택합니다</h2>
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

	<h2>그것을 사용 하는 방법</h2>
	<ol>
		<li>파일 추출 &lt; latest.zip &gt;; </li>
		<li>업로드 또는 복사 '01-directory' 웹 사이트의 홈 디렉터리에 디렉터리에 파일;</li>
		<li>브라우저 액세스: http://&lt; 귀하의 도메인 이름 또는 IP &gt;;</li>
		<li>실험 시작!</li>
	</ol>
<?php include "../routes/analytics.php"; ?>
</body>
</html>