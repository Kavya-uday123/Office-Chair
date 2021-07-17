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
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
   <style>
   body {
 font-family: Arial;
 color: #211a1a;
 font-size: 0.9em;
}

#shopping-cart {
 margin: 40px;
   
}

#product-grid {
 margin: 40px;
}

#shopping-cart table {
 width: 100%;
 background-color: #F0F0F0;
}

#shopping-cart table td {
 background-color: #FFFFFF;  
}
.txt-heading {
 color: white;
 border-bottom: 1px solid #E0E0E0;
 overflow: auto;
}

#btnEmpty {
 background-color: #ffffff;
 border: #d00000 1px solid;
 padding: 5px 10px;
 color: #d00000;
 float: right;
 text-decoration: none;
 border-radius: 3px;
 margin: 10px 0px;
}

.btnAddAction {
   padding: 5px 10px;
   margin-left: 5px;
   background-color: #efefef;
   border: #E0E0E0 1px solid;
   color: #211a1a;
   float: right;
   text-decoration: none;
   border-radius: 3px;
   cursor: pointer;
}

#product-grid .txt-heading {
 margin-bottom: 18px;
}

.product-item {
 
 background: #ffffff;
 margin: 30px 30px 0px 0px;
 border: #E0E0E0 1px solid;
}

.product-image {
 height: 155px;
 width: 250px;
 background-color: #FFF;
}

.clear-float {
 clear: both;
}

.demo-input-box {
 border-radius: 2px;
 border: #CCC 1px solid;
 padding: 2px 1px;
}

.tbl-cart {
 font-size: 0.9em;
  
}

.tbl-cart th {
 font-weight: normal; 
}

.product-title {
 margin-bottom: 20px;
}

.product-price {
 float:left;
}

.cart-action {
 float: right;
}

.product-quantity {
   padding: 5px 10px;
   border-radius: 3px;
   border: #E0E0E0 1px solid;
}

.product-tile-footer {
   padding: 15px 15px 0px 15px;
   overflow: auto;
}

.cart-item-image {
 width: 100px;
   height: 100px;
   border-radius: 50%;
   border: #E0E0E0 1px solid;
   padding: 5px;
   vertical-align: middle;
   margin-right: 15px;
}
.no-records {
 text-align: center;
 clear: both;
 margin: 38px 0px;
}
   </style>
   <script type="text/javascript">
       function preventBack() { window.history.forward(); }
       setTimeout("preventBack()", 0);
       window.onunload = function () { null };

     </script>
     <script>  
     function gettotal(q,r,j)
{
 //alert();

 var total=q*r;
 document.getElementById("txtTotal"+j).value=total;

  
} 
function getgtotal()
{
   count=parseInt(document.getElementById("tno").value);
   //alert(count);
   gtotal=0;
    for(var i=1;i<=count;i++)
    {
        total=parseInt(document.getElementById("txtTotal"+i).value);
         gtotal=gtotal+total;
       
    }
    document.getElementById("gtotal").value=gtotal;
}
function cartdelete(itemid)
{
 
   //alert(j);
// 	var quantity=document.getElementById('txtQuantity'+j).value;
// 	totalrate=document.getElementById('txtTotal'+j).value;
//   var  stock=document.getElementById('txtStock'+j).value;
 

// if(parseInt(stock)<parseInt(quantity))
// {
//   alert("Stock Limit Exceed!!");
// }
// else{
  $.ajax({url: '/CartDelete?itemid='+itemid,
 type: 'GET',
 success: function(data) {
   
   alert("Item deleted Successfully");
   location.replace("/cart");
 },
 });
//}

}
   </script>
</head>

<body  onload="getgtotal()" >
  <!--::header part start::-->


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
                        <!--<div class="hearer_icon d-flex">
                           
                            <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cart-plus"></i>
                                </a>+
                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div> 
                                
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
    </div>-->
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
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <form action="" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
      <div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;" width="30%">Name</th>

<th style="text-align:right;" width="15%">Unit Price</th>
<th style="text-align:right;" width="25%">Quantity</th>
<th style="text-align:center;" width="25%">Total</th>
<th style="text-align:center;" width="20%">Remove</th>
</tr>	

<?php		
$j=0;
if(isset($data)){
    foreach ($data as $row){
        $j++;
        $item_price = 1*$row->chair_rate;
		?>
				<tr>
				<td><input type="hidden" id="mid" name="mid<?php echo $j?>" value="<?php echo $row->om_id?>">
        <img src="..\Images\<?php  echo $row->chair_img?>" height="400" width="400" class="cart-item-image">
                <b><?php  echo $row->chair_name?></b></td>
			
				<td style="text-align:right;"><b> <?php  echo "Rs.".$row->chair_rate?></b></td>
				<td  style="text-align:right;">	<input type="number" id="txtQuantity<?php echo $j?>" name="txtQuantity<?php echo $j?>" style="width: 20%" min="1" max="<?php  echo $row->chair_qty?>" value="1" width="10dp"  onchange="gettotal(this.value,<?php echo $row->chair_rate;  ?>,<?php echo $j?>),getgtotal()" onkeyup="gettotal(this.value,<?php echo $row->chair_rate  ?>,<?php echo $j?>),getgtotal()">
 
				<td  style="text-align:center;">	<input type="number" readonly="readonly" style="width: 30%" id="txtTotal<?php echo $j?>" name="txtTotal<?php echo $j?>" width="10dp" value="<?php echo $item_price?>"></td>
				<!-- <td style="text-align:center;"><a href="#"   class="btnRemoveAction" ><img src="..\icons\icon-delete.png" alt="Remove Item" onClick="cartdelete(<?php echo $row->om_id; ?>)" /></a></td> -->
				<td style="text-align:center;"><img src="..\icons\icon-delete.png" alt="Remove Item" onClick="cartdelete(<?php echo $row->om_id; ?>)" /></td>
                </tr>
				<?php
				// $total_quantity += $item["quantity"];
				// $total_price += ($item["price"]*$item["quantity"]);
                
		}
    }
		?>

<tr>
<td colspan="3" align="right">Total : <input type="hidden" id="tno" name="tno" value="<?php echo $j?>"></td>

<td align="center" ><strong><input type="text" id="gtotal" name="gtotal" readonly value=""></strong></td>
<td> <input type="submit" name="btnpay" id="btnpay"  class="btn btn-success" value="Proceed" /></td>
</tr>
</tbody>
</table>
</div>	
</form>	
  <!--================End Cart Area =================-->

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