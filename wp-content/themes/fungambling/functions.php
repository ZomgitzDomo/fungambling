<?php
//functions.php
/*-------------------------------------
| body class function
-------------------------------------*/
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/*-------------------------------------
| loading js
-------------------------------------*/

function my_loading_scripts() {
	// wp_register_script( $handle, $src, $deps, $ver, $in_footer );

	wp_register_script( 'js-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.7', true); //load default jquery as dependency
	wp_register_script( 'js-author', get_template_directory_uri() . '/assets/js/scripts.js', array('js-bootstrap'), '1.2', true);

	wp_enqueue_script( 'jquery' ); //built into Wordpress - grabs their latest version of JQuery - not THE latest version.

	wp_enqueue_script( 'js-bootstrap' );
	wp_enqueue_script( 'js-author' );
}

add_action( 'wp_enqueue_scripts', 'my_loading_scripts' );

/*-------------------------------------
| loading css
-------------------------------------*/

function my_loading_styles() {
	// wp_register_style( $handle, $src, $depsArr, $ver, $media );

	wp_register_style( 'css-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'screen' );
	wp_register_style( 'css-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' , '4.7.0', 'screen' );

	wp_register_style( 'css-author', get_template_directory_uri() . '/assets/css/styles.css', array('css-bootstrap'), '1.2', 'screen' );

	wp_enqueue_style( 'css-bootstrap' );
	wp_enqueue_style( 'css-font-awesome');
	// wp_enqueue_style( 'css-theme' ); // if we are using the style.css in the theme dir
	wp_enqueue_style( 'css-author' ); //our own custom css file
}

add_action( 'wp_enqueue_scripts', 'my_loading_styles' );

?>
