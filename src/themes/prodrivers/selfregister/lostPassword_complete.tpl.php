<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_changepw}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<div class="text-center">
	<p><?php echo $this->t( 'lpw_complete_para1' ) ?></p>
</div>

<div class="col-md-12">
	<ul class="nav nav-pills nav-stacked">
		<li><a href="reviewUser.php"><?php echo $this->t( 'link_review' ) ?></a></li>
		<li><a href="index.php"><?php echo $this->t( 'return' ); ?></a></li>
	</ul>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
