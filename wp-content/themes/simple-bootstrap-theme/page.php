<?php get_header() ?>

    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    the_post();

                    //
                    //Post Content?>
                    <div class="col-sm">
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
                            <!-- <a class="btn btn-primary" href="<?php //the_permalink() ?>">Read more →</a> -->
                        </div>
                    </div>
                    <?php
                    //
                } // end while
            } // end if
            ?>

        </div>
    </div>
    <!--end post style 2-->
<?php get_footer() ?>