<?php
/**
 * Title: Hero Section
 * Slug: aiwu/hero
 * Categories: featured
 * Description: Full-width hero section with gradient heading and CTA button.
 * Keywords: hero, header, landing
 */
?>
<!-- wp:group {"align":"full","className":"aiwu-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull aiwu-hero">
    <!-- wp:group {"className":"aiwu-hero__bg","layout":{"type":"default"}} -->
    <div class="wp-block-group aiwu-hero__bg">
        <div class="aiwu-hero__grid"></div>
        <div class="aiwu-hero__glow"></div>
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"aiwu-hero__content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group aiwu-hero__content">
        <!-- wp:paragraph {"align":"center","className":"aiwu-hero__badge"} -->
        <p class="has-text-align-center aiwu-hero__badge">Trusted by 1,000+ WordPress sites</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"className":"aiwu-hero__title"} -->
        <h1 class="wp-block-heading has-text-align-center aiwu-hero__title">WordPress automations<br><span class="aiwu-gradient-text">you'll actually use</span></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"aiwu-hero__subtitle"} -->
        <p class="has-text-align-center aiwu-hero__subtitle">Connect AI to your WordPress and build workflows from customer support to content—without code.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"aiwu-hero__cta"} -->
        <div class="wp-block-buttons aiwu-hero__cta">
            <!-- wp:button {"className":"aiwu-btn aiwu-btn--primary aiwu-btn--large"} -->
            <div class="wp-block-button aiwu-btn aiwu-btn--primary aiwu-btn--large"><a class="wp-block-button__link wp-element-button">Get Started Free →</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
