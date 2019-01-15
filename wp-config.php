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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '*)gvJcx;^02t$/F/pL#1qXj-xT p)xh6ikSs9Sxmy*|mWGT_k/,+hPfI9fYL]OO1');
define('SECURE_AUTH_KEY',  '1bq;L7r;;+!6`K[C=gFu*,cw(2Bj(a:KItF|>AK|uC9,cO%FZ)_5a4r~rt03dD.V');
define('LOGGED_IN_KEY',    '+~ej:{-5a=SYkt}iS2,+|jku5lWheC2_rph)<^,P0LYMs,Z<aZ)=f]`@oHboL6C]');
define('NONCE_KEY',        'qEE@Ej?e&D^c Ends$^Z(%oIAbo}Z+<AjYE;?mnC%)K~GwM9C)-+G!SFBL%w<Hv+');
define('AUTH_SALT',        'C`pl>@q_pWei33p#8~Mf{81%2LLtscpR?(cO?! 6pt,s1IUy;r2lBVQCAn(V0K?U');
define('SECURE_AUTH_SALT', '|%[ERk#8RWiv!<v@s}meoEE&vpg4VPeuJ2_s9R2o0J02{Xn{&X7&BlYjP-` `,Bc');
define('LOGGED_IN_SALT',   '<)}.UV,c84TDZ|#7xmbyV](EvQZ4b0(6V/,aAJSuFq`iq8:|G*| %<:!rQ.t&H)B');
define('NONCE_SALT',       '}|C:T6;KfpeYzYd2xrwP+n4ntm Yaig@@2?H)iA#7va`4|:p#5rw=Ya4tRO#l)|T');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
