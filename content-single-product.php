<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
//do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php //wc_product_class( '', $product ); ?>>
<?php 
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );
?>

<section class="shopDetailPage">
    <div class="container">
        <div class="row produc-detail mb-md-3">
        <div class="col-md-6 mb-3 pr-lg-5 pr-md-3">
            <div class="thumbnail-slider">
                <div class="mainImg">
                    <figure>
                   
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );?>
                                        
    <img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>"></figure></div>
                <div class="listBox">
                    <?php
                         /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
    do_action( 'woocommerce_before_single_product_summary' );
                            ?>
                       
                </div>
        </div>
            </div>
            <div class="col-md-6 mb-3">
                <h1><?php echo get_the_title(); ?></h1>
                <div class="rating mb-2">
                <span>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </span>
                4.8 (157 Reviews)
            </div>
            <h1 class="entry-title">
                
                <?php global $product;
                if ( ! is_a( $product, 'WC_Product' ) ) { $product = wc_get_product( get_the_id() ); }
                //echo $product->get_name(); ?>            
            </h1>
        <!--<div class="nit-product-content">-->                    
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
        do_action( 'woocommerce_single_product_summary' );
        ?>
            <!-- </div>
        </div> -->
            
    </div>      

        

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action( 'woocommerce_after_single_product_summary' );
    ?>
                        
<!--</div>--->
        </div>
        </div>
</section>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
<section class="sdi">
    <div class="container">
        <h3>Product Overview</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi1.png" alt="">
                    </div>
                    <div class="content">
                        <h4>PowerFul</h4>
                        <p>Up to 48A / 11.5Kw of charging capacity</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi2.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Compatible</h4>
                        <p>SAE J1772 Compliant
type 1 plug with 18ft cable</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi3.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Convenient</h4>
                        <p>adjust power as needed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi4.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Connected</h4>
                        <p>Complete with LAN connectivity (WiFi or 4G optional), ensuring chargers are always online</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi5.png" alt="">
                    </div>
                    <div class="content">
                        <h4>OCPP</h4>
                        <p>OCPP 1.6J help you connect EV Charger to the cloud</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="icon">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sdi6.png" alt="">
                    </div>
                    <div class="content">
                        <h4>Durability</h4>
                        <p>iP65 and IK08 protection ratings, allowing for indoors or outdoors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="drivers-imgs">
        <div class="container">
			<?php 
	$id = get_the_ID();
	if($id==810){ ?>   
            <div class="flex">
                <!-- <div class="box">
                    <img src="<?php //bloginfo('template_url'); ?>/assets/images/more/p1.png" alt="">
                </div> -->
                <div class="box">
                    <img src="https://northcharge.ca/wp-content/uploads/2023/07/6541.jpg" alt="">
                </div>
                <div class="box">
                    <img src="https://northcharge.ca/wp-content/uploads/2023/07/65451.jpg" alt="">
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/more/p4.png" alt="">
                </div>
            </div>
			<?php } else {?>
			  <div class="flex">
                <!-- <div class="box">
                    <img src="<?php //bloginfo('template_url'); ?>/assets/images/more/p1.png" alt="">
                </div> -->
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/more/p2.png" alt="">
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/more/p3.png" alt="">
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/more/p4.png" alt="">
                </div>
            </div>
			<?php };?>
        </div>
    </section>
    <section class="b6 b2 drivers-b2">
        <div class="container">
            <div class="row aic">
                <div class="col-lg-12">
                    <div class="content text-center">
                        <h3 data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">Transform your business property into a revenue-generating asset by installing electric vehicle (EV)  </h3>
                        <a href="shop.html" class="btn"  data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>