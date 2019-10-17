<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = get_option( 'template' );

switch( $template ) {
	case 'twentyeleven' :
		echo '<div id="primary"><div id="content" role="main" class="twentyeleven">';
		break;
	case 'twentytwelve' :
		echo '<div id="primary" class="site-content"><div id="content" role="main" class="twentytwelve">';
		break;
	case 'twentythirteen' :
		echo '<div id="primary" class="site-content"><div id="content" role="main" class="entry-content twentythirteen">';
		break;
	case 'twentyfourteen' :
		echo '<div id="primary" class="content-area"><div id="content" role="main" class="site-content twentyfourteen"><div class="tfwc">';
		break;
	case 'twentyfifteen' :
		echo '<div id="primary" role="main" class="content-area twentyfifteen"><div id="main" class="site-main t15wc">';
		break;
	default :
		echo '<div id="page-topper" style="background: #ffffff 
		url('.get_site_url().'/wp-content/uploads/2015/10/Prepworks_Header_Ecommerce.jpg) no-repeat center top;min-height:169px;margin-bottom:5px;">

	<img src="'.get_site_url().'/wp-content/uploads/2015/10/Prepworks_Icon.png" alt="" class="page-icon">
    
</div><div id="container" class="container"><div id="content" role="main">';
		break;
}
