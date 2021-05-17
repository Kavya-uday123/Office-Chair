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
</head>

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                

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
                                        <a class="dropdown-item" href="/cart">shopping cart</a>
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
                        <div class="hearer_icon d-flex">
                           
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>+
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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

     <br><br> <br><br> <br><br>
            <table class="table" align="center" cellpadding="15" cellspacing="15" style="background-color:#C0C0C0">
    
    <?php
     $i=0;
     if(isset($data))
    {
    foreach($data as $chair)
    {
        $i++;
        if($i==1) { ?><tr> <?php }
    ?>
    
       
        <td align="center"><img src="..\Images\<?php  echo $chair->chair_img?>" height="200" width="200"><br>
             <b><?php  echo $chair->chair_name ?></b><br>
             Rate:Rs. <?php  echo $chair->chair_rate ?>/-<br>
             Qty : <?php  echo $chair->chair_qty ?><br>
             Description: <?php  echo $chair->chair_desc ?><br>
       

       </td>
       
   
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
    </table>
                
            </div>

      <!-- jquery plugins here-->
  <!-- jquery -->
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