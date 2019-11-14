<?php
/**
 * @author    Yi Feng
 * @version   v5.2
 * @homepage  https://lang-php.com
 * @download  https://lang-php.com/go/latest
 */

class lp
{
	public $masterCatalogue    = 'routes/homepage';             /* Master directory */
	public $getLanguage        = 'default';                     /* Get the current language used */
	public $setFileType        = 'xml';                         /* Acceptable parameters 'xml' or 'cfg' */
	public $def_cfg_lang_file  = 'routes/lp-global-setting.cfg';       /* Default language config file cfg */
	public $def_xml_lang_file  = 'routes/lp-global-setting.xml';       /* Default language config file xml */
	public $def_lang_file      = 'en-us';                       /* Default language file */
	public $useURL             = false;                         /* General URL forwarding */

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

	function start()
	{
		if(isSet($_GET['lang']))
		{
			$this->replace(strtolower($_GET['lang']));
			$this->read();
		} else {
			$this->read();
		}
	}

	function read()
	{
		switch ($this->setFileType) {
			case 'xml':
					if(is_file($this->def_xml_lang_file)) {
						if(is_file($this->masterCatalogue."/".$this->_get_xml().".php")) {
							$this->getLanguage = strtolower($this->_get_xml());
							include $this->masterCatalogue."/".$this->_get_xml().".php";
						} else {
							if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
								$this->getLanguage = $this->def_lang_file;
								include_once $this->masterCatalogue."/".$this->def_lang_file.".php";
							} else {
								echo "current directory (".$this->masterCatalogue.") there is no such file (".$this->def_lang_file.".php), Please add the corresponding file and then try.";
								exit();
							}
						}
					} else {
						header("Location: error&code=3xx");
						exit();
					}
				break;

			case 'cfg':
					if(is_file($this->def_cfg_lang_file)) {
						if(!empty($this->_get_cfg())) {
							if(is_file($this->masterCatalogue."/".$this->_get_cfg().".php")) {
								$this->getLanguage = strtolower($this->_get_cfg());
								include $this->masterCatalogue."/".$this->_get_cfg().".php";
							} else {
								if(is_file($this->masterCatalogue."/".$this->def_lang_file.".php")){
									$this->getLanguage = $this->def_lang_file;
									include_once $this->masterCatalogue."/".$this->def_lang_file.".php";
								} else {
									echo "current directory (".$this->masterCatalogue.") there is no such file (".$this->def_lang_file.".php), Please add the corresponding file and then try.";
									exit();
								}
							}
						 } else {
							 header("Location: error&code=2xx");
							 exit();
						 }
					} else {
						header("Location: error&code=3xx");
						exit();
					}
				break;
		}
	}

	function replace($lang)
	{
		switch ($this->setFileType) {
			case 'xml':
					if(is_file($this->def_xml_lang_file)) {
						if(is_writable($this->def_xml_lang_file)) {
							$data = '<?xml version="1.0" encoding="UTF-8" ?>';
							$data .= '<setting>';
							$data .= '<languages>'.$lang.'</languages>';
							$data .= '</setting>';

							$fh = fopen($this->def_xml_lang_file, "w");
							fwrite($fh, $data);

							flock($this->def_xml_lang_file, LOCK_UN);
							fclose($this->def_xml_lang_file);
						} else {
							header("Location: error&code=1xx");
							exit();
						}
					} else {
						header("Location: error&code=3xx");
						exit();
					}
				break;

			case 'cfg':
					if(is_file($this->def_cfg_lang_file)) {
						if(is_writable($this->def_cfg_lang_file)) {
							$this->_set_cfg("Global_DFLT_Lang", $lang);
						} else {
							header("Location: error&code=1xx");
							exit();
						}
					} else {
						header("Location: error&code=3xx");
						exit();
					}
				break;
		}
	}

	function _get_xml()
	{
		$languages = simplexml_load_file($this->def_xml_lang_file);
		return $languages->languages[0];
	}

	function _get_cfg()
	{
		$languages = parse_ini_file($this->def_cfg_lang_file, true);
		return $languages['Global_DFLT_Lang'];
	}

	public function _set_cfg($property,$equals)
	{
		$content = file_get_contents($this->def_cfg_lang_file);
		$lines = explode("\n",$content);
		$newLines = array();
		$count = 0;
		foreach($lines as $value) {
			$propLength = strlen($property);
			if(substr($value,0,$propLength) == $property){
				$newLines[$count] = "$property=$equals";
			}else {
				$newLines[$count] = $value;
			}
			$count= $count+1;
		}
		$final;
		foreach($newLines as $i) {
			if(!isset($final)) {
				$final = $i;
			} else {
				$final .= "\n".$i;
			}
		}
		$write = fopen($this->def_cfg_lang_file,"w");
		fwrite($write,$final);
		fclose($write);
	}

	public function _getCurrentlp() { return $this->getLanguage; }

	public function _getCurrentsetFileType() { return $this->setFileType; }

	public function _getCurrentFileType() { switch ($this->setFileType) { case 'xml': return $this->def_xml_lang_file; break; case 'cfg': return $this->def_cfg_lang_file; break; } }
}
?>