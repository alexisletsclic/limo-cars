<!-- Section services   -->
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 service-content">

                    <?php
                        $service_pretitle = get_field('service_text');
                        if( !empty($service_pretitle) ):?>
                            <div class="service-suptitle">
                                <span><?php echo $service_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $service_title = get_field( 'service_title' );
                        if( !empty($service_title) ):?>
                            <h2 class="service-title"><?php echo $service_title; ?></h2>
                        <?php endif;
                        $service_desc = get_field('service_description');
                        if( !empty($service_desc) ):?>
                            <div class="service-description">
                                <?php echo $service_desc; ?>
                            </div>
                        <?php endif;
                        $service_link = get_field( 'service_link' );
                        if( $service_link ):
                            $service_link_url = $service_link['url'];
                            $service_link_title = $service_link['title'];
                        ?>
                            <a href="<?php echo esc_url( $service_link_url ); ?>" class="service-link"><?php echo esc_html( $service_link_title ); ?></a>
                        <?php
                        endif;
                    ?>

            </div>
            <div class="service-wrapper">
                <?php
                    if( have_rows('service_slider') ): ?>
                        <div class="service-slider">
                            <?php while( have_rows('service_slider') ): the_row();
                                $item_img = get_sub_field('service_item_image');
                                $item_title =get_sub_field('service_item_title');
                                $item_desc =get_sub_field('service_item_text');
                                $item_link =get_sub_field('service_item_link');
                            ?>
                            <div class="service-item">
                                <?php
                                    if( !empty( $item_img ) ): ?>
                                        <img src="<?php echo esc_url($item_img['url']); ?>"alt="<?php echo esc_attr($item_img['alt']); ?>" class="service-img">
                                    <?php
                                    endif;

                                    if( !empty( $item_title ) ): ?>
                                        <h3 class="service-item-title"><?php echo $item_title; ?></h3>
                                    <?php
                                    endif;

                                ?>
                                <div class="overlay">
                                  <!-- <button class="service-close"></button> -->
                                    <?php
                                    if( !empty( $item_title ) ): ?>
                                        <h3 class="service-item-title"><?php echo $item_title; ?></h3>
                                    <?php
                                    endif;
                                    if( !empty( $item_desc ) ): ?>
                                        <div class="service-item-text">
                                            <?php echo $item_desc; ?>
                                        </div>
                                    <?php
                                    endif;
                                    if( !empty( $item_link ) ): ?>
                                        <a class="service-item-link" href="<?php echo esc_url($item_link['url']) ?>"><?php echo $item_link['title']; ?></a>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                ?>

            </div>
        </div>
    </div>
</section>
