<?php
/*
    Template Name: Vehicules page
    Template Post Type: post, page, vehicules
 */
get_header(); ?>

<main id="primary" class="site-main">
    <?php 
        $hero_car = get_field( 'v_hero_banner' );
        if(!empty($hero_car['hero_title'])): ?>
        <!-- Hero section --> 
        <?php
            $form_check = get_field('add_form');
            if ($form_check == true) { ?>
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
    $veh_intro = get_field( 'intro_veh' );
    if(!empty($veh_intro['section_title'])): ?>  
    <!-- Introduction section -->  
        <section class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-block">
                          <?php
                            $add_pretitle = get_field('intro_veh_section_suptitle');
                            if( !empty($add_pretitle) ):?>
                              <div class="section-suptitle">
                                <span><?php echo $add_pretitle; ?></span>
                              </div>
                              <?php endif;
                              $add_title = get_field( 'intro_veh_section_title' );
                                        if( !empty($add_title) ):?>
                                        <h2 class="section-title"><?php echo $add_title; ?></h2>
                                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
    <?php
        $veh_cont = get_field( 'veh' );
    if(!empty($veh_cont['content_title'])): 
        $grey =get_field_object('veh_choice_bg');
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
                    $revert =get_field_object('veh_img_positon');
                        if($revert['value'] == 'right') { ?>
                            <div class="row revert">
                        <?php } else { ?>
                            <div class="row">
                        <?php }
                    ?>        
                    <div class="col-lg-6 col-md-12 image-block">
                        <?php 
                            $text_img = get_field( 'veh_text_image' );
                            if( !empty( $text_img ) ): ?>
                                <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                            <?php
                            endif;
                        ?>                
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="content-block">
                        <?php 
                            $content_pretitle = get_field('veh_content_suptitle');
                            if( !empty($content_pretitle) ):?>
                                <div class="content-suptitle">
                                    <span><?php echo $content_pretitle; ?></span>
                                </div>
                            <?php endif;
                            $content_title = get_field( 'veh_content_title' );
                            if( !empty($content_title) ):?>
                                <h2 class="content-title"><?php echo $content_title; ?></h2>
                            <?php endif; 
                            $content_text = get_field('veh_content_text');
                            if( !empty($content_text ) ):?>
                                <div class="content-text">
                                    <?php echo $content_text ; ?>
                                </div>
                            <?php endif;
                            $add_equip =get_field('veh_add_equip');                    
                                            
                            if($add_equip == true) {
                                if(have_rows('veh_equipment_list')){ ?>
                                    <ul class="eq-list">
                                        <?php while(have_rows('veh_equipment_list')) : the_row(); 
                                        $select_eq = get_sub_field( 'equipment_item' );
                                        $eq_value = $select_eq['value'];
                                        $eq_label = $select_eq['label']; 
                                        ?>                                
                                        <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                        <?php endwhile; ?>   
                                    </ul>
                                <?php }   
                            }
                            $content_link = get_field( 'veh_content_link' );
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
    $slider = get_field( 'slider_images' );
    if(!empty($slider['sedan_title'])): ?>
        <!-- Slider -->
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
    <?php endif; 
        $eq_cont = get_field( 'custom_eq' );
        if(!empty($eq_cont['content_title'])):             
            $grey =get_field_object('custom_eq_choice_bg');
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
                $revert =get_field_object('custom_eq_img_positon');
                    if($revert['value'] == 'right') { ?>
                        <div class="row revert">
                    <?php } else { ?>
                        <div class="row">
                    <?php }
                ?>        
                <div class="col-lg-6 col-md-12 image-block">
                    <?php 
                        $text_img = get_field( 'custom_eq_text_image' );
                        if( !empty( $text_img ) ): ?>
                            <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                        <?php
                        endif;
                    ?>                
                </div>
                <div class="col-lg-6 col-md-12 d-flex">
                    <div class="content-block">
                    <?php 
                        $content_pretitle = get_field('custom_eq_content_suptitle');
                        if( !empty($content_pretitle) ):?>
                            <div class="content-suptitle">
                                <span><?php echo $content_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $content_title = get_field( 'custom_eq_content_title' );
                        if( !empty($content_title) ):?>
                            <h2 class="content-title"><?php echo $content_title; ?></h2>
                        <?php endif; 
                        $content_text = get_field('custom_eq_content_text');
                        if( !empty($content_text ) ):?>
                            <div class="content-text">
                                <?php echo $content_text ; ?>
                            </div>
                        <?php endif;
                        $add_equip =get_field('custom_eq_add_equip');  
                                        
                        if($add_equip == true) {

                            if(have_rows('custom_eq_equipment_list')) { ?>
                                <ul class="eq-list">
                                    
                                    <?php while(have_rows('custom_eq_equipment_list')) : the_row(); 

                                    $select_eq = get_sub_field( 'equipment_item' );
                                    $eq_value = $select_eq['value'];
                                    $eq_label = $select_eq['label']; 

                                    ?>                                
                                    <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                    <?php endwhile; ?>   
                                </ul>
                            <?php }   
                        }
                        $content_link = get_field( 'custom_eq_content_link' );
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
    $cars_eq_cont = get_field( 's_cars' );
    
    if(!empty($cars_eq_cont['vehicle_title'])) : ?>
        <!-- Section vehicles with equipment -->
        <section class="vehicles">
            <div class="container">
                <div class="row">
                    <?php 
                        $vehicle_pretitle = get_field('s_cars_vehicle_text');
                        if( !empty($vehicle_pretitle) ):?>
                            <div class="vehicles-pretitle">
                                <span><?php echo $vehicle_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $vehicle_title = get_field( 's_cars_vehicle_title' );
                        if( !empty($vehicle_title) ):?>
                            <h2 class="vehicles-title"><?php echo $vehicle_title; ?></h2>
                        <?php endif; 
                        $vehicle_desc = get_field('s_cars_vehicle_description');
                        if( !empty($vehicle_desc) ):?>
                            <div class="vehicles-descr">
                                <?php echo $vehicle_desc; ?>
                            </div>
                        <?php endif;                    
                    ?> 
                    <div class="vehicles-wrap">
                        <?php
                            if( have_rows('s_cars_vehicles_slider') ): ?>
                                <div class="vehicles-slider equipments">
                                    <?php while( have_rows('s_cars_vehicles_slider') ): the_row();
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
    $brands_cont = get_field( 'veh_brands' );

    if(!empty($brands_cont['texte_tem'])): ?>    
        <!--  Section with Brands   -->    
        <div class="feature branding">
        <?php
            $feature_img = get_field( 'veh_brands_img_tem_d' );
            if( !empty( $feature_img ) ): ?>
                <img src="<?php echo esc_url($feature_img['url']); ?>"alt="<?php echo esc_attr($feature_img['alt']); ?>" class="feature-img">
            <?php
            endif;
            $mob_feature_img = get_field( 'veh_brands_img_tem_mob' );
            if( !empty( $mob_feature_img ) ): ?>
                <img src="<?php echo esc_url($mob_feature_img['url']); ?>"alt="<?php echo esc_attr($mob_feature_img['alt']); ?>" class="feature-img-mobile">
            <?php
            endif;
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center">
                        <?php
                            $feature_suptitle = get_field('veh_brands_titre_tem');
                            if( !empty($feature_suptitle) ):?>
                                <div class="feature-suptitle">
                                    <span><?php echo $feature_suptitle; ?></span>
                                </div>
                            <?php endif;
                            $feature_text = get_field('veh_brands_texte_tem');
                                if( !empty($feature_text ) ):?>
                                    <div class="feature-description italic">
                                        <?php echo $feature_text ; ?>
                                    </div>
                                <?php endif;                            
                        ?>
                    </div>
                </div>
                <div class="row">
                    <?php if( have_rows('veh_brands_img_logos') ): ?>
                        <ul class="brand-list">
                            <?php while( have_rows('veh_brands_img_logos') ): the_row();                       

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
    $veh_sec_cont = get_field( 'veh_sec' );
    if(!empty($veh_sec_cont['vehicle_title'])) : ?>
        <!-- Section vehicles  -->
        <section class="vehicles">
            <div class="container">
                <div class="row">
                    <?php 
                        $vehicle_pretitle = get_field('veh_sec_vehicle_text');
                        if( !empty($vehicle_pretitle) ):?>
                            <div class="vehicles-pretitle">
                                <span><?php echo $vehicle_pretitle; ?></span>
                            </div>
                        <?php endif;
                        $vehicle_title = get_field( 'veh_sec_vehicle_title' );
                        if( !empty($vehicle_title) ):?>
                            <h2 class="vehicles-title"><?php echo $vehicle_title; ?></h2>
                        <?php endif; 
                        $vehicle_desc = get_field('veh_sec_vehicle_description');
                        if( !empty($vehicle_desc) ):?>
                            <div class="vehicles-descr">
                                <?php echo $vehicle_desc; ?>
                            </div>
                        <?php endif;                    
                    ?> 
                    <div class="vehicles-wrap">
                        <?php
                            if( have_rows('veh_sec_vehicles_slider') ): ?>
                                <div class="vehicles-slider">
                                    <?php while( have_rows('veh_sec_vehicles_slider') ): the_row();
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
    <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();
