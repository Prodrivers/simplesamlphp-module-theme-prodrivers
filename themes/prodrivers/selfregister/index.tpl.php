<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_panel}' );

$this->includeAtTemplateBase( 'includes/header.php' );

if( isset( $this->data[ 'userMessage' ] ) ) { ?>
	<div class="col-md-12">
		<div class="alert alert-success" role="alert">
			<p><?php echo $this->t( $this->data[ 'userMessage' ] ); ?></p>
		</div>
	</div>
<?php } ?>

<div class="col-md-12">
	<ul class="nav nav-pills nav-stacked">
		<?php
		foreach( $this->data[ 'links' ] AS $link ) {
			echo '<li><a href="' . htmlspecialchars( $link[ 'href' ] ) . '">' . $this->t( $link[ 'text' ] ) . '</a>';
			if( isset( $link[ 'extra_text' ] ) ) {
				echo $link[ 'extra_text' ];
			}
			echo '</li>';
		}
		?>
	</ul>
</div>

<?php
$this->includeAtTemplateBase( 'includes/footer.php' );
?>
