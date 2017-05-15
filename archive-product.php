<?php get_header(); ?>
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
		<p id="breadcrumbs">', '</p>
		');
}
?>
<?php get_sidebar(); ?>

<?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */
    if (is_category()) { ?>
        <h2>Tất cả Sản Phẩm Của &#8216;<?php single_cat_title(); ?>&#8217; Danh Mục</h2>

        <?php /* If this is a tag archive */
    } elseif (is_tag()) { ?>
        <h2>Tải Lên Bởi &#8216;<?php single_tag_title(); ?>&#8217;</h2>

    <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

    <?php } ?>

    <?php while (have_posts()) : the_post(); ?>


        <div <?php post_class() ?>>

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'product-thumb')); ?></a>
            <div class="archive-info">

                <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>

                <p class="product-kichthuoc">
                    <?php echo "<strong>&#42; Kích Thước: </strong>" . get_post_meta($post->ID, 'wpcf-kich-thuoc', 'true'); ?>
                    <strong> (mm)</strong></p>
                <p class="product-sotam">
                    <?php echo "<strong>&#42; Số tấm/hộp: </strong>" . get_post_meta($post->ID, 'wpcf-so-tam-hop', 'true'); ?></p>
                <p class="product-dientich">
                    <?php echo "<strong>&#42; Diện Tích/hộp: </strong>" . get_post_meta($post->ID, 'wpcf-dien-tich', 'true'); ?>
                    <strong>m<sup>2</sup></strong>
                </p>

                <p class="tinhtrang"><?php
                    $product_status = get_post_meta($post->ID, 'wpcf-product-status', true);
                    if ($product_status == conhang) {
                        echo "<strong style='color:green;'>&#42; Tình Trang: Còn hàng</strong>";
                    } else {
                        echo "<strong style='color:red;'>&#42; Tình Trạng: Hết hàng</strong>";
                    }
                    ?></p>
                <h4><?php echo "<strong>&#42; Giá: </strong>" . get_post_meta($post->ID, 'wpcf-product-price', true); ?>
                    <strong>VNĐ</strong></h4>
            </div>
        </div>


    <?php endwhile; ?>

    <?php include(TEMPLATEPATH . '/inc/nav.php'); ?>

<?php else : ?>

    <h2>Không Tìm Thấy Sản Phẩm Nào</h2>

<?php endif; ?>



<?php get_footer(); ?>
