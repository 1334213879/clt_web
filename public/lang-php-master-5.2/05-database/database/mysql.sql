SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `lp_language` (
  `code` char(8) NOT NULL,
  `name` text NOT NULL DEFAULT ''
);

INSERT INTO `lp_language` (`code`, `name`) VALUES
('en-us', 'United States - English'),
('ja-jp', '日本 - 日本語'),
('ko-kr', '대한민국 - 한국어'),
('ru-ru', 'Россия - Русский'),
('zh-cn', '简体中文 - 中国'),
('zh-tw', '繁體中文 - 中國');

CREATE TABLE `lp_translate` (
  `id` int(11) NOT NULL,
  `section` text NOT NULL DEFAULT '',
  `lp_keyword` text NOT NULL DEFAULT '',
  `en-us` text NOT NULL DEFAULT '',
  `zh-cn` text NOT NULL DEFAULT '',
  `zh-tw` text NOT NULL DEFAULT '',
  `ja-jp` text NOT NULL DEFAULT '',
  `ko-kr` text NOT NULL DEFAULT '',
  `ru-ru` text NOT NULL DEFAULT ''
);

INSERT INTO `lp_translate` (`id`, `section`, `lp_keyword`, `en-us`, `zh-cn`, `zh-tw`, `ja-jp`, `ko-kr`, `ru-ru`) VALUES
(1, 'homepage', 'lang_page_title', 'DATABASE & ARRAY TYPE', '数据库 & 数组式', '數據庫 & 數組式', 'データベース & 型の配列', '데이터베이스 & 형식의 배열', 'База данных & Массив типа'),
(2, 'homepage', 'feature-readme', 'Connected via PDO SQL database support for MySQL, SQLite. Using arrays (Array) feature lists all the available data.', '通过 PDO 方式连接 SQL 数据库，支持 MySQL、SQLite。并使用数组（Array）功能列出所有可用的数据。', '通過 PDO 方式連接 SQL 資料庫，支援 MySQL、SQLite。 並使用陣列（Array）功能列出所有可用的資料。', 'PDO SQL データベース MySQL、SQLite のサポートを介して接続されています。 配列 (配列) 機能を使用すると、使用可能なすべてのデータがリストされます。', '패스 PDO 연결 SQL 데이터베이스, 지원 MySQL、SQLite. 어레이 사용 하 여 (Array) 기능 모든 사용 가능한 데이터를 나열합니다.', 'Пасс PDO Подключение SQL База данных, Поддержка MySQL, SQLite. Использование массивов (Array) Функция перечисляет все доступные данные.'),
(3, 'homepage', 'lang_cfg_title', 'CONFIGURATION INFORMATION', '配置信息', '配置資訊', '構成情報', '구성 정보', 'Сведения о конфигурации'),
(4, 'homepage', 'lang_cfg_title1', 'Database connection modes: ', '数据库连接模式：', '資料庫連接模式：', 'データベース接続モード: ', '데이터베이스 연결 모드: ', 'Режимы подключения базы данных: '),
(5, 'homepage', 'lang_cfg_title2', 'Using a database table: ', '使用的数据库表：', '使用的資料庫表：', 'データベース テーブルを使用してください: ', '데이터베이스 테이블을 사용 하 여: ', 'Использование таблицы базы данных: '),
(6, 'homepage', 'lang_cfg_title3', 'Search criteria: ', '搜索条件：', '搜尋條件：', '検索条件: ', '검색 조건: ', 'Критерии поиска:'),
(7, 'homepage', 'lang_cfg_title4', 'Keywords: ', '关键词：', '關鍵字：', 'キーワード: ', '키워드: ', 'Ключевые слова: '),
(8, 'homepage', 'lang_cfg_title5', 'Current Cookies globally \"lang\" variable value: ', '当前 Cookies 全局 \"lang\" 变量值：', '當前 Cookies 全域 \"lang\" 變數值：', '現在 Cookies グローバル \"lang\" 変数の値: ', '전류 Cookies 글로벌 \"lang\" 변수 값: ', 'Текущие куки глобально \"lang\" значение переменной: '),
(9, 'homepage', 'lang_cfg_title6', 'Browser \"HTTP_ACCEPT_LANGUAGE\" is requesting: ', '浏览器 \"HTTP_ACCEPT_LANGUAGE\" 请求值：', '瀏覽器 \"HTTP_ACCEPT_LANGUAGE\" 請求值：', '要求しているブラウザー\"HTTP_ACCEPT_LANGUAGE\": ', '브라우저 \"HTTP_ACCEPT_LANGUAGE\" 요청 값: ', 'Обозреватель \"HTTP_ACCEPT_LANGUAGE\" Значение запроса: '),
(10, 'homepage', 'lang_cfg_title7', 'The currently loaded file is: ', '当前加载的文件是：', '當前載入的檔是：', '現在読み込まれているファイルです: ', '현재 로드 된 파일은: ', 'Текущий загруженный файл является: '),
(11, 'homepage', 'lang_cfg_title_msg', 'Is not set', '未设置', '未設置', '設定されていません', '설정 하지 않으면', 'Не задано'),
(12, 'homepage', 'lang_available', 'CHOOSE ONE OF THE AVAILABLE LANGUAGES', '选择可用的语言', '選擇可用的語言', '利用可能な言語のいずれかを選択します', '사용 가능한 언어 중 하나를 선택합니다', 'Выберите один из доступных языков'),
(13, 'homepage', 'lang_use_title0', 'HOW TO USE IT', '如何使用它', '如何使用它', 'それを使用する方法', '그것을 사용 하는 방법', 'Как его использовать'),
(14, 'homepage', 'lang_use_title1', 'Extract the file &lt; latest.zip &gt;;', '解压文件 &lt; latest.zip &gt;；', '解壓檔 &lt; latest.zip &gt;；', 'ファイルを抽出します &lt; latest.zip &gt;;', '파일 추출 &lt; latest.zip &gt;;', 'Извлеките файл  &lt; latest.zip &gt;;'),
(15, 'homepage', 'lang_use_title2', 'Upload or copy \"05-database\" File to your website home directory in the directory;', '上传或复制 \"05-database\" 目录中的文件到你的网站主目录；', '上傳或複製 \"05-database\" 目錄中的檔到你的網站主目錄；', 'ップロードまたはコピー \"05-database\" ディレクトリに web サイトのホーム ディレクトリにファイルします。', '업로드 또는 복사 \"05-database\" 디렉터리;에서 귀하의 웹사이트의 홈 디렉터리에 파일;', 'Загрузка или копирование \"05-database\" Файл вашего веб-сайта домашний каталог в каталоге;'),
(16, 'homepage', 'lang_use_title3', 'No configuration file, the file lp-config.sample.php was renamed to lp-config.php.', '没有配置文件，将文件 lp-config.sample.php 更名为 lp-config.php。', '沒有設定檔，將檔 lp-config.sample.php 更名為 lp-config.php。', '構成ファイル、ファイルがありません lp-config.sample.php 商号を変更 lp-config.php.', '아니 구성 파일, lp-config.php 에 LP config.sample.php 파일의 이름을 바꿉니다.', 'Нет файла конфигурации, файл lp-config.sample.php Изменила свое название на lp-config.php.'),
(17, 'homepage', 'lang_use_title4', 'Open it lp-config.php Modify the Database_Mode value, select the type of database;', '打开 lp-config.php 修改 Database_Mode 值，选择数据库类型；', '打開 lp-config.php 修改 Database_Mode 值，選擇資料庫類型；', '開けて下さい lp-config.php 変更 Database_Mode 値は、データベースの種類を選択します.', '그것을 열으십시오 lp-config.php 수정 Database_Mode 값, 데이터베이스 종류 선택.', 'Открыть lp-config.php Изменить Database_Mode Значения, выберите тип базы данных;'),
(18, 'homepage', 'lang_use_title4_mysql1', '1. Fill in the host address (DB_HOST), database name (DB_NAME), username (DB_USER), password (DB_PWD), prefix (db_prefix), encoding (DB_CHARSET);', '1. 填写主机地址（DB_HOST）、数据库名称（DB_NAME）、用户名（DB_USER）、密码（DB_PWD）、前缀（db_prefix）、编码（DB_CHARSET）；', '1. 填写主机地址（DB_HOST）、数据库名称（DB_NAME）、用户名（DB_USER）、密码（DB_PWD）、前缀（db_prefix）、编码（DB_CHARSET）；', '1. ホスト アドレス (DB_HOST)、データベース名 (DB_NAME)、(DB_USER) のユーザー名、パスワード (DB_PWD)、プレフィックス (db_prefix)、エンコーディング (DB_CHARSET); を記入します。', '1. 호스트 주소 (DB_HOST), 데이터베이스 이름 (DB_NAME), 사용자 이름 (DB_USER), 암호 (DB_PWD), 접두사 (db_prefix), 인코딩 (DB_CHARSET);를 입력합니다;', '1. Заполните адрес хоста (DB_HOST), имя базы данных (имя_базы_данных), имя пользователя (DB_USER), пароль (DB_PWD), префикс (db_prefix), кодирование (DB_CHARSET);'),
(19, 'homepage', 'lang_use_title4_mysql2', '2. Open it lp-config.php modify \"Database_Mode\" values, select the type of database;', '2. 更改 Database_Mode 值为 \"mysql\"，使用 phpMyAdmin 创建数据库，使用导入功能，选择文件：05-database/database/mysql.sql。', '2. 更改 Database_Mode 值为 \"mysql\"，使用 phpMyAdmin 创建数据库，使用导入功能，选择文件：05-database/database/mysql.sql。', '2. 開けて下さい lp-config.php 変更 \"Database_Mode\" 値は、データベースの種類を選択します。', '2. 그것을 열으십시오 lp-config.php 수정 \"Database_Mode\" 값, 데이터베이스;의 유형을 선택합니다', '2. Открыть lp-config.php Изменить \"Database_Mode\" Значения, выберите тип базы данных;'),
(20, 'homepage', 'lang_use_title4_sqlite', 'Change Database_Mode value is \"sqlite\" by default using the database file: 05-database/database/SQLite.db.', '更改 Database_Mode 值为 \"sqlite\"，默认使用数据库文件：05-database/database/sqlite.db。', '更改 Database_Mode 值為 \"sqlite\"，預設使用資料庫檔案：05-database/database/sqlite.db。', '変更 Database_Mode 値は \"sqlite\"既定では、データベース ファイルを使用して: 05-database/database/sqlite.db。', '변경 Database_Mode 값은 \"sqlite\", 기본 데이터베이스 파일: 05-database/database/sqlite.db。', 'Изменение Database_Mode Значение \"sqlite\", Файл базы данных по умолчанию: 05-database/database/sqlite.db。'),
(21, 'homepage', 'lang_use_title5', 'Browser access: http://&lt; Your domain name or IP &gt;;', '浏览器访问：http://&lt; 你的域名或 IP &gt;；', '浏览器访问：http://&lt; 你的域名或 IP &gt;；', 'ブラウザーからのアクセス: http://&lt; あなたのドメイン名または IP &gt;;', '브라우저 액세스: http://&lt; 귀하의 도메인 이름 또는 IP &gt;;', 'Browser access: http://&lt; Your domain name or IP &gt;;'),
(22, 'homepage', 'lang_use_title6', 'Start experimenting!', '开始体验吧！', '開始體驗吧！', '実験を開始!', '실험 시작!', 'Начните экспериментировать!');

ALTER TABLE `lp_language`
  ADD PRIMARY KEY (`code`);

ALTER TABLE `lp_translate`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lp_translate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;