<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head(); ?>
</head>
<body class="homepage is-preload">

    <div id="page-wrapper">

        <!-- Header -->
        <section id="header">

            <!-- Logo -->
            <div id="header-logo">
                <a href="<?php echo home_url('/'); ?>"><img id="logo" src="<?php echo get_image_url('logo'); ?>"></a>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <?php nav_menu(); ?>
            </nav>

        </section>