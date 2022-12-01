<?php 

define( '_IMAGES_', get_stylesheet_directory_uri().'/img' ); //images path

/* insertImage START */
function insertImage($file, $class = '', $width = 100, $height = 100, $return = 0) {
    if (!empty($file)) {

        if(!is_array($file)) {
            if (strpos($file, "http") === 0) {
                $file_url = $file;
            } else {
                $file_url = _IMAGES_.'/'.$file;
            }
            $file_title =  pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        } else {
            $file_url = $file['url'];
            $file_title = $file['alt'];
            $extension = pathinfo($file['filename'], PATHINFO_EXTENSION);
        }

        if (!@file_get_contents($file_url) === false) {
            if ($extension == 'svg') {
                $content = file_get_contents($file_url);
                $content = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $content);
                if ($return) {
                    return $content;
                }

                echo $content;
            } else {
                $content = '<img 
                        class="'.$class.'" 
                        src="'.$file_url. '" 
                        alt="'.$file_title.'"
                        width="'.$width.'"
                        height="'.$height.'" 
                      />';

                if ($return) {
                    return $content;
                }

                echo $content;
            }
        }
    }
}
/* insertImage END */



/* pagination START */

function my_paginate_links($wp_query) {
    global $wp_rewrite;

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $big = 999999999;

    $pagination = array(    
        'base'         => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
        'total'        => $wp_query->max_num_pages,
        'current'      => $paged,
        'format'       => '?paged=%#%',
        'prev_text'    => __('Page précédente', 'theme'),
        'next_text'    => __('Page suivante', 'theme'),
        'type' => 'array',
    );
    if ( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty( $wp_query->query_vars['s'] ) )
            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    $pages = paginate_links( $pagination );

    if ( $paged == 1) echo '<a href="#" class="page-numbers prev disabled">'.__('Page précédente', 'theme').'</a>';
    foreach ($pages as $page) :
        echo $page;
    endforeach;
    if ( $paged == $wp_query->max_num_pages ) echo '<a href="#" class="page-numbers next disabled">'.__('Page suivante', 'theme').'</a>';

}

/* pagination END */
