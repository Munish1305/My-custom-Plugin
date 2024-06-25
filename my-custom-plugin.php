<?php
/**
 * Plugin Name: My Custom Plugin
 * Description: This is my own custom plugin.
 * Author: Munish Prajapati
 * Destination folder: wp-content/plugins
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Requires at least: 6.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'My Custom Plugin', 'MCP' );
define( 'MY_CUSTOM_PLUGIN_VERSION' , '1.0.1' );
define( 'MY_CUSTOM_PLUGIN_FILE', __FILE__  );
define( 'MY_CUSTOM_PLUGIN_BASENAME' , plugin_basename( MY_CUSTOM_PLUGIN_FILE) );
define( 'MY_CUSTOM_PLUGIN_URL', plugin_dir_url( MY_CUSTOM_PLUGIN_FILE ));
define( 'MY_CUSTOM_PLUGIN_DIR', plugin_dir_path( MY_CUSTOM_PLUGIN_FILE ));

function activate_my_custom_plugin(){
    //code
}
function deactivate_my_custom_plugin(){
    //code
}
//Activation hook
register_activation_hook(__FILE__, 'activate_my_custom_plugin');

//Deactivation hook
register_deactivation_hook(__FILE__, 'deactivate_my_custom_plugin');




if( file_exists(MY_CUSTOM_PLUGIN_DIR.'/includes/mcp-functions.php')){
    require_once ( MY_CUSTOM_PLUGIN_DIR. '/includes/mcp-functions.php' );

}
else{
    echo 'My Custom plugin function file is missing';
    wp_die();
}



function my_activities(){
    $coupon_menu = new WPDocs_Options_Page();
    $coupon_menu::create_table();
}

add_action( 'plugins_loaded','my_activities');

