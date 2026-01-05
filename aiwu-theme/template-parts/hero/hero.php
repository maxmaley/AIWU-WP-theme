<?php
/**
 * Hero Section Template
 *
 * @package AIWU
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="aiwu-hero" aria-labelledby="hero-title">
    <!-- Animated Background Grid -->
    <div class="aiwu-hero__grid" aria-hidden="true"></div>

    <div class="aiwu-hero__content">
        <!-- Badge -->
        <div class="aiwu-badge aiwu-animate">
            <?php echo aiwu_get_icon( 'sparkles' ); ?>
            <span class="aiwu-badge__text">
                <?php esc_html_e( 'Trusted by 1,000+ WordPress sites', 'aiwu' ); ?>
            </span>
        </div>

        <!-- Title -->
        <h1 id="hero-title" class="aiwu-hero__title">
            <span class="aiwu-hero__title-line aiwu-animate aiwu-animate--delay-1">
                <?php esc_html_e( 'WordPress automations', 'aiwu' ); ?>
            </span>
            <span class="aiwu-hero__title-line aiwu-hero__title-gradient aiwu-animate aiwu-animate--delay-1">
                <?php esc_html_e( "you'll actually use", 'aiwu' ); ?>
            </span>
        </h1>

        <!-- Subtitle -->
        <p class="aiwu-hero__subtitle aiwu-animate aiwu-animate--delay-2">
            <?php esc_html_e( 'Connect AI to your WordPress and build workflows from customer support to content—without code.', 'aiwu' ); ?>
        </p>

        <!-- CTA -->
        <div class="aiwu-hero__cta aiwu-animate aiwu-animate--delay-3">
            <a href="#get-started" class="aiwu-btn aiwu-btn--gradient">
                <span><?php esc_html_e( 'Get Started Free', 'aiwu' ); ?></span>
                <?php echo aiwu_get_icon( 'arrow-right' ); ?>
            </a>
        </div>
    </div>
</section>
