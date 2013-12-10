<?php 

function custombootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/dist/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );	
}
add_action( 'wp_enqueue_scripts', 'custombootstrap_scripts_with_jquery' );

// Add the nifty holder.js for faking images
function custombootstrap_scripts_holder()
{
	wp_register_script( 'holder-script', get_template_directory_uri() . '/docs-assets/js/holder.js');
	wp_enqueue_script( 'holder-script' );	
}
add_action( 'wp_enqueue_scripts', 'custombootstrap_scripts_holder' );

// If you want a sidebar wih widgets
if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
?>