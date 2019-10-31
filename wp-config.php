<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'youd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a4`ag?,k|G71{Z Wi8OlqSIsaD-@F(|nNi8P-]v.6=EryYK3vw~tTw}h.Gjr=zO7' );
define( 'SECURE_AUTH_KEY',  'lT,Fo,^#M{,PJ6~l5xE/4`W?Y/n|Zlbu8szwN+($.6%D$p|YsFuVimfBOfP[vBfZ' );
define( 'LOGGED_IN_KEY',    'k-}F$d&s~hB1%_A:]q^C6gfT*14J@vXWnE$@d>ON[1?_;=+t&e_c*nl]w#K}1P4G' );
define( 'NONCE_KEY',        'R6.:|`elT@|zsN)Qo2$0TG*L$HnOO4/aWrR+EM6i[kjA?;e$/9m)eKC>03H@=Pya' );
define( 'AUTH_SALT',        '<]oDx _C}vI;s+&7<#Y7Rz>Jqknw2ur6qwXl$s]xA%hIHC~?pQr7fHpq%A#n%|gV' );
define( 'SECURE_AUTH_SALT', 'T[s>{$;/3OmPRFFygQyP:VyQ%y@iz?BscU!UhU5rb:0V9<n!{FR~mV-&(11+RpIY' );
define( 'LOGGED_IN_SALT',   'w$aWI)-AlSv5eWZgQZz).=1bV3Psr1B_ES0DPucwu*Q90F#);K9H; 6I`_e}M)?J' );
define( 'NONCE_SALT',       '*R,Vg?F,DRM69p`t,@eHfl1W]TLDwD:`CRzH~y@qW,_%ViDXfJY57Ef<_OfD/%Lz' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
