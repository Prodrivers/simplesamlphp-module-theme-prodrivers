<?php
$this->data[ 'header' ] = $this->t( '{multiauth:multiauth:select_source_header}' );

$this->includeAtTemplateBase( 'includes/header.lite.php' );
?>

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
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $this->t( '{multiauth:multiauth:select_source_header}' ); ?></h3>
				</div>

				<div class="panel-body">
					<p class="logintext">
						<?php echo $this->t( '{multiauth:multiauth:select_source_text}' ); ?>
					</p>

					<form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="get">
						<input type="hidden" name="AuthState" value="<?php echo htmlspecialchars( $this->data[ 'authstate' ] ); ?>" />
						<fieldset>
							<?php
								foreach( $this->data[ 'sources' ] as $source ) {
									$css_class = htmlspecialchars( $source[ 'css_class' ] );
									$preferred = ( $source['source'] === 'prodrivers-account' );
									if( $preferred ) { // $this->data[ 'preferred' ]
										$autofocus = ' autofocus="autofocus"';
										$btn_css_class = ' btn-primary';
										$icon = 'envelope-o';
									} else {
										$autofocus = '';
										$btn_css_class = ' btn-xs';
										$icon = $css_class;
									}
									$name = 'src-' . base64_encode($source['source']);
									?>
									<div class="form-group">
										<?php echo '<button type="submit" name="' . htmlspecialchars( $name ) . '"' . $autofocus . ' ' . 'id="button-' . htmlspecialchars( $source[ 'source' ] ) . '" ' . '" class="btn auth ' . $css_class . $btn_css_class . '"><i class="fa fa-' . $icon . '" aria-hidden="true"></i>'. htmlspecialchars( $this->t( $source[ 'text' ] ) ) . '</button>'; ?>
									</div>
									<?php
										if( $preferred && ( count( $this->data[ 'sources' ] ) > 1 ) ) {
											?>
												<div class="form-group">
													<hr />
												</div>
											<?php
										}
									?>
									<?php
								}
							?>
							<div class="form-group">
								<hr />
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" value="true"> Se souvenir de mon choix
								</label>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->includeAtTemplateBase( 'includes/footer.lite.php' ); ?>