<?php get_header(); ?>

<?php 
    $fields = get_fields($post->ID);

    $hero['title'] = __('Événements & actualités', 'theme');
    $hero['image'] = _IMAGES_.'/hero-small-image.png';
?>

<article class="article">

    <?php get_template_part('blocks/hero-small', NULL, ['fields' => $hero]) ?>

    <section class="article__section">
        <div class="article__wrapper container">
            <div class="container-inner">
                <div class="article__content">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">

                            <?php if (has_post_thumbnail($post)): ?>
                                <div class="article__image-wrap">
                                    <div class="article__image">
                                        <?php echo get_the_post_thumbnail($post->ID, 'article', array('class' => 'ofc')) ?>
                                    </div>
                                </div>
                            <?php endif ?>

                            <div class="article__date"><?php echo get_the_date('d M Y', $post->ID) ?></div>

                            <h2 class="article__title title-xs"><?php the_title() ?></h2>

                            <?php if (!empty($fields['subtitle'])): ?>
                                <div class="article__subtitle"><?php echo $fields['subtitle'] ?></div>
                            <?php endif ?>

                            <div class="article__info description"><?php the_content() ?></div>
                        </div>

                        <div class="col-lg-2 social-block">
                            <div class="share-sticky">
                                <div class="share-sticky__text"><?php _e('Partager', 'limo') ?></div>
                                <div class="share-sticky__list"><?php get_template_part('partials/share') ?> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('blocks/related-news', NULL, ['id' => 'related-news']) ?>
</article>

<?php get_footer(); ?>
