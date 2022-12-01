<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>


<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 service-content">

                    <?php
                        $service_pretitle = $fields['service_text'];
                        if( !empty($service_pretitle) ):?>
                            <div class="service-suptitle">
                                <span><?php echo $service_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $service_title = $fields['service_title'];
                        if( !empty($service_title) ):?>
                            <h2 class="service-title"><?php echo $service_title; ?></h2>
                        <?php endif;
                        $service_desc = $fields['service_description'];
                        if( !empty($service_desc) ):?>
                            <div class="service-description">
                                <?php echo $service_desc; ?>
                            </div>
                        <?php endif;
                        $service_link = $fields['service_link'];
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
                    if(!empty($fields['service_slider'])): ?>
                        <div class="service-slider">
                            <?php foreach ($fields['service_slider'] as $ss): ?>
                               
                                <?php 
                                    $item_img = $ss['service_item_image'];
                                    $item_title =$ss['service_item_title'];
                                    $item_desc =$ss['service_item_text'];
                                    $item_link =$ss['service_item_link'];
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
                            <?php endforeach ?>
                        </div>
                    <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php endif ?>
