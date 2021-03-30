<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'developer-teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v|ACXm ~9[p58Gn=>2r# vpO>P60//LYR,?2-PSw,)LwP|YT!y2$5d#mTgd|Ap1Q' );
define( 'SECURE_AUTH_KEY',  's&gnV|C}/>Tr~0qsAvw.r=a=u6Gd%i`Xk&9TK:<}du[*_u5LHqL{@k3Kc,@QJ~bS' );
define( 'LOGGED_IN_KEY',    'xg=lh#KLv3rp`}t]k>%~!up`1ev>|&*yT0 %]tIWY^;LSzb9<RV*09_&9g AvG;K' );
define( 'NONCE_KEY',        '^T+vHQ/5?fNY~$#*G7=mb#*b+$&QV]9pMGuuWGuP Ean8tijUT3asBUMk8;.BUB%' );
define( 'AUTH_SALT',        'fZ+!C-%KbaKdIqyf5c4K;>EVSy}gYBh-@Dd1?vNPKk*8L6al]9gbn?%TRoyf!ppC' );
define( 'SECURE_AUTH_SALT', 'Ail <(ox}Zv2S.02WD 5^}i9n+V8TWQCaZXeNv#+aK4(<}@2BKWRW*FwWf-5?~6n' );
define( 'LOGGED_IN_SALT',   ';S-)FQ!/yKF~^k[`0?p:VX~4F%Y|>3v|GP}t%@?7#.5PQk+Md{MDJ<dc+7(A:dK*' );
define( 'NONCE_SALT',       'ke!ZFBF-;J&t%!uVD+c@RQofY6QH(PoeI+`iF59}v5-:c-Ba#;o*{kGkBB1iKY<k' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'dev_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
