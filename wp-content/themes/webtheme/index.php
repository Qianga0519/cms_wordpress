<?php get_header(  );?>
    <div class="content-area">
        <section class="site-slider">Slider</section>
        <section class="new-arrivals">New Arrival</section>
        <section class="lastest-products">Lastest Products</section>
        <section class="vender-list">Vender List</section>
        <section class="left-sidebar">
            <?php  wp_nav_menu( array(
                'theme_location'=>'theme-sidebar-menu'
            ) )?> 
        </section>

    </div>
<?php get_footer(  );?>
   