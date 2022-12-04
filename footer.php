<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog_indive
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer_wrap">
				<div class="footer_left">
					<!-- Navigation -->
					<nav id="footer-navigation" class="footer-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->

					<!-- Copyright -->
					<div class="site-info">
						<?php
							printf( esc_html__( 'Copyright © 2022 All rights reserved.', 'blog_indive' ) );
						?>
					</div><!-- .site-info -->
				</div>
				<div class="footer_right">
					<h3 class="widget_title"><?php printf( esc_html__( 'Sign up for our newsletter', 'blog_indive' ) );?></h3>
					<div class="footer_subscribe_btn">
						<button id="subscribe_head" class="subscribe_head"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 485.2 485.2" style="enable-background:new 0 0 485.2 485.2;" xml:space="preserve"><style type="text/css">.st0{fill:#3B3B3B;}</style><g><path class="st0" d="M485.2,363.9c0,10.6-3,20.5-7.8,29.2L324.2,221.7L475.8,89.1c5.9,9.4,9.4,20.3,9.4,32.2L485.2,363.9L485.2,363.9z M242.6,252.8L453.5,68.3c-8.7-4.7-18.4-7.6-28.9-7.6H60.7c-10.5,0-20.3,2.9-28.9,7.6L242.6,252.8z M301.4,241.6l-48.8,42.7c-2.9,2.5-6.4,3.7-10,3.7c-3.6,0-7.1-1.2-10-3.7l-48.8-42.7L28.7,415.2c9.3,5.8,20.2,9.3,32,9.3h363.9c11.8,0,22.7-3.5,32-9.3L301.4,241.6z M9.4,89.1C3.6,98.4,0,109.4,0,121.3v242.6c0,10.6,3,20.5,7.8,29.2L161,221.6L9.4,89.1z"/></g></svg><?php echo esc_html__( 'Subscribe', 'blog_indive' );?></button>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
