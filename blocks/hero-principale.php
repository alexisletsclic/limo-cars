<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

<?php
    $form_check = $fields['add_form'];
    if ($form_check == true) { ?>
        <section class="hero" id="order">
            <?php
                $dhero_img = $fields['hero_image_desktop'];
                if( !empty( $dhero_img ) ): ?>
                    <img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="hero-desk-img">
                <?php
                endif;
                $mhero_img = $fields['hero_image_mobile'];
                if( !empty( $mhero_img ) ): ?>
                    <img src="<?php echo esc_url($mhero_img['url']); ?>"alt="<?php echo esc_attr($mhero_img['alt']); ?>" class="hero-mob-img">
                <?php
                endif;
            ?>
            <div class="container">
                <div class="row">          
                    <div class="col-lg-6 col-md-12 content">
                        <div class="site-branding">
                                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <?php
                                                $main_logo = get_field('main_logo', 'option');
                                                if( !empty( $main_logo ) ): ?>
                                                    <img class="main-logo" src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
                                                <?php endif;
                                            ?>
                                        </a>
                                </div>
                        <?php
                            $hero_pretitle = $fields['hero_suptitle'];
                            if( !empty($hero_pretitle) ):?>
                                <div class="hero-suptitle">
                                    <span><?php echo $hero_pretitle; ?></span>
                                </div>
                            <?php endif;
                            $hero_title = $fields['hero_title'];
                            if( !empty($hero_title) ):?>
                                <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                            <?php endif;
                                if ( !is_front_page() && !is_home() ) :
                                    if ( function_exists('yoast_breadcrumb') ) {
                                        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
                                    }
                                endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="action-form">
                            <?php 
                                $hero_form = $fields['hero_form'];

                                if( !empty( $hero_form ) ): 

                                    echo do_shortcode($hero_form);

                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }else { ?>
        <section class="hero-flex" id="order">
            <?php
                $dhero_img = $fields['hero_image_desktop'];
                if( !empty( $dhero_img ) ): ?>
                    <img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="hero-desk-img">
                <?php
                endif;
                $mhero_img = $fields['hero_image_mobile'];
                if( !empty( $mhero_img ) ): ?>
                    <img src="<?php echo esc_url($mhero_img['url']); ?>"alt="<?php echo esc_attr($mhero_img['alt']); ?>" class="hero-mob-img">
                <?php
                endif;
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12  content d-flex flex-column justify-content-center align-items-center">
                        <div class="site-branding">
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php
                                $main_logo = get_field('main_logo', 'option');
                                            if( !empty( $main_logo ) ): ?>
                                                <img class="main-logo" src="<?php echo esc_url($main_logo['url']); ?>"alt="<?php echo esc_attr($main_logo['alt']); ?>">
                                            <?php endif;
                                        ?>
                                </a>
                        </div>
                    <?php
                        $hero_pretitle = $fields['hero_suptitle'];
                        if( !empty($hero_pretitle) ):?>
                            <div class="hero-suptitle">
                                <span><?php echo $hero_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $hero_title = $fields['hero_title'];
                        if( !empty($hero_title) ):?>
                            <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                        <?php endif;
                            if ( !is_front_page() && !is_home() ) :
                                if ( function_exists('yoast_breadcrumb') ) {
                                    yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
                                }
                            endif; ?>
                </div>
                </div>
            </div>
        </section>
        <?php
    } ?>

<?php endif ?>