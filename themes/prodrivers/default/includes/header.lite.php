<?php
/**
 * Header (lite) template.
 *
 * The reduced header template. This is used throughout the application.
 *
 * @author     Cory Collier <corycollier@corycollier.com>
 * @license    http://opensource.org/licenses/MIT  MIT License
 * @version    git: $Id$
 * @link       https://github.com/corycollier/simplesamlphp-module-themes
 * @see        https://github.com/simplesamlphp/simplesamlphp/
 * @since      File available since Release 1.3.0
 */
?>
<?php
$dir = SimpleSAML_Module::getModuleDir( 'theme-prodrivers' );
require $dir . '/lib/functions.php';

// Define variables.
$url_path = SimpleSAML_Module::getModuleURL( 'theme-prodrivers' );
$css_path = $url_path . '/css';
$js_path  = $url_path . '/js';
$img_path = $url_path . '/img';
$language = $this->getLanguage();

$this->data[ 'isadmin' ] = (bool) SimpleSAML_Session::getSessionFromRequest()->getAuthState( 'admin' );

$login_url = isset( $this->data[ 'loginurl' ] )
	? $this->data[ 'loginurl' ]
	: '';

$title = isset( $this->data[ 'header' ] )
	? $this->data[ 'header' ]
	: 'SimpleSAMLphp';

$alert_msg = $this->data[ 'isadmin' ]
	? $this->t( '{core:frontpage:loggedin_as_admin}' )
	: '<a href="' . $login_url . '">' . $this->t( '{core:frontpage:login_as_admin}' ) . '</a>';

if( array_key_exists( 'pageid', $this->data ) ) :
	$hookinfo = array(
		'pre'    => &$this->data[ 'htmlinject' ][ 'htmlContentPre' ],
		'post'   => &$this->data[ 'htmlinject' ][ 'htmlContentPost' ],
		'head'   => &$this->data[ 'htmlinject' ][ 'htmlContentHead' ],
		'jquery' => &$jquery,
		'page'   => $this->data[ 'pageid' ]
	);
	SimpleSAML_Module::callHooks( 'htmlinject', $hookinfo );

endif;
?>

<!doctype html>
<html class="" lang="<?php echo $language; ?>">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="SAML Configuration" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!--[if lt IE 9]>
		<script src="//cdn.prodrivers.fr/file/prodrivers/js/html5shiv.js"></script>
		<script src="//cdn.prodrivers.fr/file/prodrivers/js/respond.min.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="//cdn.prodrivers.fr/file/prodrivers/site/icon.png" type="image/png" />

	<link rel="stylesheet" type="text/css" href="//cdn.prodrivers.fr/file/prodrivers/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/print.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>/screen.css"/>

	<!--[if IE]>
	<link href="<?php echo $css_path; ?>/ie.css" media="screen, projection" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<?php
	if( !empty( $this->data[ 'htmlinject' ][ 'htmlContentHead' ] ) ) :
		foreach( $this->data[ 'htmlinject' ][ 'htmlContentHead' ] as $content ) :
			echo $content;
		endforeach;
	endif;
	?>
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser.
	Please <a href="http://browsehappy.com/">upgrade your browser</a> to
	improve your experience.</p>
<![endif]-->

<!-- start .header -->
<div class="header">
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
				        data-target="#navbar-main" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="#">
					<img src="//cdn.prodrivers.fr/file/prodrivers/site/logo.png" alt="Prodrivers" />
				</a>
			</div>
			<nav class="navbar-collapse collapse" id="navbar-main">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/">Accueil</a></li>
					<li><a href="/#contents">Contenus</a></li>
					<li><a href="/#members">Membres</a></li>
					<li><a href="/#follow">Nous suivre</a></li>
					<li><a href="https://account.prodrivers.fr/">Compte</a></li>
				</ul>
			</nav>
		</div>
	</nav>
</div>

