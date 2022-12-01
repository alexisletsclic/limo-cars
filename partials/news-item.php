<?php 
    $p = $args['p'];
    $cats = get_the_category($p->ID);
    $cat_name = '';

    if (!empty($cats)) {
        foreach ( $cats as $cat ) {
            $cat_name .= '<a class="actu-category" href="' . get_category_link($cat->term_id) . '"#news-panel>' .$cat->name . '</a>, ';
        }
        $cat_name = rtrim( $cat_name, ', ' );
    }
?>

<a class="news-item" href="<?php echo get_permalink($p); ?>">
    <div class="news-item__image">
        <?php if (has_post_thumbnail($p)): ?>
            <?php echo get_the_post_thumbnail($p->ID, 'news-slider', array('class' => 'image')) ?>
        <?php endif ?>
    </div>

    <div class="news-item__content">
        <div class="news-item__date"><?php echo get_the_date('d M Y', $p->ID) ?></div>
        <div class="news-item__title"><?php echo get_the_title($p); ?></div>
        <div class="news-item__text"><?php echo get_the_excerpt($p) ?></div>
        <span class="news-item__link"><?php insertImage('news-item-arrow.svg') ?><span><?php _e('Lire l’article', 'theme') ?></span></span>
    </div>
</a>
