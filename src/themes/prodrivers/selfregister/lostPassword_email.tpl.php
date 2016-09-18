<?php

$this->data[ 'header' ] = $this->t( '{selfregister:selfregister:link_lostpw}' );

$this->includeAtTemplateBase( 'includes/header.php' ); ?>

<?php if( isset( $this->data[ 'error' ] ) ) { ?>
	<div class="col-md-12">
		<div class="alert alert-danger" role="alert">
			<p><?php echo $this->data[ 'error' ]; ?></p>
		</div>
	</div>
<?php } ?>

<form method="post" action="lostPassword.php" class="form-horizontal">
	<fieldset>
		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<p><?php echo $this->t( 'lpw_para1' ); ?></p>
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-lg-2 control-label">
				E-mail
			</label>
			<div class="col-lg-10">
				<input type="text" class="form-control" size="50" name="emailreg" value="<?php
				if( isset( $this->data[ 'email' ] ) ) {
					echo htmlspecialchars( $this->data[ 'email' ] );
				}
				?>"/>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<p><?php echo $this->t( 'lpw_para2' ); ?></p>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-10 col-lg-offset-2">
				<input type="submit" name="save" class="btn btn-primary" value="<?php echo $this->t( 'submit_mail' ); ?>"/>
			</div>
		</div>
	</fieldset>
</form>

<?php $this->includeAtTemplateBase( 'includes/footer.php' ); ?>
