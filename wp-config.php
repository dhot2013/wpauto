<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'auto_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Eqi)&<g S?F%U2NGE7y)n!-|m2Jf+fYW9Lm_F#Gj,Owr=~r+;6Bb>Kz23~m,l?pu' );
define( 'SECURE_AUTH_KEY',  'xw0>6`u<:zLu=^^snbN{Syw//d06QLExec=*q<AH[5L<o9-<sbKU.AU17pC1Sg n' );
define( 'LOGGED_IN_KEY',    'cE,|{LkzEK4Pw<c.a[QOFf&TfV:{CdF<C([=S0;Mo{O2-1mA!pqnH].GQ3yXfEqu' );
define( 'NONCE_KEY',        'z?utFY)-kCE3O5YQ@Vh<K6J+kgq*9HdNUV=0L|*w-)UP;kk<-|K=eu* XwY.*n&7' );
define( 'AUTH_SALT',        'yoX!J;5FqI1.U$o]8V{`=HK==:iZ;xFm7AUC8v3G|$2W|{4,kEM(4@ZenJADfB~s' );
define( 'SECURE_AUTH_SALT', 'BNCLGHPp*~UMB0YTonpgCFbMvq%Q3DPHo!.~t>9RPG{r9Kgn<wHIPr}_cevkD`<&' );
define( 'LOGGED_IN_SALT',   'hXI&7KlLF!R1+0Kr_l^jFyx,`OV&TcN)IX/$cCt`ou(=<X)JwY51rE4{xLn3-9=o' );
define( 'NONCE_SALT',       '1+fnZLS*;LO#.{Pm*hXLCHu<@Bjg}y@vp.R/)`=K6xr8gN,]t>xP<+Fia{n+T]AZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
