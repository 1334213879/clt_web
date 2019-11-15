<!DOCTYPE HTML>
<html>
<head>
	<title>퀵 가이드 &amp; PHP 다국어 프레임 워크</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<meta name="description" content="퀵 가이드 &amp; PHP 다국어 프레임 워크" />
	<meta name="keywords" content="퀵 가이드 &amp; PHP 다국어 프레임 워크" />
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
			<h1>시작 &amp; 퀵 가이드</h1>
			<p>PHP 다중 언어 프레임 워크 v5.2</p>
		</header>
		<p>우리의 제품을 이용해 주셔서 감사합니다.</p>
		<p>이 빠른 가이드는 당신이 방법을 사용하여 만들 안내합니다.</p>
		<p>이것은 여러 가지 방법으로, 다중 언어 프로그램의 프레임 워크를 통해 달성.</p>
		<p>프레임 디자인뿐만 아니라 당신이 웹 사이트가 간단하고 빠르고, 매우 효율적인, 당신을 만나서 충분히 구축 할 수 있습니다.</p>
	</section><!-- end getting-started -->

	<section id="examples"><!-- examples -->
		<h2>예</h2>
		<p>포함 : 사용자 정의 선택 카탈로그, 임베디드 내부로드 파일을, 형식을로드 할 수있는 구성 파일을 읽습니다.</p>

		<section id="01-directory"><!-- examples 1 -->
			<h3>예 1 : 사용자 정의 선택 &amp; 디렉토리 스타일</h3>
			<p>첫 번째 실행 스티어링 후 Worldwide 경기가 메모리 기능을 설정 한 후 디렉토리, 언어 디렉토리를 선택합니다.</p>
			<dl><dt>1. 주요 지수 스크립트.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램을 구성 */
$app->useURL = true;

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>소스 : latest.zip -> /01-directory/index.php</p>
			</dd>
		</section><!-- end examples 1 -->

		<section id="02-embed"><!-- examples 2 -->
			<h3>예 2:내부로드 파일 &amp; 임베디드</h3>
			<p>기본값은 파일을 호출 선택 디렉토리가 아닌 검색에 일치하는 파일을 자동 검색.</p>
			<dl><dt>1. 주요 지수 스크립트.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램을 구성 */
$app->useURL = true;

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>소스 : latest.zip -> /02-embed/index.php</p>
			</dd>

			<dt>2. 에서 routes 일치 하는 언어 파일을 만듭니다. 예를 들면:</dt><dd>
			<pre><code class="prettyprint html">en-us.php

&lt;html&gt;
&lt;body&gt;
  Embedded en-us.php files;
&lt;/body&gt;
&lt;/html&gt;

ko-kr.php

&lt;html&gt;
&lt;body&gt;
  임베디드 ko-kr.php 파일;
&lt;/body&gt;
&lt;/html&gt;

