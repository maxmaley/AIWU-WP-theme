<?php
/**
 * The front page template
 *
 * @package AIWU
 * @since 1.0.0
 */

get_header();

// Hero Section
get_template_part( 'template-parts/hero/hero' );

// Additional sections can be added here:
// get_template_part( 'template-parts/sections/features' );
// get_template_part( 'template-parts/sections/pricing' );
// get_template_part( 'template-parts/sections/testimonials' );
// get_template_part( 'template-parts/sections/cta' );

get_footer();
