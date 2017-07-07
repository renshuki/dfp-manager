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

// DFP
$network_code = get_option('network_code');
$application_name = get_option('application_name');
$endpoint = get_option('endpoint');

// OAUTH2
$api_key = get_option('api_key');
$scopes = get_option('scopes');
$impersonated_email = get_option('impersonated_email');
$installedapp_or_webapp = get_option('installedapp_or_webapp');
$client_id = get_option('client_id');
$client_secret = get_option('client_secret');
$refresh_token = get_option('refresh_token');

// SOAP
$compression_level = get_option('compression_level');
$wsdl_cache = get_option('wsdl_cache');

// PROXY
$proxy_host = get_option('proxy_host');
$proxy_port = get_option('proxy_port');
$proxy_user = get_option('proxy_user');
$proxy_password = get_option('proxy_password');

// LOGGING
$log_path = get_option('log_path');
$log_level = get_option('log_level');
$rd_log_path = get_option('rd_log_path');
$rd_log_level = get_option('rd_log_level');

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <h1>DFP Manager - General Settings</h1>
    <form method="post" action="options.php" enctype="multipart/form-data">
      <?php settings_fields( 'dfp_manager_general_settings' ); ?>
      <h2 class="title">DFP</h2>
      <p>Required DFP API properties. <br/>Details can be found at: <a href="https://developers.google.com/doubleclick-publishers/docs/soap_xml">https://developers.google.com/doubleclick-publishers/docs/soap_xml</a></p>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="network_code">Network Code</label></th>
            <td><input type="text" name="network_code" id="network_code" class="regular-text" value="<?= isset($network_code) ? esc_attr($network_code) : ''; ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="application_name">Application Name</label></th>
            <td><input type="text" name="application_name" id="application_name" class="regular-text" value="<?= isset($application_name) ? esc_attr($application_name) : ''; ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="endpoint">Endpoint</label></th>
            <td>
              <input type="text" name="endpoint" id="endpoint" class="regular-text" value="<?= isset($endpoint) ? esc_attr($endpoint) : ''; ?>">
              <span class="description">(Optional)</span>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>OAUTH2</h2>
      <p>Required OAuth2 credentials. <br/>See the README for guidance: <a href="https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started">https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started</a></p>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="api_key">DFP API Key (JSON)</label></th>
            <td>
              <input type="file" name="api_key" id="api_key" />
              <?php echo $api_key['api_key']; ?>
            </td>
          </tr>
          <tr>
            <th scope="row"><label for="scopes">Scopes</label></th>
            <td><input type="text" name="scopes" id="scopes" class="regular-text" value="<?= !empty($scopes) ? esc_attr($scopes) : 'https://www.googleapis.com/auth/dfp'; ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="impersonated_email">Impersonated Email</label></th>
            <td>
              <input type="text" name="impersonated_email" id="impersonated_email" class="regular-text" value="<?= isset($impersonated_email) ? esc_attr($impersonated_email) : ''; ?>">
              <span class="description">(Optional)</span>
            </td>
          </tr>
          <tr>
            <th scope="row"><label>Installed Application or Web Application flow</label></th>
            <td>
              <input type="checkbox" name="installedapp_or_webapp" id="installedapp_or_webapp" value="1" <?php checked('1', $installedapp_or_webapp); ?> >
              <label for="installedapp_or_webapp">Enable</label>
            </td>
          </tr>
          <tr class="installedapp_or_webapp_settings <?php echo( empty($installedapp_or_webapp) ? 'hide-if-js' : '' ); ?>">
            <th scope="row">OAUTH2 Credentials</th>
            <td>
              <fieldset>
                <label for="client_id">Client ID</label>
                <input type="text" name="client_id" id="client_id" class="regular-text" value="<?= isset($client_id) ? esc_attr($client_id) : ''; ?>"><br/>
                <label for="client_secret">Client Secret</label>
                <input type="text" name="client_secret" id="client_secret" class="regular-text" value="<?= isset($client_secret) ? esc_attr($client_secret) : ''; ?>"><br/>
                <label for="refresh_token">Refresh Token</label>
                <input type="text" name="refresh_token" id="refresh_token" class="regular-text" value="<?= isset($refresh_token) ? esc_attr($refresh_token) : ''; ?>"><br/>
              </fieldset>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>SOAP</h2>
      <p>Optional SOAP settings. See SoapSettingsBuilder.php for more information.</p>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="compression_level">Compression Level</label></th>
            <td>
              <input type="text" name="compression_level" id="compression_level" class="regular-text" value="<?= isset($compression_level) ? esc_attr($compression_level) : ''; ?>">
              <span class="description">(Optional)</span>
            </td>
          </tr>
          <tr>
            <th scope="row"><label for="wsdl_cache">WSDL Cache</label></th>
            <td>
              <input type="text" name="wsdl_cache" id="wsdl_cache" class="regular-text" value="<?= isset($wsdl_cache) ? esc_attr($wsdl_cache) : ''; ?>">
              <span class="description">(Optional)</span>
            </td>
          </tr>
        </tbody>
      </table>
      <h2>PROXY</h2>
      <p>Optional proxy settings to be used by SOAP requests.</p>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="proxy_host">Host</label></th>
            <td>
              <input type="text" name="proxy_host" id="proxy_host" class="regular-text" value="<?= isset($proxy_host) ? esc_attr($proxy_host) : ''; ?>">
              <label for="proxy_port">Port</label>
              <input type="text" name="proxy_port" id="proxy_port" class="" value="<?= isset($proxy_port) ? esc_attr($proxy_port) : ''; ?>">
            </td>
          </tr>
          <tr>
            <th scope="row"><label for="proxy_user">User</label></th>
            <td><input type="text" name="proxy_user" id="proxy_user" class="regular-text" value="<?= isset($proxy_user) ? esc_attr($proxy_user) : ''; ?>"></td>
          </tr>
          <tr>
            <th scope="row"><label for="proxy_password">Password</label></th>
            <td><input type="text" name="proxy_password" id="proxy_password" class="regular-text" value="<?= isset($proxy_password) ? esc_attr($proxy_password) : ''; ?>"></td>
          </tr>
        </tbody>
      </table>
      <h2>LOGGING</h2>
      <p>Optional logging settings.</p>
      <table class="form-table">
        <tbody>
          <tr>
            <th scope="row"><label for="log_path">Log Path</label></th>
            <td><td><input type="text" name="log_path" id="log_path" class="regular-text" value="<?= isset($log_path) ? esc_attr($log_path) : ''; ?>"></td></td>
          </tr>
          <tr>
            <th scope="row"><label for="log_level">Log Level</label></th>
            <td><td><input type="text" name="log_level" id="log_level" class="regular-text" value="<?= isset($log_level) ? esc_attr($log_level) : ''; ?>"></td></td>
          </tr>
          <tr>
            <th scope="row"><label for="rd_log_path">Report Downloader Log Path</label></th>
            <td><td><input type="text" name="rd_log_path" id="rd_log_path" class="regular-text" value="<?= isset($rd_log_path) ? esc_attr($rd_log_path) : ''; ?>"></td></td>
          </tr>
          <tr>
            <th scope="row"><label for="rd_log_level">Report Downloader Log Level</label></th>
            <td><td><input type="text" name="rd_log_level" id="rd_log_level" class="regular-text" value="<?= isset($rd_log_level) ? esc_attr($rd_log_level) : ''; ?>"></td></td>
          </tr>
        </tbody>
      </table>
      <?= submit_button('Save Changes'); ?>
    </form>
</div>
