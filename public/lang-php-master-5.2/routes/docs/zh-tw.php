<!DOCTYPE HTML>
<html>
<head>
	<title>快速指南 &amp; PHP 多國語言框架</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="快速指南 &amp; PHP 多國語言框架" />
	<meta name="keywords" content="快速指南 &amp; PHP 多國語言框架" />
	<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/js/prettify/prettify.css" />
	<script src="assets/js/prettify/prettify.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-layers.min.js"></script>
	<script src="assets/js/init.zh-cn.js"></script>
	<script src="assets/js/lang.js"></script>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/skel.css" />
		<link rel="stylesheet" href="assets/css/style.zh-cn.css" />
		<link rel="stylesheet" href="assets/css/style-xlarge.css" />
	</noscript>
</head>

<body class="page-docs">
<!-- Wrapper -->
<div id="wrapper">
	<section id="getting-started"><!-- getting-started -->
		<header>
			<h1>開始 &amp; 快速指南</h1>
			<p>PHP 多國語框架 v5.2</p>
		</header>
		<p>非常感謝您使用我們的產品。</p>
		<p>本快速指南將指導您如何使用並創建。</p>
		<p>這是一個通過框架來實現的多國語程序，以多種不同的方式實現。</p>
		<p>框架設計不僅讓你網站搭建起來很簡單、很快、也很高效，足以滿足你。</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>示例</h2>
		<p>包括：用戶自定義選擇目錄式、內部加載文件嵌入式、讀取配置文件加載式。</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>示例 1：用戶自定義選擇 &amp; 目錄式</h3>
			<p>首次運行後轉向 Worldwide 目錄，選擇後轉向匹配的語言目錄，帶記憶功能。</p>
			<dl><dt>1. 主索引腳本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 創建和配置應用程序 */
$app->useURL = true;

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>示例 2：內部加載文件 &amp; 嵌入式</h3>
			<p>自動搜索匹配目錄下的文件，沒有搜索到則選擇默認調用文件。</p>
			<dl><dt>1. 主索引腳本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 創建和配置應用程序 */
$app->useURL = true;

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. 在 routes 下創建匹配的語言檔。後點查詢即可︰</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

zh-tw.php

&lt;html&gt;
&lt;body&gt;
  嵌入 zh-tw.php 檔;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>請參閱 latest.zip -> /02-embed/routes 目錄下的檔。</p>
			</dd>

			<dl><dt>3. 創建新頁面 ！</dt>
			<dd>
				<p>使用範本 02-embed/templets.php 檔，使用者自行更改為新檔案名（示例為：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = "routes/{newpage}";

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>創建目錄及匹配的語言</p>
			</dd>
			<dd><pre><code class="prettyprint php">進入 02-embed/module/newpage，創建目錄必須與 {newpage} 變數名一致。</code></pre></dd>

			<dd>
				<p>創建主題皮膚</p>
			</dd>
			<dd><pre><code class="prettyprint php">進入 02-embed/themes 並創建 newpage.php 檔。</code></pre></dd>

			<dd>
				<p>訪問模式</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>示例 3：讀取設定檔 &amp; 加載式</h3>
			<p>自動搜索匹配的語言檔並加載後調用，包括：字串符、參數等。</p>
			<dl><dt>1. 加載腳本（index.php）。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 創建和配置應用程序 */
$app->useURL = true;

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. Html 與 PHP 語言混排，例如：</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>請參閱 latest.zip -> /03-load/languages/ 目錄下的 en-us.php &amp; zh-cn.php 文件。</p>
			</dd>

			<dt>3. 創建可匹配的語言模板。例如：</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">en-us.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Available Languages:',
);
?&gt;

zh-tw.php

&lt;?php
$lpvar = array (
	'lang_available'   => '可用語言:',
);
?&gt;</code></pre></dd>
			<dd>
				<p>請參閱 latest.zip -> /03-load/languages/ 目錄下的 en-us.php, zh-cn.php 檔。</p>
			</dd>

			<dl><dt>4. 創建新頁面！</dt>
			<dd>
				<p>使用範本 03-load/templets.php 檔，使用者自行更改為新檔案名（示例為：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>創建目錄及匹配的語言</p>
			</dd>
			<dd><pre><code class="prettyprint php">進入 03-load/module/newpage，創建目錄必須與 {newpage} 變數名一致。</code></pre></dd>

			<dd>
				<p>訪問模式</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>示例 4：保存設置 &amp; 配寘式</h3>
			<p>該示例與動態讀寫 Cookies 不同；將配寘保存到 xml 或 cfg，通過讀取來選擇可用的首選語言包，不接受瀏覽器默認語言來優先選擇。</p>
			<dl><dt>1. 主索引腳本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt>2. 創建一個可用的全域參數。例如：</dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p>請參閱 latest.zip -> /04-settings/lang-cfg-sample.php 檔案。</p>
			</dd>

			<dl><dt>3. 創建新頁面！</dt>
			<dd>
				<p>使用範本 04-settings/templets.php 檔，使用者自行更改為新檔案名（示例為：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化應用程式 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = "routes/{newpage}";

