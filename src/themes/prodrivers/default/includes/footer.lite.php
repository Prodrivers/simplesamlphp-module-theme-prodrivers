<?php
/**
 * Footer (lite) template.
 *
 * The reduced footer template. This is used throughout the application.
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
// Define variables.
$url_path = SimpleSAML_Module::getModuleURL( 'theme-prodrivers' );
$css_path = $url_path . '/css';
$js_path  = $url_path . '/js';
$img_path = $url_path . '/img';
?>

<!-- start .site-footer -->
<footer class="site">
	<div class="container">
		<div class="infos row">
			<div class="col-sm-6">
				<ul class="nav nav-pills">
					<li role="presentation">
						<a href="https://prodrivers.fr/legal">Mentions légales</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Langue <span class="caret"></span></a>
						<?php
						echo simplesamlphp_get_languagebar( $this, array(
							'post'                  => $_POST,
							'languageParameterName' => $this->languageParameterName,
						) );
						?>
					</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<div>
					<p class="text-center">
						<a href="https://prodrivers.fr/"><img alt="Informations sur Prodrivers" src="//cdn.prodrivers.fr/file/prodrivers/site/logo.png"/></a>
					</p>
					<p class="text-center">
						<strong>Prodrivers</strong> est un collectif de passionnés dédié au divertissement.
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h5>&copy; Prodrivers</h5>
			</div>
			<div class="col-sm-6 social-icons">
				<a href="https://prodrivers.fr/#follow">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCZXSz81L1XqkfSFy1X9WYPA">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>
	</div>
</footer>
<!-- end .site-footer -->

<script src="//cdn.prodrivers.fr/file/prodrivers/js/jquery.js"></script>
<script src="//cdn.prodrivers.fr/file/prodrivers/js/bootstrap.js"></script>
</body>
</html>
