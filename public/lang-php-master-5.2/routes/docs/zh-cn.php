<!DOCTYPE HTML>
<html>
<head>
	<title>快速指南 &amp; lang-php</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="快速指南 &amp; lang-php" />
	<meta name="keywords" content="快速指南 &amp; PHP 多国语言框架" />
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
			<h1>开始 &amp; 快速指南</h1>
			<p>PHP 多国语框架 v5.2</p>
		</header>
		<p>非常感谢您使用我们的产品。</p>
		<p>本快速指南将指导您如何使用并创建。</p>
		<p>这是一个通过框架来实现的多国语程序，以多种不同的方式实现。</p>
		<p>框架设计不仅让你网站搭建起来很简单、很快、也很高效，足以满足你。</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>示例</h2>
		<p>包括：用户自定义选择目录式、内部加载文件嵌入式、读取配置文件加载式。</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>示例 1：用户自定义选择 &amp; 目录式</h3>
			<p>首次运行后转向 Worldwide 目录，选择后转向匹配的语言目录，带记忆功能。</p>
			<dl><dt>1. 主索引脚本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->useURL = true;

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>示例 2：内部加载文件 &amp; 嵌入式</h3>
			<p>自动搜索匹配目录下的文件，没有搜索到则选择默认调用文件。</p>
			<dl><dt>1. 主索引脚本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->useURL = true;

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. 在 routes 下创建匹配的语言文件。例如：</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

zh-cn.php

&lt;html&gt;
&lt;body&gt;
  嵌入 zh-cn.php 文件;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>请参阅 latest.zip -> /02-embed/routes 目录下的文件。</p>
			</dd>

			<dl><dt>3. 创建新页面！</dt>
			<dd>
				<p>使用模板 02-embed/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = "routes/{newpage}";

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>创建目录及匹配的语言</p>
			</dd>
			<dd><pre><code class="prettyprint php">进入 02-embed/module/newpage，创建目录必须与 {newpage} 变量名一致。</code></pre></dd>

			<dd>
				<p>创建主题皮肤</p>
			</dd>
			<dd><pre><code class="prettyprint php">进入 02-embed/themes 并创建 newpage.php 文件。</code></pre></dd>

			<dd>
				<p>访问模式</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>示例 3：读取配置文件 &amp; 加载式</h3>
			<p>自动搜索匹配的语言文件并加载后调用，包括：字串符、参数等。</p>
			<dl><dt>1. 加载脚本（index.php）。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->useURL = true;

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. Html 与 PHP 语言混排，例如：</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>请参阅 latest.zip -> /03-load/languages/ 目录下的 en-us.php &amp; zh-cn.php 文件。</p>
			</dd>

			<dt>3. 创建可匹配的语言模板。例如：</dt><dd>
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
?&gt;</code></pre></dd>
			<dd>
				<p>请参阅 latest.zip -> /03-load/languages/ 目录下的 en-us.php, zh-cn.php 文件。</p>
			</dd>

			<dl><dt>4. 创建新页面！</dt>
			<dd>
				<p>使用模板 03-load/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>创建目录及匹配的语言</p>
			</dd>
			<dd><pre><code class="prettyprint php">进入 03-load/module/newpage，创建目录必须与 {newpage} 变量名一致。</code></pre></dd>

			<dd>
				<p>访问模式</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>示例 4：保存设置 &amp; 配置式</h3>
			<p>该示例与动态读写 Cookies 不同；将配置保存到 xml 或 cfg，通过读取来选择可用的首选语言包，不接受浏览器默认语言来优先选择。</p>
			<dl><dt>1. 主索引脚本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt>2. 创建一个可用的全局参数。例如：</dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p>请参阅 latest.zip -> /04-settings/lang-cfg-sample.php 文件。</p>
			</dd>

			<dl><dt>3. 创建新页面！</dt>
			<dd>
				<p>使用模板 04-settings/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once__DIR__ . '/routes/lp-class.php';

/** 初始化应用程序 */
$app = new lp();

/** 创建和配置应用程序 */
$app->masterCatalogue = "routes/{newpage}";

/** 运行应用程序 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>创建目录及匹配的语言</p>
			</dd>
			<dd><pre><code class="prettyprint php">进入 04-settings/module/newpage，创建目录必须与 {newpage} 变量名一致。</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>示例 5：数据库 &amp; 数组式</h3>
			<p>通过 PDO 方式连接 SQL 数据库，支持 MySQL、SQLite。并使用数组（Array）功能列出所有可用的数据。</p>
			<dl><dt>1. lp-load 脚本。</dt>
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
				<p>源码：latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config 配置。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL 连接模式 */
define('Database_Mode',    'mysql');
/** 可接受值: mysql , sqlite */

/** MySQL 主机 */
define('DB_HOST',          'localhost');

/** MySQL 数据库名称 */
define('DB_NAME',          'lang-php');

/** MySQL 用户 */
define('DB_USER',          'root');

/** MySQL 密码 */
define('DB_PWD',           '');

/** 数据库前缀 */
define('DB_PREFIX',        'lp_');

/** 数据库编码 */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. 当前页面连接字串。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
require_once('lp-load.php');

/** 设置当前页面变量 */
$page_team = 'homepage';

