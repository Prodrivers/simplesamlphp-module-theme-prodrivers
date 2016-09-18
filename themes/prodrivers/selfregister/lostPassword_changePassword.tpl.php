<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_changepw}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<?php if( isset( $this->data[ 'error' ] ) ) { ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<p><?php echo $this->data[ 'error' ]; ?></p>
		</div>
	</div>
<?php } ?>

<div class="col-md-12">
	<div class="col-lg-10 col-lg-offset-2">
		<p><?php echo $this->t( 'lpw_reg_para1', array( '%UID%' => $this->data[ 'uid' ] ) ); ?></p>
	</div>

	<?php print $this->data[ 'formHtml' ]; ?>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
