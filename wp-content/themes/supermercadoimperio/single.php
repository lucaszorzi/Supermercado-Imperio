<?php get_header(); ?>

<!-- section -->
<section class="container">


    <div class="row">
        <div role="main" class="col-8 col-12-small">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="">
                        <!-- post thumbnail -->
                        <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                            <a href="<?php the_permalink(); ?>"
                               class="image thumb-post"><?php the_post_thumbnail(); ?></a>
                        <?php endif; ?>
                        <!-- /post thumbnail -->
                    </div>

                    <!-- post title -->
                    <h1 style="padding-top: 1em; padding-bottom: 1em;"> <?php the_title(); ?> </h1>
                    <!-- /post title -->

                    <?php the_content(); ?>

                    <?php edit_post_link(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h1><?php _e('Ops, nada para mostrar.', 'Supermercado Império'); ?></h1>

                </article>
                <!-- /article -->

            <?php endif; ?>

        </div>

        <aside role="complementary" class="col-4 col-12-small">
            <!--<?php get_sidebar(); ?>-->
        </aside>
    </div>
</section>
<!-- /section -->


<?php get_footer(); ?>

<section id="primary" class="container">
    <main id="main" class="site-main">

        <?php

        /* Start the Loop */
        while (have_posts()) :
            the_post();

            get_template_part('template-parts/content/content', 'single');

            if (is_singular('attachment')) {
                // Parent post navigation.
                the_post_navigation(
                    array(
                        /* translators: %s: parent post link */
                        'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen'), '%title'),
                    )
                );
            } elseif (is_singular('post')) {
                // Previous/next post navigation.
                the_post_navigation(
                    array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next Post', 'twentynineteen') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Next post:', 'twentynineteen') . '</span> <br/>' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous Post', 'twentynineteen') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Previous post:', 'twentynineteen') . '</span> <br/>' .
                            '<span class="post-title">%title</span>',
                    )
                );
            }

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) {
                comments_template();
            }

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</section><!-- #primary
