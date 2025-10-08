<?php
/**
 * Plik funkcji motywu SYSTEMY DK Theme.
 */

function systemydk_enqueue_assets() {
	
	wp_enqueue_style( 'systemydk-main-style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'systemydk_enqueue_assets' );

?>
