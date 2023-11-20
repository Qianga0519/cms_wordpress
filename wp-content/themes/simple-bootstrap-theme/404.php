<?php get_header() ?>
<!-- Section-->
<section class="py-5">
    <!-- post style 2-->
    <div class="container">
        <div class="row">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    //Post Content?>
                    <div class="col-sm-6 col-lg-3">
                        <a href="#"><img class="card-img-top" src=<?php the_post_thumbnail(); ?>></a>
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
                } // end while<?php echo get_home_url()
            } else { ?>

                <div></div>
                <!-- about -->
                <div class="about">
                    <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
                        <span class="icon"></span>
                    </a>
                    <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
                        <span class="icon"></span>
                    </a>
                    <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
                        <span class="icon"></span>
                    </a>
                    <a class="bg_links logo"></a>
                </div>
                <!-- end about -->


                <section class="wrapper">

                    <div class="container">

                        <div id="scene" class="scene" data-hover-only="false">


                            <div class="circle" data-depth="1.2"></div>

                            <div class="one" data-depth="0.9">
                                <div class="content">
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                </div>
                            </div>

                            <div class="two" data-depth="0.60">
                                <div class="content">
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                </div>
                            </div>

                            <div class="three" data-depth="0.40">
                                <div class="content">
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                    <span class="piece"></span>
                                </div>
                            </div>

                            <p class="p404" data-depth="0.50">404</p>
                            <p class="p404" data-depth="0.10">404</p>

                        </div>

                        <div class="text">
                            <article>
                                <p>Uh oh! Looks like you got lost. <br>Go back to the homepage if you dare!</p>
                                <form action="<?php echo get_home_url() ?>">
                                    <button>Back To Home</button>
                                </form>
                            </article>
                        </div>

                    </div>
                </section>



            <?php } // end if
            ?>

        </div>
    </div>
    <!--end post style 2-->
</section>
<?php //get_footer() ?>