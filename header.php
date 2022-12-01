<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Limocars_Theme
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

<?php 
	$fixed_header = [
		'page-news.php',
		'page-article.php',
		'single.php',
		'index.php'
	];
	$header_class = '';
	if ((get_page_template_slug() && in_array(get_page_template_slug(), $fixed_header)) || get_post_type() == 'post' ) {
		$header_class = 'fixed-size-header';
	}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'limo' ); ?></a>

	<header id="masthead" class="site-header <?php echo $header_class ?>">
		<div class="top-bar">
			<div class="container">
				<nav class="navbar-top">
					<ul class="top-links">
						<li>
							<?php 
								$account_link = get_field('account_link', 'option');
								if( !empty( $account_link ) ): ?>
									<a href="<?php echo $account_link; ?>" class="account"><?php echo esc_html__( 'mon compte', 'limo' )?></a>
								<?php endif;
							?>							
						</li>
						<li>
							<?php
								$phone = get_field( 'phone_header', 'option' );
								if( !empty( $phone ) ): ?>
									<a class="phone-link" href="tel:<?php echo $phone; ?> "><?php echo $phone; ?></a>
								<?php endif; 
							?>
						</li>
					</ul>					
				</nav>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<button class="navbar-toggler">
					<span></span>
				</button>
				<div class="site-branding">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php 
							$main_logo = get_field('main_logo', 'option');
							if( !empty( $main_logo ) ): ?>
								<img class="main-logo" src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
							<?php endif;
							$mini_logo = get_field('logo_mini', 'option');
							if( !empty( $mini_logo ) ): ?>
								<img class="mini-logo" src="<?php echo esc_url($mini_logo['url']); ?>"alt="<?php echo esc_attr($mini_logo['alt']); ?>">
							<?php endif;						
						?>
					</a>
				</div>
				<?php
					wp_nav_menu( [
						'theme_location' => 'menu-header',
						'container_class' => 'collapse navbar-collapse',
						'menu_class' => 'navbar-nav',
						'menu_id' => 'main-menu'
					] );
				?>
				<div class="navbar-right">
					<?php dynamic_sidebar('select-lang'); ?>

					<?php
						$header_link = get_field( 'header_link', 'option' );
						if( $header_link ): 
							$header_link_url = $header_link['url'];
							$header_link_title = $header_link['title'];
						?>
							<a href="<?php echo esc_url( $header_link_url ); ?>" class="header-link"><?php echo esc_html( $header_link_title ); ?></a>
						<?php endif;
					?>
				</div>
			</div>
		</nav>	
		
	</header><!-- #masthead -->
	<div class="menu-modal">
		<?php dynamic_sidebar('select-lang'); ?>
		<div class="site-branding">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php 
					$logo_mobile = get_field('logo_mobile', 'option');
					if( !empty( $logo_mobile ) ): ?>
						<img class="logo-mobile" src="<?php echo esc_url($logo_mobile['url']); ?>"alt="<?php echo esc_attr($logo_mobile['alt']); ?>">
					<?php endif;													
				?>
			</a>
		</div>
		<nav class="mobile-nav-menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-header',
						'container_class' => 'navbar-mobile',
						'menu_class' => 'navbar-nav',
						'menu_id' => 'main-menu'
					)
				);					
			?>
		</nav>
		<ul class="top-links">
			<li>
				<?php 
					$account_link = get_field('account_link', 'option');
					if( !empty( $account_link ) ): ?>
						<a href="<?php echo $account_link; ?>" class="account"><?php echo esc_html__( 'mon compte', 'limo' )?></a>
					<?php endif;
				?>							
			</li>
			<li>
				<?php
					$phone = get_field( 'phone_header', 'option' );
					if( !empty( $phone ) ): ?>
						<a class="phone-link" href="tel:<?php echo $phone; ?> "><?php echo $phone; ?></a>
					<?php endif; 
				?>
			</li>
		</ul>
		<?php
			$header_link = get_field( 'header_link', 'option' );
			if( $header_link ): 
				$header_link_url = $header_link['url'];
				$header_link_title = $header_link['title'];
			?>
				<a href="<?php echo esc_url( $header_link_url ); ?>" class="header-link"><?php echo esc_html( $header_link_title ); ?></a>
			<?php endif;
		?>
	</div>	
