<?php /* Template Name: Artwork Post Listing */ ?>
 <?php 
   get_header();   
    //I don't know whether this is necessary
    $arg = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> 100
  ];
  $posts = new WP_Query($arg);

?>

<main id="archive">
    <div class="allProj">
        <h3>Artwork</h3>
    </div>
    
    <div class="archThumbs">

        <?php if ($posts->have_posts()) : ?>
        <?php while ($posts->have_posts()) : $posts->the_post(); 
            if ( in_category('artwork') ) :?>

            <div class="circle">
                <a href="<?php the_permalink(); ?>">

                    <?php if(has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src=httops://placehold.it/226x226" alt="">
                    <?php endif ?>

                    <div class="titleOverlay">
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
                
        <?php 
            endif;
            endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
        <?php endif; ?>

    </div>
    
    
</main>

<?php get_footer(); ?>