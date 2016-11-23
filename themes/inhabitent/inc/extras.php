<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/////////////////////shop stuff//////////////////
function inhabitent_product_archive_title( $title ) {

	if(is_post_type_archive( 'product' )){

		$title = 'Shop Stuff';
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'inhabitent_product_archive_title' );


//////////////////about page//////////
function my_styles_method() {

			if(!is_page_template('about.php')) {
				return;

			}
		$url = CFS()->get( 'aboout_background_image');
		$custom_css = "
						.about-hero{
							background-image:  linear-gradient( to bottom, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100% ), url({$url});
				}";
				wp_add_inline_style( 'red-starter-style', $custom_css);

}
add_action( 'wp_enqueue_scripts', 'my_styles_method');




/////////logo in log in page///////////


function my_login_logo() {?>

  <style type="text/css">
    #login h1 a,
    .login h1 a {
      background-image: url(<?php echo get_stylesheet_directory_uri();
      ?>/images/inhabitent-logo-text-dark.svg);
      padding-bottom: 30px;
      background-size: 300px !important;
      width: 300px !important;
      background-position: bottom !important;
    }
  </style>
  <?php
}
add_action( 'login_enqueue_scripts', 'my_login_logo' );



//////////////////set the product archive to 16////////////
function get_all_product_posts( $query ) {
	if(is_post_type_archive('product') && !is_admin() && $query->is_main_query()) {
		$query->set('posts_per_page', '16');
		$query->set('orderby', 'title');
		$query->set('order' , 'ASC');

	}

}
add_action( 'pre_get_posts', 'get_all_product_posts');
?>
