<!-- BLOG FILE -->

<?php get_header(); ?>

<section class="container">
    <h1 style="margin: 2em 0 2em 0; font-size: 38px; line-height: 1em;">FIQUE POR DENTRO DAS NOVIDADES</h1>
</section>
<section class="container">
    <div class="row">

        <?php while (have_posts()) : if (have_posts()) : the_post(); ?>

            <div class="col-6 col-12-small">

                <section class="box">
                    <a href="<?php the_permalink(); ?>"
                       class="image featured"><?php the_post_thumbnail(array(600,250)); ?></a>
                    <header>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </header>
                    <p><?php the_excerpt(); ?></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">Continue lendo</a></li>
                        </ul>
                    </footer>
                </section>
            </div>

        <?php endif; endwhile; ?>

<!--        <div class="button">--><?php //previous_posts_link( 'Posts mais novos' ); ?><!--</div>-->
<!--        <div class="button">--><?php //next_posts_link( 'Posts mais antigos' ); ?><!--</div>-->

    </div>
</section>

<?php get_footer(); ?>