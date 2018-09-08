<?php /* Template Name: General */ ?>
<?php 
get_header(); ?>
<!--blog body-->

<main id="postPage">

<div class="postTitle">
    <h2><?php echo the_title(); ?></h2>
</div>

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

<!-- <div class="viewMoreClass">
    <p id="viewMore">View more posts in "<?php //echo get_the_category()[0]->name; ?>"</p>
</div> -->


</main>


<?php get_footer(); ?>