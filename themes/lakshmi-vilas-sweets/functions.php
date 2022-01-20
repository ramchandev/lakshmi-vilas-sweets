<?php 


function lvs_register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'lvs_register_my_menus' );

  function lvs_add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'lvs_add_additional_class_on_li', 1, 3);

/* Add custom class to link in menu */

function lvs_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="navigation__link"', $ulclass);
}

add_filter('wp_nav_menu', 'lvs_modify_menuclass');

// Register Custom Post Type
function lvs_cpt_testimonials() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	
	$args = array(
		'label'                 => __( 'Testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'lvs_cpt_testimonials' );

// csutom fields 

/*add_action("admin_init", "admin_init");
add_action('save_post', 'save_price');

function admin_init(){
    add_meta_box("prodInfo-meta", "Author Name: ", "meta_options", "testimonials", "normal", "high");
}

function meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $lvs_testi_author_name = $custom["lvs_testi_author_name"][0];
?>
  <div class="form-table" style="padding: .5rem 0;display: flex; grid-gap: .5rem;">
    <label>Author Name:</label><input name="lvs_testi_author_name" value="<?php echo $lvs_testi_author_name; ?>" />
  </div>
<?php
    }
 
 
function save_price(){
    global $post;
    update_post_meta($post->ID, "lvs_testi_author_name", $_POST["lvs_testi_author_name"]);
} */