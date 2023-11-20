<?php get_header() ?>
<!-- Section-->
<section class="py-5">
    
    <!-- post style 2-->
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    the_post();

                    //
                    //Post Content?>
                    <div class="col-sm-6 col-lg-3">
                        <a href="#"><img class="card-img-top" src=<?php echo $url?>></a>
                        <div class="card-body">
                            <div class="small text-muted">
                                <?php the_date() ?>
                            </div>
                            <h2 class="card-title h4">
                                <?php the_title() ?>
                            </h2>
                            <p class="card-text">
                                <?php the_content() ?>
                            </p>
                            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read more →</a>
                        </div>
                    </div>
                    <?php
                    //
                } // end while
            } // end if
             wpex_pagination (); 
            ?>

        </div>
    </div>
    <!--end post style 2-->





    <?php
    // if ($wp_query->have_posts()) { // Nếu phương thức have_posts() trả về TRUE thì mới chạy code bên trong
    //     while ($wp_query->have_posts()) { // Nếu have_posts() == TRUE thì nó mới lặp, không thì ngừng
    //         $wp_query->the_post(); // Thiết lập số thứ tự bài viết trong chỉ mục của query
    //         /*
    //          * Nội dung hiển thị bài viết
    //          */
    //         echo $post->post_title . '<br>';
    

    //     }
    // }
    ?>
    <!-- <div class="card mb-4">
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                    alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">January 1, 2023</div>
                <h2 class="card-title h4">Post Title</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque,
                    nulla.</p>
                <a class="btn btn-primary" href="#!">Read more →</a>
            </div>
        </div> 

    </div> -->

</section>
<?php get_footer() ?>