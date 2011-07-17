<?
/*
Plugin Name: History.js
Plugin URI: http://www.ramoonus.nl/wordpress/historyjs/
Description: History.js gracefully supports the HTML5 History/State APIs (pushState, replaceState, onPopState) in all browsers.
Version: 1.7
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
License: GPL2
*/
/* Javascript declarations for init */
function rw_historyjs_init() {
		wp_deregister_script('historyjs');
		wp_register_script('historyjs', plugins_url('/js/history.js',__FILE__), false, '1.7'); 
		wp_enqueue_script('historyjs');

		// history.js for html4
		wp_deregister_script('historyjs4');
		wp_register_script('historyjs4', plugins_url('/js/history.html4.js',__FILE__), false, '1.7'); 
		wp_enqueue_script('historyjs4');
}    
add_action('init', 'rw_lbd_init');

// Include JSON2 for HTML4 Browsers Only 
//function rw_historyjs_head() {
//	echo "<script>if ( typeof window.JSON === 'undefined' ) { document.write('<script src=";
//	echo plugins_url();
//echo plugins_url( 'js/json2.js' , dirname(__FILE__);
//	echo 'historyjs/js/json2.js"><\/script>'); }</script> ';
//}
//add_action('wp_head', 'rw_historyjs_head');

// detect amplify.js
?>