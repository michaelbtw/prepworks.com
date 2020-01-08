<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="google-site-verification" content="-7ZYQgeULxu2HNGUuQHQa2MWZ4k8jMDUqBL5pRAdfdE" />
		<meta name="google-site-verification" content="9_Bgzuoqg_smoFHuv9pbjF5_rv7qtiHG40OQFZMcmXk" />
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P7BMV8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P7BMV8');</script>
<!-- End Google Tag Manager -->
    
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
<?php do_action('before'); ?> 



<header class="navbar-fixed-top">
<?php if(get_field('emergency_message', 'option') != "") : ?>

<?php 
		if(get_field('message_link', 'option') != "")
			$thelink = get_field('message_link', 'option');
		else
			$thelink = "#";
?>				

<div class="container-fluid">
<div class="row">
<div class="tickercontainer">
<div class="mask">
<ul id="ticker01" class="newsticker">
	<li><a href="<?php echo $thelink; ?>" target="_blank"><?php the_field('emergency_message', 'option'); ?></a></li>
	<li><a href="<?php echo $thelink; ?>" target="_blank"><?php the_field('emergency_message', 'option'); ?></a></li>
	<li><a href="<?php echo $thelink; ?>" target="_blank"><?php the_field('emergency_message', 'option'); ?></a></li>
</ul>
</div>
</div>
</div>
</div>
<script>
jQuery(function(){
	jQuery("ul#ticker01").liScroll();
});
</script>
<?php endif; ?>
 
<!--End Header Top Stripe--> 
<div class="container hidden-xs">
<div class="row row-with-vspace site-branding">
	<div class="col-md-12">
		<?php

        $defaults = array(
            'menu'            => 'Secondary-Menu',
            'container'       => 'div',
            'container_class' => 'secondary-menu hidden-xs',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '<span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );
        
        wp_nav_menu( $defaults );
        
        ?>

	<script>
        jQuery( document ).ready(function() {
        	jQuery('#menu-item-2359 span').remove();	
		var phoneNumber = jQuery("ul#menu-secondary-menu li:first a").html();        
                jQuery("ul#menu-secondary-menu li:first a").html("<i class='fa fa-phone fa-rotate-90' aria-hidden='true' style='position:relative;left:-7px;'></i>" +phoneNumber);
        });					
        </script>        

		
	</div>
	<div class="col-md-7 col-sm-7 site-title">
		<h1 class="site-title-heading">
			<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="PREPWORKS" class="img-responsive"></a>
		</h1>
		
		<div class="testSmartLogo">
			
		</div>

	</div>
	<div class="col-md-5 col-sm-5 page-header-top-right">
    
			<a class="btn btn-default" href="<?php echo get_site_url(); ?>/enroll-now/" role="button"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-pencil-small.png" alt="Enroll Now" class="btn-img-wrap">DIGITAL PROGRAMS & COURSES</a>
            
          <!--  <a class="btn btn-default" href="#" role="button"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-pencil-small.png" alt="Free Trial" class="btn-img-wrap">FREE TRIAL</a> -->
            	
            <a class="btn btn-default" href="<?php echo get_site_url(); ?>/for-parents-students/" role="button"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-pencil-small.png" alt="VPI" class="btn-img-wrap">TEST SMART</a>		
	</div>
</div><!--.site-branding-->
</div>

<div id="nav-row">		
	<div class="container">		
    <div class="row main-navigation">
        <div class="col-md-12">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                	<div class="row hidden-sm hidden-md hidden-lg">
                   	<div class="col-xs-9">
                	 		<a class="mobPrepworks" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.png" alt="PREPWORKS" class="img-responsive"></a>
					<!---<a class="mobTestSmart" href="<?php echo get_page_link(22); ?>" title="Test Smart" rel="Test Smart"><img src="https://prepworks.com/efs//2019/04/TSLearningCentreLogo-1.png" alt="Test Smart"></a>-->
                     	</div>
                      <div class="col-xs-3">  
                      	  	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                            <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                </div>
                
                <div class="collapse navbar-collapse navbar-primary-collapse">
                	<div id="main-menu-wrap">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => ' navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
                    <?php dynamic_sidebar('navbar-right'); ?> 
                    </div>
                </div><!--.navbar-collapse-->
                
            </nav>
        </div>
    </div><!--.main-navigation-->
    </div>
</div>    
<div id="courses" class="hidden-xs">
<?php

                $defaults = array(
                    'menu'            => 'Course-List',
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );
                
                wp_nav_menu( $defaults );
                
                ?>
</div>
			</header>
			
			
			
