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
// Variable assignment.
$this->data[ 'header' ] = $this->t( '{login:user_pass_header}' );
$errorcode              = $this->data[ 'errorcode' ];
$errorparams            = $this->data[ 'errorparams' ];
?>
<?php $this->includeAtTemplateBase( 'includes/header.lite.php' ); ?>

<style>
	body {
		background: url(/files/bg.jpg);
		background-attachment: fixed;
		background-position: center top;
		background-size: cover;
	}

	.header,
	.navbar,
	.site-footer {
		background: transparent!important;
	}
</style>

<div class="login container">
	<?php
	if( !empty( $this->data[ 'htmlinject' ][ 'htmlContentPre' ] ) ) :
		foreach( $this->data[ 'htmlinject' ][ 'htmlContentPre' ] as $content ) :
			echo $content;
		endforeach;
	endif;
	?>
	<div class="row">
		<?php if( $errorcode !== null ) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<h2><?php echo $this->t( '{login:error_header}' ); ?></h2>
					<p><?php echo htmlspecialchars( $this->t( '{errors:title_' . $errorcode . '}', $errorparams ) ); ?></p>
					<p><?php echo htmlspecialchars( $this->t( '{errors:descr_' . $errorcode . '}', $errorparams ) ); ?></p>
				</div>
			</div>
		<?php endif; ?>

		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $this->t( '{login:user_pass_header}' ); ?></h3>
				</div>

				<div class="panel-body">
					<p class="logintext">
						<?php echo $this->t( '{login:user_pass_text}' ); ?>
					</p>

					<form action="?" method="post" name="f" class="form-horizontal">
						<div class="form-group">
							<label for="username" class="col-lg-2 control-label">
								<?php echo $this->t( '{login:username}' ); ?>
							</label>
							<div class="col-lg-10">
								<input type="text" id="username"
								       tabindex="1"
								       name="username"
								       value="<?php echo htmlspecialchars( $this->data[ 'username' ] ); ?>"
								       class="form-control"
								/>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="col-lg-2 control-label">
								<?php echo $this->t( '{login:password}' ); ?>
							</label>
							<div class="col-lg-10">
								<input type="password" id="password"
								       tabindex="2"
								       name="password"
								       class="form-control"/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="submit" class="btn btn-primary"><?php echo $this->t( '{login:login_button}' ); ?></button>
							</div>
						</div>

						<?php foreach( $this->data[ 'stateparams' ] as $name => $value ) : ?>
							<input type="hidden"
							       name="<?php echo htmlspecialchars( $name ); ?>"
							       value="<?php echo htmlspecialchars( $value ); ?>"/>
						<?php endforeach; ?>

					</form>
				</div>

				<div class="panel-footer">
					<ul class="nav nav-pills">
						<li>
							<a href="<?php echo SimpleSAML_Module::getModuleURL( 'selfregister' ); ?>/newUser.php"><?php echo $this->t( '{selfregister:selfregister:link_newuser}' ); ?></a>
						</li>
						<li>
							<a href="<?php echo SimpleSAML_Module::getModuleURL( 'selfregister' ); ?>/lostPassword.php"><?php echo $this->t( '{selfregister:selfregister:link_lostpw}' ); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.lite.php' ); ?>
