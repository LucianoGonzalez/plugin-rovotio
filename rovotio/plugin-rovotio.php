<?php
/**
 * Plugin Name: Rovotio
 * Plugin URI: https://api.rovot.io/wp/plugin
 * Description: plugin para chat bots.
 * Version: 1.0
 * Author: Luciano Gonzalez
 * Author URI: http://URI_del_Autor_del_Plugin
 * License: GPL2
This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 
 */

add_action('wp_loaded', 'set_chat');

function set_chat(){
     echo "<iframe id=\"frames\" style='width: 605px;height: 417px;display:none;position:fixed;z-index: 9999 !important;float: right !important;margin-left: 50%;bottom: 30px;' src=\"https://api.rovot.io/web/indexChat.html\"></iframe>";
    echo "<button onclick=\"openChat()\" style='float: right;position: fixed;bottom: 0;margin-left: 85%;'>Contáctanos!</button><br /><br />";
    
    
}


// include custom jQuery
function include_custom() {

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'include_custom');

add_action( 'wp_enqueue_scripts', 'script_load' );
function script_load(){
    wp_enqueue_script( 'my-custom-script', "/wp-content/plugins/rovotio" . '/codigo.js', array( 'jquery' ) );
}
?>