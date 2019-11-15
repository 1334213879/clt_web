<!DOCTYPE HTML>
<html>
<head>
	<title>Краткое руководство &amp; PHP Рамки Многоязычная</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="Краткое руководство &amp; PHP Рамки Многоязычная" />
	<meta name="keywords" content="Краткое руководство &amp; PHP Рамки Многоязычная" />
	<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/js/prettify/prettify.css" />
	<script src="assets/js/prettify/prettify.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-layers.min.js"></script>
	<script src="assets/js/init.js"></script>
	<script src="assets/js/lang.js"></script>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/skel.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="assets/css/style-xlarge.css" />
	</noscript>
</head>

<body class="page-docs">
<!-- Wrapper -->
<div id="wrapper">
	<section id="getting-started"><!-- getting-started -->
		<header>
			<h1>начать &amp; Краткое руководство</h1>
			<p>PHP Рамки Многоязычная v5.2</p>
		</header>
		<p>Благодарим Вас за использование наших продуктов.</p>
		<p>Это краткое руководство научит вас, как использовать и создавать.</p>
		<p>Это достигается за счет рамках программы на нескольких языках, по-разному.</p>
		<p>конструкция рамы не только позволяет создавать веб-сайт является простым, быстрым и очень эффективным, достаточно, чтобы встретиться с вами.</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>пример</h2>
		<p>Они включают в себя: определяемые пользователем выбора каталога, файлы внутренние нагрузки встроенных, читает конфигурационный файл, загружающий типа.</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>Пример 1: Выбор пользователя, определенные &amp; формула Каталог</h3>
			<p>После первого запуска рулевого Глобальной каталог, выберите каталог языка после включения матч, с функцией памяти.</p>
			<dl><dt>1. Главный индекс сценарий.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->useURL = true;

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>пример 2: Файл внутренняя нагрузка &amp; встроенный</h3>
			<p>Автоматический поиск соответствующих файлов в каталоге, а не поиск, чтобы выбрать по умолчанию назвать файл.</p>
			<dl><dt>1. Главный индекс сценарий.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->useURL = true;

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. В routes Создание языковых файлов, которые совпадают. Например:</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

ru-ru.php

