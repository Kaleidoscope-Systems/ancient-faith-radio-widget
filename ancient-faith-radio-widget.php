<?php

/**
 * Plugin Name: Ancient Faith Radio Widget
 * Description: A widget to display Ancient Faith Radio stations
 * Version: 0.1.0
 * Author: Kaleidoscope Systems
 * Author URI: https://kaleidoscopesystems.net
 * License: Apache 2.0
 * License URI: https://www.apache.org/licenses/LICENSE-2.0
 */

//Exit if this file is accessed directly
defined( 'ABSPATH' ) || exit;

class afr_widget {

  function register() {
    add_action( 'admin_menu', array( $this, 'add_admin_pages') );
    require_once plugin_dir_path( __FILE__ ) . 'widgets.php';
  }
  
  public function add_admin_pages() {
    add_options_page(__('AFR Widget', 'afr_widget'), __('AFR Widget', 'afr_widget'), 'manage_options', 'afr_widget', array($this, 'options_page'));
  }

  public function options_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
  }

  function activate() {

  }

  function deactivate() {

  }

  function uninstall() {

  }

}


if ( class_exists( 'afr_widget' ) ) {
  $afr_widget = new afr_widget();
}

$afr_widget->register();

//activation
register_activation_hook( __FILE__, array( $afr_widget, 'activate') );

//deactivation
register_activation_hook( __FILE__, array( $afr_widget, 'deactivate') );

//uninstall

//enqueue styles
function afr_widget_styles() {
  wp_enqueue_style( 'afr_widget_main_style', esc_url( plugin_dir_url( __FILE__) . 'css/styles.css'), null, '0.1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'afr_widget_styles');