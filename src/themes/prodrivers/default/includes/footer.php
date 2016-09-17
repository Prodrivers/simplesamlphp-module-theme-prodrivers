<?php
/**
 * Footer template.
 *
 * The main footer template. This is used throughout the application.
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

<?php
// Output the post content items.
if( !empty( $this->data[ 'htmlinject' ][ 'htmlContentPost' ] ) ) :
	foreach( $this->data[ 'htmlinject' ][ 'htmlContentPost' ] as $content ) :
		echo $content;
	endforeach;
endif;
?>

		</div>
	</div>
</div>
<!-- end .content -->

<!-- start .site-footer -->
<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h5>© Prodrivers</h5>
			</div>
			<div class="col-sm-6 social-icons">
				<a href="https://twitter.com/ProdriversPark">
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

<script src="<?php echo $js_path; ?>/jquery.min.js"></script>
<script src="<?php echo $js_path; ?>/bootstrap.min.js"></script>
</body>
</html>
