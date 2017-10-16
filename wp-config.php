<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wpdb_excld65');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'excld65');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'hDDMCUEB');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '0PT-)M3r-Z8{rX&uko5lX{ H]+NZT_Y&6n3!.9;0hl94>oyV]AF567X,<,A+c-#T');
define('SECURE_AUTH_KEY',  '>O7p,B5.+ISob=0l}#dQ1y{J0>fSeXoU@!el(+&sVc7J#uanww-3Sw4%a,!2q/[p');
define('LOGGED_IN_KEY',    '/`Gmhp;A(o|$m/KN,qfJ+jB2( ,g<Z2Z YM#wecQ-Zn3moqUJ~j0|{Uj(nP&*_}%');
define('NONCE_KEY',        '!:{1_x|24noEn#.3S;Goq)Wy1YScCkoT-j3+Zvh:=f%[Q1e(b~E!d:FBr_+rx+&L');
define('AUTH_SALT',        '.R#|HX!+lP a%|WC$=719,nz^+eIo`j r]DWiBiU.L2Q,~j{n!FwT62AzxNcFEeY');
define('SECURE_AUTH_SALT', 'Gv]%S?XR[c.H+pf?QI*C >x~}3@cL|$yQ|TZE%X*E UjDPg]j|5M~,?7CJMO)z2p');
define('LOGGED_IN_SALT',   'y-KrcUba^QO[[Dsmlwu$|3.1_Uvm3n|[H>lv0m7o0tuD)qm/; /+uV:I*Jx/LG$M');
define('NONCE_SALT',       '*qvAl-+EdF@0_2SCv@EdkV#3Gz{TQ.[{1rMF:#s];anVLG>P/xt|.^H30(ld@W7]');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'khmf_';


/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

#define('WP_ALLOW_MULTISITE', true);
define('FORCE_SSL_ADMIN', true);
#define('WP_CACHE', true);

define('FTP_HOST', 'localhost');
define('FTP_USER', 'kusanagi');
define('FTP_PASS', 'hDDMCUEB');
define('FS_METHOD', 'ftpsockets');

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
