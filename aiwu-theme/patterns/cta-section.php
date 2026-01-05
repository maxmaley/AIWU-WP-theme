<?php
/**
 * Title: CTA Section
 * Slug: aiwu/cta-section
 * Categories: aiwu
 * Description: Call to action section with heading and button.
 * Keywords: cta, call to action, button
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"aiwu-cta-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aiwu-cta-section" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:heading {"textAlign":"center","level":2} -->
    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Ready to automate your WordPress?', 'aiwu' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Start for free. No credit card required.', 'aiwu' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"className":"aiwu-btn-gradient"} -->
        <div class="wp-block-button aiwu-btn-gradient"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Free', 'aiwu' ); ?></a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"is-style-outline"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View Documentation', 'aiwu' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
