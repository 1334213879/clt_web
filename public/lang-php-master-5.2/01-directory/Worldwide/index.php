<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

// ** Lang-php Basic Configuration ** //
/** Available language */
$global_lp_all = array('en-us', 'zh-cn', 'zh-tw', 'ja-jp', 'ko-kr', 'ru-ru');

/** Browser session */
if (!session_id()) session_start();
header('Cache-control: private');

/** General URL forwarding */
if(isset($_GET['load'])) {
	if(is_file($_GET['load'].".php")) {
		include $_GET['load'].".php";
		exit();
	}
}

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
	$_COOKIE["lang"] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30), '/');

	if (in_array($lang, $global_lp_all)) {
		$_COOKIE["lang"] = $lang;
		$_SESSION['lang'] = $lang;
		$lng = $lang;
	}
}

$lpna = array (
	'lang_cfg_title' => array (
		'en-us' => 'CONFIGURATION INFORMATION',
		'zh-cn' => '配置信息',
		'zh-tw' => '配置資訊',
		'ja-jp' => '構成情報',
		'ko-kr' => '구성 정보',
		'ru-ru' => 'Сведения о конфигурации'),
	'lang_cfg_title1'  => array (
		'en-us' => 'Currently Cookies the global "mark_lang" variable value: ',
		'zh-cn' => '当前 Cookies 全局 "mark_lang" 变量值：',
		'zh-tw' => '當前 Cookies 全域 "mark_lang" 變數值：',
		'ja-jp' => '現在 Cookies グローバル "mark_lang" 変数の値: ',
		'ko-kr' => '전류 Cookies 글로벌 "mark_lang" 변수 값: ',
		'ru-ru' => 'Ток Cookies Глобальный "mark_lang" Значение переменной: '),
	'lang_cfg_title_msg' => array (
		'en-us' => 'Is not set',
		'zh-cn' => '未设置',
		'zh-tw' => '未設置',
		'ja-jp' => '設定されていません',
		'ko-kr' => '설정 하지 않으면',
		'ru-ru' => 'Не задано'),
	'lang_cfg_title2' => array (
		'en-us' => 'Browser "HTTP_ACCEPT_LANGUAGE" Request value: ',
		'zh-cn' => '浏览器 "HTTP_ACCEPT_LANGUAGE" 请求值：',
		'zh-tw' => '瀏覽器 "HTTP_ACCEPT_LANGUAGE" 請求值：',
		'ja-jp' => 'ブラウザー "HTTP_ACCEPT_LANGUAGE" 要求値: ',
		'ko-kr' => '브라우저 "HTTP_ACCEPT_LANGUAGE" 요청 값: ',
		'ru-ru' => 'Обозреватель "HTTP_ACCEPT_LANGUAGE" Значение запроса: '),
	'lang_cfg_title3' => array (
		'en-us' => 'The currently loaded file is: ',
		'zh-cn' => '当前加载的文件是：',
		'zh-tw' => '當前載入的檔是：',
		'ja-jp' => '現在クッキー "mark_lang" というグローバル変数の値: ',
		'ko-kr' => '현재 로드 된 파일은: ',
		'ru-ru' => 'Текущий загруженный файл является: ')
);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../assets/logo/logo.ico" type="image/icon"/>
	<title>01-directory &#8250; Lang-Php</title>
	<link rel="stylesheet" href="../assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="<?php if( $lng == "zh-cn" || $lng == "zh-tw" ) { echo '../assets/css/css.chs.css'; } else { echo '../assets/css/css.css'; }; ?>" type="text/css" />
	<script src="../assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="../assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 01-directory
	</h1>
	<p style="text-align: center">Version v5.2</p>

	<h2><?php echo $lpna['lang_cfg_title'][$lng]; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_cfg_title1'][$lng]; ?> <?php if(isset($_COOKIE["mark_lang"])) echo $_COOKIE['mark_lang']; else echo $lpna['lang_cfg_title_msg'][$lng];; ?></li>
		<li><?php echo $lpna['lang_cfg_title2'][$lng]; ?><?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li><?php echo $lpna['lang_cfg_title3'][$lng]; ?>01-directory/Worldwide/index.php</li>
	</ol>

	<h2>Select a Region</h2>
	<dl>
		<h3>North America</h3>
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="../?lang=en-US">Mode 1</a> &amp; <a href="javascript:qlang('en-US')">Mode 2</a> )</dt>

		<h3>Europe</h3>
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="../?lang=ru-RU">режим 1</a> &amp; <a href="javascript:qlang('ru-RU')">режим 2</a> )</dt>

		<h3>Asia - Pacific</h3>
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="../?lang=zh-CN">模式 1</a> &amp; <a href="javascript:qlang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="../?lang=zh-TW">模式 1</a> &amp; <a href="javascript:qlang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="../?lang=ja-JP">モード 1</a> &amp; <a href="javascript:qlang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="../?lang=ko-KR">모드 1</a> &amp; <a href="javascript:qlang('ko-KR')">모드 2</a> )</dt>
	</dl>
<?php include "../routes/analytics.php"; ?>
</body>
</html>