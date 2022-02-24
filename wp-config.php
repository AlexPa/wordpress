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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'V$|~x&GV k~GBXna>(=;%bVGJv.zK<ss/p5dc<E-=GL0&7U`hDmM<T>qW!Z4ue=U' );
define( 'SECURE_AUTH_KEY',  'UvrF,UkK5Tz@(yse>iAh2;:::0:[=)Rkq, ml{`EBw<9RJ32IZPo,/U?PLNSNTt;' );
define( 'LOGGED_IN_KEY',    's 7#:kQ%>,OG9`T#~w;-=|?DP0LDK|  a/A._pLWD`C,kg>S!vIq3Kae/K4Vr+k|' );
define( 'NONCE_KEY',        '_8NNEerDV9wS4lj/7-GXLt%`,0#VD-Z)cX@lP)hTQZsUv1Ef9V&VGYS#Kz}dq!LE' );
define( 'AUTH_SALT',        'DAWjK/?|4%bu/6mFc)MW-_@5%#]C*:Rn2-)oBgLty]FzG%ToxnB:K#Qv~;)*_E<H' );
define( 'SECURE_AUTH_SALT', '72/buym$QZ<]>Z>w?=q,-?{w(w0*{8bgj-Z4Cbafj;i!Iu+iE;t2EPLk.rsv6%/<' );
define( 'LOGGED_IN_SALT',   '_gXVVwKNUShp%qj/4 vku0-sBlTj0@L5XI_|G!d8z))Ofa:yQ*/wN<Ue=l[?4eJU' );
define( 'NONCE_SALT',       's/Z}>R x{6]/@Vc^S1T@6qNn|6MH@JtnTIpKIb495^77;8e?R !$.}Y>Y&l;N!,V' );

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
