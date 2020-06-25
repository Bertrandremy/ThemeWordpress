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
define( 'AUTH_KEY',         '(g8}K{sh&f.e.D:dfv+ V|C1}SXV%d5P6wi(=21ejz[(PnV&9?1CftD>+i5@0Sn6' );
define( 'SECURE_AUTH_KEY',  'F~iwWKM[r-`Uv7vri,[pA6`XMHP).RQi~eq-nR#^-X: LIOHeM#p$(Me`EVZa[WZ' );
define( 'LOGGED_IN_KEY',    'w-^`3a[;S=<FSrov`=k/8{H_cW/p9y,G/~6< Lcz@[8WbxdPsWxzQdgm/8hF^}hp' );
define( 'NONCE_KEY',        ' v/h}6 Nz@@`xtAzJn$WQy{1fAhX$E??Tw)i|u#~$lz!-t2{~K(5Ty3p9-5D:+{H' );
define( 'AUTH_SALT',        'XI5ka#GO83D6Ob2V4$Bs*gI8d.i61(FZ+6zjtip^CKX3_ioxRdb%P91PRZ!@JX}@' );
define( 'SECURE_AUTH_SALT', 'N>bI$.,rr*NBX{p3lhix^+&x@|~W(!5P_:oC#_ILw )t5WfNuTQv1c,?+X7tY/6R' );
define( 'LOGGED_IN_SALT',   'N.<hdc9m9uENR(r>_cbZx=kQ93@TGCYZ-YfWU<xL11#;6YVLuK)YTSopZ61{}4pm' );
define( 'NONCE_SALT',       'c$6k&Vv-g9*jNNsRh@Exx}B5?6pB=g@C(yOZ4j~fk9E7F|7%bnT-GsIx-E!szO[1' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
