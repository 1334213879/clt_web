<!DOCTYPE HTML>
<html>
<head>
	<title>クイックガイド &amp; PHP 多言語フレームワーク</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="クイックガイド &amp; PHP 多言語フレームワーク" />
	<meta name="keywords" content="クイックガイド &amp; PHP 多言語フレームワーク" />
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
			<h1>ベギン &amp; クイックガイド</h1>
			<p>PHP 多言語フレームワーク v5.2</p>
		</header>
		<p>当社の製品をご利用いただき、ありがとうございます。</p>
		<p>このクイックガイドでは、使用して作成する方法をご案内します。</p>
		<p>これは、多くの異なる方法で、フレームのデザインは、あなたが、簡単、迅速、かつ非常に効率的な。</p>
		<p>あなたを満たすのに十分であるウェブサイトを構築することを可能にするだけでなく、多言語プログラムのフレームワークを介して達成されます。</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>サンプル</h2>
		<p>彼らを含める：ユーザー定義選択カタログ、埋め込まれた内部負荷ファイルは、負荷の種類にコンフィギュレーションファイルを読み込みます。</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>サンプル 1：ユーザー定義選択 &amp; ディレクトリスタイル</h3>
			<p>最初の実行ステアリングの後 Worldwide 試合は、メモリ機能をオンした後にディレクトリには、言語ディレクトリを選択します。</p>
			<dl><dt>1. メインインデックススクリプト。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** アプリケーションの作成および構成 */
$app->useURL = true;

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>ソースパス：latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>サンプル 2：内部ロード·ファイル &amp; 埋め込み</h3>
			<p>ディレクトリ内のファイルを一致させるための自動検索ではなく、ファイルを呼び出す、デフォルトを選択するための検索。</p>
			<dl><dt>1. メインインデックススクリプト。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** アプリケーションの作成および構成 */
$app->useURL = true;

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>ソースパス：latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. で routes 一致する言語ファイルを作成します。 例えば：</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

ja-jp.php

