<?php

$ad_units_prefix = get_option('ad_units_prefix');
$ad_units_include_post_type = get_option('ad_units_include_post_type');

?>

<div class="wrap">
  <h1>DFP Manager - Advanced Settings</h1>
  <form method="post" action="options.php">
    <?php settings_fields( 'dfp_manager_advanced_settings' ); ?>
    <h2 class="title">Ad Units Code</h2>
    <table class="form-table">
      <tbody>
        <tr>
          <th scope="row"><label for="ad_units_prefix">Ad Units Prefix</label></th>
          <td><input type="text" name="ad_units_prefix" id="ad_units_prefix" class="small-text" value="<?= isset($ad_units_prefix) ? esc_attr($ad_units_prefix) : ''; ?>"></td>
        </tr>
        <tr>
          <th scope="row"><label for="ad_units_include_post_type">Include "Post type"</label></th>
          <td><input type="checkbox" name="ad_units_include_post_type" id="ad_units_include_post_type" value="1" <?php checked('1', $ad_units_include_post_type); ?> ></td>
        </tr>
        <tr>
          <th><label>Result</label></th>
          <?php 
          $latest_post = get_posts(array('numberposts' => 1));
          $prefix      = isset($ad_units_prefix) ? esc_attr($ad_units_prefix) : '';
          $post_id     = $latest_post[0]->ID;
          $post_type   = !empty($ad_units_include_post_type) ? '_'.$latest_post[0]->post_type : '';
          ?>
          <td>
            <?= $prefix . $post_id . $post_type; ?>
            <p class="description">(This is an example)</p>
          </td>
        </tr>
      </tbody>
    </table>
    <?= submit_button('Save Changes'); ?>
  </form>
</div>