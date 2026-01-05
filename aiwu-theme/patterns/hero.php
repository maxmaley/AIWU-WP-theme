<?php
/**
 * Title: Hero Section
 * Slug: aiwu/hero
 * Categories: aiwu
 * Description: Full-width hero section with gradient heading and CTA button.
 * Keywords: hero, header, landing
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"className":"aiwu-hero","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aiwu-hero" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">

    <!-- wp:group {"className":"aiwu-hero__badge","layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-group aiwu-hero__badge">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
        <p style="font-size:0.875rem"><?php esc_html_e( 'Trusted by 1,000+ WordPress sites', 'aiwu' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"textAlign":"center","level":1,"className":"aiwu-hero__title"} -->
    <h1 class="wp-block-heading has-text-align-center aiwu-hero__title"><?php esc_html_e( 'WordPress automations', 'aiwu' ); ?><br><span class="aiwu-gradient-text"><?php esc_html_e( "you'll actually use", 'aiwu' ); ?></span></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","className":"aiwu-hero__subtitle","style":{"typography":{"fontSize":"1.25rem"}}} -->
    <p class="has-text-align-center aiwu-hero__subtitle" style="font-size:1.25rem"><?php esc_html_e( 'Connect AI to your WordPress and build workflows from customer support to content—without code.', 'aiwu' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
        <!-- wp:button {"className":"aiwu-btn-gradient"} -->
        <div class="wp-block-button aiwu-btn-gradient"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Free', 'aiwu' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
