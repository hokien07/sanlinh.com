<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <div class="entry">
            <?php the_content(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_field('thong_tin'); ?></p>
            <h4><?php the_field('gia_san_pham'); ?> VNĐ</h4>
        </div>

    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