/** SQL 连接字串符 */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng);  
?&gt;</code></pre></dd>
			<dd>
				<p>请参阅 latest.zip -> /05-database/index.php 文件。</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数组调用方法。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用 print_r 命令输出所有数组。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 创建新页面！</dt>
			<dd>
				<p>使用模板 05-database/templets.php 文件，用户自行更改为新文件名（示例为：newpage.php）。</p>
			</dd>
			<dd><pre><code class="prettyprint php">修改当前页面名称，以便索引。
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>示例 6：独立版 &amp; 便携式</h3>
			<p>利用 array() 语言结构建一个数组，通过函数来完成所有操作；相对其它版本，便携版是由一个文件来完成。</p>
			<dl><dt>1. 便携式主脚本（index.php）。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** 添加并设置可用的语言包 */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');11

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
		'zh-cn' => '简体中文 - 中国')
);
?&gt;</code></pre></dd>
			<dd>
				<p>使用时请注意数组写法，数组演示仅列出部分，请查阅源代码：latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. 预先设置可用的语言包，通过查询条件来完成。</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数组示例：</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查询条件：</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. 数组调用方法。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用 print_r 命令输出所有数组。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 资源转换。</dt>
			<dd>
				<p>在使用便携版过程中，例如：图片、ICO，需要转换成 base64 编码。javascript、CSS 等资源，用嵌入代码来完成，缩短可以使用精简工具。</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;离线完成转换资源为 base64 编码</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP 脚本</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# 脚本</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA 脚本</dt>
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
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON 脚本</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY 脚本</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在线转换网站推荐</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>其它补充</h2>
		<p>补充，是指使用中隐藏用法及其它功能等。</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>通用 Url 转发接口</h3>
			<p>什么叫通用转发接口？</p>
			<p>例如地址为：https://lang-php.com/license。 /?=load 参数是表示加载页面功能，license 参数是调用 routes 目录下的 license.php 文件。</p>
			<p>如果没有找到匹配的文件或者没有参数，就默认加载 home()。例如：</p>
			<dl><dt>1. 主索引脚本。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "没有找到" . $_GET['load'] . "文件.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. Rewrite（服务器重写技术）</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">保存文件名 ( .htaccess ) 到目录下即可。

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>没有使用规则前：</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/?load=license
https://lang-php.com/?load=docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>使用后：</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/license
https://lang-php.com/docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>官方网站已添加该规则，为保持发布版相同，请手动访问演示。</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>使用 Javascript (JS) 切换语言并隐藏参数</h3>
			<p>什么叫通过 Javascript (JS) 来切换语言并隐藏参数？目的就是去掉后缀。</p>
			<p>使用模式 1 前：https://lang-php.com/?lang=zh-cn；</p>
			<p>使用模式 2 后：https://lang-php.com，后缀没有了。</p>
			<dl><dt>1. Javascript (JS) 脚本代码。</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>源码：latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML 模板。</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;切换&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>跳转到指定的域名</h3>
			<p>什么是跳转到指定的域名？部分示例都是通过读取并匹配目录下的文件，想实现跳转到指定的域名，请参考以下代码：</p>
			<dl><dt>添加代码到需要跳转的页面！</dt>
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
		<h2>v5.2 更新说明：</h2>
		<ul class="checklist">
			<li>全新多国语官方网站、快速指南； * New</li>
			<li>体验多款不同版本的示例并演示； * New</li>
			<li>　- 示例 1：用户自定义选择 &amp; 目录式； * New</li>
			<li>　- 示例 2：内部加载文件 &amp; 嵌入式； * New</li>
			<li>　- 示例 3：读取配置文件 &amp; 加载式； * New</li>
			<li>　- 示例 4：保存设置 &amp; 配置式； * New</li>
			<li>　- 示例 5：数据库 &amp; 数组式； * New</li>
			<li>　- 示例 6：独立版 &amp; 便携式； * New</li>
			<li>使用 Javascript (JS) 来切换语言并隐藏后缀； * New</li>
			<li>修复了 IE8 识别不正确；已转换小写； * Fix</li>
			<li>所有图标、图片等已更改 SVG 格式； * Up</li>
			<li>已修复点击“模式 2”无法切换语言（示例 6：独立版 &amp; 便携式）。* Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>许可协议</h2>
		<p>请遵循开源 MIT 协议。</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>特此授权，免费的，任何人获得该软件的副本及相关文档文件（“软件”），以应付在软件不受任何限制，包括但不限于使用，复制，修改，合并，发布，分发，再许可和/或销售软件的副本，并允许个人使用及商业使用，须符合下列条件：</p>
		<p>上述版权声明和本许可声明应包含在所有副本或实质性部分的软件。</p>
		<p>软件提供“AS IS”，不做任何形式的明示或暗示，包括但不限于适销性，针对特定用途的适用性和不侵权的声明。在任何情况下，作者或版权所有者对任何索赔，损害或其他责任，无论是合同诉讼，侵权行为还是其他原因等，从所引起，OUT 或 IN 连接与软件或使用或其他交易的软件。</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">开始</a></li>
			<li><a href="#examples" id="examples-link">示例</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">示例 1：用户自定义选择 &amp; 目录式</a></li>
				<li><a href="#02-embed" id="02-embed-link">示例 2：内部加载文件 &amp; 嵌入式</a></li>
				<li><a href="#03-load" id="03-load-link">示例 3：读取配置文件 &amp; 加载式</a></li>
				<li><a href="#04-settings" id="04-settings-link">示例 4：保存设置 &amp; 配置式</a></li>
				<li><a href="#05-database" id="05-database-link">示例 5：数据库 &amp; 数组式</a></li>
				<li><a href="#06-portable" id="06-portable-link">示例 6：独立版 &amp; 便携式</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">其它补充</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">通用 Url 转发接口</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">使用 Javascript (JS) 切换语言并隐藏参数</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">跳转到指定的域名</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">更新说明</a></li>
			<li><a href="#license" id="license-link">许可协议</a></li>
			<br>
			<li><a href="javascript:lang('zh-CN')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中国 - 简体中文</a>
			<ul>
				<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a></li>
				<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a></li>
				<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a></li>
				<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中國 - 繁體中文</a></li>
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