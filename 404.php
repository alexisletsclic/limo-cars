<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Limocars_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">

	<?php 
	$form = get_field('main_form', 'option'); 
	if (!empty($form)) {?>
		<section class="error-404">
			<?php 
				$dhero_img = get_field( 'page_img', 'option' );
				if( !empty( $dhero_img ) ): ?>
					<img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="error-img">
				<?php
				endif;
			?>
				<div class="container">
					<div class="row">						
						<div class="col-lg-6 col-md-12 content">
							<div class="site-branding">
					             <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            						<?php
            							$main_logo = get_field('main_logo', 'option');
            							if( !empty( $main_logo ) ): ?>
            								<img class="main-logo" src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
            							<?php endif;
            						?>
            					</a>
				    		</div>
							<div class="hero-suptitle">
								<span><?php esc_html_e( 'Page introuvable', 'limo' ); ?></span>
							</div>
							<h1 class="hero-title"><?php esc_html_e( 'Il semblerait que la page que vous cherchez n’existe plus.', 'limo' ); ?></h1>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-link"><?php esc_html_e( 'Retourner à la page d’accueil', 'limo' ); ?></a>
						</div>
						<div class="col-lg-6 col-md-12 d-flex">
							<div class="action-form">
								<?php echo do_shortcode($form); ?>
							</div>
						</div>
					</div>
				</div>
		</section><!-- .error-404 -->

		<?php
	} else { ?>
		<section class="error-404 d-flex align-items-center">
			<?php 
				$dhero_img = get_field( 'page_img', 'option' );
				if( !empty( $dhero_img ) ): ?>
					<img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="error-img">
				<?php
				endif;
			?>
				<div class="container">
					<div class="row">
						<div class="col-12  content d-flex flex-column justify-content-center align-items-center">
							<div class="site-branding">
								<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            						<?php
            							$main_logo = get_field('main_logo', 'option');
            							if( !empty( $main_logo ) ): ?>
            								<img class="main-logo" src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
            							<?php endif;
            						?>
            					</a>
				        	</div>
							<div class="hero-suptitle">
								<span><?php esc_html_e( 'Page introuvable', 'limo' ); ?></span>
							</div>
							<h1 class="hero-title"><?php esc_html_e( 'Il semblerait que la page que vous cherchez n’existe plus.', 'limo' ); ?></h1>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-link"><?php esc_html_e( 'Retourner à la page d’accueil', 'limo' ); ?></a>
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->		
		<?php
	}	
	?>
</main><!-- #main -->

<?php get_footer(); ?>
