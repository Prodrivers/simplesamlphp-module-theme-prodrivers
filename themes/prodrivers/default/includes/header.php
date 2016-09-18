<?php
/**
 * Header template.
 *
 * The main header template. This is used throughout the application.
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
$this->includeAtTemplateBase( 'includes/header.lite.php' );

$title = isset( $this->data[ 'header' ] )
	? $this->data[ 'header' ]
	: 'SimpleSAMLphp';
?>

<!-- start the .content -->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="page-header col-md-12">
				<h1 class="mainTitle"><?php echo $title; ?></h1>
			</div>
		</div>
	</div>

	<div class="container">
		<?php
		if( !empty( $this->data[ 'htmlinject' ][ 'htmlContentPre' ] ) ) :
			foreach( $this->data[ 'htmlinject' ][ 'htmlContentPre' ] as $content ) :
				echo $content;
			endforeach;
		endif;
		?>
		<div class="row">
