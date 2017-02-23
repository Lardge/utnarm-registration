<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'utnarm');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', '');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

define('IMPORT_DEBUG', true);


/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_LK**~Nm3+Tx|_fUO&qO;QSK)xkWwmv`T%,q<.-SSbvwO5*4>yYOB)oe(c%aeFRx');
define('SECURE_AUTH_KEY',  '[(7,C(K :?;89|6wt7d^(loryKO15z4z$7nhQuNj5-9)SeY0pI,y2@w/^p=^1Vpp');
define('LOGGED_IN_KEY',    '5lXzj8FkGdW?5:Lz)Z_.ddd9VXHw_BR(kX19Q5vq;MaM/``-@r*:>nVeD_Y<oQa6');
define('NONCE_KEY',        '|FP`)$7*.oCZN9%cn%b.a8iz:KvbTEOnK3.G,M;bwd(FZg4qHg;n;Ou)r`bL50;U');
define('AUTH_SALT',        'Ha+mxA%=RBST09ni+*#*^_HvVKuk4iFshc&g[?&b`PNsaYJo^(p>Uxo$yTc_tjzn');
define('SECURE_AUTH_SALT', 'MHXIeSKu%^c9@aB]8]mE{h;Q7|$l3_A U?D`Pw]B]%n/ <%*3(/cAW;(Y,>PJ`<n');
define('LOGGED_IN_SALT',   'UlI^uA0K@#O:9*PpO=YI!QFm%UU?>Vrw?`8 sl(|[#2xt;OOm~I~F-q|+i+S^kh_');
define('NONCE_SALT',       'V6gI;n,B|RsBHbsi_#=<9dC98)$&#4`{!t0A/X4+xpgXm,uKS$NPleY#sa=K9f]<');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');