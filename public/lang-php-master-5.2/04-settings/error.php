<!DOCTYPE html>
<head>
<title>Error Page - LANG-PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/logo/logo.ico" type="image/icon"/>
<link rel="stylesheet" href="assets/css/css.css" type="text/css" />
</head>

<body>
<div class="main">
	<h1 id="logo">
		<a href="https://lang-php.com"><img alt="Lang-Php" src="assets/logo/logo.svg" /></a>
		<br /> LANG-PHP
	</h1>

<?php switch($_GET['code']):
case "1xx": ?>
<h2>ERROR CODE : 1xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>没有读写权限，请把 lp-global-setting.cfg / xml 文件给读写权限后再次尝试该操作。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>沒有讀寫許可權，請把 lp-global-setting.cfg / xml 檔案給讀寫許可權後再次嘗試該操作。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;<strong>United States - English</strong></dt>
		<dd>Do not read and write permissions, please write the lp-global-setting.cfg / xml file to read and write permissions to try again after the operation.</dd>
	<dt><span class="flag-icon flag-icon-de"></span>&nbsp;<strong>deutschland - deutsch</strong></dt>
		<dd>Nicht LESEN und schreiben, die erlaubnis, bitte lese - und schreibzugriff lp-global-setting.cfg / xml datei an und versuchen sie es erneut, Den Betrieb.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>нет разрешения, пожалуйста, читать и писать, читать и писать lp-global-setting.cfg / xml файл для разрешения этой операции, и попробуйте снова.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>読み書き権限がない lp-global-setting.cfg / xml ファイルを読み書き権限後に再挑戦し。</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>안 읽고 쓰기 권한을 주세요 lp-global-setting.cfg / xml 파일 읽기, 쓰기 권한을 준 후에 다시 시도해 그 동작.</dd>
</dl>
<h2>SOLUTION</h2>
<p>chmod 777 &lt;folder&gt;/lp-global-setting.cfg / xml</p>
<?php break;?>
<?php case "2xx": ?>
<h2>ERROR CODE : 2xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>lp-global-setting.cfg 文件里没有名称为 Global_DFLT_Lang 的变量，请先添加变量。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>lp-global-setting.cfg 檔案裏沒有名稱為Global_DFLT_Lang的變數，請先添加變數。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;<strong>United States - English</strong></dt>
		<dd>lp-global-setting.cfg file does not have a name for the Global_DFLT_Lang variable, please add the variable.</dd>
	<dt><span class="flag-icon flag-icon-de"></span>&nbsp;<strong>deutschland - deutsch</strong></dt>
		<dd>lp-global-setting.cfg datei keinen namen für Global_DFLT_Lang Variablen, bitte noch die Variable.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>не  lp-global-setting.cfg файл для Global_DFLT_Lang имя переменной, пожалуйста, сначала добавить переменных.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>lp-global-setting.cfgファイルには名称をGlobal_DFLT_Langの変数は、まず足を付ける変数.</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>lp-global-setting.cfg 파일 안에는 이름 Global_DFLT_Lang 변수를 위해, 먼저 추가 변수.</dd>
</dl>
<?php break;?>
<?php case "3xx": ?>
<h2>ERROR CODE : 3xx</h2>
<dl>
	<dt><span class="flag-icon flag-icon-cn"></span>&nbsp;<strong>简体中文 - 中国</strong></dt>
		<dd>未找到 lp-global-setting.cfg / xml 文件，可参考 lang-cfg-sample.php 示例文件，或另存为 lp-global-setting.cfg / xml。</dd>
	<dt><span class="flag-icon flag-icon-tw"></span>&nbsp;<strong>繁體中文 - 中國</strong></dt>
		<dd>未找到 lp-global-setting.cfg / xml 文件，可參考 lang-cfg-sample.php 示例文件，或另存為 lp-global-setting.cfg / xml。</dd>
	<dt><span class="flag-icon flag-icon-us"></span>&nbsp;<strong>United States - English</strong></dt>
		<dd>Not Found lp-global-setting.cfg / xml File that references lang-cfg-sample.php sample file, or Save As lp-global-setting.cfg / xml.</dd>
	<dt><span class="flag-icon flag-icon-de"></span>&nbsp;<strong>deutschland - deutsch</strong></dt>
		<dd>Nicht gefunden lp-global-setting.cfg / xml Datei, die lang-cfg-sample.php Beispieldatei  verweist, oder Speichern unter lp-global-setting.cfg / xml.</dd>
	<dt><span class="flag-icon flag-icon-ru"></span>&nbsp;<strong>россия - русскийм</strong></dt>
		<dd>не найден lp-global-setting.cfg / xml Файл, который ссылается на lang-cfg-sample.php образец файла, или Сохранить как lp-global-setting.cfg / xml.</dd>
	<dt><span class="flag-icon flag-icon-jp"></span>&nbsp;<strong>日本 - 日本語</strong></dt>
		<dd>エラー：見つかりません lp-global-setting.cfg / xml ファイル, を参照してください lang-cfg-sample.php サンプルファイル、または名前を付けて保存 lp-global-setting.cfg / xml.</dd>
	<dt><span class="flag-icon flag-icon-kr"></span>&nbsp;<strong>대한민국 - 한국어</strong></dt>
		<dd>찾을 수 없음 lp-global-setting.cfg / xml 파일, 참조 lang-cfg-sample.php 샘플 파일, 또는 다른 이름으로 저장 lp-global-setting.cfg / xml.</dd>
</dl>
<?php break;?>
<?php default: ?>
<p>No content</p>
<?php break;?>
<?php endswitch;?>
</div>
</body>
</html>