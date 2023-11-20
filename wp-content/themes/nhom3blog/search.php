<?php
/*
Template Name: Custom Search
*/
?>
<?php get_header() ?>
<div class="banner inner-banner align-center">
    <div class="container">
        <section class="banner-detail">
            <h1 class="banner-title">
            <h1 class="my-2 mb-4 page-header">
            Tìm kiếm:
            <small>
                <?php the_search_query(); ?>
            </small>
        </h1>
            </h1>
            <div class="bread-crumb right-side">
                <ul>
                    <li><a href="<?php echo site_url('/') ?>">Home</a>/</li>
                    <li><span>
                            <?php the_title() ?>
                        </span></li>
                </ul>
            </div>
        </section>
    </div>
</div>

<section class="py-5">
    <!-- post style 2-->
    <div class="container">
       
        <div class="row">


            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                    //
                    //Post Content?>
                    <div class="col-sm-6 col-lg-4">
                        <a href="#"><img class="card-img-top" style="height: 188.65px;width: 350px;" src=<?php echo $url ?>></a>
                        <div class="card-body">

                            <h2 class="card-title h4">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_title() ?>
                                </a>
                            </h2>
                            <p class="card-text" style="">
                                <?php the_excerpt() ?>
                            </p>
                            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read more →</a>
                        </div>
                    </div>
                    <?php
                    //
                } // end while
            } // end if
            else { ?>
                <h1 class="my-2 mb-4 page-header">
                    Không tìm thấy:
                    <small>
                        <?php the_search_query(); ?>
                    </small>
                </h1>
            <?php }
            ?>

        </div>
        <?php woocommerce_pagination(); ?>
    </div>
</section>

</section>

<?php get_footer() ?>