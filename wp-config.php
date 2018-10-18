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
define('DB_NAME', 'eprojet');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/N%gpu0+B?ja:Eh=nM=kS5jsCj/!{$fNsLkB&~/[;{ny<]4w9!MN.AyN{xs|bo`,');
define('SECURE_AUTH_KEY',  'u[W233P~UvtO)Wn(I@aBOCM/v(NOAakP4rx%;f/xkj&*wm(z!RFQ@1)H<Fg$n6vw');
define('LOGGED_IN_KEY',    'ip`q8{h2uKrz/ceH1b{}j#aVc3ztE1!i4W93d?7bZ~l&w/w7!H5x0)(%+%+os$l]');
define('NONCE_KEY',        ' 3H..ol(*mz8B:<}3lkMZ:?sYT22BwsnUtK&3O^]+enH;UY%g]c&+I~Ab|YX;c/!');
define('AUTH_SALT',        '2IN5WAQ=UsTgzV-pxA9Ly`}62^tj(&5B8<g7Eq`gn*+tr@]aYgWcpz~&]STQXAS<');
define('SECURE_AUTH_SALT', '1_GZX*h|XbYhgBJZqCs>Q>)?!nLV=v?/Og^QI<jES<doO|uQ{I,!A.0Vfo,L&r]L');
define('LOGGED_IN_SALT',   'B.PjM&Rg28ic0tLO]rW=,w[cF7zRpAR$TX77Q| $[:@ITMN)a?6{o%8&y1S:5bCe');
define('NONCE_SALT',       '6$t<*4La8SpK|g}w+e3=Lw8@},j]jjul>D+pHms0fR7*15]2B?mU+:,AP`48nw#~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'eprojet_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');