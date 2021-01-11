<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y#jo$WW-pWugWi)pl6)xj.t$v#2CPB2I-g`!aMW:$~,e.Jg1hw@#hIcCy@AobxL%' );
define( 'SECURE_AUTH_KEY',  ')@5sSyEY#,5y*^Dz4M/<9t^VpBulMe~FG*%Ne=IcKz@F!`},dgVa<v.S}9A>?_[b' );
define( 'LOGGED_IN_KEY',    '*9#kLG?DdV*=`=;^HlSve[zc+1UX]VOs^%(#Y=m/zS+4o(^_:DO^zM8<rF7#K]0V' );
define( 'NONCE_KEY',        'E$V:ZA`zP9,L=t;ys2pBfrf!3T!2/OOz]Hx+VZ4.;0zl2e@$Z%/LMTz%1&*tQKEy' );
define( 'AUTH_SALT',        'zBwufhUdNTG*VO b$1H5Z9)$vdOs`9F1PGtIivY7tXaQd3.hArJO,DLzpIwS*fu{' );
define( 'SECURE_AUTH_SALT', 'I4C_W3#~kd*3-wiiH#/xw0^;X.oUP{+Wlz@YS*g4|s&y;kks7nlu^]M1<xU|~3x(' );
define( 'LOGGED_IN_SALT',   '*,Q8oAhrnQ$U|HcX:55aW|~E$%$~ICUPQ+zW*!_^.QX_>-#jo Q_#[]Aw>hM^T3B' );
define( 'NONCE_SALT',       '$ K=E|u^3#Em|l0QCZ~ssw~&OO/sBTx/Cks`,{e@[pmWVw_a/Z+JfB?CK_K;rW>[' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
