<?php
/*
Template Name: Blog Post Listing
*/
?>
<?php 

    $arg = [
        'post_type' => 'post',
        'post_status'  => 'publish',
        'posts_per_page'  => 3
    ];

    $posts = new WP_Query($arg);

    get_header();
?>

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
                <?php if ($posts->have_posts()) : ?>
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>

                <!--article-->
                    <article class="col-md-12 wow fadeInUp">
                    <header class="entry-header"> <span class="date-article"><i class="fa fa-calendar-o"></i> JULY 13 2017</span> <a href="blog-post.html"><img src="dist/img/a-1.jpg" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="<?php the_permalink(); ?>"><i class="fa fa-folder-o"></i> Business &bull; Industry</a><a href="#"><i class="fa fa-user-o"></i> Rijo</a> </span></span> <a href="<?php the_permalink(); ?>">
                    <h2>10 places to visit in 2018</h2>
                    </a></header>
                    <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
                    mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
                    <a class="btn  readmore-btn" href="<?php the_permalink(); ?>">READ MORE</a> </article>
                    <!--/article--> 

                <?php endwhile; //resetting the page loop?>
                <?php wp_reset_query(); //resetting the page query?>
                <?php else : ?>                       
                    <h2>Sorry, No Post Found</h2>
                <?php endif; ?>   
            
                <div class="clearfix"></div>
            
                <!--portfolio page nav-->
                <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
                <ul>
                    <li >
                    <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li >
                    <div class="nav-next"><a href="http://localhost/wordpress/page/2/"> <i class="fa fa-chevron-right"></i></a></div>
                    </li>
                </ul>
                </nav><!--/portfolio page nav-->

                
            </div>
            <!--blog posts container--> 
            <?php get_sidebar(); ?>
        </div>

    </div>

</div>
<?php get_footer(); ?>