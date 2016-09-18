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

<?php $this->includeAtTemplateBase( 'includes/footer.lite.php' ); ?>