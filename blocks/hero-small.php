<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

<section class="hero-small">
    <div class="container">
        <h1 class="hero-small__title title-s">
            <?php 
                if (!empty($fields['title'])) {
                    echo $fields['title'];
                } else {
                    the_title();
                }
            ?>
        </h1>
        <?php get_template_part('partials/breadcrumbs') ?>
    </div>

    <?php if (!empty($fields['image'])): ?>
        <div class="hero-small__image"><?php insertImage($fields['image'], 'ofc') ?></div>
    <?php endif ?>
</section>

<?php endif ?>
