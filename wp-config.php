<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'Progetto Wordpress di Ivano Bruno' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Y7NerWC)!o/:VYd-A8 7nf~*?$YEiH@e%v>e:LiVQlGo:vrDUd8(%RJsNCL|ghm' );
define( 'SECURE_AUTH_KEY',  '?*cWQ BzaHyd4?=WNV0WYchWQIaTK5nI]2AQ*^nbGqTdDW/crf5`+<WQMmB=Ktw>' );
define( 'LOGGED_IN_KEY',    'eF$bWpRAhY54sij1R&7/I3T5(5>G.D]^3E.m/BR3.B2_}G(b$R8`}p[%/aBb%6xA' );
define( 'NONCE_KEY',        'i5<E~=bgt@yxJA4K~oL3C4@=Q` *X5AxS+O?>s:0rS:`pBd}jgdwPUfX>W3U3mp5' );
define( 'AUTH_SALT',        'Z[_}}3cZV#-Ad?zW*:7yFkoA-0RO%Jz$-czS]d4mPvsq}]nS%cl>eBwLPK|`U2^/' );
define( 'SECURE_AUTH_SALT', '%@Nko0i$bo@f8C,3NVD6X+qL7E{:#glJ0,KR}gr*zt/q99ON=OW0wE9D#&/2Pb&;' );
define( 'LOGGED_IN_SALT',   'qbo?IA,D~$|315 |VZ^F6>ez9OfT6unLk7YO(U_7`t?SjC[<~.#*-Yqfb;Se)_#M' );
define( 'NONCE_SALT',       '_|RrE e*DU[l3Dc2.Iv]=ns&g3oqu{63h>x:g}q{^iISX6}5x#A,rw{$G`tE;)+!' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
