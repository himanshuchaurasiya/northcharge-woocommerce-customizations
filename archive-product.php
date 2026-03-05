<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?>



<section class="banner banner-abt">
       <div class="owl-carousel slider-carousel owl-theme">    
            <div class="item">
                <img src="https://northcharge.ca/wp-content/uploads/2023/06/anc1.jpg" alt="">
                <div class="shadowBox">
                    <div class="container">
                        <h1>ANC-Series</h1>
                        <p>Charging that is fast, high-quality, and dependable</p>
                        <a href="#shopPage" class="btn" >Order Today</a>
                    </div>
                </div>
            </div>   
            <div class="item">
                <img src="https://northcharge.ca/wp-content/uploads/2023/06/bnc-1.jpg" alt="">
                <div class="shadowBox">
                    <div class="container">
                        <h1>BNC-Series</h1>
                        <p>Super Charge your Business with North Charge Commercial Chargers</p>
                        <a href="#bnc-rightShop" class="btn">Order Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="b1 sp1">
        <div class="container">
            <h3>Installing Your ANC EV Charger has never been easier</h3>
            <p>Note: In some/all regions, it is imperative to get city's approval for installation in case additional wiring or circuit breaker changes are need. Please check with your Hydro supplier before installation.</p>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-3">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/more/si1.png" alt=""></figure>
                    <figcaption>Drill the necessary holes at a suitable location</figcaption>
                </div>
                <div class="col-md-6 col-lg-3">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/more/si2.png" alt=""></figure>
                    <figcaption>Connect the charger to the main phase</figcaption>
                </div>
                <div class="col-md-6 col-lg-3">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/more/si3.png" alt=""></figure>
                    <figcaption>Download app & Configure</figcaption>
                </div>
                <div class="col-md-6 col-lg-3">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/more/si4.png" alt=""></figure>
                    <figcaption>Start Charging</figcaption>
                </div>
            </div>
        </div>
    </section>
<?php
//if ( woocommerce_product_loop() ) {

    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    //do_action( 'woocommerce_before_shop_loop' );

    //woocommerce_product_loop_start();

    //if ( wc_get_loop_prop( 'total' ) ) {
      //  while ( have_posts() ) {
        //    the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            //do_action( 'woocommerce_shop_loop' );

            //wc_get_template_part( 'content', 'product' );
        //}
    //}

    //woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    //do_action( 'woocommerce_after_shop_loop' );
//} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    //do_action( 'woocommerce_no_products_found' );
//}
?>

<section class="shopPage" id="shopPage">
        <div class="container">
            <h4>Select from NorthCharge Home EV Charger Line</h4>
            <h3>Select Power Output Option <i class="fas fa-angle-right"></i>
                <?php $i=1;
                    $productId = 374; //product id here
                    $handle = new WC_Product_Variable($productId);
                    $variationData = $handle->get_children();
                ?>
                <ul class="nit-dropdown"> 
                    <?php foreach ($variationData as $value) { 
                        
                        $variation_id = $value;
                        $single_variation = new WC_Product_Variation($value);
                        $var_slug = $single_variation->slug;
                        $desc = $single_variation->get_description();
                        $price = $single_variation->get_price();
                        $sku = $single_variation->get_sku();
                        $wei = $single_variation->get_weight();
                        $pro_name = "ANC-".$wei;
                        ?>
                    <li data-val="r<?php echo $i; ?>" data-desc="<?php echo $desc; ?>" data-price="<?php echo $price; ?>" data-sku="<?php echo $sku; ?>" data-pname="<?php echo $pro_name; ?>"><?php echo " ".$name = implode(" / ", $single_variation->get_variation_attributes()); 
                    ?></li>
                <?php $i++; } ?>
                </ul>
            </h3>
            <div class="row r r1 active mt30">
                <div class="col-md-6">
                    <div class="mainImg">
                        <figure><img src="https://northcharge.ca/wp-content/uploads/2023/06/anc.png" alt=""></figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <figcaption>
                        <h5><?php echo $name; ?></h5>
                        <ul>
                            <li><?php echo $desc = $single_variation->get_description(); ?></li>
                        </ul>
                        <a href="<?php home_url(); ?>/dev/northcharge/product/anc/" class="btn2">Buy Now</a>
                    </figcaption>
                </div>
            </div>
            
            
        </div>
    </section>
<section class="shopPage bg-white rightShop" id="bnc-rightShop">
        <div class="container">
            <h4>Select from our Business EV Charger Line</h4>
            <h3>Select Power Output Option <i class="fas fa-angle-right"></i>
                <?php 
                    $j=1;
                    $productId1 = 379; //product id here
                    $handle1 = new WC_Product_Variable($productId1);
                    $variationData1 = $handle1->get_children();

                ?>

                <ul class="nit-dropdown"> 
                    <?php foreach ($variationData1 as $value1) { 
                        
                        $variation_id1 = $value1;
                        $single_variation1 = new WC_Product_Variation($value1);
                        $var_slug1 = $single_variation1->slug;
                        $desc1 = $single_variation1->get_description();
                        $price1 = $single_variation1->get_price();
                        $sku1 = $single_variation1->get_sku();
                        $wei1 = $single_variation1->get_weight();
                        $pro_name1 = "BNC-".$wei1;
                        ?>

                   
                    <li data-val="r<?php echo $j; ?>" data-desc="<?php echo $desc1; ?>" data-price="<?php echo $price1; ?>" data-sku="<?php echo $sku1; ?>" data-pname="<?php echo $pro_name1; ?>"><?php echo "<br/>".$name1 = implode(" / ", $single_variation1->get_variation_attributes());//here you get product name 
                    ?></li>
                <?php $j++; } ?>
                </ul>
                
            </h3>
            <div class="row r r1 active mt30">
                <div class="col-md-6">
                    <figcaption>
                        <h5><?php echo $name1; ?></h5>
                        <ul>
                            <li><?php echo $desc1 = $single_variation1->get_description() ?></li>
                        </ul>
                    
                        <a href="<?php home_url(); ?>/dev/northcharge/product/bnc/" class="btn2">Buy Now</a>
                    </figcaption>
                </div>
                <div class="col-md-6">
                    <div class="mainImg right">
                        <figure><img src="https://northcharge.ca/wp-content/uploads/2023/06/bnc-mail-img.png" alt=""></figure>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

