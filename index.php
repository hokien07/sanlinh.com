<?php get_header(); ?>

<section class="banner">
                <div id="slider">
                    <figure>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/01.jpg" alt>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/02.jpg" alt>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/03.jpg" alt>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/04.jpg" alt>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/slider/05.jpg" alt>
                    </figure>
                </div>

	</section>
	<!--END banner-->

	<section class="content">
			<section class="title">
					<div class="inner-title">
							<h1>SÀN GỖ ĐỨC</h1>
							<a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Xem tất cả &rsaquo;</a>
					</div>
			</section>

			<section class="post">

                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=6&post_type=product'.'&paged='.$paged);
                $count = 0;

                while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
                ?>

                <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
                if ($count == 3) {
                    $p3 = 'thrid';
                    $count = 0;
                } else { $p3 = ''; }
                ?>

                    <div <?php post_class($p3); ?> class="product-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => 'product-thumb') ); ?></a>
                            <h3><?php the_title(); ?></h3>
                            <p><?php
                                $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
                                if ($product_status == conhang) {
                                    echo "<strong style='color:green;'>Tình Trang: Còn hàng</strong>";
                                }
                                else {
                                    echo "<strong style='color:red;'>Tình Trạng: Hết hàng</strong>";
                                }
                                ?></p>
                            <h4><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-product-price', true ); ?> <strong>VNĐ</strong></h4>
                            <a class="order-button" href="<?php the_permalink();?>">Xem chi tiết</a>
                    </div>

                <?php endwhile; ?>
                <nav>
                    <?php previous_posts_link('&laquo; Mới hơn') ?>
                    <?php next_posts_link('Cũ hơn &raquo;') ?>
                </nav>
			</section>


        <section class="title">
            <div class="inner-title">
                <h1>SÀN GỖ THÁI LAN</h1>
                <a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Xem tất cả &rsaquo;</a>
            </div>
        </section>

        <section class="post">

            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('showposts=6&post_type=product'.'&paged='.$paged);
            $count = 0;

            while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
                ?>

                <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
                if ($count == 3) {
                    $p3 = 'thrid';
                    $count = 0;
                } else { $p3 = ''; }
                ?>

                <div <?php post_class($p3); ?> class="product-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => 'product-thumb') ); ?></a>
                    <h3><?php the_title(); ?></h3>
                    <p><?php
                        $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
                        if ($product_status == conhang) {
                            echo "<strong style='color:green;'>Tình Trang: Còn hàng</strong>";
                        }
                        else {
                            echo "<strong style='color:red;'>Tình Trạng: Hết hàng</strong>";
                        }
                        ?></p>
                    <h4><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-product-price', true ); ?> <strong>VNĐ</strong></h4>
                    <a class="order-button" href="<?php the_permalink();?>">Xem chi tiết</a>
                </div>

            <?php endwhile; ?>
            <nav>
                <?php previous_posts_link('&laquo; Mới hơn') ?>
                <?php next_posts_link('Cũ hơn &raquo;') ?>
            </nav>
        </section>


        <section class="title">
            <div class="inner-title">
                <h1>SÀN GỖ VIỆT NAM</h1>
                <a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Xem tất cả &rsaquo;</a>
            </div>
        </section>

        <section class="post">

            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('showposts=6&post_type=product'.'&paged='.$paged);
            $count = 0;

            while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
                ?>

                <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
                if ($count == 3) {
                    $p3 = 'thrid';
                    $count = 0;
                } else { $p3 = ''; }
                ?>

                <div <?php post_class($p3); ?> class="product-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => 'product-thumb') ); ?></a>
                    <h3><?php the_title(); ?></h3>
                    <p><?php
                        $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
                        if ($product_status == conhang) {
                            echo "<strong style='color:green;'>Tình Trang: Còn hàng</strong>";
                        }
                        else {
                            echo "<strong style='color:red;'>Tình Trạng: Hết hàng</strong>";
                        }
                        ?></p>
                    <h4><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-product-price', true ); ?> <strong>VNĐ</strong></h4>
                    <a class="order-button" href="<?php the_permalink();?>">Xem chi tiết</a>
                </div>

            <?php endwhile; ?>
            <nav>
                <?php previous_posts_link('&laquo; Mới hơn') ?>
                <?php next_posts_link('Cũ hơn &raquo;') ?>
            </nav>
        </section>

        <section class="title">
            <div class="inner-title">
                <h1>SÀN GỖ TRUNG QUỐC</h1>
                <a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Xem tất cả &rsaquo;</a>
            </div>
        </section>

        <section class="post">

            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('showposts=6&post_type=product'.'&paged='.$paged);
            $count = 0;

            while ($wp_query->have_posts()) : $wp_query->the_post(); $count++;
                ?>

                <?php //Tạo biến chèn class 'thrid' vào mỗi 3 bài viết.
                if ($count == 3) {
                    $p3 = 'thrid';
                    $count = 0;
                } else { $p3 = ''; }
                ?>

                <div <?php post_class($p3); ?> class="product-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array('class' => 'product-thumb') ); ?></a>
                    <h3><?php the_title(); ?></h3>
                    <p><?php
                        $product_status = get_post_meta( $post->ID, 'wpcf-product-status', true );
                        if ($product_status == conhang) {
                            echo "<strong style='color:green;'>Tình Trang: Còn hàng</strong>";
                        }
                        else {
                            echo "<strong style='color:red;'>Tình Trạng: Hết hàng</strong>";
                        }
                        ?></p>
                    <h4><?php echo "<strong>Giá: </strong>" . get_post_meta( $post->ID, 'wpcf-product-price', true ); ?> <strong>VNĐ</strong></h4>
                    <a class="order-button" href="<?php the_permalink();?>">Xem chi tiết</a>
                </div>

            <?php endwhile; ?>
            <nav>
                <?php previous_posts_link('&laquo; Mới hơn') ?>
                <?php next_posts_link('Cũ hơn &raquo;') ?>
            </nav>
        </section>




    </section>

	<section class="content_1">
			<section class="title">
					<div class="inner-title">
							<h1>loại sản phẩm</h1>
							<a href="<?php echo get_post_type_archive_link( 'product' ); ?>">Xem tất cả &rsaquo;</a>
					</div>
			</section>

			<section class="product-footer">

                <?php
                $category_id = get_cat_ID( 'sàn gỗ châu âu' );
                $category_link = get_category_link( $category_id );
                ?>
                <a href="http://localhost/sanlinh.com/product-category/san-go-cao-cap/"><img src="<?php echo bloginfo('template_directory'); ?>/images/03.jpg" alt="san go cao cap"></a>
                <h3>Sàn Gỗ Loại 1</h3>
			</section>

			<section class="product-footer-2">
					<div class="product_1">
                        <a href="http://localhost/sanlinh.com/product-category/san-go-chau-au/"><img src="<?php echo bloginfo('template_directory'); ?>/images/04.jpg" alt="san go cao cap"></a>
							<h3>Sàn Gỗ Loại 2</h3>
					</div>
					<div class="product_1">
                        <a href="<?php get_category_link( 2); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/images/05.jpg" alt="san go cao cap"></a>
							<h3>Sàn Gỗ Loại 3</h3>
					</div>
					<div class="product_1">
                        <a href="<?php get_category_link( 2); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/images/06.jpg" alt="san go cao cap"></a>
							<h3>Sàn Gỗ Hàn Quốc</h3>
					</div>

					<div class="product_1">
                        <a href="<?php get_category_link( 2); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/images/07.jpg" alt="san go cao cap"></a>
							<h3>Sàn Gỗ Cao Cấp</h3>
					</div>
			</section>
	</section>

<?php get_footer(); ?>