&lt;html&gt;
&lt;body&gt;
  Встроенный ru-ru.php Файл;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>См latest.zip -> /02-embed/routes Каталог файла.</p>
			</dd>

			<dl><dt>3. Создайте новую страницу!</dt>
			<dd>
				<p>Использование шаблона 02-embed/templets.php Файл, измените пользователя на новое имя файла (Пример: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->masterCatalogue = "routes/{newpage}";

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Создание каталогов и соответствующий язык</p>
			</dd>
			<dd><pre><code class="prettyprint php">В 02-embed/module/newpage, Созданный каталог должен {newpage} Согласованные имена переменных.</code></pre></dd>

			<dd>
				<p>Создание обложки темы</p>
			</dd>
			<dd><pre><code class="prettyprint php">B 02-embed/themes И создание newpage.php Файл.</code></pre></dd>

			<dd>
				<p>Режим доступа</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>пример 3: чтение файла конфигурации, &amp; Тип погрузки</h3>
			<p>Автоматический поиск языковой файл соответствия и вызвать После загрузки, в том числе: символьной строки, параметры.</p>
			<dl><dt>1. Загрузите Script (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->useURL = true;

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. Html против PHP Язык-текст, например:</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>посмотреть latest.zip -> /03-load/languages/ Каталог en-us.php &amp; ru-ru.php Файл.</p>
			</dd>

			<dt>3. Создать соответствующий шаблон язык. например:</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">en-us.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Available Languages:',
);
?&gt;

ru-ru.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Доступные Языки:',
);
?&gt;</code></pre></dd>
			<dd>
				<p>посмотреть latest.zip -> /03-load/languages/ Каталог en-us.php, ru-ru.php Файл.</p>
			</dd>

			<dl><dt>4. Создайте новую страницу!</dt>
			<dd>
				<p>Использование шаблона 03-load/templets.php Файл, измените пользователя на новое имя файла (пример: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Создание каталогов и соответствующий язык</p>
			</dd>
			<dd><pre><code class="prettyprint php">В 03-load/module/newpage, создайте каталог должен {newpage} Согласованные имена переменных.</code></pre></dd>

			<dd>
				<p>Режим доступа</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>Пример 4: Для сохранения настроек &amp; Профиль</h3>
			<p>Этот пример отличается от динамического чтения и записи файлов cookie; сохранение конфигурации XML/cfg, читая выбранный предпочтительный языковой пакет доступен, не принимает язык браузера по умолчанию.</p>
			<dl><dt>1. главный индекс сценарий. </dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Исходный путь: latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt> 2. создать имеющихся глобальных параметров. например: </dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p> См. latest.zip -> /04-settings/lang-cfg-sample.php файл. </p>
			</dd>

			<dl><dt>3. Создайте новую страницу!</dt>
			<dd>
				<p>Использование шаблона 04-settings/templets.php Файл, измените пользователя на новое имя файла (пример: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** Для инициализации приложения */
$app = new lp();

/** Создание и настройка приложения */
$app->masterCatalogue = "routes/{newpage}";

/** Запуск приложения */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Создание каталогов и соответствующий язык</p>
			</dd>
			<dd><pre><code class="prettyprint php">В 04-settings/module/newpage, Создайте каталог должен {newpage} Согласованные имена переменных.</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>Пример 5: база данных &amp; Массив типа</h3>
			<p>Пасс PDO Подключение SQL База данных, Поддержка MySQL, SQLite. С помощью функции массивов (Array) перечисляет все доступные данные.</p>
			<dl><dt>1. lp-load Сценарист.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
require_once('lp-load.php');

/** Browser session */
if (!session_id()) session_start();
header('Cache-control: private');

$db = new db();

if(isSet($_GET['lang'])) {
	$lang = strtolower($_GET['lang']);

	/** Cookie: Setting, Register */
	$_SESSION['lang'] = $lang;
	$_COOKIE["lang"] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');

	$current_lng = $db->select(DB_PREFIX."language", "code = '$lang'");
	if ($current_lng) {
		$_COOKIE["lang"] = $lang;
		$lng = $lang;
	} else {
		$lng = "en-us";
	}
} else if(isSet($_COOKIE['lang'])) {
	$lang = $_COOKIE["lang"];
	$current_lng = $db->select(DB_PREFIX."language", "code = '$lang'");
	if ($current_lng) {
		$_COOKIE["lang"] = $lang;
		$lng = $lang;
	} else {
		$lng = "en-us";
	}
} else {
	preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
	$lang = strtolower($matches[1]);
	$_COOKIE["lang"] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');

	$current_lng = $db->select(DB_PREFIX."language", "code = '$lang'");
	if ($current_lng) {
		$_COOKIE["lang"] = $lang;
		$lng = $lang;
	} else {
		$lng = "en-us";
	}
}
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config Конфигурация.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL Режим соединения */
define('Database_Mode',    'mysql');
/** Допустимые значения: mysql , sqlite */

/** MySQL Хост */
define('DB_HOST',          'localhost');

/** MySQL Имя базы данных */
define('DB_NAME',          'lang-php');

/** MySQL Пользователь */
define('DB_USER',          'root');

/** MySQL Пароль */
define('DB_PWD',           '');

/** Префикс базы данных */
define('DB_PREFIX',        'lp_');

/** Кодирование базы данных */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. Строка подключения для текущей страницы.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
require_once('lp-load.php');

/** Задает переменную текущей страницы */
$page_team = 'homepage';

/** SQL Идентификатор строки подключения */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng); 
?&gt;</code></pre></dd>
			<dd>
				<p>См latest.zip -> /05-database/index.php Файл.</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Вызывается метод Array.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Используйте вывод команды print_r все массив.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. Создайте новую страницу!</dt>
			<dd>
				<p>Использование шаблона 05-database/templets.php Файл, Пользователям вносить изменения в новое имя файла (пример: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">тобы изменить имя текущей страницы, для того чтобы индексировать.
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>Пример 6: Автономное &amp; Портативный</h3>
			<p>Использование array() Построение массива языковой структуры и функции для выполнения всех операций, по сравнению с другой версией, портативная версия выполняется в документе.</p>
			<dl><dt>1. Портативные скрипты (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** Добавление и Установка доступных языковых пакетов */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** Обозреватель session */
if (!session_id()) session_start();
header('Cache-control: private');

if(isSet($_GET['lang'])) {
	$lang = strtolower($_GET['lang']);

	/** Cookie: Setting, Register */
	$_SESSION['lang'] = $lang;
	$_COOKIE["lang"] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');

	if (in_array($lang, $global_lp_all)) {
		$_COOKIE["lang"] = $lang;
		$_SESSION['lang'] = $lang;
		$lng = $lang;
	}
} else if(isSet($_COOKIE['lang'])) {
	if (in_array($_COOKIE['lang'], $global_lp_all)) {
		$lng = $_COOKIE['lang'];
	} else {
		$lng = 'en-us';
	}
} else {
	preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
	$lang = strtolower($matches[1]);
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');
	$_COOKIE["lang"] = $lang;
	
	if (in_array($lang, $global_lp_all)) {
		$_COOKIE["lang"] = $lang;
		$_SESSION['lang'] = $lang;
		$lng = $lang;
	}
}

$lpna = array (
	'lang_page_title' => array (
		'en-us' => 'United States - English',
		'ru-ru' => 'Россия - Русский')
);
?&gt;</code></pre></dd>
			<dd>
				<p>Пожалуйста, обратите внимание, что при использовании массива строк, перечисленных Показать только часть массива, пожалуйста, проверьте исходный код: latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. Предустановленные языковые пакеты, которые доступны, сделано с помощью критериев запроса.</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Пример массива:</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Критерии запроса:</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. Вызывается метод Array.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Использование print_r Все команды вывода массива.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. Преобразование ресурсов.</dt>
			<dd>
				<p>В процессе использования портативной версии, такие как: Фото, ICO, необходимо преобразовать в кодировку base64. javascript, CSS И другие ресурсы, сделано с помощью встраивания кода и сократить упорядочение можно использовать инструменты.</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Автономные преобразования ресурсы base64 Кодирование</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP Сценарий</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# Сценарий</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA Сценарий</dt>
			<dd><pre><code class="prettyprint php">public static String encodeToString(BufferedImage image, String type) {
	String base64String = null;
	ByteArrayOutputStream bos = new ByteArrayOutputStream();
	try {
		ImageIO.write(image, type, bos);
		byte[] imageBytes = bos.toByteArray();
		BASE64Encoder encoder = new BASE64Encoder();
		base64String = encoder.encode(imageBytes);
		bos.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
		return base64String;
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON Сценарий</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY Сценарий</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Сайты онлайн преобразования рекомендуется</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>Другие добавки</h2>
		<p>Дополнение, является использование скрытой использования и других функций.</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>Универсальный интерфейс Переадресация URL</h3>
			<p>Что общего интерфейса экспедиция?</p>
			<p>Например, адрес: https://lang-php.com/license. /?=load Параметр является функцией загрузки страницы, license Аргумент является вызов routes Каталог license.php Файл.</p>
			<p>Если файл не нашел или не параметры матч на нагрузке по умолчанию home(), например:</p>
			<dl><dt>1. Главный индекс сценарий.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "Не найден" . $_GET['load'] . "Файл.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. Rewrite (Переписывание сервера)</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">Сохранить имя файла ( .htaccess ) Для следующего каталога.

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>Нет правил использования, прежде чем:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/?load=license
https://lang-php.com/?load=docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>После использования:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/license
https://lang-php.com/docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>Официальный сайт добавил правило, для того, чтобы сохранить тот же релиз, пожалуйста, посетите демо вручную.</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>Используйте Javascript (JS) и скрыть параметры для переключения языков</h3>
			<p>Что называют Javascript (JS), чтобы переключить язык и скрытые параметры? Цель состоит в том, чтобы удалить суффикс.</p>
			<p>Используйте режим 1 Передняя: https://lang-php.com/?lang=ru-ru;</p>
			<p>Используйте режим 2: https://lang-php.com, Суффикс нет.</p>
			<dl><dt>1. Javascript (JS) Код сценария.</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML Шаблон.</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;Переключение&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>Перейти к определенного доменного имени</h3>
			<p>Что такое переход к определенному домену? Некоторые примеры путем чтения и сопоставления файлов в каталоге, хотели бы достичь перехода к определенной доменного имени, пожалуйста, обратитесь к следующему коду:</p>
			<dl><dt>Добавьте код к необходимости прыгать страницу!</dt>
			<dd><pre><code class="prettyprint php">&lt;php
	/* sample 1 */
	header("Location: http://us.lang-php.com");

	/* sample 2 */
	$Global_Domain = "https://lang-php.com/";
	header("Location:" . $Global_Domain . "us");                
?&gt;</code></pre></dd>
			<dd>
				<p>Источник: latest.zip -> /routes/Domain-Jump-Sample.php</p>
			</dd>
		</section><!-- end supplements domain dump -->
	</section><!-- end supplements -->

	<section id="upgrading"><!-- upgrading -->
		<h2>v5.2 Обновление:</h2>
		<ul class="checklist">
			<li>Новый многоязычный официальный сайт, Краткое руководство, * New</li>
			<li>Опыт различных примеров различных версий и демонстрации; * New</li>
			<li>　- Пример 1: Выбор пользователя, определенные &amp; Каталог стиле; * New</li>
			<li>　- Пример 2: Файл внутреннего нагрузки &amp; Встроенные; * New</li>
			<li>　- Пример 3: Читает файл конфигурации &amp; Тип погрузки; * New</li>
			<li>　- Пример 4: Для сохранения настроек &amp; Профиль; * New</li>
			<li>　- Пример 5: база данных &amp; Массив типа * New</li>
			<li>　- Пример 6: Автономная версия &amp; Портативный * New</li>
			<li>Используйте Javascript (JS), чтобы переключить язык и скрыть суффикс; * New</li>
			<li>Исправлена идентификация IE8 неверно;, который был преобразован в нижний регистр; * Fix</li>
			<li>Все иконки, изображения и т. Д. Были изменены в формате SVG; * Up</li>
			<li>Исправлена ошибка, из-за которой нельзя было переключить язык нажатием кнопки «Режим 2» (Пример 6: Автономный &amp; портативный).* Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>лицензионный договор</h2>
		<p>Пожалуйста, следуйте лицензию MIT с открытым исходным кодом.</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>Настоящим предоставляется бесплатно, любому лицу, приобретающему копию данного программного обеспечения и сопутствующей документации ("Программное обеспечение"), для решения в программное обеспечение без каких-либо ограничений, в том числе, но не ограничиваясь на использование, копирование, изменение, слияние, публиковать, распространять, лицензировать и копировать / или продаже программного обеспечения, а также позволяет использование в личных целях и коммерческого использования, при условии соблюдения следующих условий:</p>
		<p>Приведенное выше уведомление об авторских правах и данное разрешение должно быть включено во все копии или существенные части Программного обеспечения.</p>
		<p>Программное обеспечение предоставляется "КАК ЕСТЬ", без каких-либо прямых или подразумеваемых, включая, но не ограничиваясь товарности, пригодности и декларации ненарушения для определенной цели. В любом случае, автор или правообладателем любых претензий, убытков или другой ответственности, будь то контракт судебных разбирательств, правонарушения или по другим причинам, от причины, OUT или в связи с программным обеспечением или в результате использования или других отношениях в программном обеспечении.</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">начать</a></li>
			<li><a href="#examples" id="examples-link">пример</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">пример 1: определяемые пользователем выбор &amp; формула Каталог</a></li>
				<li><a href="#02-embed" id="02-embed-link">пример 2: Файл внутренняя нагрузка &amp; встроенный</a></li>
				<li><a href="#03-load" id="03-load-link">пример 3: чтение файла конфигурации, &amp; Тип погрузки</a></li>
				<li><a href="#04-settings" id="04-settings-link">пример 4: Для сохранения настроек &amp; Профиль</a></li>
				<li><a href="#05-database" id="05-database-link">пример 5: База данных &amp; Массив типа</a></li>
				<li><a href="#06-portable" id="06-portable-link">пример 6: Автономная версия &amp; Портативный</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">Другие добавки</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">Универсальный интерфейс Переадресация URL</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">Используйте Javascript (JS) и скрыть параметры для переключения языков</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">Перейти к определенного доменного имени</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">Обновить описание</a></li>
			<li><a href="#license" id="license-link">лицензионный договор</a></li>
			<br>
			<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a>
			<ul>
				<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a></li>
				<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a></li>
				<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中国 - 简体中文</a></li>
				<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中國 - 繁體中文</a></li>
			</ul>
		</ul>
	</div>

	<footer>
		<ul class="actions small fit">
			<li><a href="/" class="button alt small fit">возвращение</a></li>
		</ul>


	</footer><!-- end sections -->
</div><!-- end sidebar -->
<?php include "routes/analytics.php"; ?>
</body>
</html>