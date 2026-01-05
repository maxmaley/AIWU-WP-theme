<?php
/**
 * The main template file
 *
 * @package AIWU
 * @since 1.0.0
 */

get_header();
?>

<div class="aiwu-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    else :
        ?>
        <p><?php esc_html_e( 'No content found.', 'aiwu' ); ?></p>
        <?php
    endif;
    ?>
</div>

<?php
get_footer();
