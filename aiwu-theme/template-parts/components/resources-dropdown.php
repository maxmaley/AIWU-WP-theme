<?php
/**
 * Resources Dropdown Menu Component
 *
 * @package AIWU
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Resources links
$resources = array(
    array(
        'title' => __( 'About', 'aiwu' ),
        'link'  => '#about',
    ),
    array(
        'title' => __( 'Community', 'aiwu' ),
        'link'  => '#community',
    ),
    array(
        'title' => __( 'Knowledge Base', 'aiwu' ),
        'link'  => '#knowledge-base',
    ),
    array(
        'title' => __( 'Blog', 'aiwu' ),
        'link'  => '#blog',
    ),
    array(
        'title' => __( 'Roadmap', 'aiwu' ),
        'link'  => '#roadmap',
    ),
    array(
        'title' => __( 'API', 'aiwu' ),
        'link'  => '#api',
    ),
    array(
        'title' => __( 'Supported AI Models', 'aiwu' ),
        'link'  => '#ai-models',
    ),
);
?>

<div class="aiwu-dropdown aiwu-dropdown--resources" role="menu">
    <div class="aiwu-dropdown__inner">
        <div class="aiwu-dropdown__list">
            <?php foreach ( $resources as $resource ) : ?>
                <a href="<?php echo esc_url( $resource['link'] ); ?>" class="aiwu-dropdown__list-item" role="menuitem">
                    <?php echo esc_html( $resource['title'] ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
