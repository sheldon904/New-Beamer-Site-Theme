<?php get_header(); ?>

<div class="container" style="padding: 5rem 0;">
    <header class="page-header">
        <h1 class="page-title section__title">
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_date()) {
                echo 'Archive: ' . get_the_date('F Y');
            } elseif (is_author()) {
                echo 'Author: ' . get_the_author();
            } else {
                echo 'Archives';
            }
            ?>
        </h1>
    </header>

    <?php if (have_posts()) : ?>
        <div class="posts-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-summary'); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <p><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                    </div>
                    <div class="entry-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn--primary">Read More</a>
                </article>
            <?php endwhile; ?>
        </div>

        <?php
        // Pagination
        the_posts_pagination(array(
            'prev_text' => '&laquo; Previous',
            'next_text' => 'Next &raquo;',
        ));
        ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>