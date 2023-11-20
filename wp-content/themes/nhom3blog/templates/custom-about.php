<?php
/*

Template Name: Custom About Template


*/?>
<?php get_header() ?>
<!-- BANNER STRAT -->
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
<!-- BANNER END -->

<!-- CONTAIN START-->
<section class="ptb-60">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="image-part"> <img alt="Xpent" class="img-about"
            src="<?php echo get_theme_file_uri('images/slider-fashion.jpg') ?>">
        </div>
      </div>
    </div>
    <div class="about-detail mt-40">
      <div class="row">
        <div class="col-sm-6 mb-xs-30">
          <div class="about-title">It was popularised in the 1960s with the release of Letraset sheets containing
            Lorem Ipsum passages, and more recently</div>
        </div>
        <div class="col-sm-6">
          <p>Oh, would I could describe these conceptions, could impress upon paper all that is living so full and
            warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite God!
          </p>
          <p> I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls
            like mine. I am so happy, my dear friend, so absorbed in the exquisite sense. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr style="margin-top: 0rem;
width: 50%;
    margin-bottom: 1rem;
    border: 0;
    border-top: 3px solid rgba(0,0,0,.1);">

<section class="ptb-60">
  <div class="container">
    <div class="responsive-part">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="res-detail mb-sm-30">
            <div class="heading-part align_left center-md">
              <h2 class="heading">Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et
                mauris nec risus id at odio.</h2>
            </div>
            <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus
              feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
            <p>Nullam vel sollicitudin diam proin congue lacinia tortor vel vulputate morbi et mauris nec risus
              feugiat malesuada id at odio nulla ornare scelerisque est, nec rutrum arcu elementu.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="image-part"> <img alt="Xpent "
              src="<?php echo get_theme_file_uri('images/slider-image-1.jpg') ?>"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->

<?php get_footer() ?>