<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register custom products type Taxonomy
function register_product_type_taxonomy() {

	$labels = array(
		'name'                       => 'products type',
		'singular_name'              => 'product type',
		'menu_name'                  => 'product types',
		'all_items'                  => 'All product types',
		'parent_item'                => 'Parent product type',
		'parent_item_colon'          => 'Parent product type:',
		'new_item_name'              => 'New product type Name',
		'add_new_item'               => 'Add New product type',
		'edit_item'                  => 'Edit product type',
		'update_item'                => 'Update product type',
		'view_item'                  => 'View product type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular product types',
		'search_items'               => 'Search product types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No product types',
		'items_list'                 => 'product types list',
		'items_list_navigation'      => 'product types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'register_product_type_taxonomy', 0 );
