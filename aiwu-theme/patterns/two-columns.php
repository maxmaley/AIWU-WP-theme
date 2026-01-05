<?php
/**
 * Title: Two Columns Section
 * Slug: aiwu/two-columns
 * Categories: aiwu
 * Description: Two column layout with text and image.
 * Keywords: columns, layout, image
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"className":"aiwu-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aiwu-section" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:heading {"level":2} -->
            <h2 class="wp-block-heading"><?php esc_html_e( 'Build powerful workflows', 'aiwu' ); ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'Create custom automations with our visual drag & drop builder. Connect your favorite tools and let AI handle the rest.', 'aiwu' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button -->
                <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'aiwu' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:image {"className":"aiwu-image-rounded"} -->
            <figure class="wp-block-image aiwu-image-rounded"><img src="<?php echo esc_url( AIWU_THEME_URI . '/assets/images/placeholder.svg' ); ?>" alt="<?php esc_attr_e( 'Workflow Builder', 'aiwu' ); ?>"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
