<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Limocars_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row footer-top">
				<div class="column">
					<?php $langs = language_selector_flags(); ?>​
					<?php if (!empty($langs)): ?>
						<div class="wpml-ls-legacy-list-horizontal">
							<?php if (!empty($langs['list'])): ?>
								<div class="wpml-ls-slot-select-lang">
									<?php foreach ($langs['list'] as $key => $lang): ?>
										<a class="wpml-ls-link" href="<?php echo $lang['url'] ?>">
											<?php 
												if ($key== "en") { ?>
													<img src="<?php bloginfo('template_directory'); ?>/img/uk.svg" alt="<?php echo $key?>" class="wpml-ls-flag"  width="26" height="17">

													<span class="footer-lang"><?php _e('Change language', 'limo') ?></span>
												<?php } else { ?>
													<img src="<?php bloginfo('template_directory'); ?>/img/fr.svg" alt="<?php echo $key?>" class="wpml-ls-flag"  width="26" height="17">
													<span class="footer-lang"><?php _e('Changer de langue', 'limo') ?></span>
												<?php }			
											?>
										</a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="column">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php 
							$main_logo = get_field('main_logo', 'option');
							if( !empty( $main_logo ) ): ?>
								<img src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
							<?php endif;					
						?>
					</a>
				</div>
				<div class="column">
					<?php 
						if( have_rows('phone_footer', 'option') ): ?>
							<ul class="footer-phone-block">
								<?php while( have_rows('phone_footer', 'option') ): the_row();
									$phone_number =get_sub_field('phone_number', 'option');?>

									<li class="phone-number">
										<?php
											if( !empty( $phone_number ) ): ?>
												<a class="phone-link" href="tel:<?php echo $phone_number; ?> "><?php echo $phone_number; ?></a>
											<?php endif; 
										?>     
									</li>
								<?php endwhile; ?>	
							</ul>
						<?php endif;	
					?>
				</div>
			</div>
			<div class="row footer-main">
				<nav class="menu-footer-menu-container">
				<?php
						wp_nav_menu( [
							'theme_location' => 'menu-footer',
							'menu_class' => 'menu-footer',
							'menu_id' => 'footer-menu',
							'container'       => '',					
						] );
					?>
				</nav>
				<nav class="mobile-menu-footer">
				<?php
						wp_nav_menu( [
							'theme_location' => 'menu-footer',
							'menu_class' => 'menu-footer',
							'menu_id' => 'footer-menu',
							'container'       => '',					
						] );
					?>
				</nav>	
				
				<div class="newsletter">
					<?php dynamic_sidebar('footer-form'); ?>
				</div>
			</div>
			<div class="row bottom">
				
					<div class="copyright">
						<span>&copy;<?php printf( esc_html__( 'Copyright', 'limo' ) );?></span>
						<span> <?php echo date("Y") ?></span>
						<span><?php esc_attr( bloginfo('name') ); ?></span>
					</div>
				<nav class="menu-privacy-menu-container">
					<?php
						wp_nav_menu( [
							'theme_location' => 'menu-privacy',
							'menu_class' => 'menu',
							'menu_id' => 'privacy-menu',
							'container'       => '',							
						] );
					?>
				</nav>
				
				</div>
			
		</div>
	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>

</body>
</html>
