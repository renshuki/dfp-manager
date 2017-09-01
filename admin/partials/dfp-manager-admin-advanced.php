<div class="wrap">
  <h1>DFP Manager - Advanced Settings</h1>
  <form method="post" action="options.php">
    <?php settings_fields( 'dfp_manager_advanced_settings' ); ?>
    <?php do_settings_sections('adunits_section'); ?>
    <?php do_settings_sections('adslots_section'); ?>
    <?= submit_button('Save Changes'); ?>
  </form>
</div>