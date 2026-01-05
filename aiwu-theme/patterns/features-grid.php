<?php
/**
 * Title: Features Grid
 * Slug: aiwu/features-grid
 * Categories: aiwu
 * Description: Grid of features with icons and descriptions.
 * Keywords: features, grid, cards
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"aiwu-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aiwu-section" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:heading {"textAlign":"center","level":2} -->
    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Everything you need to automate WordPress', 'aiwu' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
    <p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'Powerful features that work together seamlessly.', 'aiwu' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"aiwu-feature-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group aiwu-feature-card" style="padding:var(--wp--preset--spacing--30)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem"><?php esc_html_e( 'Workflow Builder', 'aiwu' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
                <p style="font-size:0.875rem"><?php esc_html_e( 'Drag & drop interface to build custom automations with dozens of integrations.', 'aiwu' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"aiwu-feature-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group aiwu-feature-card" style="padding:var(--wp--preset--spacing--30)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem"><?php esc_html_e( 'AI ChatBot', 'aiwu' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
                <p style="font-size:0.875rem"><?php esc_html_e( '24/7 customer support powered by AI that learns from your content.', 'aiwu' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"aiwu-feature-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group aiwu-feature-card" style="padding:var(--wp--preset--spacing--30)">
                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
                <h3 class="wp-block-heading" style="font-size:1.25rem"><?php esc_html_e( 'Bulk Generator', 'aiwu' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
                <p style="font-size:0.875rem"><?php esc_html_e( 'Create multiple posts or products at once with AI-powered content.', 'aiwu' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
