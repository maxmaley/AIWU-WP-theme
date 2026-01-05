<?php
/**
 * The template for displaying single posts
 *
 * @package AIWU
 * @since 1.0.0
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article <?php post_class( 'aiwu-single-post' ); ?>>
    <header class="aiwu-single-post__header">
        <h1 class="aiwu-single-post__title"><?php the_title(); ?></h1>
        <div class="aiwu-single-post__meta">
            <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
            </time>
            <span>&middot;</span>
            <span><?php echo esc_html( get_the_author() ); ?></span>
        </div>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="aiwu-single-post__thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </figure>
    <?php endif; ?>

    <div class="aiwu-single-post__content">
        <?php the_content(); ?>
    </div>

    <footer class="aiwu-single-post__footer">
        <?php
        $tags = get_the_tags();
        if ( $tags ) :
        ?>
            <div class="aiwu-single-post__tags">
                <?php foreach ( $tags as $tag ) : ?>
                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="aiwu-tag">
                        <?php echo esc_html( $tag->name ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </footer>
</article>

<?php endwhile; endif; ?>

<?php
get_footer();
