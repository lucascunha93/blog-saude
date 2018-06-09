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
define('DB_NAME', 'blogsaude');

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
define('AUTH_KEY',         'kV>yw.YB=582s!}8mlyfj>wxZadj5,LrJl@*niM%2uIbSG,>in-.9+6zORLd7#.&');
define('SECURE_AUTH_KEY',  'u5[i )i]bo4_1SN~h9b[p#Ht&Q@nKzP!b)RirX.]_S+d#f:rQm,Kj5wTIYY?h}L!');
define('LOGGED_IN_KEY',    'oh4>@p+o+cj>WNm]`p}<6EN9F+~{GQeJ!c/nDt,:):X*mhx!/zFT{2KY9TVFtW%v');
define('NONCE_KEY',        '>8:t&nu]|SKXws4^MOs=,%h6xi>JF,Xh3|.lH=&w*HlrGHIl}_!l[[n<V5rFtoc3');
define('AUTH_SALT',        'w>**QyKp!p4U4aWoF2/@JY9;5/76tM oo|Z (T&i50_TFqMTELUH5MUlfkKrjGw#');
define('SECURE_AUTH_SALT', 'Lk~?{]g;1?I#dM%yK8R7-_gdiJ.`(UBCK68E AwofPVc+V)zDa)2T@N3jSAkvo.M');
define('LOGGED_IN_SALT',   'C>}XyXc-r!J=UP;Jh?IT n4,lqup~d(!,EO)i/[8E_oAB5;r-Hxv|DMixPqays p');
define('NONCE_SALT',       '2ps`vZvzE*yz<J-e b}cc/4F^M%U`:8PMQ5LSfmTNFgV|?Zy]CMe0-KXN%vo}sLI');

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
