<?php
/**
 * Features Dropdown Menu Component
 *
 * @package AIWU
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Ready to use apps data
$apps = array(
    array(
        'title' => __( 'AI ChatBot', 'aiwu' ),
        'desc'  => __( '24/7 customer support', 'aiwu' ),
        'link'  => '#chatbot',
    ),
    array(
        'title' => __( 'AI Forms Builder', 'aiwu' ),
        'desc'  => __( 'Smart adaptive forms', 'aiwu' ),
        'link'  => '#forms',
    ),
    array(
        'title' => __( 'Bulk Post Generator', 'aiwu' ),
        'desc'  => __( 'Multiple posts at once', 'aiwu' ),
        'link'  => '#bulk',
    ),
    array(
        'title' => __( 'Autoblogging', 'aiwu' ),
        'desc'  => __( 'Automated publishing', 'aiwu' ),
        'link'  => '#autoblog',
    ),
    array(
        'title' => __( 'WooCommerce Generator', 'aiwu' ),
        'desc'  => __( 'Create products with AI', 'aiwu' ),
        'link'  => '#woo',
    ),
    array(
        'title' => __( 'Magic Text Enhancer', 'aiwu' ),
        'desc'  => __( 'Improve text instantly', 'aiwu' ),
        'link'  => '#enhancer',
    ),
    array(
        'title' => __( 'MCP Integration', 'aiwu' ),
        'desc'  => __( 'External services', 'aiwu' ),
        'link'  => '#mcp',
    ),
    array(
        'title' => __( 'AI Training', 'aiwu' ),
        'desc'  => __( 'Train on your content', 'aiwu' ),
        'link'  => '#training',
    ),
);
?>

<div class="aiwu-dropdown aiwu-dropdown--features" role="menu">
    <div class="aiwu-dropdown__inner">
    <div class="aiwu-dropdown__grid">
        <!-- Left Side - Workflow Builder -->
        <div class="aiwu-dropdown__section">
            <h3 class="aiwu-dropdown__title">
                <?php esc_html_e( 'Workflow Builder', 'aiwu' ); ?>
            </h3>
            <p class="aiwu-dropdown__desc">
                <?php esc_html_e( 'Custom automation solution with Drag & Drop interface and dozens of integrations to automate anything you need.', 'aiwu' ); ?>
            </p>
            <div class="aiwu-dropdown__links">
                <a href="#learn-more" class="aiwu-dropdown__link" role="menuitem">
                    <?php esc_html_e( 'Learn more', 'aiwu' ); ?>
                    <?php echo aiwu_get_icon( 'arrow-right' ); ?>
                </a>
                <a href="#templates" class="aiwu-dropdown__link" role="menuitem">
                    <?php esc_html_e( 'Templates', 'aiwu' ); ?>
                    <?php echo aiwu_get_icon( 'arrow-right' ); ?>
                </a>
                <a href="#integrations" class="aiwu-dropdown__link" role="menuitem">
                    <?php esc_html_e( 'Integrations', 'aiwu' ); ?>
                    <?php echo aiwu_get_icon( 'arrow-right' ); ?>
                </a>
            </div>
        </div>

        <!-- Right Side - Ready to use apps -->
        <div class="aiwu-dropdown__section">
            <h3 class="aiwu-dropdown__title">
                <?php esc_html_e( 'Ready to use apps', 'aiwu' ); ?>
            </h3>
            <p class="aiwu-dropdown__desc">
                <?php esc_html_e( 'Standalone AI features that work instantly. No workflow building required—just enable and start using.', 'aiwu' ); ?>
            </p>

            <div class="aiwu-apps-grid">
                <?php foreach ( $apps as $app ) : ?>
                    <a href="<?php echo esc_url( $app['link'] ); ?>" class="aiwu-app-item" role="menuitem">
                        <div class="aiwu-app-item__title">
                            <?php echo esc_html( $app['title'] ); ?>
                        </div>
                        <div class="aiwu-app-item__desc">
                            <?php echo esc_html( $app['desc'] ); ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
</div>
