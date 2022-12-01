<section class="sedan">
    <div class="container">
        <div class="row">
            <?php $sedan_pretitle = get_field('sedan_pretitle');
                if( !empty($sedan_pretitle) ):?>
                    <div class="sedan-pretitle">
                        <span><?php echo $sedan_pretitle; ?></span>
                    </div>
                <?php endif;
                    $sedan_title = get_field( 'sedan_title' );
                    if( !empty($sedan_title) ):?>
                        <h2 class="sedan-title"><?php echo $sedan_title; ?></h2>
                <?php endif; ?>
        </row>

        <?php 
            if( have_rows('sedan_slider') ): ?>
                <div class="sedan-slider">
                    <?php while( have_rows('sedan_slider') ): the_row();
                        $item_img = get_sub_field('sedan_item_image');
                        $item_title =get_sub_field('sedan_item_title');
                        $item_desc =get_sub_field('sedan_item_text');
                        ?>
                        <div class="sedan-item">
                            <?php
                            if( !empty( $item_img ) ): ?>
                                <img src="<?php echo esc_url($item_img['url']); ?>"alt="<?php echo esc_attr($item_img['alt']); ?>" class="sedan-img">
                                <?php endif;
                                    if( !empty( $item_title ) ): ?>
                                        <h3 class="sedan-item-title"><?php echo $item_title; ?></h3>
                                    <?php 
                                    endif;    
                                    if( !empty( $item_desc ) ): ?>
                                        <div class="sedan-item-text">
                                            <?php echo $item_desc; ?>
                                        </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>            
        </div>
    </div>
</section>
