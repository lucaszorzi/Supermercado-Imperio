
<section class="container">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="row">
            <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" class="image thumb-post"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php endif; ?>

            <a href="<?php the_permalink(); ?>" style="padding-top: 1em;"> <h3 > <?php the_title(); ?> </h3> </a>

            <p><?php the_excerpt(); ?></p>

            <a href="<?php the_permalink(); ?>">Ver mais</a>
        </div>

    <?php endwhile; ?>
    <?php endif; ?>
</section>