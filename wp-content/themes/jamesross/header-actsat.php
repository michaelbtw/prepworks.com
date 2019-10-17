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
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body class="act-sat-landing" <?php body_class(); ?>>
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



<header>
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
<div class="container">
<div class="row row-with-vspace site-branding">
	<div class="col-md-5 col-sm-4 col-xs-6 site-title">
		<h1 class="site-title-heading">
			<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="PREPWORKS" class="img-responsive"></a>
		</h1>
	</div>
	<div class="col-md-7 col-sm-7 col-xs-6 most-right sat">
        <p>Call Us Today</p>
        <h2>855-365-PREP</h2>
        <?php 
        $header_seal = get_field('header_seal');
        if( !empty($header_seal) ): ?>
			<img src="<?php echo $header_seal['url']; ?>" alt="<?php echo $header_seal['alt']; ?>" />
		<?php endif; ?>	
	</div>

</div><!--.site-branding-->
</div>
			</header>
			
			
			