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
	<h2>Выбор пользователем &amp; Демо каталог</h2>
	<p>После запуска в первый раз 'Worldwide' Каталог и выберите поворот после сопоставления языка каталога, с функцией памяти.</p>

	<h2>Сведения о конфигурации</h2>
	<ol>
		<li>Ток Cookies Глобальный 'mark_lang' Значение переменной: <?php if(isset($_COOKIE["lang"])) echo $_COOKIE['mark_lang']; else echo "Не задано"; ?></li>
		<li>Файлы, которые в настоящее время загружены: 01-directory/ru-ru/index.php</li>
	</ol>

	<h2>Выберите один из доступных языков</h2>
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

	<h2>Как его использовать</h2>
	<ol>
		<li>Извлеките файл &lt; latest.zip &gt;; </li>
		<li>Загрузка или копирование '01-directory' Файл вашего веб-сайта домашний каталог в каталоге;</li>
		<li>Доступ к браузеру: http://&lt; Ваше доменное имя или IP &gt;;</li>
		<li>Начните экспериментировать!</li>
	</ol>
<?php include "../routes/analytics.php"; ?>
</body>
</html>