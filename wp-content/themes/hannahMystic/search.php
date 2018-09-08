<?php get_header() ?>
<?php $search_string = $_GET['s']; ?>

<main id="archive">
    <div class="allProj">
        <h3>Search Results for "<?php echo $search_string; ?>"</h3>
    </div>

    <div class="archThumbs">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

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

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
    <h5>
      <?php echo 'Sorry, there are no results'; ?>
</h5>
<?php endif; ?>

</div>

</main>

<?php get_footer() ?>