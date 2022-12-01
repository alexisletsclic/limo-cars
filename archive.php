<?php
/*
Template Name: Actualités
*/
?>

<?php get_header(); $fields = get_fields($post->ID);

$hero['title'] = __('Événements & actualités', 'limo');
$hero['image'] = _IMAGES_.'/hero-small-image.png';
?>

	<main id="primary" class="site-main">
	<?php get_template_part('blocks/hero-small', NULL, ['fields' => $hero]); ?>

    <?php get_sidebar(); ?>
	<section class="page-news">
		<div class="news">
            <div class="container">
                <div class="container-inner">
					<?php 
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

					$args = array(
						'posts_per_page' => get_option( 'posts_per_page' ),
						//'posts_per_page' => 1,
						'post_type'   => 'post',
						'suppress_filters' => false,
						'post_status' => 'publish',
						'paged' => $paged,
					);

					$query = new WP_Query();
					$posts = $query->query($args);
					?>

                    <div class="news__subtitle subtitle"><?php _e('Tout savoir sur', 'limo'); ?></div>

                    <h2 class="news__title title-xs"><?php _e('Nos actualités & évenements', 'limo'); ?></h2>

					<div class="news-list">
                        <div class="row">
                            <?php foreach ($posts as $p): ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <?php 
                                        get_template_part(
                                            'partials/news-item', 
                                            NULL, 
                                            array('p' => $p)
                                        ); 
                                    ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
				</div>
            </div>
        </div>
		<?php 
            get_template_part(
                'elements/pagination', 
                NULL, 
                array('query' => $query)
            ); 
        ?>
	</section>
	</main><!-- #main -->
<?php
get_footer();
