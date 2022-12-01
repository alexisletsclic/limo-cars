<?php $fields = $args['fields']; ?>

<?php if (!empty($fields) && empty($fields['hide_section'])): ?>
    <?php if(!empty($fields['section_title'])): ?> 
        
        <section class="introduction">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-block">
                          <?php
                            $add_pretitle = $fields['section_suptitle'];
                            if( !empty($add_pretitle) ):?>
                              <div class="section-suptitle">
                                <span><?php echo $add_pretitle; ?></span>
                              </div>
                              <?php endif;
                              $add_title = $fields['section_title'];
                                if( !empty($add_title) ):?>
                                    <h2 class="section-title"><?php echo $add_title; ?></h2>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>
<?php endif; ?>