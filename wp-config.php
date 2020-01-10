<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'sito_lioi' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cJe?W)b,50criX7pDa}CVH K(k A^PYCa..%5 ck7(a9U.`4~z2~U]EpObt2ttH{' );
define( 'SECURE_AUTH_KEY',  '@Cdn<3*StdJY9.qgWtd=dN19n#lW~0oYZ.*Zv!=YfVc8)^-PuY0u/7Hp;e4?_iQ,' );
define( 'LOGGED_IN_KEY',    'Kz{oaQHIysdG,G+*f#aY)xRx.7|@G;slx!o4kb`7f09Xz(FJ?X94aig_!L:}J7%V' );
define( 'NONCE_KEY',        'Jp^t3fc$Y0x[4_uNUd(V(6-s!4<?/WVz!kIQPed>LN^y>XV@g=_8Pmp4Q>wB?6.l' );
define( 'AUTH_SALT',        'ojUq>d(*qr3Gh5N.sm.5#@gW#afIK?P)IHh)8U6j|.WFUk!$tz@z:ABf4LlIz{lP' );
define( 'SECURE_AUTH_SALT', '?L7P:^!5wKXKc/+$h3+ 7y-3wQU8]*jNp)rP9SI:pK$+ZCYbw/Ia8u6Rw5bWxLZ`' );
define( 'LOGGED_IN_SALT',   'C=,ODvgg=[iXKEpsAN%AZo^Kj+U+V!G_LUR=@&W#S>9BI#w{.@3H:4~~]I&MC4:n' );
define( 'NONCE_SALT',       ':(nOLEcGiEqibgdTgm)$ime/zWAUn14im0|HWP=u(hq!K=ToY>HlIgK57@c.q6Ni' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'xyz_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
