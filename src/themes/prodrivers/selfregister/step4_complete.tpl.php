<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_newuser}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<div class="text-center">
	<p><?php echo $this->t( 'new_complete_para1', $this->data[ 'systemName' ] ); ?></p>
</div>

<div class="col-md-12">
	<ul class="nav nav-pills nav-stacked">
		<li><a href="reviewUser.php"><?php echo $this->t( 'link_review' ); ?></a></li>
		<li><a href="lostPassword.php"><?php echo $this->t( 'link_lostpw' ); ?></li>
		<li><a href="changePassword.php"><?php echo $this->t( 'link_changepw' ); ?></li>
		<li><a href="delUser.php"><?php echo $this->t( 'link_deluser' ); ?></li>
	</ul>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
