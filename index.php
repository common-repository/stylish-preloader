<?php
/*
  Plugin Name: Stylish Preloader
  Plugin URl: http://webtech.gq
  Description: Stylish Preloader is use for loading a website page.
  Version: 1.0
  Author: Zeshan Abdullah
  Author URI: https://www.fiverr.com/aliali44
 */
// Exit if accessed directly 
  if (!defined('ABSPATH'))
    exit;
include_once 'admin/admin.php';
/**
* creating a table for saving button update details
* on activating the plugin
*/
// ==================== Including necessary files ======================//
function StylishPreloaderFontEndFiles() {
    wp_enqueue_style('StylishPreloaderReceiveStyle', plugins_url('/assets/css/style.css', __FILE__));
    wp_enqueue_style('StylishPreloaderReceive', plugins_url('/assets/font-awesome/css/font-awesome.min.css', __FILE__));
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('StylishPreloaderReceive', plugins_url('/assets/js/logic.js',__FILE__ )); 
}
add_action('wp_enqueue_scripts', 'StylishPreloaderFontEndFiles');
function StylishPreloaderTable()
{      
  global $wpdb; 
  $db_table_name = $wpdb->prefix . 'preloader_table';  // table name
  $charset_collate = $wpdb->get_charset_collate();
  $sql = "CREATE TABLE $db_table_name (
    id int(11) NOT NULL auto_increment,
    value varchar(1),
    UNIQUE KEY id (id)
    ) $charset_collate;";
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
add_option( 'test_db_version', $test_db_version );
   //Adding default values
$wpdb->insert( $db_table_name, array( 'value' => '0') );
} 
register_activation_hook( __FILE__, 'StylishPreloaderTable' );
?>
<?php
      /*========================= Select values from database=============*/
        global $wpdb;
        $tablename = $wpdb->prefix . 'preloader_table';
        $result = $wpdb->get_results( "SELECT * FROM $tablename");
              foreach ($result as $key) {
              }
           StylishPreloader_implementation($key->value);
 function StylishPreloader_implementation($id){
 	$id = esc_html($id);
if($id == "1"){
	?>
<div class="preloader"></div>
	<?php
}
if($id == "2"){
	?>
	<div class="preloader2"></div>
	<?php
}
if($id == "3"){
	?>
	<div class="preloader3"></div>
	<?php
}
if($id == "4"){
	?>
	<div class="preloader4"></div>
	<?php
}
if($id == "5"){
	?>
	 <div class="preloader5"></div>
	<?php
}
if($id == "6"){
	?>
	<div class="preloader6"></div>
	<?php
}
if($id == "7"){
	?>
	 <div class="preloader7"></div>
	<?php
}
if($id == "8"){
	?>
	 <div class="preloader8">
	 </div>
	<?php
}
if($id == "9"){
	?>
	 <div class="preloader9"> 	
	 </div>
	<?php
 } 
}
add_action( 'wp_footer', 'StylishPreloader_implementation', 5 );    