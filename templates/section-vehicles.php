<!-- Section  vehicles  -->
<section class="vehicles">
    <div class="container">
        <div class="row">
            <?php 
                $vehicle_pretitle = get_field('vehicle_text');
                if( !empty($vehicle_pretitle) ):?>
                    <div class="vehicles-pretitle">
                        <span><?php echo $vehicle_pretitle; ?></span>
                    </div>
                <?php endif;
                $vehicle_title = get_field( 'vehicle_title' );
                if( !empty($vehicle_title) ):?>
                    <h2 class="vehicles-title"><?php echo $vehicle_title; ?></h2>
                <?php endif; 
                $vehicle_desc = get_field('vehicle_description');
                if( !empty($vehicle_desc) ):?>
                    <div class="vehicles-descr">
                        <?php echo $vehicle_desc; ?>
                    </div>
                <?php endif;                    
            ?> 
            <div class="vehicles-wrap">
                <?php

                
                    if( have_rows('vehicles_slider') ): ?>
                        <div class="vehicles-slider">
                            <?php while( have_rows('vehicles_slider') ): the_row();
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
