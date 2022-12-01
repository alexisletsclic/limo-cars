<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>

<?php
    $bg = $fields['choice_bg'];
?>
<section class="text-image <?php echo $bg; ?>">                    
    <div class="container">
        <div class="row <?php echo $fields['img_positon'] == 'right' ? 'revert' : '' ?>">
            <div class="col-lg-6 col-md-12 image-block">
                <?php 
                    $text_img = $fields['text_image'];
                    if( !empty( $text_img ) ): ?>
                        <img src="<?php echo esc_url($text_img['url']); ?>"alt="<?php echo esc_attr($text_img['alt']); ?>" class="content-img">
                    <?php
                    endif;
                ?>                
            </div>
            <div class="col-lg-6 col-md-12 d-flex">
                <div class="content-block">
                <?php 
                    $content_pretitle = $fields['content_suptitle'];
                    if( !empty($content_pretitle) ):?>
                        <div class="content-suptitle">
                            <span><?php echo $content_pretitle; ?></span>
                        </div>
                    <?php endif;
                    $content_title = $fields['content_title'];
                    if( !empty($content_title) ):?>
                        <h2 class="content-title"><?php echo $content_title; ?></h2>
                    <?php endif; 

                    $content_text = $fields['content_text'];
                    if( !empty($content_text ) ):?>
                        <div class="content-text">
                            <div class="content-text__inner not-inited"><?php echo $content_text ; ?></div>
                            <div class="content-text__more hidden" data-text-more="<?php _e('Lire la suite', 'theme') ?>" data-text-less="<?php _e('Réduire le texte') ?>"><?php _e('Lire la suite', 'theme') ?></div>
                        </div>
                    <?php endif;

                    $add_equip =$fields['add_equip'];
                    ?>
                    <?php if ($add_equip == true && !empty($fields['equipment_list'])): ?>
                        <ul class="eq-list">
                            <?php foreach ($fields['equipment_list'] as $f): ?>
                                <?php
                                    $select_eq = $f['equipment_item'];
                                    $eq_value = $select_eq['value'];
                                    $eq_label = $select_eq['label']; 
                                ?>                                
                                <li class="<?php echo $eq_value ?>"><?php echo  $eq_label; ?></li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>        

                    <?php
                    $content_link = $fields['content_link'];
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

<?php endif ?>