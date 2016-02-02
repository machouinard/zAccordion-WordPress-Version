<?php
/*
Plugin Name: zAccordion WordPress-ed
Description: Implementation of zAccordion
Version: 1.1
Author: Brad Parbs; OnYourMark, LLC
Author URI: http://onyourmark.com
License: GPL2
*/

function zaccordionSetup() {

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'jquery.zaccordion', plugins_url( 'js/jquery.zaccordion.min.js', __FILE__ ),
		array( 'jquery' ), false, 1 );

	wp_enqueue_script(
		'jquery.easing', plugins_url( 'js/jquery.easing.1.3.js', __FILE__ ),
		array( 'jquery', 'jquery.zaccordion' ), false, 1 );

}

add_action( 'wp_footer', 'zaccordionSetup', 5 );

function jQueryFun() {

	wp_enqueue_script(
		'slider.js', plugins_url( 'js/slider.js', __FILE__ ),
		array( 'jquery', 'jquery.zaccordion' ), false, 1 );

}

add_action( 'wp_head', 'jQueryFun', 6 );
