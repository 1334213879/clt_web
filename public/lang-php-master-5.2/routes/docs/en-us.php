<!DOCTYPE HTML>
<html>
<head>
	<title>Quick Guide &amp; PHP Multi-lingual framework</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="Quick Guide &amp; PHP Multi-lingual framework" />
	<meta name="keywords" content="Quick Guide &amp; PHP Multi-lingual framework" />
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
			<h1>START &amp; QUICK GUIDE</h1>
			<p>PHP Multi-lingual framework v5.2</p>
		</header>
		<p>Thank you for using our products.</p>
		<p>This quick guide will teach you how to use and create.</p>
		<p>This is a multilingual program implemented in a framework that is implemented in a number of different ways.</p>
		<p>Frame design not only allows you to build a website that is simple, fast, and efficient enough to satisfy you.</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>EXAMPLE</h2>
		<p>Include: user-defined selection catalog, internal loading files embedded, reads the configuration file to load type.</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>Example 1: User-defined selection &amp; directory-style</h3>
			<p>After the first run of the steering 'Worldwide' Directory, select the directory after turning matching language with memory function.</p>
			<dl><dt>1. MAIN INDEX SCRIPT.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->useURL = true;

/** Run app */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>EXAMPLE 2: THE INTERNAL LOAD FILES &amp; EMBEDDED</h3>
			<p>Automatic search for matching files in the directory, there is no search to select the default call files.</p>
			<dl><dt>1. MAIN INDEX SCRIPT.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->useURL = true;

/** Run app */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. In routes Create language files that match. For example:</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

zh-cn.php

