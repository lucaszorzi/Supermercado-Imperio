<?php get_header(); ?>

<section class="container">
    <h1 style="margin: 2em 0 2em 0; font-size: 38px; line-height: 1em;">FOLHETO DE OFERTAS</h1>
</section>

<section class="container">
    <div class="row">
        <div class="col-11 centered">
        <?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
