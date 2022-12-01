<?php 
    if(empty($args['args'])) {
        $posts_args = array(
            'posts_per_page' => 3,
            'post_type'   => 'post',
            'suppress_filters' => false,
            'post_status' => 'publish',
            'relation' => 'OR',
            'post__not_in' => [get_the_ID()]
        );
    } else {
        $posts_args = $args['args'];
    }

    $query = new WP_Query();
    $posts = $query->query($posts_args);
?>

<?php if (!empty($posts)): ?>
    
<section class="related-news">
    <div class="related-news__wrapper container">
        <div class="related-news__subtitle subtitle"><?php _e('Dans le même thème', 'theme') ?></div>
        <h2 class="related-news__title title-xs"><?php _e('Nos autres actualités', 'theme');?></h2>

        <div class="related-news__list">
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
</section>

<?php endif ?>
