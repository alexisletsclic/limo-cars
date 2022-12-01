<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php 
    $fields = get_fields($post->ID);
    $info = $fields['info'];
    $forms = $fields['forms'];
?>

<div class="page-contact">

    <?php get_template_part('blocks/hero-small', NULL, ['fields' => $fields['hero_small']]) ?>

    <section class="page-contact__section">
        <div class="page-contact__wrapper container">
            <div class="container-inner">
                <div class="page-contact__content">
                    <div class="row">
                        <?php if (!empty($info)): ?>
                            <div class="col-lg-3">
                                <div class="contact-info">
                                    <?php if (!empty($info['subtitle'])): ?>
                                        <div class="contact-info__subtitle subtitle"><?php echo $info['subtitle'] ?></div>
                                    <?php endif ?>

                                    <?php if (!empty($info['title'])): ?>
                                        <h2 class="contact-info__title title-xs"><?php echo $info['title'] ?></h2>
                                    <?php endif ?>

                                    <?php if (!empty($info['address'])): ?>
                                        <div class="contact-info__address"><?php echo $info['address'] ?></div>
                                    <?php endif ?>

                                    <?php if (!empty($info['phone'])): ?>
                                        <a class="contact-info__phone" href="tel:<?php echo str_replace(' ', '', $info['phone']); ?>"><?php echo $info['phone'] ?></a>
                                    <?php endif ?>

                                    <?php if (!empty($info['text'])): ?>
                                        <div class="contact-info__text description"><?php echo $info['text'] ?></div>
                                    <?php endif ?>
                                </div>
                            </div>
                        <?php endif ?>

                        <?php if (!empty($forms)): ?>
                            <div class="contact__gray-zone col-lg-7 offset-lg-2">
                                <div class="contact-forms">
                                    <div class="contact-forms__hint"><?php _e('*Champs obligatoires', 'theme') ?></div>

                                    <?php 
                                        $active_tab = 1;
                                        if (!empty($_GET['tab'])) {
                                            if (is_numeric($_GET['tab'])) {
                                                $active_tab = $_GET['tab'];
                                            }
                                        }
                                        
                                        $i = 1; 
                                    ?>
                                    <div class="contact-forms__tabs">
                                        <?php foreach ($forms as $f): ?>
                                            <div class="contact-forms__tab <?php echo $i == $active_tab ? 'active' : '' ?>" data-form=".contact-form_<?php echo $i ?>"><?php echo $f['tab'] ?></div>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </div>

                                    <?php $i = 1; ?>
                                    <div class="contact-forms__list">
                                        <?php foreach ($forms as $f): ?>
                                            <div class="contact-form contact-form_<?php echo $i ?> <?php echo $i == $active_tab ? 'active' : '' ?>"><?php echo do_shortcode($f['form']) ?></div>
                                            <?php $i++ ?>
                                        <?php endforeach ?>
                                    </div>

                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
