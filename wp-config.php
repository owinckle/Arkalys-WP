<?php // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'AUTOSAVE_INTERVAL', 160 );
    define( 'WP_POST_REVISIONS', 5 );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '575661_9c4b606dda91b11c0d590a295ea12f2c' );

/** MySQL database username */
define( 'DB_USER', 'easywp_523864' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lK0PqgTvT7vOlB5myfau24WsRQwL8RJ3w5ce7dy+ghI=' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-2-mysql-master.database.svc.cluster.local:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'xIQm@c_#X3_tj8<XA;Rd]W$[uIQSxK^NNtXX!V^6PZ|oZ^UTX[LK/[LK/vQP%>rf' );
define( 'SECURE_AUTH_KEY',   '%=PoF8Ap|{IYFsE_nx-1d,Z@`!kQH9&Y2=c33<`R2PnaP*tNRa/m:aj@B*tZhl+l' );
define( 'LOGGED_IN_KEY',     '!$s+7^pS3gFP[##toe/q{=IlOfa5YJvHCZv+ns}gwSQEC!`FZmtj]+u%sUkC.;n]' );
define( 'NONCE_KEY',         'dGE67xKGmP%E/^)n[,H2h:fH=cz#cqt9?opp|`OZ2Bzu,}(DfWc@9RbCyv2!78kD' );
define( 'AUTH_SALT',         'Be!Hb+vI9SQk<LiS<30GxLZ@B*8~x.z1.Q/XO~G@q=2{T EVo*ZBnE;pJJiF][g`' );
define( 'SECURE_AUTH_SALT',  'f6Ge*uK|t;K.Pl)62Qv3DUc,?^Ge6}~hrIOUN)!ouh]!C$>jGH`>tga0rDC)XMHD' );
define( 'LOGGED_IN_SALT',    'fk7T`}q#cfc|;BaJ2)@z<%X[ewp>7,QeD6{O|4|c~4{<x@MSsQfJ8@t7gQOu@>;q' );
define( 'NONCE_SALT',        ':LQ)~/`eCC?U/X>j61FUuFD *As+S*(m8vUXWnoS*Z9H,GU+!JS_A_2IywncwGk_' );
define( 'WP_CACHE_KEY_SALT', 'iL`BPV|:L&(E;{bDC;FUIJSkiWT&Llgq@SPo1 hM6oH(N[q;+9>S%.L8H}n<VuW2' );
define( 'WC_TEMPLATE_DEBUG_MODE', false );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
