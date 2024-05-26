<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'skysweep' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'root' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', '' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         '8,0`P&!@vq(.<sy5dh~%Dm&@TvF17]4I?~j8UU2H3Wwxui2F52n{Rx/^2=gQD?~j' );
define( 'SECURE_AUTH_KEY',  'Qb73}{e94C=`y<a)lrgc$@h6`=7(>kt/q^U{W+XU7d7#;ZGO)Iuy;Z^m/o&RxO>)' );
define( 'LOGGED_IN_KEY',    '(6jAA_W(K@xaF;@ROu-z)F<(PJu{i5[:um2WgBK_v8{6a [7,/IVvCu./Gr7^+#[' );
define( 'NONCE_KEY',        'T26 vd%M`{#=L(*}7#$5xCN=]qt>Y+[SJ>C&].]v%pAr1We-}&;^@w|F?wb8[=jy' );
define( 'AUTH_SALT',        '`j|Kc=^.b.z*?fhvr2FhQ4TW/Me1$ Mk(w&_lbhVotf*+UyC-<F|%p!8MZu:}Q`{' );
define( 'SECURE_AUTH_SALT', 'gR%a@m+MLpt=KBgNhC3XeB}+;D9#$a7bM3CX,}k:? qp7GrZ-YnKYXJBb[w`#4E=' );
define( 'LOGGED_IN_SALT',   '0]Jid[{o2@ivg _^1;7KpJVz0{?n?sg3FH<(UN!=[IwXuiF>HM|{{PnSZgc4P_Xf' );
define( 'NONCE_SALT',       'F_6SZr^H><6A7TmPL)1&=:RP +<3C[9O!UO{d__#[5b1AYQzwYGrjHXr@ptJ:5%r' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