<section class="shopPage" id="shopPage">
        <div class="container">
            <h4>Select from NorthCharge Home EV Charger Line</h4>
            <h3>Select Power Output Option <i class="fas fa-angle-right"></i>
                <?php $k=1;
                    $productId2 = 810; //product id here
                    $handle2 = new WC_Product_Variable($productId2);
                    $variationData2 = $handle2->get_children();
                ?>
                <ul class="nit-dropdown"> 
                    <?php foreach ($variationData2 as $value2) { 
                        
                        $variation_id2 = $value2;
                        $single_variation2 = new WC_Product_Variation($value2);
                        $var_slug2 = $single_variation2->slug;
                        $desc2 = $single_variation2->get_description();
                        $price2 = $single_variation2->get_price();
                        $sku2 = $single_variation2->get_sku();
                        $wei2 = $single_variation2->get_weight();
                        $pro_name2 = "ANC-ELITE".$wei2;
                        ?>
                    <li data-val="r<?php echo $k; ?>" data-desc="<?php echo $desc2; ?>" data-price="<?php echo $price2; ?>" data-sku="<?php echo $sku2; ?>" data-pname="<?php echo $pro_name2; ?>"><?php echo " ".$name2 = implode(" / ", $single_variation2->get_variation_attributes()); 
                    ?></li>
                <?php $k++; } ?>
                </ul>
            </h3>
            <div class="row r r1 active mt30">
                <div class="col-md-6">
                    <div class="mainImg">
                        <figure><img src="https://northcharge.ca/wp-content/uploads/2023/07/684631.jpg" alt=""></figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <figcaption>
                        <h5><?php echo $name2; ?></h5>
                        <ul>
                            <li><?php echo $desc2 = $single_variation2->get_description(); ?></li>
                        </ul>
                        <a href="<?php home_url(); ?>/dev/northcharge/product/anc-elite/" class="btn2">Buy Now</a>
                    </figcaption>
                </div>
            </div>
            
            
        </div>
    </section>

    <section class="drivers2 sp" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/bg/bg-sp1.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <h3>
Choose from our selection of High Quality Level 2 and Level 3 chargers to efficiently complete tasks and generate revenue
<br> <small>(certifications available)</small></h3>
                        <a href="<?php home_url(); ?>/dev/northcharge/contact-us/" class="btn btn2">Contact us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sp2Page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <figcaption>
            <h3>Select from our range of DC Level 3 Chargers for your Fleet Charging requirements</h3>
            <p>Our DC Fast Chargers are designed specifically for Commercial / Fleet use, delivering fast and powerful charging to keep the electric vehicles running & charging smoothly. Our DC Fast Chargers are the ideal solution for commercial fleets and businesses that rely on electric vehicles. All products are safety compliant and have been tested based on North American standards</p>
           <h5>DC Chargers Power Ranges from 30KW - 180KW</h5>
           <a href="<?php home_url(); ?>/dev/northcharge/contact-us/" class="btn2">ContacT For Pricing</a>
                    </figcaption>
                </div>
                <div class="col-md-6">
                    <figure>
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/more/sp3.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="b5">
        <div class="container">
            <div class="b5Box">
                <div class="mainImgBox"><img src="<?php bloginfo('template_url'); ?>/assets/images/more/fleet-view.png" alt=""></div>
            </div>
            <div class="listBox">
                <ul>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i1.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Automatic Infrastructure
    Diagnostics</h4>
                       <p>A smart alert and self-recovery system nearly eliminates the need for human maintenance.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i2.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Comprehensive Reporting</h4>
                       <p>Charging session details and metrics provide business analysis cost optimization.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i3.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Intuitive Dashboard</h4>
                       <p>Seamless navigation and data visualization provide an instant snapshot of any site or the entire network.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i4.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Remote Operation
    Management</h4>
                       <p>North Charge EV OS is <br> scalable: Bring a Single station or entire charging network to a single platform.</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i5.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Easy Access to Information</h4>
                       <p>Enhance the EV Charging Experience For drivers By Controlling The Location and pictures of each charging Site </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/more/i6.png" alt="">
                        </div>
                        <div class="content">
                            <h4>Pricing Versatility</h4>
                       <p>Optimize business opportunities with automatic peak-hour pricing, fully controlled by station owners.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="b2 b4 fleet-b24">
        <div class="container">
            <div class="row aic">
                <div class="col-lg-6">
                    <div class="content">
                        <h3>Effortlessly Manage And Monetize Your EV Charging Stations with Our Robust Software Solution</h3>
                        <p>The NorthCharge EV OS powered by Noodeo, is capable of operating a single charging station or an entire network. With this system, users can enjoy hands-free station operation that includes automatic service delivery, payment processing, and operation management. Additionally, the North Charge EV OS delivers one of the highest service uptimes in the industry</p>
                        <a href="<?php home_url(); ?>/dev/northcharge/contact-us/" class="btn">Contact for More Info</a>
                    </div>
                </div>
                <div class="col-md-7 d-none">
                    <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/more/bisniess-3.png" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    
<?php
get_footer( 'shop' );