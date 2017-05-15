<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">

        <div class="entry">

            <?php the_content(); ?>

            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

        </div>

    </div>

    <?php // comments_template(); ?>

<?php endwhile; endif; ?>


<?php get_footer(); ?>