<?php
/*
    Template Name: Service page
    Template Post Type: post, page, services
 */
get_header(); ?>
<main id="primary" class="site-main">

    <?php 
        $hero_service = get_field( 'hero_banner' );     
        if(!empty($hero_service['hero_title'] )): ?>
            
            <?php
            $form_check = get_field('add_form');
            if ($form_check == true) { ?>
                <!-- Hero section -->
                <section class="hero" id="order">
                    <?php
                        $dhero_img = get_field( 'hero_image_desktop' );
                        if( !empty( $dhero_img ) ): ?>
                            <img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="hero-desk-img">
                        <?php
                        endif;
                        $mhero_img = get_field( 'hero_image_mobile' );
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
                                    $hero_pretitle = get_field('hero_suptitle');
                                    if( !empty($hero_pretitle) ):?>
                                        <div class="hero-suptitle">
                                            <span><?php echo $hero_pretitle; ?></span>
                                        </div>
                                    <?php endif;
                                    $hero_title = get_field( 'hero_title' );
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
                                        $hero_form = get_field('hero_form');

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
                <!-- Hero section -->
                <section class="hero-flex" id="order">
                    <?php
                        $dhero_img = get_field( 'hero_image_desktop' );
                        if( !empty( $dhero_img ) ): ?>
                            <img src="<?php echo esc_url($dhero_img['url']); ?>"alt="<?php echo esc_attr($dhero_img['alt']); ?>" class="hero-desk-img">
                        <?php
                        endif;
                        $mhero_img = get_field( 'hero_image_mobile' );
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
                                $hero_pretitle = get_field('hero_suptitle');
                                if( !empty($hero_pretitle) ):?>
                                    <div class="hero-suptitle">
                                        <span><?php echo $hero_pretitle; ?></span>
                                    </div>
                                <?php endif;
                                $hero_title = get_field( 'hero_title' );
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
            }
        endif;   
        $serv_intro = get_field( 'intro_serv' );    
        if(!empty($serv_intro['section_title'])):?>
        <!-- Introduction section -->
        <section class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-block">
                            <?php
                                $add_pretitle = get_field('intro_serv_section_suptitle');
                                if( !empty($add_pretitle) ):?>
                                  <div class="section-suptitle">
                                    <span><?php echo $add_pretitle; ?></span>
                                  </div>
                                <?php endif;
                                   $add_title = get_field( 'intro_serv_section_title' );
                                    if( !empty($add_title) ):?>
                                        <h2 class="section-title"><?php echo $add_title; ?></h2>
                                <?php endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;
        $custom_cont = get_field( 'custom_content' );
        if(!empty($custom_cont['content_title'])): 
            $grey =get_field_object('custom_content_choice_bg');
                $greyval= $grey['value'];
                if($greyval == 'grey'){ ?>
                    <!-- Custom text block -->
                    <section class="text-image <?php echo $greyval; ?>">
                <?php } else {?>
                    <!-- Custom text block -->
                    <section class="text-image">
                <?php }  ?>
                <div class="container">
                <?php
                    $revert =get_field_object('custom_content_img_positon');
                        if($revert['value'] == 'right') { ?>
                            <div class="row revert">
                        <?php } else { ?>
                            <div class="row">
                        <?php }
                    ?>
                        <div class="col-lg-6 col-md-12">
                            <?php
                                $text_img = get_field( 'custom_content_text_image' );
                                if( !empty( $text_img ) ): ?>
                                    <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                                <?php
                                endif;
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-12 d-flex">
                            <div class="content-block">
                            <?php
                                $content_pretitle = get_field('custom_content_content_suptitle');
                                if( !empty($content_pretitle) ):?>
                                    <div class="content-suptitle">
                                        <span><?php echo $content_pretitle; ?></span>
                                    </div>
                                <?php endif;
                                $content_title = get_field( 'custom_content_content_title' );
                                if( !empty($content_title) ):
                                    if($add_block== true){ ?>
                                        <h3 class="content-title"><?php echo $content_title; ?></h3>
                                    <?php } else { ?>
                                        <h2 class="content-title"><?php echo $content_title; ?></h2>
                                    <?php }
                                endif;
                                $content_text = get_field('custom_content_content_text');
                                if( !empty($content_text ) ):?>
                                    <div class="content-text">
                                        <?php echo $content_text ; ?>
                                    </div>
                                <?php endif;
                                    $add_equip =get_field('custom_content_add_equip');                    
                                    
                                    if($add_equip == true) {
                                        if(have_rows('custom_content_equipment_list')){ ?>
                                            <ul class="eq-list">
                                                <?php while(have_rows('custom_content_equipment_list')) : the_row(); 

                                                    $select_eq = get_sub_field( 'equipment_item' );
                                                    $eq_value = $select_eq['value'];
                                                    $eq_label = $select_eq['label']; 

                                                ?>                                
                                                <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                                <?php endwhile; ?>   
                                            </ul>
                                        <?php }   
                                    }
                                $content_link = get_field( 'custom_content_content_link' );
                                if( $content_link ):
                                    $content_link_url = $content_link['url'];
                                    $content_link_title = $content_link['title'];
                                ?>
                                    <a href="<?php echo esc_url( $content_link_url ); ?>" class="content-link"><?php echo esc_html( $content_link_title ); ?></a>
                                <?php endif;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif;
        $full_cont = get_field( 'fullwidth_image' );
        if(!empty($full_cont['feature_title'])): ?>
            <!-- Presentation  section-->
            <section class="feature">
                <?php
                    $feature_img = get_field( 'fullwidth_image_feature_image' );
                    if( !empty( $feature_img ) ): ?>
                        <img src="<?php echo esc_url($feature_img['url']); ?>"alt="<?php echo esc_attr($feature_img['alt']); ?>" class="feature-img">
                    <?php
                    endif;
                    $mob_feature_img = get_field( 'fullwidth_image_feature_image_mobile' );
                    if( !empty( $mob_feature_img ) ): ?>
                        <img src="<?php echo esc_url($mob_feature_img['url']); ?>"alt="<?php echo esc_attr($mob_feature_img['alt']); ?>" class="feature-img-mobile">
                    <?php
                    endif;
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-column align-items-center">
                            <?php
                                $feature_suptitle = get_field('fullwidth_image_feature_suptitle');
                                if( !empty($feature_suptitle) ):?>
                                    <div class="feature-suptitle">
                                        <span><?php echo $feature_suptitle; ?></span>
                                    </div>
                                <?php endif;
                                $feature_title = get_field( 'fullwidth_image_feature_title' );
                                if( !empty($feature_title) ):?>
                                    <h2 class="feature-title"><?php echo $feature_title; ?></h2>
                                <?php endif;
                                    $feature_descr = get_field('fullwidth_image_feature_description');
                                    if( !empty($feature_descr ) ):?>
                                        <div class="feature-description">
                                            <?php echo $feature_descr ; ?>
                                        </div>
                                    <?php endif;
                                        $feature_link = get_field( 'fullwidth_image_feature_link' );
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
        <?php endif; ?>
    
    <?php
    $revert_cont = get_field( 'revert_block' );
    if(!empty( $revert_cont['content_title'])): 
    $grey =get_field_object('revert_block_choice_bg');
        $greyval= $grey['value'];
        if($greyval == 'grey'){ ?>
            <!-- Custom content block -->
            <section class="text-image <?php echo $greyval; ?>">
        <?php } else {?>
            <!-- Custom content block -->
            <section class="text-image">
        <?php }  ?>

        <div class="container">
            <?php
                $revert =get_field_object('revert_block_img_positon');
                    if($revert['value'] == 'right') { ?>
                        <div class="row revert">
                    <?php } else { ?>
                        <div class="row">
                    <?php }
                ?>
                <div class="col-lg-6 col-md-12 image-block">
                    <?php
                        $text_img = get_field( 'revert_block_text_image' );
                        if( !empty( $text_img ) ): ?>
                            <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                        <?php
                        endif;
                    ?>
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <div class="content-block">
                    <?php
                        $content_pretitle = get_field('revert_block_content_suptitle');
                        if( !empty($content_pretitle) ):?>
                            <div class="content-suptitle">
                                <span><?php echo $content_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $content_title = get_field( 'revert_block_content_title' );
                        if( !empty($content_title) ):?>
                            <h2 class="content-title"><?php echo $content_title; ?></h2>
                        <?php endif;
                        $content_text = get_field('revert_block_content_text');
                        if( !empty($content_text ) ):?>
                            <div class="content-text">
                                <?php echo $content_text ; ?>
                            </div>
                        <?php endif;
                        $add_equip =get_field('revert_block_add_equip');

                        if($add_equip == true) {
                            if(have_rows('revert_block_equipment_list')){ ?>
                                <ul class="eq-list">
                                    <?php while(have_rows('revert_block_equipment_list')) : the_row();


                                    $select_eq = get_sub_field( 'equipment_item' );
                                    $eq_value = $select_eq['value'];
                                    $eq_label = $select_eq['label'];

                                    ?>
                                    <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php }
                        }
                        $content_link = get_field( 'revert_block_content_link' );
                        if( $content_link ):
                            $content_link_url = $content_link['url'];
                            $content_link_title = $content_link['title'];
                        ?>
                            <a href="<?php echo esc_url( $content_link_url ); ?>" class="content-link"><?php echo esc_html( $content_link_title ); ?></a>
                        <?php endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;
    $grey_cont = get_field( 'grey_content' );

    if(!empty($grey_cont['content_title'])):

    $grey =get_field_object('grey_content_choice_bg');
        $greyval= $grey['value'];
        if($greyval == 'grey'){ ?>
            <!-- Custom content block -->
            <section class="text-image <?php echo $greyval; ?>">
        <?php } else {?>
            <!-- Custom content block -->
            <section class="text-image">
        <?php }  ?>

        <div class="container">
            <?php
                $revert =get_field_object('grey_content_img_positon');
                    if($revert['value'] == 'right') { ?>
                        <div class="row revert">
                    <?php } else { ?>
                        <div class="row">
                    <?php }
                ?>
                <div class="col-lg-6 col-md-12 image-block">
                    <?php
                        $text_img = get_field( 'grey_content_text_image' );
                        if( !empty( $text_img ) ): ?>
                            <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                        <?php
                        endif;
                    ?>
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <div class="content-block">
                    <?php
                        $content_pretitle = get_field('grey_content_content_suptitle');
                        if( !empty($content_pretitle) ):?>
                            <div class="content-suptitle">
                                <span><?php echo $content_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $content_title = get_field( 'grey_content_content_title' );
                        if( !empty($content_title) ):?>
                            <h2 class="content-title"><?php echo $content_title; ?></h2>
                        <?php endif;
                        $content_text = get_field('grey_content_content_text');
                        if( !empty($content_text ) ):?>
                            <div class="content-text">
                                <?php echo $content_text ; ?>
                            </div>
                        <?php endif;
                        $add_equip =get_field('grey_content_add_equip');

                        if($add_equip == true) {
                            if(have_rows('grey_content_equipment_list')){ ?>
                                <ul class="eq-list">
                                    <?php while(have_rows('grey_content_equipment_list')) : the_row();


                                    $select_eq = get_sub_field( 'equipment_item' );
                                    $eq_value = $select_eq['value'];
                                    $eq_label = $select_eq['label'];

                                    ?>
                                    <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php }
                        }
                        $content_link = get_field( 'grey_content_content_link' );
                        if( $content_link ):
                            $content_link_url = $content_link['url'];
                            $content_link_title = $content_link['title'];
                        ?>
                            <a href="<?php echo esc_url( $content_link_url ); ?>" class="content-link"><?php echo esc_html( $content_link_title ); ?></a>
                        <?php endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;
        $revert_cont = get_field( 'second_revert_block' );
        if(!empty($revert_cont['content_title'])): ?>
        <?php
        $grey =get_field_object('second_revert_block_choice_bg');
        $greyval= $grey['value'];
        if($greyval == 'grey'){ ?>
            <!-- Custom text block -->
            <section class="text-image <?php echo $greyval; ?>">
        <?php } else {?>
            <!-- Custom text block -->
            <section class="text-image">
        <?php }  ?>
        <div class="container">
            <?php
                $revert =get_field_object('second_revert_block_img_positon');
                    if($revert['value'] == 'right') { ?>
                        <div class="row revert">
                    <?php } else { ?>
                        <div class="row">
                    <?php }
                ?>
                <div class="col-lg-6 col-md-12 image-block">
                    <?php
                        $text_img = get_field( 'second_revert_block_text_image' );
                        if( !empty( $text_img ) ): ?>
                            <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                        <?php
                        endif;
                    ?>
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <div class="content-block">
                    <?php
                        $content_pretitle = get_field('second_revert_block_content_suptitle');
                        if( !empty($content_pretitle) ):?>
                            <div class="content-suptitle">
                                <span><?php echo $content_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $content_title = get_field( 'second_revert_block_content_title' );
                        if( !empty($content_title) ):?>
                            <h2 class="content-title"><?php echo $content_title; ?></h2>
                        <?php endif;
                        $content_text = get_field('second_revert_block_content_text');
                        if( !empty($content_text ) ):?>
                            <div class="content-text">
                                <?php echo $content_text ; ?>
                            </div>
                        <?php endif;
                        $add_equip =get_field('second_revert_block_add_equip');

                        if($add_equip == true) {
                            if(have_rows('second_revert_block_equipment_list')){ ?>
                                <ul class="eq-list">
                                    <?php while(have_rows('second_revert_block_equipment_list')) : the_row();


                                    $select_eq = get_sub_field( 'equipment_item' );
                                    $eq_value = $select_eq['value'];
                                    $eq_label = $select_eq['label'];

                                    ?>
                                    <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php }
                        }
                        $content_link = get_field( 'second_revert_block_content_link' );
                        if( $content_link ):
                            $content_link_url = $content_link['url'];
                            $content_link_title = $content_link['title'];
                        ?>
                            <a href="<?php echo esc_url( $content_link_url ); ?>" class="content-link"><?php echo esc_html( $content_link_title ); ?></a>
                        <?php endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; 
    $temo_cont = get_field( 'temoignage' );
    if(!empty($temo_cont['texte_tem'])): ?>
        <!--  Section with Brands   -->
        <div class="feature branding">
        <?php
            $feature_img = get_field( 'temoignage_img_tem_d' );
            if( !empty( $feature_img ) ): ?>
                <img src="<?php echo esc_url($feature_img['url']); ?>"alt="<?php echo esc_attr($feature_img['alt']); ?>" class="feature-img">
            <?php
            endif;
            $mob_feature_img = get_field( 'temoignage_img_tem_mob' );
            if( !empty( $mob_feature_img ) ): ?>
                <img src="<?php echo esc_url($mob_feature_img['url']); ?>"alt="<?php echo esc_attr($mob_feature_img['alt']); ?>" class="feature-img-mobile">
            <?php
            endif;
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <?php
                            $feature_suptitle = get_field('temoignage_titre_tem');
                            if( !empty($feature_suptitle) ):?>
                                <div class="feature-suptitle">
                                    <span><?php echo $feature_suptitle; ?></span>
                                </div>
                            <?php endif;
                            $feature_text = get_field('temoignage_texte_tem');
                                if( !empty($feature_text ) ):?>
                                    <div class="feature-description italic">
                                        <?php echo $feature_text ; ?>
                                    </div>
                                <?php endif;                            
                        ?>
                    </div>
                </div>
                <div class="row">
                    <?php if( have_rows('temoignage_img_logos') ): ?>
                        <ul class="brand-list">
                            <?php while( have_rows('temoignage_img_logos') ): the_row();
                                $brand_img = get_sub_field('brand_item'); ?>
                                <div class="brand-item">
                                    <?php if( !empty( $brand_img ) ): ?>
                                        <img src="<?php echo esc_url($brand_img['url']); ?>"alt="<?php echo esc_attr($brand_img['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; 
    $car_cont = get_field( 'serv_v' );
    if(!empty($car_cont['vehicle_title'])): ?>
    <!-- Vehicles section -->
    <section class="vehicles">
        <div class="container">
            <div class="row">
                <?php 
                    $vehicle_pretitle = get_field('serv_v_vehicle_text');
                    if( !empty($vehicle_pretitle) ):?>
                        <div class="vehicles-pretitle">
                            <span><?php echo $vehicle_pretitle; ?></span>
                        </div>
                    <?php endif;
                    $vehicle_title = get_field( 'serv_v_vehicle_title' );
                    if( !empty($vehicle_title) ):?>
                        <h2 class="vehicles-title"><?php echo $vehicle_title; ?></h2>
                    <?php endif; 
                    $vehicle_desc = get_field('serv_v_vehicle_description');
                    if( !empty($vehicle_desc) ):?>
                        <div class="vehicles-descr">
                            <?php echo $vehicle_desc; ?>
                        </div>
                    <?php endif;                    
                ?> 
                <div class="vehicles-wrap">
                    <?php
                        if( have_rows('serv_v_vehicles_slider') ): ?>
                            <div class="vehicles-slider">
                                <?php while( have_rows('serv_v_vehicles_slider') ): the_row();
                                    $vehicle_img = get_sub_field('vehicle_item_image');
                                    $vehicle_item_title =get_sub_field('vehicle_item_title');
                                    $vehicle_item_desc =get_sub_field('vehicle_item_text');
                                    $vehicle_link =get_sub_field('vehicle_item_link');
                                    $vehicle_action_link =get_sub_field('vehicle_action_link');
                                ?>
                                <div class="vehicle-item">
                                    <?php
                                        if( !empty( $vehicle_img ) ): ?>
                                            <img src="<?php echo esc_url($vehicle_img['url']); ?>"alt="<?php echo esc_attr($vehicle_img['alt']); ?>" class="vehicle-img">
                                        <?php
                                        endif;

                                        if( !empty( $vehicle_item_title ) ): ?>
                                            <h3 class="vehicle-item-title"><?php echo $vehicle_item_title; ?></h3>
                                        <?php 
                                        endif;    
                                        if( !empty( $vehicle_item_desc ) ): ?>
                                            <div class="vehicle-item-text">
                                                <?php echo $vehicle_item_desc; ?>
                                            </div>
                                        <?php 
                                        endif; 
                                        if(have_rows('car_equipment_list')){ ?>
                                                <ul class="eq-list">
                                                    <?php while(have_rows('car_equipment_list')) : the_row(); 
                                                    $select_eq = get_sub_field( 'car_equip_item' );
                                                    $eq_value = $select_eq['value'];
                                                    $eq_label = $select_eq['label']; 
                                                    ?>                                
                                                    <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                                    <?php endwhile; ?>   
                                                </ul>
                                        <?php }   
                                        
                                        if( !empty( $vehicle_link ) ): ?>
                                            <a class="vehicle-link" href="<?php echo esc_url($vehicle_link['url']) ?>"><?php echo $vehicle_link['title']; ?></a>
                                        <?php 
                                        endif; 
                                        
                                        if( !empty( $vehicle_action_link ) ): ?>
                                            <a class="vehicle-action-link" href="<?php echo esc_url($vehicle_action_link['url']) ?>"><?php echo $vehicle_action_link['title']; ?></a>
                                        <?php 
                                        endif; 
                                    ?>     
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; 
                    ?>                
                </div>
            </div>
        </div>
    </section>
    <?php endif; 
    $slider_cont = get_field( 'serv_s' );
    if(!empty($slider_cont['service_title'])): ?>
        <!-- Section services   -->
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 service-content">
                        <?php
                            $service_pretitle = get_field('serv_s_service_text');
                            if( !empty($service_pretitle) ):?>
                                <div class="service-suptitle">
                                    <span><?php echo $service_pretitle; ?></span>
                                </div>
                            <?php endif;
                            $service_title = get_field( 'serv_s_service_title' );
                            if( !empty($service_title) ):?>
                                <h2 class="service-title"><?php echo $service_title; ?></h2>
                            <?php endif;
                            $service_desc = get_field('serv_s_service_description');
                            if( !empty($service_desc) ):?>
                                <div class="service-description">
                                    <?php echo $service_desc; ?>
                                </div>
                            <?php endif;
                            $service_link = get_field( 'serv_s_service_link' );
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
                            if( have_rows('serv_s_service_slider') ): ?>
                                <div class="service-slider">
                                    <?php while( have_rows('serv_s_service_slider') ): the_row();
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
    <?php endif; ?>

</main><!-- #main -->

<?php
get_footer();
