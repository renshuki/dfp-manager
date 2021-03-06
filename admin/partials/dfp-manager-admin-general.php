<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://fcbrossard.net/
 * @since      1.0.0
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/admin/partials
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <h1>DFP Manager - General Settings</h1>
    <form method="post" action="options.php" enctype="multipart/form-data">
      <?php settings_fields( 'dfp_manager_general_settings' ); ?>
      <?php do_settings_sections('dfp_section'); ?>
      <?php do_settings_sections('oauth_section'); ?>
      <?php do_settings_sections('soap_section'); ?>
      <?php do_settings_sections('proxy_section'); ?>
      <?php do_settings_sections('logging_section'); ?>
      <?= submit_button('Save Changes'); ?>
    </form>
</div>

<script type="text/javascript">
  jQuery("input[name*='dfp_manager_general_settings[installedapp_or_webapp]']").on('change', function() {
    if(this.checked) {
      jQuery("input[name*='dfp_manager_general_settings[client_id]']").closest('tr').show();
      jQuery("input[name*='dfp_manager_general_settings[client_secret]']").closest('tr').show();
      jQuery("input[name*='dfp_manager_general_settings[refresh_token]']").closest('tr').show();
    } else {
      jQuery("input[name*='dfp_manager_general_settings[client_id]']").closest('tr').hide();
      jQuery("input[name*='dfp_manager_general_settings[client_secret]']").closest('tr').hide();
      jQuery("input[name*='dfp_manager_general_settings[refresh_token]']").closest('tr').hide();
    }
  });
  jQuery("input[name*='dfp_manager_general_settings[installedapp_or_webapp]']").trigger('change');
</script>