&lt;html&gt;
&lt;body&gt;
  埋め込み ja-jp.php ファイル;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>参照してください latest.zip -> /02-embed/routes ファイルのディレクトリ。</p>
			</dd>

			<dl><dt>3. 新しいページを作成!</dt>
			<dd>
				<p>テンプレートを使用してください 02-embed/templets.php ファイル, ユーザーが新しいファイル名に変更するには (例示をする：newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** 作成して、アプリケーションを構成します */
$app->masterCatalogue = "routes/{newpage}";

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>ディレクトリと一致する言語を作成します</p>
			</dd>
			<dd><pre><code class="prettyprint php">で 02-embed/module/newpage, ディレクトリを作成する必要があります {newpage} 一貫性のある変数の名前。</code></pre></dd>

			<dd>
				<p>テーマ スキンを作成します</p>
			</dd>
			<dd><pre><code class="prettyprint php">で 02-embed/themes 作成と newpage.php ファイル。</code></pre></dd>

			<dd>
				<p>アクセス モード</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>サンプル 3：設定ファイルを読み込み &amp; ローディング方式</h3>
			<p>自動的に一致する言語ファイルを検索し、一度含め、ロードされたコール：文字列とパラメータを。</p>
			<dl><dt>1. ロード·スクリプト (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** アプリケーションの作成および構成 */
$app->useURL = true;

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>ソースパス：latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. Html 対 PHP 例えば言語テキスト：</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>見ます latest.zip -> /03-load/languages/ ディレクトリ en-us.php &amp; ja-jp.php ファイル。</p>
			</dd>

			<dt>3. テンプレートマッチング言語を作成します。例えば：</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">en-us.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Available Languages:',
);
?&gt;

ja-jp.php

&lt;?php
$lpvar = array (
	'lang_available'   => '利用できる言語:',
);
?&gt;</code></pre></dd>
			<dd>
				<p>見ます latest.zip -> /03-load/languages/ ディレクトリ en-us.php, ja-jp.php ファイル。</p>
			</dd>

			<dl><dt>4. 新しいページを作成!</dt>
			<dd>
				<p>テンプレートを使用してください 03-load/templets.php ファイル, ユーザーが新しいファイル名に変更するには (例示をする：newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** 作成して、アプリケーションを構成します */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>ディレクトリと一致する言語を作成します</p>
			</dd>
			<dd><pre><code class="prettyprint php">で 03-load/module/newpage, ディレクトリを作成する必要があります {newpage} 一貫性のある変数の名前。</code></pre></dd>

			<dd>
				<p>アクセス モード</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>設定を保存するには &amp; プロファイル</h3>
			<p>この例の動的読みとは異なると Cookie を書き込む; 構成を保存 xml または cfg，選択した言語を読むことによってパックがあり、ブラウザーの既定の言語設定を受け入れていません。</p>
			<dl><dt>1. 主索引シナリオ。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>ソースパス経路：latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt>2. ひとつの有効な全局のパラメ-タを創建する。例えば：</dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p>参照してください latest.zip -> /04-settings/lang-cfg-sample.php ファイル。</p>
			</dd>

			<dl><dt>3. 新しいページを作成!</dt>
			<dd>
				<p>テンプレートを使用してください 04-settings/templets.php ファイルは、ユーザーを新しいファイル名に変更 (例: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** アプリケーションを初期化するには */
$app = new lp();

/** 作成して、アプリケーションを構成します */
$app->masterCatalogue = "routes/{newpage}";

/** アプリケーションを実行します */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>ディレクトリと一致する言語を作成します</p>
			</dd>
			<dd><pre><code class="prettyprint php">で 04-settings/module/newpage, 作成したディレクトリにする必要があります {newpage} 一貫性のある変数の名前。</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>サンプル 5: データベース &amp; 型の配列</h3>
			<p>渡す PDO 接続 SQL データベース, サポート MySQL、SQLite。配列 (Array) 機能を使用して利用可能なすべてのデータが一覧表示されます。</p>
			<dl><dt>1. lp-load スクリプトです。</dt>
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
				<p>ソース: latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config 構成。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL 接続モード */
define('Database_Mode',    'mysql');
/** 許容値: mysql , sqlite */

/** MySQL ホスト */
define('DB_HOST',          'localhost');

/** MySQL データベース名 */
define('DB_NAME',          'lang-php');

/** MySQL ユーザー */
define('DB_USER',          'root');

/** MySQL パスワード */
define('DB_PWD',           '');

/** データベースの接頭辞 */
define('DB_PREFIX',        'lp_');

/** データベースのコーディング */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>ソース: latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. 現在のページの接続文字列。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
include_once_once('lp-load.php');

/** 現在のページ変数を設定します */
$page_team = 'homepage';

/** SQL 接続文字列の識別子 */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng); 
?&gt;</code></pre></dd>
			<dd>
				<p>参照してください latest.zip -> /05-database/index.php ファイル。</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配列のメソッドが呼び出されます。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Print_r コマンドの出力にすべての配列を使用します。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 新しいページを作成!</dt>
			<dd>
				<p>テンプレートを使用してください 05-database/templets.php ファイルは、ユーザーを新しいファイル名に変更 (例示をする： newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">インデックスを作成するために現在のページ名を変更。
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>サンプル 6: スタンドアロン版 &amp; ポータブル</h3>
			<p>使用 array() 配列を構築するための言語構造, すべての操作を完了する関数を；他のバージョンと比較してください，携帯版は文書によって行われます。</p>
			<dl><dt>1. ポータブルなスクリプト (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** 追加し、利用可能な言語パックを設定 */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** ブラウザー session */
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
		'ja-jp' => '日本 - 日本語')
);
?&gt;</code></pre></dd>
			<dd>
				<p>ご使用上の注意配列の書き方、配列デモ部分のみ記載して見てください、ソースコード：latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. あらかじめ使用可能な言語パッケージを設定し、検索条件を通じて完成。</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配列の例示：</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;問い合わせ条件：</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. 配列の呼び出し方。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使用 print_r コマンド出力配列。</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 資源変換。</dt>
			<dd>
				<p>携帯用のバージョンを使用しての過程で: 写真、ICO に変換する必要があります base64 エンコーディング。 javascript、CSS 埋め込みを使用して行われる、その他のリソースがコードの短縮、合理化とツールを使用できます。</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;オフライン変換リソース base64 コーディング</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP スクリプト</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# スクリプト</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA スクリプト</dt>
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
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON スクリプト</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY スクリプト</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once 'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;推奨オンライン変換サイト</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>他のサプリメント</h2>
		<p>サプリメントは、隠された使用状況およびその他の機能を使用することです。</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>ユニバーサルURLを転送インターフェース</h3>
			<p>共通の転送インターフェースは何ですか？</p>
			<p>例えば、アドレス：https://lang-php.com/license。 /?=load パラメータは、ページの読み込みの関数であり、license 引数は呼び出すことです routes ディレクトリ license.php ファイル。</p>
			<p>一致するファイルまたはパラメータなし場合は、デフォルトでロードされ、 home()。例えば：</p>
			<dl><dt>1. メインインデックススクリプト。</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "見つかりません " . $_GET['load'] . " ファイル.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. Rewrite (サーバの書き換え).</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">ファイル名を保存 ( .htaccess ) 次のディレクトリに移動します。

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>前のルールを使用しないでください。</p>
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
				<p>公式サイトでは、同じリリースを維持するために、手動でデモをご覧ください、ルールを追加しました。</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>使用 Javascript (JS) 言語と非表示パラメータを切り替えます</h3>
			<p>を通じてどのようなものです Javascript (JS) 言語を切り替えるためのパラメータを非表示にするには？目的は、接尾辞を削除することです。</p>
			<p>モードを使用します 1 前に：https://lang-php.com/?lang=ja-jp；</p>
			<p>モードを使用します 2 リア：https://lang-php.com, 接尾辞はありません。</p>
			<dl><dt>1. Javascript (JS) スクリプトコード。</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>サンプル：latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML テンプレート。</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;切り替え&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>特定のドメイン名へジャンプ</h3>
			<p>特定のドメインへのジャンプは何ですか？いくつかの例は、特定のドメイン名へのジャンプを達成したいと考え、次のコードを参照してください、ディレクトリ内のファイルを読み込むと照合することによって、次のとおりです。</p>
			<dl><dt>ページをジャンプする必要性にコードを追加します！</dt>
			<dd><pre><code class="prettyprint php">&lt;php
	/* sample 1 */
	header("Location: http://us.lang-php.com");

	/* sample 2 */
	$Global_Domain = "https://lang-php.com/";
	header("Location:" . $Global_Domain . "us");                
?&gt;</code></pre></dd>
			<dd>
				<p>ソース：latest.zip -> /routes/Domain-Jump-Sample.php</p>
			</dd>
		</section><!-- end supplements domain dump -->
	</section><!-- end supplements -->

	<section id="upgrading"><!-- upgrading -->
		<h2>v5.2 アップデート：</h2>
		<ul class="checklist">
			<li>新しい多言語の公式サイト、クイックガイド。 * New</li>
			<li>異なるバージョンやデモの例の様々な経験を持っている。 * New</li>
			<li>　- サンプル 1：ユーザー定義選択 &amp; ディレクトリスタイル。 * New</li>
			<li>　- サンプル 2：内部ロード·ファイル &amp; 組み込み; * New</li>
			<li>　- サンプル 3：設定ファイルを読み込み &amp; ローディング方式； * New</li>
			<li>　- サンプル 4：設定を保存するには &amp; プロファイル; * New</li>
			<li>　- サンプル 5：データベース &amp; 可変式； * New</li>
			<li>　- サンプル 6：スタンドアロン版 &amp; ポータブル； * New</li>
			<li>使用 Javascript (JS) 言語を切り替えるとサフィックスを非表示にするには。 * New</li>
			<li>固定 IE8 の識別が間違っています。小文字に変換されます； * Fix</li>
			<li>すべてのアイコン、画像などがSVG形式で変更されました； * Up</li>
			<li>クリック可能な「モード2」が言語を切り替えられない問題を修正（例6：スタンドアロン &amp; ポータブル）。 * Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>使用許諾契約</h2>
		<p>オープンソース MIT ライセンスに従ってください。</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>ここに、、、コピーを使用、変更、マージ、公開、配布するために含むがこれらに限定されない任意の制限なしのソフトウェアに対処するために、本ソフトウェアのコピーと関連文書のファイルを取得するすべての人 (「ソフトウェア」) に、サブライセンスを無償で付与されますおよびコピー/またはソフトウェアを販売して、以下の条件に従う、個人使用や商用利用を可能にする：</p>
		<p>上記の著作権表示とこの許可通知がソフトウェアのすべてのコピーまたは実質的な部分に含まれなければならない。</p>
		<p>ソフトウェアは、明示、あらゆる種類のなしで、「現状のまま」提供されるか、または黙示、を含むが、特定の目的に対する商品、フィットネスや非侵害の宣言に限定されるものではない。いずれの場合においても、いかなる請求、損害、またはその他の責任の作成者または著作権保持者は、かどうかを契約訴訟、不法行為、またはその他の理由で、原因から、OUT、またはソフトウェア内のソフトウェアまたは使用またはその他の取引に関連してです。</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">ベギン</a></li>
			<li><a href="#examples" id="examples-link">サンプル</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">サンプル 1：ユーザー定義選択 &amp; ディレクトリスタイル</a></li>
				<li><a href="#02-embed" id="02-embed-link">サンプル 2：内部ロード·ファイル &amp; 埋め込み</a></li>
				<li><a href="#03-load" id="03-load-link">サンプル 3：設定ファイルを読み込み &amp; ローディング方式</a></li>
				<li><a href="#04-settings" id="04-settings-link">サンプル 4：設定を保存するには &amp; プロファイル</a></li>
				<li><a href="#05-database" id="05-database-link">サンプル 5：データベース &amp; 型の配列</a></li>
				<li><a href="#06-portable" id="06-portable-link">サンプル 6：スタンドアロン版 &amp; ポータブル</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">他のサプリメント</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">ユニバーサルURLを転送インターフェース</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">使用 Javascript (JS) 言語と非表示パラメータを切り替えます</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">特定のドメイン名へジャンプ</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">アップデート情報</a></li>
			<li><a href="#license" id="license-link">使用許諾契約</a></li>
			<br>
			<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a>
			<ul>
				<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a></li>
				<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a></li>
				<li><a href="javascript:lang('zh-CN')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中国 - 简体中文</a></li>
				<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中國 - 繁體中文</a></li>
			</ul>
		</ul>
	</div>

	<footer>
		<ul class="actions small fit">
			<li><a href="/" class="button alt small fit">リターン</a></li>
		</ul>


	</footer><!-- end sections -->
</div><!-- end sidebar -->
<?php include "routes/analytics.php"; ?>
</body>
</html>