&lt;html&gt;
&lt;body&gt;
  Embedded zh-cn.php File;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>See latest.zip -> /02-embed/routes Directory of the file.</p>
			</dd>

			<dl><dt>3. Create a new page!</dt>
			<dd>
				<p>Using templates 02-embed/templets.php file, change the user to a new file name (example: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->masterCatalogue = "routes/{newpage}";

/** Run app */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Create directories and matching language</p>
			</dd>
			<dd><pre><code class="prettyprint php">In 02-embed/module/newpage, Created directory must {newpage} Consistent variable names.</code></pre></dd>

			<dd>
				<p>Create a theme skin</p>
			</dd>
			<dd><pre><code class="prettyprint php">In 02-embed/themes And create newpage.php File.</code></pre></dd>

			<dd>
				<p>Access mode</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>EXAMPLE 3: READS THE CONFIGURATION FILE &amp; LOADED</h3>
			<p>Automatic search for a matching language file and call after loading, including: character string and parameters.</p>
			<dl><dt>1. LOAD SCRIPT (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Erstellen und Konfigurieren der Anwendung */
$app->useURL = true;

/** Run app */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. HTML AND PHP LANGUAGE SHUFFLING, FOR EXAMPLE:</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>See latest.zip -> /03-load/languages/ directory en-us.php &amp; zh-cn.php file.</p>
			</dd>

			<dt>3. CREATE A TEMPLATE MATCHING LANGUAGE. FOR EXAMPLE:</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">en-us.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Available Languages:',
);
?&gt;

zh-cn.php

&lt;?php
$lpvar = array (
	'lang_available'   => '可用语言:',
);
?&gt;
</code></pre></dd>
			<dd>
				<p>See latest.zip -> /03-load/languages/ directory en-us.php, zh-cn.php file.</p>
			</dd>

			<dl><dt>4. Create a new page!</dt>
			<dd>
				<p>Using a template 03-load/templets.php File, change the user to a new file name (example: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** Run app */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Create directories and matching language</p>
			</dd>
			<dd><pre><code class="prettyprint php">In 03-load/module/newpage, Created directory must {newpage} Consistent variable names.</code></pre></dd>

			<dd>
				<p>Access mode</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>Example 4: To save the settings &amp; Profile</h3>
			<p>This example is different from dynamic read and write Cookies; saving the configuration to XML/cfg, by reading the selected preferred language pack is available, does not accept the browser's default language preference.</p>
			<dl><dt>1. Master index script.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Run app */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt>2. Create a global parameter. For example:</dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p>see also latest.zip -> /04-settings/lang-cfg-sample.php Documents.</p>
			</dd>

			<dl><dt>3. Create a new page!</dt>
			<dd>
				<p>Using a template 04-settings/templets.php File, change the user to a new file name (example: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** Instantiate the app */
$app = new lp();

/** Create and configure app */
$app->masterCatalogue = "routes/{newpage}";

/** Run app */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>Create directories and matching language</p>
			</dd>
			<dd><pre><code class="prettyprint php">In 04-settings/module/newpage, Created directory must {newpage} Consistent variable names.</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>Example 5: database &amp; An array of type</h3>
			<p>Pass PDO Connect SQL Database, Support MySQL, SQLite. Using arrays (Array) feature lists all the available data.</p>
			<dl><dt>1. lp-load Script.</dt>
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
				<p>Source: latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config Configuration.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL Connection mode */
define('Database_Mode',    'mysql');
/** Acceptable values: mysql , sqlite */

/** MySQL Host */
define('DB_HOST',          'localhost');

/** MySQL Database name */
define('DB_NAME',          'lang-php');

/** MySQL User */
define('DB_USER',          'root');

/** MySQL Password */
define('DB_PWD',           '');

/** Database prefix */
define('DB_PREFIX',        'lp_');

/** Database coding */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. The connection string for the current page.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
include_once_once('lp-load.php');

/** Sets the current page variable */
$page_team = 'homepage';

/** SQL Connection string identifier */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng); 
?&gt;</code></pre></dd>
			<dd>
				<p>See latest.zip -> /05-database/index.php File.</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Array method is called.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use the print_r command output all array.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. Create a new page!</dt>
			<dd>
				<p>Using templates 05-database/templets.php file, change the user to a new file name (example: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">To modify the current page name, in order to index.
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>EXAMPLE 6: STANDALONE &amp; PORTABLE</h3>
			<p>Use array() Build an array of language structure and function to complete all operations compared with the other version, portable version is done by a document.</p>
			<dl><dt>1. Portable scripts (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** Add and set the available language packs */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** Browser session */
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
		'zh-cn' => '简体中文 - 中国')
);
?&gt;</code></pre></dd>
			<dd>
				<p>Please note that when using array lines, listed show only part of an array, please check out the source code: the latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. Preset the language packs that are available, done through the query criteria.</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Array example:</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Query criteria:</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. Array method is called.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use print_r All command output array.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. Resource conversion.</dt>
			<dd>
				<p>In the process of using a portable version, such as: photo, ICO, needs to be converted to base64 Encoding. javascript, CSS And other resources, done using the embed code and shorten the streamlining tools can be used.</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Offline conversion resources base64 Coding</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP Script</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# Script</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA Script</dt>
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
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON Script</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY Script</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once 'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online conversion sites recommended</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>OTHER SUPPLEMENTS</h2>
		<p>Supplement, is the use of hidden usage and other functions.</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>GENERAL URL FORWARDING INTERFACE</h3>
			<p>What is common forwarding interface?</p>
			<p>For example address: https://lang-php.com/license. /?=load Parameter is a function of loading pages, license argument is to call routes directory license.php file.</p>
			<p>If the file is not found or does not match the parameters, the default load home(). For example:</p>
			<dl><dt>1. MAIN INDEX SCRIPT.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "Not found " . $_GET['load'] . " file.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. REWRITE (SERVER REWRITING)</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">Save the file name ( .htaccess ) to the directory.

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>Not using the rules before:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/?load=license
https://lang-php.com/?load=docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>After use:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/license
https://lang-php.com/docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>The official website has been added to the rule, in order to maintain the same release, please manually access the demo.</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>Using Javascript (JS) switch the language and hidden parameters</h3>
			<p>What is called by Javascript (JS) To switch the language and hidden parameters? The purpose is to remove the suffix.</p>
			<p>Before using Mode 1 : https://lang-php.com/?lang=zh-cn;</p>
			<p>Use mode 2 : https://lang-php.com, Suffix no.</p>
			<dl><dt>1. JAVASCRIPT (JS) SCRIPT CODE.</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML TEMPLATE.</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;Switching&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>Jump to a specific domain name</h3>
			<p>What is a jump to a specific domain? Some examples are by reading and matching files in the directory, would like to achieve jump to a specific domain name, please refer to the following code:</p>
			<dl><dt>Add code to the need to jump page!</dt>
			<dd><pre><code class="prettyprint php">&lt;php
	/* sample 1 */
	header("Location: http://us.lang-php.com");

	/* sample 2 */
	$Global_Domain = "https://lang-php.com/";
	header("Location:" . $Global_Domain . "us");                
?&gt;</code></pre></dd>
			<dd>
				<p>Source: latest.zip -> /routes/Domain-Jump-Sample.php</p>
			</dd>
		</section><!-- end supplements domain dump -->
	</section><!-- end supplements -->

	<section id="upgrading"><!-- upgrading -->
		<h2>v5.2 Update:</h2>
		<ul class="checklist">
			<li>New multi-language official website, Quick Guide; * New</li>
			<li>Experience a variety of examples of the different versions and demos; * New</li>
			<li>　- Example 1: User-defined selection &amp; directory-style; * New</li>
			<li>　- Example 2: The internal load files &amp; Embedded; * New</li>
			<li>　- Example 3: Reading configuration file &amp; Loaded; * New</li>
			<li>　- Example 4: To save the settings &amp; Profile; * New</li>
			<li>　- Example 5: database &amp; An array of type; * New</li>
			<li>　- Example 6: STAND-ALONE VERSION &amp; PORTABLE; * New</li>
			<li>Use Javascript (JS) To switch the language and hide suffix; * New</li>
			<li>Fixed IE8 Identification is incorrect; converted to lowercase; * Fix</li>
			<li>All icons, images, etc. have been changed in SVG format; * Up</li>
			<li>Fixed a bug where the language could not be switched by clicking "Mode 2" (Example 6: Standalone &amp; Portable). * Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>THE LICENSE AGREEMENT (MIT)</h2>
		<p>Please follow the open-source MIT protocol.</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
		<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
		<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">START</a></li>
			<li><a href="#examples" id="examples-link">EXAMPLE</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">EXAMPLE 1: USER-DEFINED SELECTION &amp; DIRECTORY-STYLE</a></li>
				<li><a href="#02-embed" id="02-embed-link">EXAMPLE 2: THE INTERNAL LOAD FILES &amp; EMBEDDED</a></li>
				<li><a href="#03-load" id="03-load-link">EXAMPLE 3: READS THE CONFIGURATION FILE &amp; LOADED</a></li>
				<li><a href="#04-settings" id="04-settings-link">EXAMPLE 4: TO SAVE THE SETTINGS &AMP; PROFILE</a></li>
				<li><a href="#05-database" id="05-database-link">EXAMPLE 5：DATABASE &amp; AN ARRAY OF TYPE</a></li>
				<li><a href="#06-portable" id="06-portable-link">EXAMPLE 6: STAND-ALONE VERSION &amp; PORTABLE</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">OTHER SUPPLEMENTS</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">GENERAL URL FORWARDING INTERFACE</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">Using javascript (JS) SWITCH THE LANGUAGE AND HIDDEN PARAMETERS</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">JUMP TO A SPECIFIC DOMAIN NAME</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">UPDATE DESCRIPTION</a></li>
			<li><a href="#license" id="license-link">LICENSE AGREEMENT</a></li>
			<br>
			<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a>
			<ul>
				<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a></li>
				<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a></li>
				<li><a href="javascript:lang('zh-CN')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中国 - 简体中文</a></li>
				<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中國 - 繁體中文</a></li>
			</ul>
		</ul>
	</div>

	<footer>
		<ul class="actions small fit">
			<li><a href="/" class="button alt small fit">Back</a></li>
		</ul>


	</footer><!-- end sections -->
</div><!-- end sidebar -->
<?php include "routes/analytics.php"; ?>
</body>
</html>