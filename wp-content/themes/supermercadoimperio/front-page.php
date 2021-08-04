<!-- HOME FILE -->

<?php get_header(); ?>

    <section>
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
    </section>

    <!-- Intro -->
    <section id="intro" class="container">
        <div class="row">
            <div class="col-4 col-12-medium">
                <section class="first">
                    <i class="icon featured fas fa-search-dollar"></i>
                    <header>
                        <h2>ECONOMIA</h2>
                    </header>
                    <p>Aqui oferecemos os melhores preços do mercado para garantir sempre sua economia.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="middle">
                    <i class="icon featured alt fas fa-shopping-cart"></i>
                    <header>
                        <h2>MELHORES PRODUTOS</h2>
                    </header>
                    <p>Aqui você encontra os melhores produtos com a melhor qualidade.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="last">
                    <i class="icon featured alt2 far fa-money-bill-alt"></i>
                    <header>
                        <h2>PAGAMENTO</h2>
                    </header>
                    <p>Facilidade de pagamento é aqui, aceitamos todos os cartões e vales refeição.</p>
                </section>
            </div>
        </div>
        <footer>
            <ul class="actions">
                <li><a href="<?php echo home_url('/folheto'); ?>" class="button large">VER OFERTAS</a></li>
            </ul>
        </footer>
    </section>

    </section>

    <!-- Main -->
    <section id="main">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <section>

                        <div class="row">
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="">
                                    <a href="#" class="image featured"><img src="<?php echo get_image_url('promocao'); ?>"/></a>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="">
                                    <a href="<?php echo home_url('/folheto'); ?>" class="image featured"><img src="<?php echo get_image_url('folheto_thumb'); ?>"/></a>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="">
                                    <iframe width="380" height="275" src="https://www.youtube.com/embed/Pc6fdqu6uJA"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </section>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-12">

                    <!-- Blog -->
                    <section>
                        <header class="major">
                            <h2>Blog</h2>
                        </header>


                        <div class="row">

                            <?php
                                 $temp = $wp_query; $wp_query= null;
                                 $wp_query = new WP_Query(); $wp_query->query('posts_per_page=3' . '&paged='.$paged);
                                 while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>

                                <div class="col-4 col-12-small">

                                    <section class="box">
                                        <a href="<?php the_permalink(); ?>"
                                           class="image centered"><?php the_post_thumbnail('thumbnail'); ?></a>
                                        <header>
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </header>
                                        <p><?php the_excerpt(); ?></p>
                                        <footer>
                                            <ul class="actions">
                                                <li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">Continue
                                                        lendo</a></li>
                                            </ul>
                                        </footer>
                                    </section>
                                </div>

                            <?php endwhile; ?>

                        </div>

                    </section>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
