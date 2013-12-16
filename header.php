<!DOCTYPE html>
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie7"<?php echo apply_filters('tpl_html_webpage', ' itemscope itemtype="http://schema.org/WebPage"' ); ?>><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie8"<?php echo apply_filters('tpl_html_webpage', ' itemscope itemtype="http://schema.org/WebPage"' ); ?>><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie9"<?php echo apply_filters('tpl_html_webpage', ' itemscope itemtype="http://schema.org/WebPage"' ); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php echo language_attributes(); ?> class="no-js"<?php echo apply_filters('tpl_html_webpage', ' itemscope itemtype="http://schema.org/WebPage"' ); ?>>
<!--<![endif]-->
<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>' />
	<meta name='viewport' content='width=device-width, initial-scale=1.0' />
	<?php echo apply_filters('tpl_html_head', '<head>'."\n" ); ?>
	<title><?php echo do_action('theme_title', '-'); ?></title>
	<?php if(is_home()){ echo '<meta name="fragment" content="!"/>';} ?>
	<?php wp_head(); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

</head>
<body <?php body_class(); ?>>
<?php do_action( 'theme_before' ); ?>
<div id="wrapper">
	<div id="loader" class="loader" role-aria="hidden">
		<div id="loading" class="loading" style="width: 0px; opacity: 1;"></div>
	</div>
	<?php
		do_action('theme_header_before');
		do_action('theme_header');
		do_action('theme_header_after');
	?>
	<div id="container">