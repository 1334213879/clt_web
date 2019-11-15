<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

class lp
{
	public $masterCatalogue          = 'languages/homepage';   /* Master directory */
	public $themeMasterCatalogue     = 'themes';               /* Default themes Master Directory */
	public $userThemes               = 'homepage';             /* User Themes file */
	public $getLanguage              = 'default';              /* Get the current language used */
	public $saveDays                 = 30;                     /* Cookie save session */
	public $useURL                   = false;                  /* General URL forwarding */
	public $def_lang_file            = 'en-us';                /* Default language file */

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

	function loading($lang)
	{
		if(is_dir($this->masterCatalogue)) {
			if(is_file($this->masterCatalogue."/".$lang.".php")) {
				include $this->masterCatalogue."/".$lang.".php";
				$this->getLanguage = $lang;
			} else {
				if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
					include $this->masterCatalogue."/".$this->def_lang_file.".php";
					$this->getLanguage = $this->def_lang_file;
				} else {
					echo "current directory (".$this->masterCatalogue.") there is no such file (".$lang.".php), Please add the corresponding file and then try.";
					exit();
				}
			}
		} else {
			echo $this->masterCatalogue." directory does not exist!";
			exit();
		}

		if(is_dir($this->themeMasterCatalogue))
		{
			if(is_file($this->themeMasterCatalogue."/".$this->userThemes.".php")) {
				include $this->themeMasterCatalogue."/".$this->userThemes.".php";
				$this->getLanguage = $lang;
			} else {
				echo "current directory (".$this->themeMasterCatalogue.") there is no such file (".$this->userThemes.".php), Please add the corresponding file and then try.";
				exit();
			}
		} else {
			echo $this->userThemes." directory does not exist!";
			exit();
		}
	}
}
?>