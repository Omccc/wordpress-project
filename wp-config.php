<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress-project' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',&ma ,w_$`G<4/wKpMI=fRpRY|4~ynhEUFMCo|lj[H%d+Km:+z]QWMVm_a  y|F:' );
define( 'SECURE_AUTH_KEY',  'cmx|8Pi,nF;)G8F_bsF@i~|k/v.~>.F.sS,tip!B-9(1#9$2uuc sB!8$<^?Xn{q' );
define( 'LOGGED_IN_KEY',    'M~uOHSeLy?l{y!|GqEU-vA( iIefX>]LDt,_+rlRU=qTXC_)AiEBuR<D*bw}7i;I' );
define( 'NONCE_KEY',        '}m&uRSSnB>g@0LD#TPuWhdEzLj#^gz36BWiA~:@uD:zf$AAv2cG*xY9lLJE99kS*' );
define( 'AUTH_SALT',        '&7=,C+;vP%SbW8$l`5}P3XfO,i3I&5n&2[p={~dFjGHYm>cay3)n+uun>7b=2Y5]' );
define( 'SECURE_AUTH_SALT', 'GT)a=#AHn{QSjv1oa$;nl)lQh&MjC|s,2%!;!A7#bn]{4LgPF*x+.@~5>B}(QM{$' );
define( 'LOGGED_IN_SALT',   '3YX|5Qr7zT`#HX!4]r)^jKb#]TfRqa!=%A9VEF(.)7*M=}ld7d6myF:#C43qJr+J' );
define( 'NONCE_SALT',       'dHMX]c@@8Q|s6{N`VO#?vAcO!s)P:bCkIH-nhZ)CSfabOC!wdgV{ja%t/=+]E03%' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'H4lok_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
