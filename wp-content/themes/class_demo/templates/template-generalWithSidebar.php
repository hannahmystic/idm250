<?php
/*
Template Name: General With Sidebar
*/

get_header(); ?>

<!-- banner Page
    ==========================================-->

<div id="page-banner" style="background-image: url(dist/img/s-1.jpg);">
  <div class="content wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1>Our Blog</h1>
    </div>
  </div>
</div>

<!--blog body-->
<div id="Blog-post">
  <div class="container">
    <div class="row"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-12 single-post"> 
        <?php if (have_posts()): ?>
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        <?php else: ?>
            <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
      </div>
      <!--blog posts container--> 
      <!--aside-->
      <aside class="col-md-4 col-sm-12"> 
        <?php get_sidebar();?>
      </aside>
      <!--aside-->
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>