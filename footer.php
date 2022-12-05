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

<div id="popup_form">
  <div class="rendered-form">
		<form action="" class="form_container">
      <input type="text" placeholder="Full Name" name="fullname" required>
      <input type="email" placeholder="E-mail" name="mail" required>
      <button type="submit"><?php echo esc_html__( 'Subscribe', 'blog_indive' );?></button>
			<button class="popup__close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg></button>
    </form>
  </div>
</div>
<script>
const popupTrigger = document.querySelector('.subscribe_head');
const popup = document.querySelector('#popup_form');
const popupClose = document.querySelector('.popup__close');

popupTrigger.addEventListener('click', (e) => {
	popup.classList.add('show');
	document.body.style.cssText = `overflow: hidden;`;
});

popupClose.addEventListener('click', (e) => {
  popup.classList.remove('show');
  document.body.style.cssText = '';
});
</script>
</body>
</html>
