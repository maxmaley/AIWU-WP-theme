<?php
/**
 * The template for displaying archive pages (blog listing)
 *
 * @package AIWU
 * @since 1.0.0
 */

get_header();
?>

<div class="aiwu-archive">
    <div class="aiwu-archive__container">

        <header class="aiwu-archive__header">
            <?php
            if ( is_home() && ! is_front_page() ) :
                ?>
                <h1 class="aiwu-archive__title"><?php single_post_title(); ?></h1>
                <?php
            elseif ( is_category() ) :
                ?>
                <h1 class="aiwu-archive__title"><?php single_cat_title(); ?></h1>
                <?php the_archive_description( '<p class="aiwu-archive__desc">', '</p>' ); ?>
                <?php
            elseif ( is_tag() ) :
                ?>
                <h1 class="aiwu-archive__title"><?php single_tag_title(); ?></h1>
                <?php
            elseif ( is_author() ) :
                ?>
                <h1 class="aiwu-archive__title"><?php the_author(); ?></h1>
                <?php
            else :
                ?>
                <h1 class="aiwu-archive__title"><?php esc_html_e( 'Blog', 'aiwu' ); ?></h1>
                <?php
            endif;
            ?>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="aiwu-posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'aiwu-post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="aiwu-post-card__image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="aiwu-post-card__content">
                            <h2 class="aiwu-post-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="aiwu-post-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
                            <div class="aiwu-post-card__meta">
                                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </time>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <nav class="aiwu-pagination">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr;',
                    'next_text' => '&rarr;',
                ) );
                ?>
            </nav>
        <?php else : ?>
            <p class="aiwu-no-posts"><?php esc_html_e( 'No posts found.', 'aiwu' ); ?></p>
        <?php endif; ?>

    </div>
</div>

<?php
get_footer();
