<!doctype html>
<html lang="zxx">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
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
    
    alert(data);
    //alert("Item added to cart Successfully");
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
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Log Out</a>
                                </li>
                            </ul>
             
                        </div>
                        <!--<div class="hearer_icon d-flex">
                           
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
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Products</h2>
                            <p>Home <span>-</span> Shop Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
      <!-- <div class="row row-cols-1 row-cols-md-4 lg-4"> -->
      <table align="center" cellpadding="15" cellspacing="15">
<?php
      $i=0;$j=0;
     if(isset($data))
    {
    foreach($data as $chair)
    {
        $i++;$j++; 
        if($i==1) { ?><tr ><?php }
?>
  
    <td><div  class="card">
    <img src="..\Images\<?php  echo $chair->chair_img?>"  class="card-img-top" height="400" width="400">
      <div class="card-body">
        <h5 class="card-title"><b><?php  echo $chair->chair_name ?></b> </h5>
        <br>
        <h5 class="card-title">Rs <?php  echo $chair->chair_rate ?>/- </h5><br>
        <p class="card-text"><?php  echo $chair->chair_desc ?></p><br>
        <h5 class="card-title"><?php if($chair->chair_qty<1){ ?> <b style="color:red">Out of stock</b> <?php } else{ ?><b style="color:green">In stock</b><?php } ?></h5>
        <br>
        <?php if($chair->chair_qty<1){ ?>  <a href="#" class="btn btn-warning" onClick="alert('Out of stock')" >Add to Cart</a>
         <?php } else{ ?>
        <a href="#" class="btn btn-warning" onClick="cartinsert(<?php echo $chair->chair_id; ?>,<?php echo $j; ?>)" >Add to Cart</a>
    <?php } ?>
    </div></div>
    </td>
  
  <?php
  if($i==4)
  {
      ?>
     
      </tr>
      <?php
      $i=0;
  }
}
    }
?>
</table>

  <!-- <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/02_Liberate.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/03_Pinnacle.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a> 
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/05_Amaze.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/04_Optima.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/06_Versa.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/07_Opus.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/08_Allwork.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/09_Alpha.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/10_Anatom.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/11_Astro.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/12_Contact.png
" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/13_Click.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/14_Invention.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/15_Forum.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/16_Chrome.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/17_Indigo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/18_Tang.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/19_Leaf.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="https://www.featherlitefurniture.com/drupal/sites/default/files/pictures/20_Genius.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Add to Cart</a>  
    </div>
    </div>
  </div> -->
  </form>
<!-- </div> -->
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
