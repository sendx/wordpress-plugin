<div class="wrap">
  <div id="icon-options-sendx" class="icon32"><br></div>
  <h2>Sendx Settings
    <a href="http://sendx.io?utm_source=wp-plugin&utm_medium=link&utm_campaign=dashboard-header" class="sendx-visit" target="_blank">Take a Tour</a>
    <a href="http://help.sendx.io/help_center" class="sendx-visit" target="_blank">Contact Us</a>
  </h2>
  <?php if ( ! $this->account_id() ) { ?>
    <div class="sendx-settings-banner sendx-clearfix">
      <h3>Create a Sendx Account
	<span class="sendx-popdown">
	  <a href="#">Already have an account?</a>
	  <div class="message">Enter your Sendx Team ID in the form below to install your tracking script.</div>
	</span>
      </h3>
      <p><a href="https://sendx.io/?utm_source=wp-plugin&utm_medium=link&utm_campaign=dashboard1" target="_blank">Sendx</a> is a lightweight marketing automation platform which provides you tools to grow your web business.</p>
      <a href="https://sendx.io/?utm_source=wp-plugin&utm_medium=link&utm_campaign=dashboard2" class="sendx-button" target="_blank">Sign Up Here</a>
      <p class="sendx-closer"><!-- [closer text tbd] --></p>
    </div>
  <?php } ?>
  <form name="sendx-settings-form" method="post" action="options.php">
    <?php settings_fields( 'sendx_options' ); ?>
    <?php do_settings_sections( 'sendx' ); ?>
    <?php submit_button(); ?>
  </form>
</div>
