 
<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wordpress');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'wordpress');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'T# {/}x! :25YgLb@ItlMzg=x[:r:G]lk.ca/[CJh,/C[BSVT-X*ya$Ptu/0sx/X');
define('SECURE_AUTH_KEY', '`pwIjePlCI*~[l -~c<S)?_6k0ol7{c-g%Sb4z}eIwbJ{rwzOy>Z)k~rwwZ@HKve');
define('LOGGED_IN_KEY', 'p72/:gS{D;r=K`,gX`7Gs7Y6oy|*.2#3+7/KLzFafJXcD^UZ&]18D4?apv;./U;^');
define('NONCE_KEY', '[s05JMq]kOcQIJ]p89K6`~Ums.*:ywi7%`AgPf8na;E,*#&FlxZ2cc1qcpU0*BJA');
define('AUTH_SALT', 'K8<wOA#k[c,Xvu2X|K4+!C{+%v`6XMSfpd|+=r1Y458k>:H}*w{X:xqVykR#wIEk');
define('SECURE_AUTH_SALT', 'v;KTX2Ate>JG%u&Fw)<k#z3n)AqSDlBSa`13gY28,l}/*VJzpIxUrRRp%]_DJN|.');
define('LOGGED_IN_SALT', 'FwV5IPDjHEnIzXDpCh-qn!YsNzTL-rYdOGk2e!!$.Vue7`$5b?2!x+Vv+wlZsC#q');
define('NONCE_SALT', ':oWlu~4xA.&Qd%90wCwx$}1^!?L ){S=rAJ{dt9jHRsGAKKN0$v$QT??x(`pg?Mf');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

