<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

    <?php  if(!empty($fields['texte_tem'])): ?>
        <!-- Section with brands -->
        <div class="feature branding">
            <?php
                $feature_img = $fields['img_tem_d'];
                if( !empty( $feature_img ) ): ?>
                    <img src="<?php echo esc_url($feature_img['url']); ?>"alt="<?php echo esc_attr($feature_img['alt']); ?>" class="feature-img">
                <?php
                endif;
                $mob_feature_img = $fields['img_tem_mob'];
                if( !empty( $mob_feature_img ) ): ?>
                    <img src="<?php echo esc_url($mob_feature_img['url']); ?>"alt="<?php echo esc_attr($mob_feature_img['alt']); ?>" class="feature-img-mobile">
                <?php
                endif;
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <?php
                            $feature_suptitle = $fields['titre_tem'];
                            if( !empty($feature_suptitle) ):?>
                                <div class="feature-suptitle">
                                    <span><?php echo $feature_suptitle; ?></span>
                                </div>
                            <?php endif;
                            $feature_text = $fields['texte_tem'];
                                if( !empty($feature_text ) ):?>
                                    <div class="feature-description italic">
                                        <?php echo $feature_text ; ?>
                                    </div>
                                <?php endif;                            
                        ?>
                    </div>
                </div>

                <div class="row">
                    <?php if (!empty($fields['img_logos'])): ?>
                        <ul class="brand-list">
                            <?php foreach ($fields['img_logos'] as $f): ?>
                                <?php $brand_img = $f['brand_item']; ?>
                                <div class="brand-item">
                                    <?php if( !empty( $brand_img ) ): ?>
                                        <img src="<?php echo esc_url($brand_img['url']); ?>"alt="<?php echo esc_attr($brand_img['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            <?php endforeach ?>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>