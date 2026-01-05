<?php
/**
 * Hero Section Template Part
 *
 * @package AIWU
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<section class="aiwu-hero">
    <div class="aiwu-hero__bg">
        <div class="aiwu-hero__grid"></div>
        <div class="aiwu-hero__glow"></div>
    </div>

    <div class="aiwu-hero__content">
        <div class="aiwu-hero__badge">
            <span>Trusted by 1,000+ WordPress sites</span>
        </div>

        <h1 class="aiwu-hero__title">
            WordPress automations<br>
            <span class="aiwu-gradient-text">you'll actually use</span>
        </h1>

        <p class="aiwu-hero__subtitle">
            Connect AI to your WordPress and build workflows from customer support to content—without code.
        </p>

        <div class="aiwu-hero__cta">
            <a href="#get-started" class="aiwu-btn aiwu-btn--primary aiwu-btn--large">
                Get Started Free
                <?php echo aiwu_get_icon( 'arrow-right' ); ?>
            </a>
        </div>
    </div>
</section>
