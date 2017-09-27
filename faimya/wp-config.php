<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'faimya');

/** Имя пользователя MySQL */
define('DB_USER', 'admin_faimya');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '080895');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eT[yfNR;G=AHePii6+#a`y60wsR1AMI/i+#-bFBg-oLQ@RG%QE>Zib!8D2,=Q;E6');
define('SECURE_AUTH_KEY',  ':49AiCF;RyB,4)h6PK;&*`hH.?k@oc >yOf>{y3-P4Akh6woMF$qj^e4W*P{:dAn');
define('LOGGED_IN_KEY',    '77o5A]2p!8h(_?^|H$FRJrtGmFHt1ShZN1|34usx+yX> >3h/lV|?ws888iUhK(Z');
define('NONCE_KEY',        'S%{,ZNG-P#Mf5#-M%CA8kh3;]{^gzC}$ |`xU*=ji.ShX<So0d8zYHB)Nxk|fj>c');
define('AUTH_SALT',        'NfaLM-KF}jmJ0Eu.H5mS2d4PH13^!6rX|%[0{!U8q0(c+{m$t,imduF@k(o;`CBb');
define('SECURE_AUTH_SALT', '(WGH<pJdu 6.]Nl5+33sZ?9=3u<%oHDLZZ_,!@*7Ply5=5{L)$dD ;m$X#P#d@dO');
define('LOGGED_IN_SALT',   'QCZEq190PCyErk.rfzE?}^*P{w`kt(cG$g9}W^UV%UCS}As}$VfBo!x{$;gPU?cy');
define('NONCE_SALT',       '&Y*3JIiu:hDA>(G@^qtW#,=J@ywbOedT3.g&|s 2}0x,@-2VECs-9LOSA71=DWRm');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
