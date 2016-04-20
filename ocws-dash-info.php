<?php
/*
Plugin Name: OCWS Dashboard Info
Plugin URI: http://oldcastleweb.com/pws/plugins
Description: This plugin adds a dashboard widget, giving information about the version number of the OCWS Basic package.
Version: 0.1
Author: Paul Taylor
Author URI: http://oldcastleweb.com/pws/about
License: GPL2
GitHub Plugin URI: https://github.com/pftaylor61/ocws-admin-bar
GitHub Branch:     master
*/
/*  Copyright 2016  Paul Taylor  (email : info@oldcastleweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* Initialize */
define("OCWSDW_VNUM", 0.1);
$ocwsdw_content = "<p>The OCWS Basic Package consists of Wordpress, and a variety of plugins, specially chosen to make the site work easily. Also included in the OCWS Qohelet theme.</p>\n";
define("OCWSDW_HEADER", "OCWS Basic Package (Version ".OCWSDW_VNUM.")");
define("OCWSDW_CONTENT", $ocwsdw_content);

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', OCWSDW_HEADER, 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo OCWSDW_CONTENT;
}


?>