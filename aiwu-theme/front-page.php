<?php
/**
 * The front page template
 *
 * Content is managed via Gutenberg Block Patterns.
 * Go to Pages > Home > Edit and add the "Hero Section" pattern.
 *
 * @package AIWU
 * @since 1.0.0
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;

get_footer();
