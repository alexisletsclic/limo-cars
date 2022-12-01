<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

<!-- Section features -->
<section class="feature">
    <?php
        $feature_img = $fields['feature_image'];
        if( !empty( $feature_img ) ): ?>
            <img src="<?php echo esc_url($feature_img['url']); ?>" alt="<?php echo esc_attr($feature_img['alt']); ?>" class="feature-img">
        <?php
        endif;
        $mob_feature_img = $fields['feature_image_mobile'];
        if( !empty( $mob_feature_img ) ): ?>
            <img src="<?php echo esc_url($mob_feature_img['url']); ?>" alt="<?php echo esc_attr($mob_feature_img['alt']); ?>" class="feature-img-mobile">
        <?php
        endif;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center">
                <?php
                    $feature_suptitle = $fields['feature_suptitle'];
                    if( !empty($feature_suptitle) ):?>
                        <div class="feature-suptitle">
                            <span><?php echo $feature_suptitle; ?></span>
                        </div>
                    <?php endif;
                    $feature_title = $fields['feature_title'];
                    if( !empty($feature_title) ):?>
                        <h2 class="feature-title"><?php echo $feature_title; ?></h2>
                    <?php endif;
                        $feature_descr = $fields['feature_description'];
                        if( !empty($feature_descr ) ):?>
                            <div class="feature-description">
                                <?php echo $feature_descr ; ?>
                            </div>
                        <?php endif;
                            $feature_link = $fields['feature_link'];
                            if( $feature_link ):
                                $feature_link_url = $feature_link['url'];
                                $feature_link_title = $feature_link['title'];
                            ?>
                                <a href="<?php echo esc_url( $feature_link_url ); ?>" class="feature-link"><?php echo esc_html( $feature_link_title ); ?></a>
                            <?php endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php endif ?>
