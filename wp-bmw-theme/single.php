<?php get_header(); ?>

<div class="container" style="padding: 5rem 0;">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title section__title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <p>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                </div>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <p>Categories: <?php the_category(', '); ?></p>
                <p>Tags: <?php the_tags('', ', '); ?></p>
            </footer>
        </article>

        <?php
        // Post navigation
        the_post_navigation(array(
            'prev_text' => '&laquo; Previous Post',
            'next_text' => 'Next Post &raquo;',
        ));
        ?>

        <?php
        // Comments template
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>