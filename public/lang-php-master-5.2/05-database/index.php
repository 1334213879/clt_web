<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

require_once('lp-load.php');

/** Set the current page variable */
$page_team = 'homepage';

/** SQL connection string */
$current_page = $db->select(DB_PREFIX."translate", "section = '$page_team'");
$lpna = $db->arraymodify($current_page, $lng);

#print_r($current_page);
#print_r($lpna);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
	<title>05-database &#8250; Lang-Php</title>
	<link rel="stylesheet" href="assets/css/flag-icon.css" type="text/css" />
	<link rel="stylesheet" href="<?php if($lng == "zh-cn" || $lng == "zh-tw") { echo 'assets/css/css.chs.css'; } else { echo 'assets/css/css.css'; }; ?>" type="text/css" />
	<script src="assets/js/lang.js"></script>
</head>
<body>
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="assets/logo/logo.svg" /></a>
		<br /> LANG-PHP &amp; 05-database
	</h1>
	<p style="text-align: center">Version v5.2</p>
	<h2><?php echo $lpna['lang_page_title']['lp_variable']; ?></h2>
	<p><?php echo $lpna['feature-readme']['lp_variable']; ?></p>

	<h2><?php echo $lpna['lang_cfg_title']['lp_variable']; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_cfg_title1']['lp_variable']; ?><?php echo Database_Mode; ?></li>
		<li><?php echo $lpna['lang_cfg_title2']['lp_variable']; ?><?php echo DB_PREFIX . "translate"; ?></li>
		<li><?php echo $lpna['lang_cfg_title3']['lp_variable']; ?><?php echo $page_team; ?></li>
		<li><?php echo $lpna['lang_cfg_title4']['lp_variable']; ?><?php echo $lng; ?></li>
		<li><?php echo $lpna['lang_cfg_title5']['lp_variable']; ?><?php if(isset($_COOKIE["lang"])) echo $_COOKIE['lang']; else echo $lpna['lang_cfg_title_msg']['lp_variable']; ?></li>
		<li><?php echo $lpna['lang_cfg_title6']['lp_variable']; ?><?php preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); echo $matches[1]; ?></li>
		<li><?php echo $lpna['lang_cfg_title7']['lp_variable']; ?> 05-database/index.php</li>
	</ol>

	<h2><?php echo $lpna['lang_available']['lp_variable']; ?></h2>
	<dl>
		<!-- <h3>North America</h3> -->
		<dt><span class="flag-icon flag-icon-us"></span>&nbsp;United States - English ( <a href="?lang=en-US">Mode 1</a> &amp; <a href="javascript:lang('en-US')">Mode 2</a> )</dt>

		<!-- <h3>Europe</h3> -->
		<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;Россия - Русский ( <a href="?lang=ru-RU">режим 1</a> &amp; <a href="javascript:lang('ru-RU')">режим 2</a> )</dt>

		<!-- <h3>Asia - Pacific</h3> -->
		<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;简体中文 - 中国 ( <a href="?lang=zh-CN">模式 1</a> &amp; <a href="javascript:lang('zh-CN')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;繁體中文 - 中國 ( <a href="?lang=zh-TW">模式 1</a> &amp; <a href="javascript:lang('zh-TW')">模式 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;日本 - 日本語 ( <a href="?lang=ja-JP">モード 1</a> &amp; <a href="javascript:lang('ja-JP')">モード 2</a> )</dt>
		<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;대한민국 - 한국어 ( <a href="?lang=ko-KR">모드 1</a> &amp; <a href="javascript:lang('ko-KR')">모드 2</a> )</dt>
	</dl>

	<h2><?php echo $lpna['lang_use_title0']['lp_variable']; ?></h2>
	<ol>
		<li><?php echo $lpna['lang_use_title1']['lp_variable']; ?></li>
		<li><?php echo $lpna['lang_use_title2']['lp_variable']; ?></li>
		<li><?php echo $lpna['lang_use_title3']['lp_variable']; ?></li>
		<li><?php echo $lpna['lang_use_title4']['lp_variable']; ?></li>
		<dl>
			<dt><a href="">MySQL</a></dt>
			<dd><?php echo $lpna['lang_use_title4_mysql1']['lp_variable']; ?></dd>
			<dd><?php echo $lpna['lang_use_title4_mysql2']['lp_variable']; ?></dd>
			<dt><a href="">SQLite</a></dt>
			<dd><?php echo $lpna['lang_use_title4_sqlite']['lp_variable']; ?></dd>
		</dl>
		<li><?php echo $lpna['lang_use_title5']['lp_variable']; ?></li>
		<li><?php echo $lpna['lang_use_title6']['lp_variable']; ?></li>
	</ol>
<?php include "analytics.php"; ?>
</body>
</html>