/** 運行應用程式 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>創建目錄及匹配的語言</p>
			</dd>
			<dd><pre><code class="prettyprint php">進入 04-settings/module/newpage，創建目錄必須與 {newpage} 變數名一致。</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>示例 5：資料庫 &amp; 陣列式</h3>
			<p>通過 PDO 方式連接 SQL 資料庫，支援 MySQL、SQLite。 並使用陣列（Array）功能列出所有可用的資料。</p>
			<dl><dt>1. lp-load 編劇。</dt>
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
				<p>源碼：latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config 配置。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL 連接模式 */
define('Database_Mode',    'mysql');
/** 可接受值: mysql , sqlite */

/** MySQL 主機 */
define('DB_HOST',          'localhost');

/** MySQL 資料庫名稱 */
define('DB_NAME',          'lang-php');

/** MySQL 消費者 */
define('DB_USER',          'root');

/** MySQL 密碼 */
define('DB_PWD',           '');

/** 資料庫首碼 */
define('DB_PREFIX',        'lp_');

/** 資料庫編碼 */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. 當前頁面連接字串。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
require_once('lp-load.php');

/** 設置當前頁面變數 */
$page_team = 'homepage';

/** SQL 連接字串符 */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng); 
?&gt;</code></pre></dd>
			<dd>
				<p>請參閱 latest.zip -> /05-database/index.php 檔。</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陣列調用方法。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用 print_r 命令輸出所有陣列。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 創建新頁面！</dt>
			<dd>
				<p>使用範本 05-database/templets.php 檔，使用者自行更改為新檔案名（示例為：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">修改當前頁面名稱，以便索引。
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>示例 6：獨立版 &amp; 可擕式</h3>
			<p>利用 array() 語言結構建一個陣列，通過函數來完成所有操作；相對其它版本，便攜版是由一個檔來完成。</p>
			<dl><dt>1. 便携式主腳本（index.php）。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** 添加並設置可用的語言包 */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** 浏览器 session */
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
		'zh-tw' => '繁體中文 - 中國')
);
?&gt;</code></pre></dd>
			<dd>
				<p>使用時請注意陣列寫法，陣列演示僅列出部分，請查閱原始程式碼：latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. 預先設置可用的語言包，通過查詢準則來完成。</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陣列示例：</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查詢準則：</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. 陣列調用方法。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用 print_r 命令輸出所有陣列。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 資源轉換。</dt>
			<dd>
				<p>在使用便攜版過程中，例如：圖片、ICO，需要轉換成 base64 編碼。 javascript、CSS 等資源，用嵌入代碼來完成，縮短可以使用精簡工具。</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;離線完成轉換資源為 base64 編碼</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP 腳本</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# 腳本</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA 腳本</dt>
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
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON 腳本</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY 腳本</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;線上轉換網站推薦</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>其它補充</h2>
		<p>补充，是指使用中隐藏用法及其它功能等。</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>通用 Url 轉發接口</h3>
			<p>什麼叫通用轉發接口？</p>
			<p>例如地址為：https://lang-php.com/license。 /?=load 參數是表示加載頁面功能，license 参数是调用 routes 目錄下的 license.php 文件。</p>
			<p>如果沒有找到匹配的文件或者沒有參數，就默認加載 home()。例如：</p>
			<dl><dt>1. 主索引腳本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "沒有找到" . $_GET['load'] . "檔.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. Rewrite（服務器重寫技術）</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">保存文件名 ( .htaccess ) 到目錄下即可。

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>沒有使用規則前：</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/?load=license
https://lang-php.com/?load=docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>使用後：</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/license
https://lang-php.com/docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>官方網站已添加該規則，為保持發布版相同，請手動訪問演示。</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>使用 Javascript (JS) 切換語言並隱藏參數</h3>
			<p>什麼叫通過 Javascript (JS) 來切換語言並隱藏參數？目的就是去掉後綴。</p>
			<p>使用模式 1 前：https://lang-php.com/?lang=zh-cn；</p>
			<p>使用模式 2 後：https://lang-php.com，後綴沒有了。</p>
			<dl><dt>1. Javascript (JS) 腳本代碼。</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>源碼：latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML 模板。</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=zh-tw"&gt;切換&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>跳轉到指定的域名</h3>
			<p>什麼是跳轉到指定的域名？部分示例都是通過讀取並匹配目錄下的文件，想實現跳轉到指定的域名，請參考以下代碼：</p>
			<dl><dt>添加代碼到需要跳轉的頁面！</dt>
			<dd><pre><code class="prettyprint php">&lt;php
	/* sample 1 */
	header("Location: http://us.lang-php.com");

	/* sample 2 */
	$Global_Domain = "https://lang-php.com/";
	header("Location:" . $Global_Domain . "us");                
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /routes/Domain-Jump-Sample.php</p>
			</dd>
		</section><!-- end supplements domain dump -->
	</section><!-- end supplements -->

	<section id="upgrading"><!-- upgrading -->
		<h2>v5.2 更新說明：</h2>
		<ul class="checklist">
			<li>全新多國語官方網站、快速指南； * New</li>
			<li>體驗多款不同版本的示例並演示； * New</li>
			<li>　- 示例 1：用戶自定義選擇 &amp; 目錄式； * New</li>
			<li>　- 示例 2：內部加載文件 &amp; 嵌入式； * New</li>
			<li>　- 示例 3：讀取配置文件 &amp; 加載式； * New</li>
			<li>　- 示例 4：保存設置 &amp; 配寘式； * New</li>
			<li>　- 示例 5：資料庫 &amp; 陣列式； * New</li>
			<li>　- 示例 6：獨立版 &amp; 可擕式； * New</li>
			<li>使用 Javascript (JS) 來切換語言並隱藏後綴； * New</li>
			<li>修復了 IE8 識別不正確；已轉換小寫； * Fix</li>
			<li>所有圖標、圖片等已更改 SVG 格式； * Up</li>
			<li>已修復點擊“模式 2”無法切換語言（示例 6：獨立版 &amp; 便攜式）。* Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>許可協議</h2>
		<p>請遵循開源 MIT 協議。</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>特此授權，免費的，任何人獲得該軟件的副本及相關文檔文件（“軟件”），以應付在軟件不受任何限制，包括但不限於使用，複製，修改，合併，發布，分發，再許可和/或銷售軟件的副本，並允許個人使用及商業使用，須符合下列條件：</p>
		<p>上述版權聲明和本許可聲明應包含在所有副本或實質性部分的軟件。</p>
		<p>軟件提供“AS IS”，不做任何形式的明示或暗示，包括但不限於適銷性，針對特定用途的適用性和不侵權的聲明。在任何情況下，作者或版權所有者對任何索賠，損害或其他責任，無論是合同訴訟，侵權行為還是其他原因等，從所引起，OUT 或 IN 連接與軟件或使用或其他交易的軟件。</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">開始</a></li>
			<li><a href="#examples" id="examples-link">示例</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">示例 1：用戶自定義選擇 &amp; 目錄式</a></li>
				<li><a href="#02-embed" id="02-embed-link">示例 2：內部加載文件 &amp; 嵌入式</a></li>
				<li><a href="#03-load" id="03-load-link">示例 3：讀取配置文件 &amp; 加載式</a></li>
				<li><a href="#04-settings" id="04-settings-link">示例 4：保存設置 &amp; 配寘式</a></li>
				<li><a href="#05-database" id="05-database-link">示例 5：資料庫 &amp; 陣列式</a></li>
				<li><a href="#06-portable" id="06-portable-link">示例 6：獨立版 &amp; 可擕式</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">其它補充</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">通用 Url 轉發接口</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">使用 Javascript (JS) 切換語言並隱藏參數</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">跳轉到指定的域名</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">更新說明</a></li>
			<li><a href="#license" id="license-link">許可協議</a></li>
			<br>
			<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中国 - 繁體中文</a>
			<ul>
				<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a></li>
				<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a></li>
				<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a></li>
				<li><a href="javascript:lang('zh-CN')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中國 - 简体中文</a></li>
			</ul>
		</ul>
	</div>

	<footer>
		<ul class="actions small fit">
			<li><a href="/" class="button alt small fit">返回</a></li>
		</ul>


	</footer><!-- end sections -->
</div><!-- end sidebar -->
<?php include "routes/analytics.php"; ?>
</body>
</html>