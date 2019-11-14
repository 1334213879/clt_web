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

			$this->loading($lang);
		} else if(isSet($_COOKIE['lang'])) {
			$this->loading(strtolower($_COOKIE['lang']));
		} else {
			preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches);
			$lang = strtolower($matches[1]);
			setcookie("lang", $lang, time() + (3600 * 24 * $this->saveDays), '/');
			$_COOKIE["lang"] = $lang;

			$this->loading($lang);
		}
	}

	function loading($langfile)
	{
		if(is_dir($this->masterCatalogue))
		{
			if(is_file($this->masterCatalogue."/".$langfile.".php")) {
				include_once $this->masterCatalogue."/".$langfile.".php";
				$this->getLanguage = $langfile;
			} else {
				if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")) {
					include_once $this->masterCatalogue."/".$this->def_lang_file.".php";
					$this->getLanguage = $this->def_lang_file;
				} else {
					echo "current directory (".$this->masterCatalogue.") there is no such file (".$this->def_lang_file.".php), Please add the corresponding file and then try.";
					exit();
				}
			}
		} else {
			echo $this->masterCatalogue." directory does not exist!";
			exit();
		}
	}
}
?>