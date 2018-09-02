<?php 
/* Template Name: Page With Sidebar */
get_header(); ?>

<div id="sidebarPage">
<main id="mainWSide">
    
    <?php if (have_posts()): ?>

        <div class="postContent">
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        </div>

    <?php else: ?>
        <h5>Sorry, No Post Found</h5>
    <?php endif; ?>

</main>    

<aside id="sidebar">

    <?php get_sidebar(); ?>
    
</aside>
</div>

<?php get_footer(); ?>
