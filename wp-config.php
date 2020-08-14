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
define( 'DB_NAME', 'wordpr' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!AX&oeBL70VycPAlZicTY[v:9HpqoCs7k W:tC#e;potZFgdA$&c8kpt_:Pa_e$f' );
define( 'SECURE_AUTH_KEY',  'Vm*c-a[k(dC:#W_@d`,T9V[)uHs+qv5N0[ZOn;@!IO;]74bcRO(tMF/bV#cWvs=T' );
define( 'LOGGED_IN_KEY',    'pP6^pmG&1uauNk{G?NCZ)C8ryA0%Q`N;8$Cuu)B&h1UtN<iEk+*^#_PSp)d|w/e2' );
define( 'NONCE_KEY',        '1c 6FGxrz)lM;yUWqWO<6hLA)f<=&=rN@9rpfLrTPxX;bz&lJVadTBNdtWT eX]o' );
define( 'AUTH_SALT',        '}(:j~2;MBL ACUnMRTBSq1L`X3/e5Goj-DHd8L`F7;zTkN?]*y.D0gAuv_A=(xPs' );
define( 'SECURE_AUTH_SALT', '=H4jc6d L9SeCk7QD)&R!#QZ:TQcOFeG34o$C&eH=m/fq~sq`t4UaDW&-L/B9GM_' );
define( 'LOGGED_IN_SALT',   'c},E7&xU{bf*wol.(1W]I%a/=- iYY1}dCf#j2hrJY@YTH{dy N%&u/7zd6XDARv' );
define( 'NONCE_SALT',       'I>h5!A|)j2W#-rN)}lw~*|x_twDk[%jLuwF7=os=$X7yZ9pZ7C?4dS!a|Dv7Sh5F' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
