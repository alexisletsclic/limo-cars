<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Limocars_Theme
 */

get_header();
$fields = get_fields($post->ID);

$hero['title'] = __('Événements & actualités', 'limo');
$hero['image'] = _IMAGES_.'/hero-small-image.png';
?>

	<main id="primary" class="site-main">
		<?php get_template_part('blocks/hero-small', NULL, ['fields' => $hero]); ?>

		<section class="page-news">
			<div class="news">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php  while ( have_posts() ) : the_post();
								the_content();
								endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php get_template_part('partials/block-loader'); ?>

<?php
get_footer();
