<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

/*
 * sample 1
 *
 * The script customizes jumps.
 * 
 */
header("Location: http://us.lang-php.com");

/*
 * sample 2
 *
 * The script pre-set the primary domain name,
 * and then match the directory.
 *
 * Replace the corresponding, or the corresponding
 * class for the current code.
 *
 */
public $globalDomain = 'https://lang-php.com/';   /* The primary domain name */

function loading($lang)
{
	header("Location:" . $this->globalDomain . $lang);
}

/*
 * sample 3
 *
 * The script does not need to add the corresponding file,
 * such as: en-us.php, zh-cn.php, etc.,
 * directly through the custom jump.
 *
 */
function loading($lang)
	switch ($lang) {
		case 'zh-cn': header("Location: https://cn.lang-php.com"); break;
		case 'zh-tw': header("Location: https://tw.lang-php.com"); break;
		case 'en-us': header("Location: https://us.lang-php.com"); break;
		case 'ru-ru': header("Location: https://ru.lang-php.com"); break;
		case 'ja-jp': header("Location: https://jp.lang-php.com"); break;
		case 'ko-kr': header("Location: https://kr.lang-php.com"); break;
		default: header("Location: https://global.lang-php.com"); break;
	}
}
?>