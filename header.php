<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClaudiaSiciliano
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'claudiasiciliano' ); ?></a>


	<div id="content" class="site-content">

	<nav class="navbar navbar-dark fixed-top">
        <div class="container" style="overflow-x: hidden">
 
            <a class="navbar-brand" href="index.html"><span>HI</span></a>
 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
 
            <div class="collapse navbar-collapse" id="navbarNav">
								<?php 
									wp_nav_menu( array( 
										'theme_location' => 'primary',
										'menu_class' => 'navbar-nav ml-auto',


									) );
								?>
            </div>
 
        </div>
    </nav>