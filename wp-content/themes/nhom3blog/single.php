<?php get_header() ?>
<div class="banner inner-banner align-center">
  <div class="container">
    <section class="banner-detail">

      <h1 class="banner-title">
        <?php the_title() ?>
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
<div class="container content-container">
  <div class="row">
    <div class="col-md-8">
      <?php
      //  Lặp các bài viết 
      while (have_posts()) {
        the_post();
        ?>
        <h2 class="title-post">
          <?php the_title() ?>
        </h2>
        <p class="content">
          <?php the_content() ?>
        </p>
        <?php
      }
      ?>
    </div>
    <div class="col-md-4">
      <!-- new-post-single -->
      <h3 class="h3">New post</h3>
      <?php
      $args = array(
        'post_status' => 'publish',
        // Chỉ lấy những bài viết được publish
        'showposts' => 3,
        // số lượng bài viết
      );
      $getposts = new WP_query($args);
      global $wp_query;
      $wp_query->in_the_loop = true;
      while ($getposts->have_posts()):
        $getposts->the_post();
        $url1 = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
        <!-- các thành phần cần lấy -->

        <div class="col-sm col-lg new-post-single">
          <p class="img-post-new">
            <a href="#"><img src=<?php echo $url1 ?>></a>
          </p>
          <div class="">
            <p class="new-post-title">
              <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
              </a>
            </p>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    </div>
  </div>
</div>
</div>
<hr>
<div class="container">
  <?php comments_template(); ?>
</div>
<?php get_footer() ?>