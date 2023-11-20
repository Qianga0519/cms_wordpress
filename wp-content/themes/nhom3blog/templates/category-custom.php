<?php
/*

Template Name: Custom Category Template


*/?>
<?php
get_header();

// Hiển thị tiêu đề và mô tả của danh mục
echo '<h1>';
echo single_cat_title();
echo '</h1>';
echo category_description();

// Lặp qua các bài viết trong danh mục
if (have_posts()):
    while (have_posts()):
        the_post();
        get_template_part('content', get_post_format());
    endwhile;
endif;

get_footer();