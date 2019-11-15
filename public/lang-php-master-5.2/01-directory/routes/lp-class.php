<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

class lp
{
	public $masterCatalogue    = 'routes/homepage';    /* Master directory */
	public $getLanguage        = 'default';            /* Get the current language used */
	public $saveDays           = 30;                   /* Cookie save session days */
	public $useURL             = false;                /* General URL forwarding */
	public $def_lang_file      = 'en-us';              /* Default language file */

	public function run()
	{
		if($this->useURL == true) {
			if(isset($_GET['load'])) {
				if(is_file($_GET['load'].".php")) {
					include_once $_GET['load'].".php";
					exit();
				} else {
					echo "Without this file: ".$_GET['load'].".php, Please add the corresponding file and then try.";
					exit();
				}
			} else {
				$this->start();
			}
		} else {
			$this->start();
		}
	}

	public function start()
	{
		if(isSet($_GET['lang']))
		{
			$lang = strtolower($_GET['lang']);

			/** Cookie: Setting, Register */
			$_SESSION['lang'] = $lang;
			$_COOKIE["lang"] = $lang;
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/');

			if(is_dir($lang)) {
				header("Location: ".$lang);
			} else {
				header("Location: Worldwide");
			}
		} else if(isSet($_COOKIE['mark_lang'])) {
			if(is_dir($_COOKIE['mark_lang'])) {
				header("Location: ".$_COOKIE['mark_lang']);
			} else {
				header("Location: Worldwide");
			}
		} else {
			header("Location: Worldwide");
		}
	}
}
?>