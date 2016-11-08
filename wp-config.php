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

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']pqFO^{wlB8YY6<YXv}3|wmKAZtB!0te,qL8}AYA4Av[=]dW1}0,uCtKa,SpaJ,e');
define('SECURE_AUTH_KEY',  'ULAwX#btKSl~pH KG,^Ph&D+qoIQ622,5Iau,=@[/QZ%,*rNI~KF9;K+hS4xdj A');
define('LOGGED_IN_KEY',    'EjZ?gk$z/:wNHF9d}#h0qweu:h%; ak,{i`-kgjEB|J~yqf:l}A)=Dk%DMb:E=pt');
define('NONCE_KEY',        'ZE-FHPVWccXm0aCqGYXEOGH~nm&4CH3l@%,Wd{#}J|j/ e{oSa.UXN?1(!jZodH$');
define('AUTH_SALT',        'DYyl.,HWk:u_W<NJ1.q,Q^5<*42^{&^8+uHG_RB$/]Wvx8OJlGvs#SZY2D[yEyC<');
define('SECURE_AUTH_SALT', 'Nfd:7#@#|SG43Q~tyhCCXjIAAHp#R>KGFL=4eo0[_SsLIQ!}$k&bnPv7n2AuCQ#a');
define('LOGGED_IN_SALT',   '_g4.^&B[Q4Tyk:jWdj@sMqu}@1EfBtUzB[4{?aUW61t/6~L)V ;@<:DfSq s7oFi');
define('NONCE_SALT',       '1NRPI:3{Y!vE0Obbp2Ki@:wI]Ko~~b*Yo3qw5xJ~0YmHcg.;H~oeMhks~XUzkKAw');

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