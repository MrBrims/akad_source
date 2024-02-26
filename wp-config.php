<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
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
define( 'DB_NAME', 'akademily_local' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'sZTrBGIs_ AM@$WNqM$`9cmA=(& oS>}mBn+$e7Q8s(Ml?gcr].%X-{XcY7]HM~;' );
define( 'SECURE_AUTH_KEY',  '-tG;__,o>Q~=q)[i3F=S?b+`4otvYT#5oG@8eZ)N=[@`Gl7)7e;UduJwsEUr;wRA' );
define( 'LOGGED_IN_KEY',    'IL_xfic^f3ft5A[_*]y|/YUEWpG@B^#i[Qs[[jzt{nz,d5=f&x~j$nr60IG2 i]{' );
define( 'NONCE_KEY',        '%G0BQR`N^7,:h(Fv{X^BC$Pc`lLHf_J1x^=LmK4;wSIy{f9Q/&,VviXEj;-6:QJe' );
define( 'AUTH_SALT',        '&4`]uv@pL+]bRxbKrXBH-1&d0T5]qK}h]46s^W&&]tu/cDQ/p>;T|O)*+`n+sot*' );
define( 'SECURE_AUTH_SALT', 's[O$#Mtk*heT>QbR:UfN[bOF]4I<3pp1oILqPFTC+aH3a+(8FYL_-E:tYgqi1,jw' );
define( 'LOGGED_IN_SALT',   'pmc7Qv5yvxOllu%(epNS2I1azRV;6Zh2#FZZ?T`GWg7?i]?7zh8)FT{67[er3_*t' );
define( 'NONCE_SALT',       's&x!/CYz_*vamN=vv7oUb!B#CyVxa{QV/[#76VVm3XBoOEg B[}I9nw}GJ7DA:oG' );

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
