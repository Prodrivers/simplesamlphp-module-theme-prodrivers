<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_lostpw}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<div class="text-center">
	<p><?php echo $this->t( 'lpw_success_para1' ); ?></p>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
