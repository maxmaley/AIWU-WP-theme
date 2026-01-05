<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="dark">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'aiwu' ); ?></a>

<header class="aiwu-header" role="banner">
    <div class="aiwu-header__inner">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="aiwu-logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <?php echo aiwu_get_logo_svg(); ?>
        </a>

        <!-- Navigation -->
        <nav class="aiwu-nav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'aiwu' ); ?>">
            <!-- Features -->
            <div class="aiwu-nav__item">
                <a href="#features" class="aiwu-nav__link">
                    <?php esc_html_e( 'Features', 'aiwu' ); ?>
                </a>
                <?php get_template_part( 'template-parts/components/features', 'dropdown' ); ?>
            </div>

            <!-- Pricing -->
            <a href="#pricing" class="aiwu-nav__link">
                <?php esc_html_e( 'Pricing', 'aiwu' ); ?>
            </a>

            <!-- Resources -->
            <div class="aiwu-nav__item">
                <a href="#resources" class="aiwu-nav__link">
                    <?php esc_html_e( 'Resources', 'aiwu' ); ?>
                </a>
                <?php get_template_part( 'template-parts/components/resources', 'dropdown' ); ?>
            </div>

            <!-- Contact -->
            <a href="#contact" class="aiwu-nav__link">
                <?php esc_html_e( 'Contact', 'aiwu' ); ?>
            </a>
        </nav>

        <!-- Actions -->
        <div class="aiwu-header__actions">
            <!-- Theme Toggle -->
            <button
                class="aiwu-theme-toggle"
                type="button"
                aria-label="<?php esc_attr_e( 'Toggle dark/light theme', 'aiwu' ); ?>"
                data-theme-toggle
            >
                <span class="aiwu-theme-toggle__icon--sun">
                    <?php echo aiwu_get_icon( 'sun' ); ?>
                </span>
                <span class="aiwu-theme-toggle__icon--moon">
                    <?php echo aiwu_get_icon( 'moon' ); ?>
                </span>
            </button>

            <!-- Login -->
            <a href="#login" class="aiwu-login-link">
                <?php esc_html_e( 'Login', 'aiwu' ); ?>
            </a>

            <!-- Get Started -->
            <a href="#get-started" class="aiwu-btn aiwu-btn--primary">
                <?php esc_html_e( 'Get Started', 'aiwu' ); ?>
            </a>

            <!-- Mobile Menu Toggle -->
            <button
                class="aiwu-mobile-toggle"
                type="button"
                aria-label="<?php esc_attr_e( 'Toggle menu', 'aiwu' ); ?>"
                aria-expanded="false"
                data-mobile-toggle
            >
                <?php echo aiwu_get_icon( 'menu' ); ?>
            </button>
        </div>
    </div>
</header>

<main id="main-content" role="main">
