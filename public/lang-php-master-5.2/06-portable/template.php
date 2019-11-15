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

/** General URL forwarding */
if(isset($_GET['load'])) {
	if(is_file($_GET['load'].".php")) {
		include_once $_GET['load'].".php";
		exit();
	} else {
		echo "Without this file: ".$_GET['load'].".php, Please add the corresponding file and then try.";
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
	} else {
		$lng = 'en-us';
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
	} else {
		$lng = 'en-us';
	}
}

$lpna = array (
	/* Copy the current sample */
	'template' => array (
		'en-us' => 'template',
		'zh-cn' => '模板',
		'zh-tw' => '模板',
		'ja-jp' => '模板',
		'ko-kr' => '模板',
		'ru-ru' => '模板'),

	'end' => array (
		'en-us' => 'end',
		'zh-cn' => 'end',
		'zh-tw' => 'end',
		'ja-jp' => 'end',
		'ko-kr' => 'end',
		'ru-ru' => 'end')  /* , */

	/* After the end of the array can not have ','
	 * Please pay attention to the end */
);

print_r($lpna);
?>

<?php echo $lpna['template'][$lng]; ?>