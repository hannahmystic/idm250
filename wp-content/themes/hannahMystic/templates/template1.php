	
<?php /* Template Name: MAKING A PAGE RIGHT NOW */ ?>
<?php   get_header();    ?>


<div id="Blog-post"> 

    
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
        <!-- Check to make sure there is content on the site. -->
        <?php if(have_posts()): ?>

            <article class="post">
              <?php while (have_posts()) : the_post(); ?> <!--Because the content only works inside a WP Loop -->
                <?php the_content(); ?> <!--Page content (wysiwyg field) -->
              <?php endwhile;?> <!--Resetting the page loop -->
              <?php wp_reset_query(); ?>  <!--resetting the page query -->
            </article>

        <?php else: ?>
          <h2>Sorry, no post found</h2>
        <?php endif; ?>


		<br>
        <div class="clearfix"></div>
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php 
get_footer();
?>