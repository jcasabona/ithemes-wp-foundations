<?php
/**
 * Plugin Name:      Cap’s Log
 * Plugin URI:       https://casabona.org
 * Description:      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//@TODO

function cap_log_add( $title ) {
	return 'Captain\'s Log: ' . $title;
}

add_filter( 'the_title', 'cap_log_add' );