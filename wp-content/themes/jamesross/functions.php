<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
	$content_width = 1170;
}


if (!function_exists('bootstrapBasicSetup')) {
	/**
	 * Setup theme and register support wp features.
	 */
	function bootstrapBasicSetup() 
	{
		/**
		 * Make theme available for translation
		 * Translations can be filed in the /languages/ directory
		 * 
		 * copy from underscores theme
		 */
		load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

		// add theme support post and comment automatic feed links
		add_theme_support('automatic-feed-links');

		// enable support for post thumbnail or feature image on posts and pages
		add_theme_support('post-thumbnails');

		// allow the use of html5 markup
		// @link https://codex.wordpress.org/Theme_Markup
		add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

		// add support menu
		register_nav_menus(array(
			'primary' => __('Primary Menu', 'bootstrap-basic'),
		));

		// add post formats support
		add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

		// add support custom background
		add_theme_support(
			'custom-background', 
			apply_filters(
				'bootstrap_basic_custom_background_args', 
				array(
					'default-color' => 'ffffff', 
					'default-image' => ''
				)
			)
		);
	}// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
	/**
	 * Register widget areas
	 */
	function bootstrapBasicWidgetsInit() 
	{
		register_sidebar(array(
			'name'          => __('Header right', 'bootstrap-basic'),
			'id'            => 'header-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Navigation bar right', 'bootstrap-basic'),
			'id'            => 'navbar-right',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

		register_sidebar(array(
			'name'          => __('Sidebar left', 'bootstrap-basic'),
			'id'            => 'sidebar-left',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Sidebar right', 'bootstrap-basic'),
			'id'            => 'sidebar-right',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Footer left', 'bootstrap-basic'),
			'id'            => 'footer-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));

		register_sidebar(array(
			'name'          => __('Footer right', 'bootstrap-basic'),
			'id'            => 'footer-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		));
	}// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
	/**
	 * Enqueue scripts & styles
	 */
	function bootstrapBasicEnqueueScripts() 
	{
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/looper.css');
		wp_enqueue_style('looper-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('fontawesome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
		wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
		wp_enqueue_style('ecommerce-style', get_template_directory_uri() . '/css/ecommerce.css');

		wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js');
		wp_enqueue_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js');
		wp_enqueue_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('looper-script', get_template_directory_uri() . '/js/vendor/looper.min.js');
		wp_enqueue_script('news-ticker', get_template_directory_uri() . '/js/vendor/jquery.li-scroller.1.0.js');
		
		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), false, true);
		wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
		wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
	}// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
	require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
	$bbsc_adminhelp = new BootstrapBasicAdminHelp();
	add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
	unset($bbsc_adminhelp);
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';


/*WooCommerce Overrides*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
	unset( $tabs['additional_information'] );      	// Remove the description tab
    return $tabs;

}

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	
	// Adds the new tab
	
	$tabs['ai_tab'] = array(
		'title' 	=> __( 'Additional Information', 'woocommerce' ),
		'priority' 	=> 10,
		'callback' 	=> 'add_info_tab_content'
	);
	$tabs['co_tab'] = array(
		'title' 	=> __( 'Course Overview', 'woocommerce' ),
		'priority' 	=> 11,
		'callback' 	=> 'co_tab_content'
	);
	$tabs['vpi_tab'] = array(
		'title' 	=> __( 'Virtual Private Instruction', 'woocommerce' ),
		'priority' 	=> 12,
		'callback' 	=> 'vpi_tab_content'
	);
	$tabs['ss_tab'] = array(
		'title' 	=> __( 'Screen Shots', 'woocommerce' ),
		'priority' 	=> 20,
		'callback' 	=> 'screen_shots_tab_content'
	);
	$tabs['ml_tab'] = array(
		'title' 	=> __( 'Monthly License Details', 'woocommerce' ),
		'priority' 	=> 30,
		'callback' 	=> 'ml_tab_content'
	);

	return $tabs;

}
function add_info_tab_content() {
	
	$array = get_field_objects();
	
	if($array["additional_information"]["value"])
		echo $array["additional_information"]["value"];
	else
		echo "<style>li.ai_tab_tab{ display:none !important; }</style>";	
}


function screen_shots_tab_content() {

	$array = get_field_objects();
	
	if($array["screen_shots"]["value"])
		echo $array["screen_shots"]["value"];
	else
		echo "<style>li.ss_tab_tab{ display:none !important; }</style>";	
	
}
function ml_tab_content() {

	$array = get_field_objects();
	
	if($array["monthly_license_details"]["value"])
		echo $array["monthly_license_details"]["value"];
	else
		echo "<style>li.ml_tab_tab{ display:none !important; }</style>";
}
function vpi_tab_content() {

	$array = get_field_objects();
	
	if($array["virtual_private_instruction"]["value"])
		echo $array["virtual_private_instruction"]["value"];
	else
		echo "<style>li.vpi_tab_tab{ display:none !important; }</style>";
}
function co_tab_content() {

	$array = get_field_objects();
	
	if($array["course_overview"]["value"])
	{
		echo $array["course_overview"]["value"];
	}
	else
		echo "<style>li.co_tab_tab{ display:none !important; }</style>";
}

add_filter( 'woocommerce_product_tabs', 'sb_woo_move_description_tab', 98);
function sb_woo_move_description_tab($tabs) {

$array = get_field_objects();
	
	if($array["additional_information"]["value"] == "")
	{
		
		$tabs['co_tab']['priority'] = 1;
		$tabs['ai_tab']['priority'] = 5;
		$tabs['vpi_tab']['priority'] = 6;
		$tabs['ml_tab']['priority'] = 7;
		$tabs['reviews']['priority'] = 20;
		
		return $tabs;
	}
	else
	{
		
		$tabs['co_tab']['priority'] = 3;
		$tabs['ai_tab']['priority'] = 1;
		$tabs['vpi_tab']['priority'] = 6;
		$tabs['ml_tab']['priority'] = 7;
		$tabs['reviews']['priority'] = 20;
		
		return $tabs;
	}
		
}



remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary2', 'woocommerce_grouped_add_to_cart', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary2', 'woocommerce_template_single_excerpt', 10 );
add_action( 'after_desc', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary3', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 30 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 10 );

// rename the coupon field on the cart page
function woocommerce_rename_coupon_field_on_cart( $translated_text, $text, $text_domain ) {
	// bail if not modifying frontend woocommerce text
	if ( is_admin() || 'woocommerce' !== $text_domain ) {
		return $translated_text;
	}
	if ( 'Apply Coupon' === $text ) {
		$translated_text = 'Apply Promo Code';
	}
	
	if ( 'Coupon' === $text ) {
		$translated_text = 'Promo Code';
	}
	
	return $translated_text;
}
add_filter( 'gettext', 'woocommerce_rename_coupon_field_on_cart', 10, 3 );


//show_admin_bar(false);


add_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

function custom_pre_get_posts_query( $q ) {

	if ( ! $q->is_main_query() ) return;
	if ( ! $q->is_post_type_archive() ) return;
	
	if ( ! is_admin() && is_shop() ) {

		$q->set( 'tax_query', array(array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => array( 'course-options' ), // Don't display products in the course options category on the shop page
			'operator' => 'NOT IN'
		)));
	
	}

	remove_action( 'pre_get_posts', 'custom_pre_get_posts_query' );

}

function replacePayPalIcon($iconUrl) {
	return get_bloginfo('stylesheet_directory') . '/img/paypal_cardicon.png';
}
 
add_filter('woocommerce_paypal_icon', 'replacePayPalIcon');

add_filter ('woocommerce_add_to_cart_redirect', 'woo_redirect_to_checkout');
function woo_redirect_to_checkout() {
	$checkout_url = WC()->cart->get_checkout_url();
	return $checkout_url;
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//dynamic redirect for the landing page template form
add_filter( 'gform_confirmation_2', 'custom_confirmation', 10, 4 );
function custom_confirmation( $confirmation, $form, $entry, $ajax ) {
    
	if (count($_GET))
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."&submit=submit";
	else
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?submit=submit";
    $confirmation = array( 'redirect' => $actual_link );
   
    return $confirmation;
}

/* GammaFX: Preventing Hidden WooCommerce products from showing up in WordPress search results */
if ( ! function_exists( 'gamma_search_query_fix' ) ){
  function gamma_search_query_fix( $query = false ) {
    if(!is_admin() && is_search()){
      $query->set( 'meta_query', array(
        'relation' => 'OR',
        array(
          'key' => '_visibility',
          'value' => 'hidden',
          'compare' => 'NOT EXISTS',
        ),
        array(
          'key' => '_visibility',
          'value' => 'hidden',
          'compare' => '!=',
        ),
      ));
    }
  }
}
add_action( 'pre_get_posts', 'gamma_search_query_fix' );

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     $fields['account']['account_password']['placeholder'] = 'Subscription Password';
     $fields['account']['account_password']['label'] = 'Subscription Password';
     return $fields;
}

//ISTE BOOKING FORM AREA//

// Register Custom Post Type
function times_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Times', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Time', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Meeting Times', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Times', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
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
        'label'                 => __( 'Time', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', ),
        'taxonomies'            => array( 'days' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'times', $args );

}
add_action( 'init', 'times_custom_post_type', 0 );

// Register Custom Taxonomy
function days_custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Days', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Day', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Days', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
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
    register_taxonomy( 'days', array( 'times' ), $args );

}
add_action( 'init', 'days_custom_taxonomy', 0 );

function remove_yoast_metabox_times(){
    remove_meta_box('wpseo_meta', 'times', 'normal');
}
add_action( 'add_meta_boxes', 'remove_yoast_metabox_times',11 );

//ajax call  logged in
add_action('wp_ajax_fancy_ajax', 'fancy_ajax');

//ajax call  not logged in
add_action('wp_ajax_nopriv_fancy_ajax', 'fancy_ajax');

function fancy_ajax()
{
    $day = $_POST["day"];

    if($day != "") {
        $args = array(
            'showposts' => -1,
            'post_type' => 'times',
            'orderby' => 'order_menu',
            'order' => 'ASC',
            'meta_key' => 'status',
            'meta_value' => 'Available',
            'tax_query' => array(
                array(
                    'taxonomy' => 'days',
                    'field'    => 'slug',
                    'terms'    => $day,
                ),
            ),
        );

    $myposts = get_posts($args);
    }

    //if($myposts->have_posts()){
        foreach ($myposts as $mypost) {
            //echo $mypost->ID;

            $thisone = count($arrray);
            $arrray[$thisone]["field"] = "input_4_12";
            $arrray[$thisone]["name"] = $mypost->post_title;
            $arrray[$thisone]["id"] = $mypost->ID;

        }
    //}
    //else {
    //    $thisone = count($arrray);
    //    $arrray[$thisone]["field"] = "input_4_12";
    //    $arrray[$thisone]["name"] = "No Results Found";
    //    $arrray[$thisone]["id"] = "";
    //}

    /*if (empty($arrray)) {
        $arrray[$thisone]["field"] = "input_4_12";
        $arrray[$thisone]["name"] = "This day is fully booked, please try another";
        $arrray[$thisone]["id"] = "";
    }*/

    $arrray = array_unique($arrray, SORT_REGULAR);

    echo json_encode($arrray);

    die();
}

add_filter('manage_posts_columns', 'custom_posts_table_head');
function custom_posts_table_head( $columns ) {


    $columns['participant']  = 'Participant';
    $columns['status'] = 'Status';
    return $columns;

}
add_action( 'manage_times_posts_custom_column', 'add_posts_columns_content', 10, 2);

function add_posts_columns_content($columns) {

    global $post;

    if($columns == 'participant') {
        $category = get_field('participant', $post->ID);
        if($category) {
            echo $category;
        }
    }
    if($columns == 'status') {
        $status = get_field('status', $post->ID);
        if($status) {
            echo $status;
        }
    }
}

add_filter( 'manage_edit-times_sortable_columns', 'make_times_column_sortable' );
function make_times_column_sortable( $sortable_columns ) {
    //Add index "filed" to the $sortable_columns array.
    $sortable_columns['participant'] = 'participant';
    $sortable_columns['status'] = 'status';
    //Return the array.
    return $sortable_columns;
}

add_action( 'pre_get_posts', 'sortable_times_post_columns');
function sortable_times_post_columns($query) {

    if( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
        // Capitalize the orderby value
        $order = strtoupper( $query->get('order') );

        if( ! in_array( $order, array( 'ASC', 'DESC' ) ) )
            $order = 'ASC';

        if($orderby == 'participant') {
            // Then set the query
            $query->set('meta__key', 'participant');
            $query->set('orderby', 'meta_value');
        }

        if($orderby == 'status') {
            // Then set the query
            $query->set('meta__key', 'status');
            $query->set('orderby', 'meta_value');
        }
        


    }
    return;
}



add_action( 'gform_after_submission_4', 'book_time_slot', 10, 2 );

function book_time_slot( $entry, $form ) {
    $slot = rgar($entry, '12');
    $name = rgar($entry, '1')." ".rgar($entry, '2');

    $value = update_field( 'status', 'Booked', $slot );
    $value = update_field( 'participant', $name, $slot );
    //$value = update_field( 'participant', $slot, "3417" );

}
//END ISTE BOOKING FORM AREA//



