<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Limocars_Theme
 */

if ( ! is_active_sidebar( 'add-event' ) ) {
	return;
}
?>

<aside id="secondary" class="event-area">
	<div class="container">
		<div class="row">
			<div class="news__subtitle subtitle"><?php _e('ne ratez aucun évenement', 'limo'); ?></div>
			<h2 class="news__title title-xs"><?php _e('Agenda Paris & région parisienne', 'limo'); ?></h2>
		</div>
		<div class="row">
			<div class="col-12">
				<?php dynamic_sidebar( 'add-event' ); ?>
			</div>
		</div>
	</div>
	
</aside><!-- #secondary -->
