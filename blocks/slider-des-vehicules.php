<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

<section class="vehicles">
    <div class="container">
        <div class="row">
            <?php 
                $vehicle_pretitle = $fields['vehicle_text'];
                if( !empty($vehicle_pretitle) ):?>
                    <div class="vehicles-pretitle">
                        <span><?php echo $vehicle_pretitle; ?></span>
                    </div>
                <?php endif;
                $vehicle_title = $fields[ 'vehicle_title' ];
                if( !empty($vehicle_title) ):?>
                    <h2 class="vehicles-title"><?php echo $vehicle_title; ?></h2>
                <?php endif; 
                $vehicle_desc = $fields['vehicle_description'];
                if( !empty($vehicle_desc) ):?>
                    <div class="vehicles-descr">
                        <?php echo $vehicle_desc; ?>
                    </div>
                <?php endif;                    
            ?> 
            <div class="vehicles-wrap">
                <?php if(!empty($fields['vehicles_slider'])): ?>
                    <div class="vehicles-slider">
                        <?php foreach ($fields['vehicles_slider'] as $f): ?>
                            <?php
                                $vehicle_img = $f['vehicle_item_image'];
                                $vehicle_item_title =$f['vehicle_item_title'];
                                $vehicle_item_desc =$f['vehicle_item_text'];
                                $vehicle_link =$f['vehicle_item_link'];
                                $vehicle_action_link =$f['vehicle_action_link'];
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
                                    <?php endif; ?>

                                    <?php if (!empty($f['car_equipment_list'])): ?>
                                        <ul class="eq-list">
                                            <?php foreach ($f['car_equipment_list'] as $ce): ?>
                                                <?php 
                                                    $select_eq = $ce['car_equip_item'];
                                                    $eq_value = $select_eq['value'];
                                                    $eq_label = $select_eq['label']; 
                                                ?>
                                                <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    <?php endif ?>

                                    <?php if( !empty( $vehicle_link ) ): ?>
                                        <a class="vehicle-link" href="<?php echo esc_url($vehicle_link['url']) ?>"><?php echo $vehicle_link['title']; ?></a>
                                    <?php 
                                    endif; 
                                    
                                    if( !empty( $vehicle_action_link ) ): ?>
                                        <a class="vehicle-action-link" href="<?php echo esc_url($vehicle_action_link['url']) ?>"><?php echo $vehicle_action_link['title']; ?></a>
                                    <?php 
                                    endif; 
                                ?>     
                            </div>
                        <?php endforeach ?>
                    </div>
                <?php endif; ?>                
            </div>
        </div>
    </div>
</section>

<?php endif ?>