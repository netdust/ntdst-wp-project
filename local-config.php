<?php

// ** Development Server - MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sample.local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+lLbQDpl*L~foi4FoS+V<4-}EWWopH&U^rWL],FNtL9ep,6){JcrM+)5kX3[5+~)');
define('SECURE_AUTH_KEY',  '^NZq?Q>xd|1m?TeXAksu;CX-nS1 jQAyvc,+P|&n/_(+X%Sh6+]-fRd|L9c^mTUw');
define('LOGGED_IN_KEY',    'y^VUH2]C<|iCyt)fM}#BI}L+&B+Y!rVzY+-LR=k[e9JS=.E<1k{(D]-h$>aga^lh');
define('NONCE_KEY',        'X|pHuN%DSXUqUEeZ&Sf<#N8@+C(mk*~}.pHpe~GM8,El^>4*Q*DmK-raM8iQl}e{');
define('AUTH_SALT',        'QZ&h0XJClwGX{EK2s>K{MsHZiKcg R7aa|#~+:i!?64LTlN5ughQ,:vRhu)rVl@2');
define('SECURE_AUTH_SALT', ':Sw]7JC<Ay#o$b<7-D[+@O|)Kxwl&%Lm93xq7AE+_h|ha9(Sl-^m.`M&||^/EdRd');
define('LOGGED_IN_SALT',   'h,05eum$yeaz=6>k&a1L?V&#szkHa;qCDh#IE-MQPy-9Q%@:x`gkj0(~I; g-OR|');
define('NONCE_SALT',       'Wo2l;M|?>^[)z,[et6(,o1.)weG>|Si7!2},R.]%/JHajr+|nIdqs*2W$~5HfG|T');