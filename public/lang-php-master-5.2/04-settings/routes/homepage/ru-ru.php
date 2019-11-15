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
	<h2>Для сохранения настроек &amp; Профиль</h2>
	<p>Этот пример отличается от динамического чтения и записи файлов cookie; сохранение конфигурации XML/cfg, читая выбранный предпочтительный языковой пакет доступен, не принимает язык браузера по умолчанию.</p>

	<h2>Сведения о конфигурации</h2>
	<ol>
		<li>Текущее значение глобального языка: <?php echo lp::_getCurrentlp(); ?></li>
		<li>Операция файла: <?php echo lp::_getCurrentsetFileType(); ?></li>
		<li>Сохраните путь файла конфигурации: <?php echo lp::_getCurrentFileType(); ?></li>
		<li>Файлы, которые в настоящее время загружены: 04-settings/ru-ru/index.php</li>
	</ol>

	<h2>Выберите один из доступных языков</h2>
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

	<h2>Как его использовать</h2>
	<ol>
		<li>Извлеките файл &lt; latest.zip &gt;; </li>
		<li>Загрузка или копирование '04-settings' Файл вашего веб-сайта домашний каталог в каталоге;</li>
		<li>Изменение <?php echo lp::_getCurrentFileType(); ?> Разрешения для файлов 777；</li>
		<dt>chmod 777 &lt; folder &gt; /<?php echo lp::_getCurrentFileType(); ?></dt>
		<li>Необязательные XML/cfg типа (XML по умолчанию), Редактирование routes/lp-class.php Файл и изменить $setFileType Переменная;</li>
		<li>Доступ к браузеру: http://&lt; Ваше доменное имя или IP &gt;;</li>
		<li>Начните экспериментировать!</li>
	</ol>
<?php include "routes/analytics.php"; ?>
</body>
</html>