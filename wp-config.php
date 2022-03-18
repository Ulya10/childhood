<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'ywnkmp' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?/u~(lH5AXCFE%bPc=X(HA$JSd2xl)jl.vr=W6>/DC%N}Li_FsND5x/.SN>1Ieu+' );
define( 'SECURE_AUTH_KEY',  'FucmlNRox Sr^1a>#`ET 07vv]:>v%A+v!z~h+A[Y5(JH4gYB$e_$t}im7!O]4PO' );
define( 'LOGGED_IN_KEY',    '[:UyQ&+`T<_d9o7aL%[;n?tU{<HVu-H|@.7_7^iaY+9BDM MUXHtQx,G/D[[3ts9' );
define( 'NONCE_KEY',        'RD0~)A*GB@a*pL(q*xtA^?3H?`GxQ.PxN5&OJxI<u;i&IT-xs?;aA8Dd+u$MDb60' );
define( 'AUTH_SALT',        '}2`xtRnmF7AuN~8y>-YGK;L`5w{v2d&.Kks3(5xrM@_-!cJ/V74l8P;QKF<nc@8[' );
define( 'SECURE_AUTH_SALT', 'X_1@HfHunB_F<~!QFr _cX5vvDl[+>}Jq}%lAJjoV)uN)u7m,H! 7ENt1=8o6raw' );
define( 'LOGGED_IN_SALT',   '|*y}Cn],!>g455z!R7wugM:_6*r!F )E!rg/csXlxYu:0pvE Y{P*&yN6OArA02`' );
define( 'NONCE_SALT',       '[v:H^3Sy4B#q-e-pzLZ08CF*h{gzEjue:$6G&M{UlK~`JdZO|.{+U41?LvsN=|Th' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
