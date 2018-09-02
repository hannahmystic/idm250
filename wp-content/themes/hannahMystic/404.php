<?php 
/* Template Name: 404 */
get_header(); ?>

<main id="404content">

    <div class="drats">
        <img src="<?php echo get_template_directory_uri(); ?>/media/drats.png" alt="The page you are looking for could not be found">
    </div>
    
    <div class="404other">
        <div class="phin404">
            <img src="<?php echo get_template_directory_uri(); ?>/media/phin404.png" alt="picture of my dog">
        </div>
        <p id="p404">But you did find this cool picture of my dog Phineas</p>
    </div>
    
    
</main>

<?php get_footer ?>