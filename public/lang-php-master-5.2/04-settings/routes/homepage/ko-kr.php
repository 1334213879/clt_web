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
	<h2>설정을 저장 하려면 &amp; 프로 파일</h2>
	<p>이 예제는 다른 동적 읽기 및 쿠키 작성; 에 구성을 저장 합니다 xml 또는 cfg, 선택한 기본 설정된 언어를 읽어서 팩, 브라우저의 기본 언어 설정에는 영향을 받지 않습니다.</p>

	<h2>구성 정보</h2>
	<ol>
		<li>현재 글로벌 언어 값: <?php echo lp::_getCurrentlp(); ?></li>
		<li>파일 작업: <?php echo lp::_getCurrentsetFileType(); ?></li>
		<li>구성 파일 경로 저장: <?php echo lp::_getCurrentFileType(); ?></li>
		<li>현재 로드 된 파일은: 04-settings/ko-kr/index.php</li>
	</ol>

	<h2>사용 가능한 언어 중 하나를 선택합니다</h2>
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

	<h2>그것을 사용 하는 방법</h2>
	<ol>
		<li>파일 추출 &lt; latest.zip &gt;; </li>
		<li>업로드 또는 복사 '04-settings' 웹 사이트의 홈 디렉터리에 디렉터리에 파일;</li>
		<li>변경 <?php echo lp::_getCurrentFileType(); ?> 대 한 파일 사용 권한 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp::_getCurrentFileType(); ?></dt>
		<li>옵션 유형 xml 또는 cfg (기본 XML), 편집기 routes/lp-class.php 파일 및 수정 $setFileType 변수;</li>
		<li>브라우저 액세스: http://&lt; 귀하의 도메인 이름 또는 IP &gt;;</li>
		<li>실험 시작!</li>
	</ol>
<?php include "routes/analytics.php"; ?>
</body>
</html>