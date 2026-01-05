<?php
/**
 * AIWU Theme functions and definitions
 *
 * @package AIWU
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Define theme constants
 */
define( 'AIWU_THEME_VERSION', '1.0.0' );
define( 'AIWU_THEME_DIR', get_template_directory() );
define( 'AIWU_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function aiwu_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for responsive embedded content
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor.css' );

    // Add support for wide and full-width blocks
    add_theme_support( 'align-wide' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 43,
        'width'       => 125,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'aiwu' ),
        'footer'  => esc_html__( 'Footer Menu', 'aiwu' ),
    ) );

    // Register block pattern category
    register_block_pattern_category( 'aiwu', array(
        'label' => esc_html__( 'AIWU', 'aiwu' ),
    ) );
}
add_action( 'after_setup_theme', 'aiwu_theme_setup' );

/**
 * Register block patterns
 */
function aiwu_register_block_patterns() {
    $patterns = array(
        'hero',
        'features-grid',
        'cta-section',
        'two-columns',
    );

    foreach ( $patterns as $pattern ) {
        $pattern_file = AIWU_THEME_DIR . '/patterns/' . $pattern . '.php';
        if ( file_exists( $pattern_file ) ) {
            require_once $pattern_file;
        }
    }
}
add_action( 'init', 'aiwu_register_block_patterns' );

/**
 * Enqueue scripts and styles
 */
function aiwu_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style(
        'aiwu-style',
        get_stylesheet_uri(),
        array(),
        AIWU_THEME_VERSION
    );

    // Block styles
    wp_enqueue_style(
        'aiwu-blocks',
        AIWU_THEME_URI . '/assets/css/blocks.css',
        array( 'aiwu-style' ),
        AIWU_THEME_VERSION
    );

    // Theme JavaScript
    wp_enqueue_script(
        'aiwu-theme',
        AIWU_THEME_URI . '/assets/js/theme.js',
        array(),
        AIWU_THEME_VERSION,
        true
    );

    // Navigation JavaScript
    wp_enqueue_script(
        'aiwu-navigation',
        AIWU_THEME_URI . '/assets/js/navigation.js',
        array(),
        AIWU_THEME_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'aiwu_enqueue_assets' );

/**
 * Enqueue editor styles
 */
function aiwu_enqueue_editor_assets() {
    wp_enqueue_style(
        'aiwu-editor',
        AIWU_THEME_URI . '/assets/css/editor.css',
        array(),
        AIWU_THEME_VERSION
    );
}
add_action( 'enqueue_block_editor_assets', 'aiwu_enqueue_editor_assets' );

/**
 * Add inline script for theme toggle (before page loads to prevent flash)
 */
