<?php
// Start the engine the other way around

add_action('genesis_setup','genesischild_theme_setup'); 
function genesischild_theme_setup() { 
	

	add_theme_support( 'genesis-responsive-viewport' );
	add_theme_support( 'genesis-footer-widgets', 3 );
	
}