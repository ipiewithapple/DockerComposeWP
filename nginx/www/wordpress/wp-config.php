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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         't1ew#!(@zd1pVDnn==<m`_Y<1?5v9[Oi!>Czi2RPnDL5PkOYtyYYh%3z`YP]Cm,^');
define('SECURE_AUTH_KEY',  '}ie{*y{p+&0o?A9izJ+JG;UEh<KO?{S-D}I:Oqf&20!I/9HHM[Qx]?CDl5z>0aUK');
define('LOGGED_IN_KEY',    'RiCtZNN:3@$0.S7&gh..l#NH.YGkwZrE%Q)8P}bC]8?I9$^J~;KfqLXW?fC4.GUI');
define('NONCE_KEY',        '_|MiJHT>R=.j1[Pepm!SY7S;5ol3t[#Nr0U^,Te?Wh:W _]o_6>bpx*>X^<zitX)');
define('AUTH_SALT',        '6/X=(ky/0@cpd$?5#<*%kCIY,u;h~t?Mm,!i)u,PR>Gjx,er3(FcB-T<;CS(pa?o');
define('SECURE_AUTH_SALT', '3sEOW@v`SL<lM:9d3$DxNq<,P+mlqhmsRwF$oT.YV2agU)Y;BmD/$$l5kPTmTn5h');
define('LOGGED_IN_SALT',   'DfeG+T9;e#ETcb_3v`?nK -4qPgH<b9Ib[eg9oCO-I^:A!=d->uW*2prx-953.7&');
define('NONCE_SALT',       'cN/L~|fHI$_G_|qb3~9LzW3Ob1kfN@k9,`Bc*j3_OKe)m$~zZGm8,{sNW!QzNoXM');

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
