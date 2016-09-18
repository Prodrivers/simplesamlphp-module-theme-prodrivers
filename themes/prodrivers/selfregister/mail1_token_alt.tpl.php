<h1><?php echo $this->t( 'mailNew_header', $this->data[ 'systemName' ] ); ?></h1>

<p><?php echo $this->t( 'mailNew_mailintro', $this->data[ 'systemName' ] ); ?></p>

<p><?php echo $this->t( 'mailNew_urlintro', $this->data[ 'systemName' ] ); ?></p>
<p><tt><a href="<?php echo $this->data[ 'registerurl' ]; ?>"><?php echo $this->data[ 'registerurl' ]; ?></a></tt></p>

<p><?php echo $this->t( 'mail_tokeninfo' ); ?></p>