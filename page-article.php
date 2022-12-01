<?php
/*
Template Name: Page Article
*/
?>

<?php get_header(); ?>

<?php 
    $fields = get_fields($post->ID);
?>

<article class="page-article">

    <?php get_template_part('blocks/hero-small', NULL, ['fields' => $fields['hero_small']]) ?>

    <section class="page-article__section">
        <div class="container-inner">
            <div class="page-article__wrapper container">
                <div class="page-article__content">
                    <div class="row">
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                            <div class="page-article__info description"><?php the_content() ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</article>

<?php get_footer(); ?>
