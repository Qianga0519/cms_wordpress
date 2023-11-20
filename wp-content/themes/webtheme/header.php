<!DOCTYPE html>
<html <?php language_attributes(  ); ?>>
<head>
    <meta charset="<?php echo bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo( 'title' )?></title>
    <?php wp_head(  );?>
</head>
<body>
    <header>
       <section class="stie-logo">Logo</section>
       <section class="stie-menu">
        <?php wp_nav_menu( array(
            'theme_locaion' => 'theme-primary-menu'
        ))?>
        <!-- <nav>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Products</a>
            <a href="#">Contact Us</a>
        </nav> -->
        </section>
    </header>