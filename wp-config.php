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
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'pC65Uvvc ^c[5Av, yEs_Pn#Ux1XXQ>ZlPbeK{;aN=x<qf83pm: J>GqZMcB?Hpo' );
define( 'SECURE_AUTH_KEY',  'F!B6W#/#Qcc{r_E&67xO5G.Iph>x$YUZXS5*>t~Lk6<QV?+8Sp)x^QHG&[0u1~J&' );
define( 'LOGGED_IN_KEY',    '}RSei__U69[dfCU|S=MivAz|s(>H?:*1cHFBXg0U-aR@I:h*<#b&^ &{=xN@uEq#' );
define( 'NONCE_KEY',        '^:OD|*F?o0R8nUvDO8B!^G8vE3}:o&.7-f]ydWoJD(/D7aE8KSWAu^;E,%mtTmnX' );
define( 'AUTH_SALT',        'i38]j:}d9)V;<HS}3^JPj QJ-h=h!wzXaR JF?`@#I uO6~T2d4+(ZON2qy#7=rT' );
define( 'SECURE_AUTH_SALT', ']D]PqWH-NT}Wi9zM8I];g6o2%KX)&YqV8|C>H{RW@N$w1LGvC9^* |BEWv:tpe]7' );
define( 'LOGGED_IN_SALT',   'Edv/b^3$=igj7)@/ YvB$_bfU^@hMgb8-R|@DjO?N`+`PV)j&DrV9w^qSRc?s{Ga' );
define( 'NONCE_SALT',       'zV%]7H1|RiG)J0XKk4yL~w8Wyn:zTRa;]3,#K7v{=$$DtjA9$PY@S7CQNxp{NpZ ' );
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
