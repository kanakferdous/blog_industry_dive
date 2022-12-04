<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog_indive
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog_indive' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<!-- Top Bar -->
			<div class="top_bar">
				<div class="search_box">
					<?php get_search_form();?>
				</div>
				<div class="site-branding">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else :?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
						endif;
						$blog_indive_description = get_bloginfo( 'description', 'display' );
						if ( $blog_indive_description || is_customize_preview() ) :
					?>
						<p class="site-description"><?php echo $blog_indive_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<div class="subscribe_btn">
					<button id="subscribe_head" class="subscribe_head"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.15 23.71"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;}</style></defs><title>Asset 5</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M22.65,22.63v-14c0-.15-.18-.33-.35-.47L18.64,5.53V2.6a.49.49,0,0,0-.48-.48H14L11.87.57a.57.57,0,0,0-.54,0L9.21,2.12H5a.48.48,0,0,0-.48.48V5.5L.86,8.19a.63.63,0,0,0-.36.46V22.73a.49.49,0,0,0,.44.48H22.16A.51.51,0,0,0,22.65,22.63ZM21.73,9.51V21.76l-8-6.4Zm-.36-.85-2.73,2v-4ZM11.58,1.49l.85.62H10.72l.86-.62Zm6.09,1.6v8.27L11.58,15.8l-6.1-4.44V3.09ZM1.42,9.51l8,5.85-8,6.44Zm3.14,1.18-2.8-2,2.8-2ZM2.29,22.28l7.9-6.35,1.09.79a.42.42,0,0,0,.59,0L13,15.93l8,6.35Z"/><rect class="cls-1" x="8.34" y="5.45" width="6.53" height="0.92"/><rect class="cls-1" x="8.34" y="8.4" width="6.53" height="0.92"/><rect class="cls-1" x="8.34" y="11.35" width="6.53" height="0.92"/></g></g></svg><?php echo esc_html__( 'Subscribe', 'blog_indive' );?></button>
				</div>
			</div>
		
			<!-- Navigation -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blog_indive' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