</code></pre></dd>
			<dd>
				<p>참조 latest.zip -> /02-embed/routes 파일의 디렉터리입니다.</p>
			</dd>

			<dl><dt>3. 새 페이지 만들기!</dt>
			<dd>
				<p>서식 파일을 사용 하 여 02-embed/templets.php 파일, 새 파일 이름에는 사용자를 변경 (예: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램 구성 */
$app->masterCatalogue = "routes/{newpage}";

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>디렉터리와 일치 하는 언어를 만들기</p>
			</dd>
			<dd><pre><code class="prettyprint php">에서 02-embed/module/newpage, 만들 디렉터리 {newpage} 변수 이름과 일치 해야 합니다.</code></pre></dd>

			<dd>
				<p>테마 스킨 만들기</p>
			</dd>
			<dd><pre><code class="prettyprint php">에서 02-embed/themes 만들고 newpage.php 파일입니다.</code></pre></dd>

			<dd>
				<p>액세스 모드</p>
			<dd><pre><code class="prettyprint php">02-embed/newpage.php
02-embed/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 2 -->

		<section id="03-load"><!-- examples 3 -->
			<h3>예 3:구성 파일을 읽습니다 &amp; 로드 형</h3>
			<p>자동으로 일치하는 언어 파일을 검색하고 한 번을 포함,로드 전화 : 문자열 및 매개 변수를.</p>
			<dl><dt>1. 스크립트를로드 (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램을 구성 */
$app->useURL = true;

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>소스 : latest.zip -> /03-load/index.php</p>
			</dd>

			<dt>2. Html 대 PHP 예를 들어 언어 텍스트 :</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">&lt;?php echo $lpvar['lang_available']; ?&gt;</code></pre></dd>
			<dd>
				<p>참조 latest.zip -> /03-load/languages/ 디렉토리 en-us.php &amp; ko-kr.php 파일.</p>
			</dd>

			<dt>3. 템플릿 매칭 언어를 만듭니다. 예를 들어 :</dt><dd>
			<p></p>
			<pre><code class="prettyprint php">en-us.php

&lt;?php
$lpvar = array (
	'lang_available'   => 'Available Languages:',
);
?&gt;

ko-kr.php

&lt;?php
$lpvar = array (
	'lang_available'   => '사용 가능한 언어:',
);
?&gt;</code></pre></dd>
			<dd>
				<p>참조 latest.zip -> /03-load/languages/ 디렉토리 en-us.php, ko-kr.php 파일.</p>
			</dd>

			<dl><dt>4. 새 페이지 만들기!</dt>
			<dd>
				<p>서식 파일을 사용 하 여 03-load/templets.php 파일, 새 파일 이름에는 사용자를 변경 (예: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램 구성 */
$app->masterCatalogue = 'languages/{newpage}';
$app->userThemes      = '{newpage}';

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>디렉터리와 일치 하는 언어를 만들기</p>
			</dd>
			<dd><pre><code class="prettyprint php">에서 03-load/module/newpage, 만든된 디렉터리 해야 합니다. {newpage} 일관 된 변수 이름입니다.</code></pre></dd>

			<dd>
				<p>액세스 모드</p>
			<dd><pre><code class="prettyprint php">03-load/newpage.php
03-load/?load=newpage</code></pre></dd><dd>
			</dd>
		</section><!-- end examples 3 -->

		<section id="04-settings"><!-- examples 4 -->
			<h3>예제 4：설정을 저장 하려면 &amp; 프로 파일</h3>
			<p>이 예제는 다른 동적 읽기 및 쿠키 작성; 에 구성을 저장 합니다 xml 또는 cfg, 선택한 기본 설정된 언어를 읽어서 팩, 브라우저의 기본 언어 설정에는 영향을 받지 않습니다.</p>
			<dl><dt>1. 마스터 색인 스크립트.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램을 구성 */
$app->useURL = true;

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>
			<dd>
				<p>원본 코드 경로: latest.zip -> /04-settings/index.php</p>
			</dd>

			<dt>2. 만듭니다. 사용 가능한 전역 변수.예:</dt><dd>
			<pre><code class="prettyprint html">&lt;?php
$Global_DFLT_Lang="zh-CN";
?&gt;</code></pre></dd>
			<dd>
				<p>참조 하십시오 latest.zip -> /04-settings/lang-cfg-sample.php 파일.</p>
			</dd>

			<dl><dt>3. 새 페이지 만들기!</dt>
			<dd>
				<p>서식 파일을 사용 하 여 04-settings/templets.php 파일, 새 파일 이름에는 사용자를 변경 (예:newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">&lt;?php
include_once __DIR__ . '/routes/lp-class.php';

/** 응용 프로그램을 초기화 하려면 */
$app = new lp();

/** 만들기 및 응용 프로그램 구성 */
$app->masterCatalogue = "routes/{newpage}";

/** 응용 프로그램을 실행 */
$app->run();
?&gt;</code></pre></dd>

			<dd>
				<p>디렉터리와 일치 하는 언어를 만들기</p>
			</dd>
			<dd><pre><code class="prettyprint php">에서 04-settings/module/newpage, 만든된 디렉터리 해야 합니다 {newpage} 일관 된 변수 이름입니다.</code></pre></dd>
		</section><!-- end examples 4 -->

		<section id="05-database"><!-- examples 5 -->
			<h3>예를 들어 5：데이터베이스 &amp; 형식의 배열</h3>
			<p>패스 PDO 연결 SQL 데이터베이스, 지원 MySQL, SQLite. 어레이 사용 하 여 (Array) 기능 사용 가능한 모든 데이터를 나열합니다.</p>
			<dl><dt>1. lp-load 스크립트입니다.</dt>
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
				<p>출처: latest.zip -> /05-database/lp-load.php</p>
			</dd>

			<dl><dt>2. lp-config 구성입니다.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** SQL 연결 모드 */
define('Database_Mode',    'mysql');
/** 허용 되는 값: mysql , sqlite */

/** MySQL 호스트 */
define('DB_HOST',          'localhost');

/** MySQL 데이터베이스 이름 */
define('DB_NAME',          'lang-php');

/** MySQL 사용자 */
define('DB_USER',          'root');

/** MySQL 암호 */
define('DB_PWD',           '');

/** 데이터베이스 접두사 */
define('DB_PREFIX',        'lp_');

/** 데이터베이스 코딩 */
define('DB_CHARSET',       'utf8');
?&gt;</code></pre></dd>
			<dd>
				<p>출처: latest.zip -> /05-database/lp-config.php</p>
			</dd>

			<dl><dt>3. 현재 페이지에 대 한 연결 문자열입니다.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php
include_once_once('lp-load.php');

/** 현재 페이지 변수 설정 */
$page_team = 'homepage';

/** SQL 연결 문자열 식별자 */
$current_lng = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_lng, $lng); 
?&gt;</code></pre></dd>
			<dd>
				<p>참조 latest.zip -> /05-database/index.php 파일입니다.</p>
			</dd>

			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;배열 메서드 호출 됩니다.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_use_title1']['lp_variable']; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;사용 print_r 모든 명령 출력 배열.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 새 페이지 만들기!</dt>
			<dd>
				<p>서식 파일을 사용 하 여 05-database/templets.php 파일, 새 파일 이름에는 사용자를 변경 (예: newpage.php).</p>
			</dd>
			<dd><pre><code class="prettyprint php">에 색인을 생성 하려면 현재 페이지 이름 수정.
/** Main Folder */
$page_team = 'newpage';</code></pre></dd>
		</section><!-- end examples 5 -->

		<section id="06-portable"><!-- examples 6 -->
			<h3>예를 들어 6: 독립형 &amp; 휴대용</h3>
			<p>利用 array() 언어 구조는 배열 구축, 모든 작업을 완료 하는 기능을 통해; 다른 버전에 비해, 휴대용 버전 문서에 의해 이루어집니다.</p>
			<dl><dt>1. 휴대용 스크립트 (index.php).</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
/** 추가 하 고 사용 가능한 언어 팩을 설정 */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** 브라우저 session */
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
		'ko-kr' => '대한민국 - 한국어')
);
?&gt;</code></pre></dd>
			<dd>
				<p>참고는 배열 라인을 사용 하 여 때 나열 된 표시만 배열의 부분 체크 아웃 하십시오 소스 코드: latest.zip -> /06-portable/index.php</p>
			</dd>

			<dl><dt>2. 사전 언어 팩은 사용할 수, 쿼리 조건을 통해.</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;배열 예제:</dt>
			<dd><pre><code class="prettyprint php">$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;쿼리 조건:</dt>
			<dd><pre><code class="prettyprint html">&lt;?
	if (in_array($_GET['lang'], $global_lp_all)) {
		$lng = $_GET['lang'];
	} else {
		$lng = 'en-us';
	}
?&gt;</code></pre></dd>

			<dl><dt>3. 배열 메서드 호출 됩니다.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php echo $lpna['lang_page_title'][$lng]; ?&gt;</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;사용 print_r 모든 명령 출력 배열.</dt>
			<dd><pre><code class="prettyprint html">&lt;?php print_r($lpna); ?&gt;</code></pre></dd>

			<dl><dt>4. 리소스 변환입니다.</dt>
			<dd>
				<p>휴대용 버전을 사용 하 여 동안, 예를 들면: 사진, ICO, 변환할 필요가 base64 인코딩. javascript, CSS 그리고 다른, 다 사용 하 여 리소스는 소스 코드와 능률화 단축 도구를 사용할 수 있습니다.</p>
			</dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;오프 라인 변환 리소스 base64 코딩</dt>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP 코딩</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	$path = 'assets/logo/logo.svg';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
?&gt;</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C# 코딩</dt>
			<dd><pre><code class="prettyprint php">using (Image image = Image.FromFile(Path)) {
	using (MemoryStream m = new MemoryStream()) {
		   image.Save(m, image.RawFormat);
		   byte[] imageBytes = m.ToArray();

		   // Convert byte[] to Base64 String
		   string base64String = Convert.ToBase64String(imageBytes);
		   return base64String;
	}
}</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JAVA 코딩</dt>
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
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PYTHON 코딩</dt>
			<dd><pre><code class="prettyprint php">import base64
imgdata = base64.b64decode(imgstring)
filename = 'assets/logo/logo.svg'
with open(filename, 'wb') as f:
  f.write(imgdata)</code></pre></dd>
			<dl><dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RUBY 코딩</dt>
			<dd><pre><code class="prettyprint php">#!/usr/bin/env ruby
include_once 'base64'
File.open('assets/logo/logo.svg', 'r') do|image_file|1
puts Base64.encode64(image_file.read)
end</code></pre></dd>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;온라인 변환 사이트 추천</dt>
			<dd><ul>
				<li><a href="https://lang-php.com/go/aBase64">Base64 Image Encoder</a> &gt; http://www.base64-image.de</li>
				<li><a href="https://lang-php.com/go/bBase64">Base64 image encoder decoder</a> &gt; http://freeonlinetools24.com/base64-image</li>
				<li><a href="https://lang-php.com/go/cBase64">Convert Images to base64</a> &gt; http://imagetobase64.com/</li>
			</ul></dd>
		</section><!-- end examples 6 -->
	</section><!-- end examples -->

	<section id="supplements"><!-- supplements -->
		<h2>기타 보충제</h2>
		<p>부록, 숨겨져 사용량 및 다른 기능의 사용이다.</p>

		<section id="supplements-url"><!-- supplements url -->
			<h3>범용 URL 전달 인터페이스</h3>
			<p>일반적인 전달 인터페이스는 무엇입니까?</p>
			<p>예를 들어, 주소 : https://lang-php.com/license. /?=load 매개 변수는 페이지를로드의 함수이다, license 인수는 호출하는 것입니다 routes 디렉토리 license.php 파일.</p>
			<p>아무 파일이나 매개 변수없이 일치하는 경우, 기본적으로로드되지 않습니다 home(). 예를 들어 :</p>
			<dl><dt>1. 주요 지수 스크립트.</dt>
			<dd><pre><code class="prettyprint php">&lt;?php
	if(isset($_GET['load'])) {
		if(is_file($_GET['load'].".php")) {
			include $_GET['load'].".php";
			exit();
		} else {
			echo "찾을 수 없습니다" . $_GET['load'] . "파일.";
		}
	}
?&gt;</code></pre></dd>

			<dl><dt>2. Rewrite (서버 재 작성)</dt>
			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apache </dt><dd>
			<dd><pre><code class="prettyprint php">파일 이름을 저장 ( .htaccess ) 다음 디렉토리로 이동합니다.

RewriteEngine on

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^(.*)$ /?load=$1 [QSA,PT,L]</code></pre></dd>

			<dt>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nginx</dt><dd>
			<dd><pre><code class="prettyprint php">if (!-e $request_filename) {
	rewrite ^/(.+)$ /?load=$1 last;
}</code></pre></dd>

			<dd>
				<p>규칙을 전에 사용하지 마십시오:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/?load=license
https://lang-php.com/?load=docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>사용 후:</p>
			<dd><pre><code class="prettyprint php">https://lang-php.com/license
https://lang-php.com/docs
</code></pre></dd><dd>
			</dd>
			<dd>
				<p>공식 웹 사이트는 동일한 릴리스를 유지하기 위해 수동으로 데모를 참조하시기 바랍니다, 규칙을 추가했다.</p>
			</dd>
		</section><!-- end supplements url -->

		<section id="supplements-js"><!-- supplements js -->
			<h3>용도 Javascript (JS) 언어와 숨기기 매개 변수를 전환</h3>
			<p>무엇 통해 Javascript (JS) 그리고 언어를 전환하는 매개 변수를 숨기기? 목적은 접미사를 제거하는 것입니다.</p>
			<p>사용 모드 1 전면:https://lang-php.com/?lang=ko-kr;</p>
			<p>모드 2 사용 후:https://lang-php.com, 접미사.</p>
			<dl><dt>1. Javascript (JS) 스크립트 코드입니다.</dt>
			<dd><pre><code class="prettyprint php">&lt;script type="text/javascript"&gt;
<?php include_once('assets/js/lang.js'); ?>

&lt;/script&gt;</code></pre></dd>
			<dd>
				<p>출처 : latest.zip -> /assets/js/lang.js</p>
			</dd>

			<dt>2. HTML 템플릿.</dt><dd>
			<pre><code class="prettyprint html">&lt;html&gt;
&lt;headl&gt;
	&lt;script src="lang.js"&gt;&lt;/script&gt;
&lt;/headl&gt;
&lt;body&gt;
	&lt;a href="?lang=en-us"&gt;전환&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre></dd>
		</section><!-- end supplements js -->

		<section id="supplements-domain"><!-- supplements domain dump -->
			<h3>특정 도메인 이름으로 이동</h3>
			<p>특정 도메인에 점프는 무엇인가? 몇 가지 예 읽고 디렉토리에있는 파일을 일치시켜, 다음 코드를 참조하십시오, 특정 도메인 이름에 점프를 달성하고자하고 있습니다 :</p>
			<dl><dt>페이지를 이동해야 할 필요성에 코드를 추가!</dt>
			<dd><pre><code class="prettyprint php">&lt;php
	/* sample 1 */
	header("Location: http://us.lang-php.com");

	/* sample 2 */
	$Global_Domain = "https://lang-php.com/";
	header("Location:" . $Global_Domain . "us");                
?&gt;</code></pre></dd>
			<dd>
				<p>출처 : latest.zip -> /routes/Domain-Jump-Sample.php</p>
			</dd>
		</section><!-- end supplements domain dump -->
	</section><!-- end supplements -->

	<section id="upgrading"><!-- upgrading -->
		<h2>v5.2 업데이트 :</h2>
		<ul class="checklist">
			<li>새로운 멀티 언어 공식 웹 사이트, 퀵 가이드; * New</li>
			<li>다른 버전 및 데모의 예 다양한 경험; * New</li>
			<li>　- 예 1: 사용자 정의 선택 &amp; 디렉토리 스타일; * New</li>
			<li>　- 예 2: 내부로드 파일 &amp; 임베디드; * New</li>
			<li>　- 예 3: 구성 파일을 읽습니다 &amp; 로드 형; * New</li>
			<li>　- 예 4: 설정을 저장 하려면 &amp; 프로 파일; * New</li>
			<li>　- 예 5: 데이터베이스 &amp; 형식의 배열; * New</li>
			<li>　- 예 6：독립 실행형 버전 &amp; 휴대용; * New</li>
			<li>용도 Javascript (JS) 언어와 숨기기 접미사를 전환하려면; * New</li>
			<li>고정 IE8 식별 잘못된, 소문자로 변환; * Fix</li>
			<li>모든 아이콘, 이미지 등이 SVG 형식으로 변경되었습니다. * Up</li>
			<li>고정 클릭 "모드 2"는 언어를 전환 할 수 없습니다(예 6 : 독립형 버전 &amp; 휴대용). * Fix</li>
		</ul>
	</section><!-- end upgrading -->

	<section id="license"><!-- license -->
		<h2>라이센스 계약</h2>
		<p>오픈 소스 MIT 라이센스를 따르십시오.</p>
		<p>Copyright &copy; Yi Feng</p>
		<p>이에, 서브 라이센스를이 소프트웨어의 사본을 얻는 모든 사람에게 무료로 부여 및 관련 소프트웨어에서 처리하는 문서 파일 ( "소프트웨어"), 어떤 제한없이 포함하되, 복사, 수정, 병합, 게시, 배포에 한정되지 않고, 및 복사 / 또는 판매 소프트웨어, 다음과 같은 조건에 개인 사용 및 상업적 사용, 될 수 있습니다 :</p>
		<p>위의 저작권 고지와이 허가 고지는 모든 사본 또는 소프트웨어의 상당한 부분에 포함되어야한다.</p>
		<p>소프트웨어 "AS IS", 나는 어떤 경우에, 모든 청구, 손해 배상 등 책임의 저자 또는 저작권 보유자가 특정 목적에 대한 적합성, 적합성 및 비 침해 선언에 한정되지 않고, 명시 적 또는 묵시적, 포함,하지만, 어떤 종류의 일을하지 않습니다. 관계없이, 계약, 불법 행위 또는 기타 등의 작용, 에서 발생하는, OUT 또는 IN 소프트웨어 또는 사용 또는 기타 거래와 소프트웨어를 연결.</p>
	</section><!-- End license -->
</div><!-- End Wrapper -->

<div id="sidebar" class="skel-layers-fixed"><!-- sidebar -->
	<div class="sections"><!-- sections -->
		<ul>
			<li><a class="active" href="#getting-started" id="getting-started-link">시작</a></li>
			<li><a href="#examples" id="examples-link">예</a>
			<ul>
				<li><a href="#01-directory" id="01-directory-link">예 1:사용자 정의 선택 &amp; 디렉토리 스타일</a></li>
				<li><a href="#02-embed" id="02-embed-link">예 2:내부로드 파일 &amp; 임베디드式</a></li>
				<li><a href="#03-load" id="03-load-link">예 3:구성 파일을 읽습니다 &amp; 加载式</a></li>
				<li><a href="#04-settings" id="04-settings-link">예 4：설정을 저장 하려면 &amp; 프로 파일</a></li>
				<li><a href="#05-database" id="05-database-link">예 5：데이터베이스 &amp; 형식의 배열</a></li>
				<li><a href="#06-portable" id="06-portable-link">예 6：독립 실행형 버전 &amp; 휴대용</a></li>
			</ul>
			<li><a href="#supplements" id="supplements-link">기타 보충제</a>
			<ul>
				<li><a href="#supplements-url" id="supplements-url-link">공통의 Url 전달 인터페이스</a></li>
				<li><a href="#supplements-js" id="supplements-js-link">용도 Javascript (JS) 언어와 숨기기 매개 변수를 전환</a></li>
				<li><a href="#supplements-domain" id="supplements-domain-link">특정 도메인 이름으로 이동</a></li>
			</ul>
			<li><a href="#upgrading" id="upgrading-link">업데이트 설명</a></li>
			<li><a href="#license" id="license-link">라이센스 계약</a></li>
			<br>
			<li><a href="javascript:lang('ko-KR')"><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어</a>
			<ul>
				<li><a href="javascript:lang('en-US')"><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English</a></li>
				<li><a href="javascript:lang('ru-ru')"><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский</a></li>
				<li><a href="javascript:lang('ja-JP')"><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語</a></li>
				<li><a href="javascript:lang('zh-CN')"><span class="flag-icon flag-icon-cn"></span>&nbsp;中国 - 简体中文</a></li>
				<li><a href="javascript:lang('zh-TW')"><span class="flag-icon flag-icon-tw"></span>&nbsp;中國 - 繁體中文</a></li>
			</ul>
		</ul>
	</div>

	<footer>
		<ul class="actions small fit">
			<li><a href="/" class="button alt small fit">반환</a></li>
		</ul>


	</footer><!-- end sections -->
</div><!-- end sidebar -->
<?php include "routes/analytics.php"; ?>
</body>
</html>