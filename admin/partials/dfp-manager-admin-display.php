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

$setting = get_option('dfp_api_key');

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <h1>DFP Manager</h1>
    <form method="post" action="options.php">
      <?php settings_fields( 'dfp_manager_settings' ); ?>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="dfp_api_key">DFP API Key</label></th>
            <td><input type="text" name="dfp_api_key" id="dfp_api_key" value="<?= isset($setting) ? esc_attr($setting) : ''; ?>" class="regular-text"></td>
          </tr>
        </tbody>
      </table>
      <?= submit_button('Save Changes'); ?>
    </form>
</div>
