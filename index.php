add_action( 'init', 'clickweb_post_types', 10 );

function clickweb_post_types(){

		$text_domain = 'elite';

		$labels = array(
    		'name'               => __( 'Marketing pages', $text_domain ),
    		'singular_name'      => __( 'Marketing pages', $text_domain ),
    		'menu_name'          => __( 'Marketing pages', $text_domain ),
    		'name_admin_bar'     => __( 'Marketing pages', $text_domain ),
    		'add_new'            => __( 'New marketing page', $text_domain ),
    		'add_new_item'       => __( 'New marketing page', $text_domain ),
    		'new_item'           => __( 'New marketing page', $text_domain ),
    		'edit_item'          => __( 'Edit marketing page', $text_domain ),
    		'view_item'          => __( 'Show marketing page', $text_domain ),
    		'all_items'          => __( 'All marketing pages', $text_domain ),
    		'search_items'       => __( 'Search marketing page', $text_domain ),
    		'parent_item_colon'  => __( 'Parent item:', $text_domain ),
    		'not_found'          => __( 'Marketing page not found.', $text_domain ),
    		'not_found_in_trash' => __( 'Not found marketing page in trash.', $text_domain )
  		);

  		$args = array(
    		'labels'             => $labels,
    		'public'             => true,
    		'publicly_queryable' => true,
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'query_var'          => true,
    		'rewrite'            => array( 'slug' => 'marketing' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
    		'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
  		);

  		register_post_type( 'marketing', $args ); 

$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name', $text_domain ),
		'singular_name'     => _x( 'Location', 'taxonomy singular name', $text_domain ),
		'search_items'      => __( 'Search Location', $text_domain ),
		'all_items'         => __( 'All Locations', $text_domain ),
		'parent_item'       => __( 'Parent Location', $text_domain ),
		'parent_item_colon' => __( 'Parent Location:', $text_domain ),
		'edit_item'         => __( 'Edit Location', $text_domain ),
		'update_item'       => __( 'Update Location', $text_domain ),
		'add_new_item'      => __( 'Add New Location', $text_domain ),
		'new_item_name'     => __( 'New Location Name', $text_domain ),
		'menu_name'         => __( 'Location', $text_domain ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'location' ),
	);

	register_taxonomy( 'location', array( 'marketing' ), $args );



}   
