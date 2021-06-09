<?php
/*
Plugin Name:  YITH Roots Config
Plugin URI:   https://www.codeand.com.au/
Description:  Configure system status variables for YITH plugins with Roots Trellis/Bedrock
Version:      1.0.0
Author:       Code&
Author URI:   https://www.codeand.com.au/
License:      MIT License
*/

/**
 * Trellis handles WP Cron.
 *
 * Disable YITH error indicating WP Cron is disabled.
 *
 * @see https://github.com/roots/trellis/blob/2597bdd4ca220cb1af3f69ea9d27698f90d46119/roles/wordpress-setup/tasks/main.yml#L28-L36
 */
add_filter('yith_system_status_server_cron', '__return_true');
