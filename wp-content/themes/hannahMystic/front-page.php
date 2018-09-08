<?php /* Template Name: HOME PAGE */ ?>
<?php 
get_header(); ?>

<div id="homeContent">
    
    <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/homeName.png" alt="Hannah Mystic">
    </div>
    <div class="homeOthers">
        <div class="homeDrawing">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/media/selfPortrait.png" alt="Me">
        </div>

        <div class="homeDesc">
            <img id="tagline" src="<?php echo get_stylesheet_directory_uri(); ?>/media/tagline.png" alt="web design, art, and music">
            <p id=homeDescP>I wound up on Earth when my home planet was destroyed, but I’m making the most of the circumstance. I am an artist, web designer, and one third of the legendary girl punk band Cherri Cola. I code better than your average boy, and can eat more peanut butter too. <br><br>Contact me at hannahmystic13@gmail.com
            </p>
            <!-- <p id="homeScroll">Scroll to see my recent projects</p> -->
        </div>
    </div>

</div>

<div class="works">
    <?php
    /*
    *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
    *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
    *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
    */
    $post_objects = get_field('featured');
    if ($post_objects): ?>
        <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT)?>
            <?php setup_postdata($post); ?>
                 

            <div class="postContent">
                <?php // TO SHOW THE PAGE CONTENTS?>

                    <p><?php the_content(); ?> <!-- Page Content (WYSIWYG Field) --></p>
       
                <?php //wp_reset_query(); //resetting the page query?>    
            </div>

            <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly?>
    <?php endif;?>

               
</div>


<?php get_footer(); ?>