<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_newuser}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<div class="text-center">
	<p><?php echo $this->t( 'new_mailUsed_para1', $this->data[ 'systemName' ] ); ?></p>
</div>

<div class="col-md-12">
	<ul class="nav nav-pills nav-stacked">
		<li><a href="newUser.php"><?php echo $this->t( 'link_newuser' ); ?></li>
		<li><a href="index.php"><?php echo $this->t( 'return' ); ?></a></li>
	</ul>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
