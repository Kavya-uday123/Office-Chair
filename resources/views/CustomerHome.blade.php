<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="<?php echo url('/'); ?>/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    <script>  
function cartinsert(itemid,j)
{
	
  
   $.ajax({url: '/CartInsert?itemid='+itemid,
  type: 'GET',
  success: function(data) {
    
    alert("Item added to cart Successfully");
  },
  });


}
    </script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo url('/'); ?>/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/CustomerHome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/items">Items</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/blog" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                      
                                        <!-- <a class="dropdown-item" href="/checkout">product checkout</a> -->
                                        <a class="dropdown-item" href="/cart">shopping cart</a>
                                        <!-- <a class="dropdown-item" href="/confirmation">confirmation</a> -->
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/OrderHistory">Order History</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Log Out</a>
                                </li>
                            </ul>
             
                        </div>
                       <!-- <div class="hearer_icon d-flex">
                           
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>+
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                        
                                            <h1>Office Chair</h1>
                                            <p>Experts in Ergonomics, definers of space and passionate about design.</p>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="https://www.ikea.com/images/langfjaell-series-79d1bb324fb64c9a16bb6bbecaa0b832.jpg?f=s" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Office Chair</h1>
                                            <p>For the last five decades, aranoz has taken inspiration from contemporary aesthetic movements to re-imagine office spaces.</p>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="https://www.ikea.com/images/langfjaell-series-79d1bb324fb64c9a16bb6bbecaa0b832.jpg?f=s" alt="">
                                </div>
                            </div>
                        </div><div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Office Chair</h1>
                                            <p>Leaders in innovation, we provide economic solutions to tackle the challenges faced in the modern office. Maintaining productivity, defining comfort at work, encouraging interaction.</p>
                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="https://www.ikea.com/images/langfjaell-series-79d1bb324fb64c9a16bb6bbecaa0b832.jpg?f=s" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Cloth $ Wood Sofa</h1>
                                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra</p>
                                            <a href="#" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="img/banner_img.png" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
  
    <!-- upcoming_event part start-->

    <!-- product_list start--><form action="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                            <?php
     $i=0;$j=0;
     if(isset($data))
    {
    foreach($data as $chair)
    {
        $i++;$j++;
        if($i==1) { ?><tr> <?php }
    ?>
    
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                    <img src="..\Images\<?php  echo $chair->chair_img?>" height="400" width="400">
                                        <div class="single_product_text">
                                            <h4><?php  echo $chair->chair_name ?></h4>
                                            <h3>Rs  <?php  echo $chair->chair_rate ?></h3>
                                            <a class="btn btn-warning" href="/viewchairdetail/<?php echo $chair->chair_id ?>">View More</a>
                                        </div>
                                    </div>
                                </div>
                                <?php 
if($i==2)
{
    ?>
     </tr>
    <?php
    $i=0;
}
    }
    }
?>
                                <!-- <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/20_Genius.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Genius</h4>
                                            <h3>Rs 1700</h3>
                                            <a class="add_cart" onclick="getlogin()">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/17_Indigo.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Indigo</h4>
                                            <h3>Rs 3000</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/16_Chrome.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Chrome</h4>
                                            <h3>Rs 2000</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/15_Forum.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Forum</h4>
                                            <h3>Rs 1700</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/14_Invention.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Invention</h4>
                                            <h3>Rs 2500</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/13_Click.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Click</h4>
                                            <h3>Rs 2800</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/12_Contact.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Contact</h4>
                                            <h3>Rs 3000</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/11_Astro.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Astro</h4>
                                            <h3>Rs 1500</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/10_Anatom.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Anatom</h4>
                                            <h3>Rs 1850</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/09_Alpha.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Alpha</h4>
                                            <h3>Rs 2500</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/08_Allwork.png" alt="">
                                        <div class="single_product_text">
                                            <h4>AllWork</h4>
                                            <h3>Rs 2800</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/07_Opus.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Opus</h4>
                                            <h3>Rs 2200</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/06_Versa.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Versa</h4>
                                            <h3>Rs 3000</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/04_Optima.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Optima</h4>
                                            <h3>Rs 2500</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/05_Amaze.png" alt="">
                                        <div class="single_product_text">
                                            <h4>Amaze</h4>
                                            <h3>Rs 3800</h3>
                                            <a onclick="getlogin()" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/01_Helix.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Weekly Sale on
                            60% Off All Products</h2>
                       <!-- <div class="date_countdown">
                            <div id="timer">
                                <div id="days" class="date"></div>
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>--><br>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <div class="single_product_item">
                            <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/02_Liberate.png" alt="">
                            <div class="single_product_text">
                                <h4>Liberate</h4>
                                <h3>Rs 1800</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/03_Pinnacle.png" alt="">
                            <div class="single_product_text">
                                <h4>Pinnacle</h4>
                                <h3>3500</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/05_Amaze.png" alt="">
                            <div class="single_product_text">
                                <h4>Amaze</h4>
                                <h3>Rs 1500</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="
https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/04_Optima.png
" alt="">
                            <div class="single_product_text">
                                <h4>Optima</h4>
                                <h3>Rs 1800</h3>
                            </div>
                        </div>
                        <div class="single_product_item">
                            <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/06_Versa.png" alt="">
                            <div class="single_product_text">
                                <h4>Versa</h4>
                                <h3>Rs 3500</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_4.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_5.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_1.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_2.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_3.png" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo url('/'); ?>/img/client_logo/client_logo_4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="/CustomerHome">Home</a></li>
                            <li><a href="/items">Items</a></li>
                            <li><a href="/cart">Cart</a></li>
                            <li><a href="/login">Log Out</a></li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Features</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Jobs</a></li>
                            <li><a href="">Brand Assets</a></li>
                            <li><a href="">Investor Relations</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Resources</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Guides</a></li>
                            <li><a href="">Research</a></li>
                            <li><a href="">Experts</a></li>
                            <li><a href="">Agencies</a></li>
                        </ul>
                    </div>
                </div>-->
               <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <!--<h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping
                        </p>-->
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                  &nbsp&nbsp&npsp  class="email_icon newsletter-submit button-contactForm">subscribe</button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="copyright_text">
                            <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer_icon social_icon">
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.globe.gov" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                                <li><a href="https://www.behance.net" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="<?php echo url('/'); ?>/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?php echo url('/'); ?>/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?php echo url('/'); ?>/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?php echo url('/'); ?>/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?php echo url('/'); ?>/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="<?php echo url('/'); ?>/js/slick.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/contact.js"></script>
    <script src="<?php echo url('/'); ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/jquery.form.js"></script>
    <script src="<?php echo url('/'); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo url('/'); ?>/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="<?php echo url('/'); ?>/js/custom.js"></script>
</body>

</html>