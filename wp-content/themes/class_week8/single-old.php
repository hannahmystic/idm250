	
<?php /* Template Name: MAKING A PAGE RIGHT NOW */ ?>
<?php   get_header();    ?>


<div id="Blog-post"> 

    
  <div class="container">
        <div class="row wow fadeInUp"> 
        <!--blog posts container-->
            <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
                
                
            <div id="page-body">
                <div class="container">
                    <div class="row  wow fdeInUp">
                    
                    <!--Image block-->
                    <div class="col-md-6 col-sm-12">
                    <figure><img src="dist/img/Layer-22.jpg" class="img-responsive">
                    </figure>
                    </div><!--/Image block-->

                    <!--content block-->
                    <div class="col-md-6 col-sm-12 page-block ">
                
                        <header class="entry-header" >
                        <span><a href="#">Design</a> . <a href="#">Illustrations</a></span>
                        <h2><?php get_the_title(); ?></h2>  
                        <ul class=" custom-social">
                        <li>Share :</li>
                                <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                                <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                                <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                                <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
                            </ul>
                        
                </header>
                
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