<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define('DB_NAME', 'newWord');

/** اسم مستخدم قاعدة البيانات */
define('DB_USER', 'root');

/** كلمة مرور قاعدة البيانات */
define('DB_PASSWORD', 'iti');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8mb4');

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' TH#1cC]y%t+wRJ!Yj^xd6]<j^^Lm9LHnar[,AO[CIhH<{X3yMo*(giTcD+vioA1');
define('SECURE_AUTH_KEY',  'X9/fpT|ef,+~3eBX/XQEGlBG^Wy;Bx%&Ym;w<$OgkT?m-J1]+m+=MVaO?LQiy!4A');
define('LOGGED_IN_KEY',    '?|5@1DhK-.1x#$`<db{+qvuW[-$=$K{oT5l75edLv46=ghBZF?W{g$o_o$^|=s;3');
define('NONCE_KEY',        '$a;P)XqMl]GUWJ1]4 M7{A7]kVVcmtiqJxTduS*us%<h|vQ~d94eRA22y7-Yd,4l');
define('AUTH_SALT',        ']_zq]tDlUFRWoQni;BpuM^Mzw:-L7FP788gu)*pJFR;{E~A]EG?(us*q4^$(]o-~');
define('SECURE_AUTH_SALT', '&1}cx3MyOOhm/vEW<F8TWBj($Xw7!QQ_YUg?n?Z:G^pngj*&.Q:I&m<6`+-]xvM+');
define('LOGGED_IN_SALT',   'CEM2J[?o{a5UL6%}364^%1t*O0%0ck?g0m-l4oaWKz k4-.=noGh&8w,.7-W*sH ');
define('NONCE_SALT',       '8*1_b9>R>!=CfFN3q%#?W%B+2cSwd.e]VE_`?IIO` SAxHwILC4;FYp:lIL+:t.H');

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix  = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once(ABSPATH . 'wp-settings.php');