function aiwu_theme_toggle_inline_script() {
    ?>
    <script>
        (function() {
            var theme = localStorage.getItem('aiwu-theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
    <?php
}
add_action( 'wp_head', 'aiwu_theme_toggle_inline_script', 0 );

/**
 * Get AIWU Logo SVG
 */
function aiwu_get_logo_svg() {
    return '<svg fill="none" viewBox="0 0 125 43" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="aiwu-gradient-orange" x1="31.4815" x2="31.4815" y1="0" y2="50.8182" gradientUnits="userSpaceOnUse">
                <stop stop-color="#FF6B3B"/>
                <stop offset="1" stop-color="#FF6B3B" stop-opacity="0"/>
            </linearGradient>
            <linearGradient id="aiwu-gradient-teal" x1="10.1852" x2="10.1852" y1="19.5455" y2="52.7727" gradientUnits="userSpaceOnUse">
                <stop stop-color="#007C91"/>
                <stop offset="1" stop-color="#007C91" stop-opacity="0"/>
            </linearGradient>
        </defs>
        <path d="M41.6667 10.75C41.6667 4.81294 37.1066 0 31.4815 0C25.8564 0 21.2963 4.81294 21.2963 10.75V32.25C21.2963 38.187 25.8564 43 31.4815 43C37.1066 43 41.6667 38.187 41.6667 32.25V10.75Z" fill="url(#aiwu-gradient-orange)"/>
        <path d="M20.3704 30.2955C20.3704 24.3584 15.8103 19.5455 10.1852 19.5455C4.56007 19.5455 0 24.3584 0 30.2955V32.25C0 38.187 4.56007 43 10.1852 43C15.8103 43 20.3704 38.187 20.3704 32.25V30.2955Z" fill="url(#aiwu-gradient-teal)"/>
        <path d="M70.8102 30.1977H64.7454L63.7732 33.2273H59.6296L65.5093 16.0761H70.0926L75.9722 33.2273H71.7824L70.8102 30.1977ZM69.7917 26.9727L67.7778 20.6937L65.787 26.9727H69.7917ZM81.9515 16.0761V33.2273H77.9932V16.0761H81.9515ZM107.413 16.0761L103.177 33.2273H98.3852L95.7926 21.9398L93.1074 33.2273H88.3155L84.1951 16.0761H88.4312L90.7692 28.5608L93.663 16.0761H98.0148L100.793 28.5608L103.154 16.0761H107.413ZM113.519 16.0761V26.3375C113.519 27.3636 113.757 28.1536 114.236 28.7074C114.714 29.2612 115.417 29.5381 116.343 29.5381C117.269 29.5381 117.978 29.2612 118.472 28.7074C118.966 28.1536 119.213 27.3636 119.213 26.3375V16.0761H123.171V26.3131C123.171 27.8442 122.862 29.139 122.245 30.1977C121.628 31.2564 120.794 32.0545 119.745 32.592C118.711 33.1295 117.554 33.3983 116.273 33.3983C114.992 33.3983 113.843 33.1377 112.824 32.6165C111.82 32.079 111.026 31.2808 110.44 30.2222C109.853 29.1472 109.56 27.8442 109.56 26.3131V16.0761H113.519Z" fill="currentColor"/>
    </svg>';
}

/**
 * Get icon SVG
 *
 * @param string $icon Icon name.
 * @return string SVG markup.
 */
function aiwu_get_icon( $icon ) {
    $icons = array(
        'sun'          => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>',
        'moon'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>',
        'arrow-right'  => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
        'menu'         => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>',
        'x'            => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>',
        'chevron-down' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>',
    );

    return isset( $icons[ $icon ] ) ? $icons[ $icon ] : '';
}

/**
 * Clean up WordPress head for performance
 */
function aiwu_cleanup_head() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
}
add_action( 'init', 'aiwu_cleanup_head' );

/**
 * Disable emojis for performance
 */
function aiwu_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'aiwu_disable_emojis' );

/**
 * Remove jQuery migrate
 */
function aiwu_remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'aiwu_remove_jquery_migrate' );

/**
 * Defer non-critical scripts
 */
function aiwu_defer_scripts( $tag, $handle, $src ) {
    $defer_scripts = array( 'aiwu-navigation' );

    if ( in_array( $handle, $defer_scripts, true ) ) {
        return '<script src="' . esc_url( $src ) . '" defer></script>';
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'aiwu_defer_scripts', 10, 3 );

/**
 * Add schema.org structured data for SEO
 */
function aiwu_add_schema_markup() {
    if ( is_front_page() ) {
        $schema = array(
            '@context'            => 'https://schema.org',
            '@type'               => 'SoftwareApplication',
            'name'                => 'AIWU - AI WordPress Automation',
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem'     => 'WordPress',
            'offers'              => array(
                '@type'         => 'Offer',
                'price'         => '0',
                'priceCurrency' => 'USD',
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>';
    }

    if ( is_singular( 'post' ) ) {
        $schema = array(
            '@context'      => 'https://schema.org',
            '@type'         => 'Article',
            'headline'      => get_the_title(),
            'datePublished' => get_the_date( 'c' ),
            'dateModified'  => get_the_modified_date( 'c' ),
            'author'        => array(
                '@type' => 'Person',
                'name'  => get_the_author(),
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES ) . '</script>';
    }
}
add_action( 'wp_head', 'aiwu_add_schema_markup' );

/**
 * Custom excerpt length
 */
function aiwu_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'aiwu_excerpt_length' );

/**
 * Custom excerpt more
 */
function aiwu_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'aiwu_excerpt_more' );

/**
 * Fallback menu when no menu is assigned
 */
function aiwu_fallback_menu() {
    $links = array(
        'Features' => '#features',
        'Pricing'  => '#pricing',
        'Blog'     => get_permalink( get_option( 'page_for_posts' ) ),
        'Contact'  => '#contact',
    );

    foreach ( $links as $label => $url ) {
        printf(
            '<a href="%s" class="aiwu-nav__link">%s</a>',
            esc_url( $url ),
            esc_html( $label )
        );
    }
}
