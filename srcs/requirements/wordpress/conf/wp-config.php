<?php

define( 'DB_NAME', '{DB_NAME}' );
define( 'DB_USER', '{USER_NAME_SQL}' );
define( 'DB_PASSWORD', '{USER_PSSWD_SQL}' );
define( 'DB_HOST', 'mariadb' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         '-oZ_nWcZ8%,CSAa^H)%RDu)[@InfkKL4[Yps++3B6urAA3ec+,A? RL/=]x$:_nS');
define('SECURE_AUTH_KEY',  '/aS}bM+Db1QUjb1=UU*i-~o-x_Wi0 Afv9c3H|hx$- pxuSw}7hQ0~Wz`Bk(MoQx');
define('LOGGED_IN_KEY',    'L_xJJl:q.YrRk-km/u%(r%Fi=s#=32~|da>zapflAAJiV)M4:.I$i(h;-{C||}fD');
define('NONCE_KEY',        '-2H3EdOWWn|aylq21YxDqG+u%Ts(ix-1?bRae7-Z*LwcS}_C$2L}z5|IVQY +&%<');
define('AUTH_SALT',        'ad8{w*HJz:5lZtCcgwPa<|lv63`-I4ky#SO.-=DJ$Zd2NyduVr[`*,/NmYd.]xOl');
define('SECURE_AUTH_SALT', '/5[}}s9Zc|6w,#K= fmoS<6.(B(3Ui&I=y2m!QxEu-2tSt2M{y&+-P5-l>U@fZ8O');
define('LOGGED_IN_SALT',   'uje?28D$]h=o-`.`n>SS@OVhjrem#-;-+g8[JLA[epmMf|K~J!1#b]hU=|kn*{d[');
define('NONCE_SALT',       ']vHH^&eSemluvK0hNF2A_Duvs[@E4+KT08]5`|lqh9*/upHUAK|Rtrl#S{j{P=2~');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
?>