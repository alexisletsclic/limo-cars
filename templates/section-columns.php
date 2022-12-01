<!-- Column section -->
<?php
    $grey =get_field_object('choice_bg');
        $greyval= $grey['value'];
        if($greyval == 'grey'){ ?>
            <section class="text-image <?php echo $greyval; ?>">                    
        <?php } else {?>
            <section class="text-image">                           
        <?php }  ?>

    <div class="container">
        <?php 
            $revert =get_field_object('img_positon');
                if($revert['value'] == 'right') { ?>
                    <div class="row revert">
                <?php } else { ?>
                    <div class="row">
                <?php }
            ?>        
            <div class="col-lg-6 col-md-12 image-block">
                <?php 
                    $text_img = get_field( 'text_image' );
                    if( !empty( $text_img ) ): ?>
                        <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                    <?php
                    endif;
                ?>                
            </div>
            <div class="col-lg-6 col-md-12 d-flex">
                <div class="content-block">
                <?php 
                    $content_pretitle = get_field('content_suptitle');
                    if( !empty($content_pretitle) ):?>
                        <div class="content-suptitle">
                            <span><?php echo $content_pretitle; ?></span>
                        </div>
                    <?php endif;
                    $content_title = get_field( 'content_title' );
                    if( !empty($content_title) ):?>
                        <h2 class="content-title"><?php echo $content_title; ?></h2>
                    <?php endif; 
                    $content_text = get_field('content_text');
                    if( !empty($content_text ) ):?>
                        <div class="content-text">
                            <?php echo $content_text ; ?>
                        </div>
                    <?php endif;
                    $add_equip =get_field('add_equip');                    
                                    
                    if($add_equip == true) {
                        if(have_rows('equipment_list')){ ?>
                            <ul class="eq-list">
                                <?php while(have_rows('equipment_list')) : the_row(); 


                                $select_eq = get_sub_field( 'equipment_item' );
                                $eq_value = $select_eq['value'];
                                $eq_label = $select_eq['label']; 

                                ?>                                
                                <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                                <?php endwhile; ?>   
                            </ul>
                        <?php }   
                    }
                    $content_link = get_field( 'content_link' );
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
