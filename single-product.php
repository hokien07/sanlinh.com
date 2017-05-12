<?php get_header(); ?>
<?php
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
		<p id="breadcrumbs">','</p>
		');
}
?> 
<?php get_sidebar(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="chitiet-sanpham">
        <div class="product-thumb">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <!--END: PRODUCT THUMBNAIL-->

        <div class="product-info">
            <h3><?php the_title(); ?></h3> <!--Tiêu đề sản phẩm-->

        <p class="product-kichthuoc">
            <?php echo "<strong>&#42; Kích Thước: </strong>" . get_post_meta($post->ID, 'wpcf-kich-thuoc', 'true');?><strong> (mm)</strong></p>
         <p class="product-sotam">
             <?php echo "<strong>&#42; Số tấm/hộp: </strong>" . get_post_meta($post->ID, 'wpcf-so-tam-hop', 'true');?></p>
         <p class="product-dientich">
             <?php echo "<strong>&#42; Diện Tích/hộp: </strong>" . get_post_meta($post->ID, 'wpcf-dien-tich-hop', 'true');?><strong>m<sup>2</sup></strong>

        </p>

            <p class="product-status">
                <?php echo "<strong>&#42;  Tình trạng:</strong> ";
                $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
                if ($product_status == conhang) {
                    echo  "Còn hàng";
                } else { echo "Hết hàng"; }
                ?>
            </p><!--Tình trạng sản phẩm-->


            <h4 class="product-price">
                <?php echo "<strong>&#42; Giá:</strong> ". get_post_meta( $post->ID, 'wpcf-product-price', true );  ?> <strong>VNĐ/m<sup>2</sup></strong>
            </h4><!--Giá sản phẩm-->

            <a href="#" class="order-button-single">Đặt hàng</a>
        </div>

        <!--END: PRODUCT INFO-->

        <div class="post-info">
            <?php the_content(); ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
