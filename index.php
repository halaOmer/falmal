<?php include "storecheck.php"; ?>
<?php
//header('Content-Type: text/html; charset=utf-8');
include_once 'cart.class.php';
$cart = new Cart; 
require_once "dbconfig.php";
?>
<?php  /*
    //define total number of results you want per page  
    $results_per_page = 12;  
  
    //find the total number of results stored in the database  
 $sql = "select *from products  WHERE name ='$name' ";//
 $result = mysqli_query($db, $sql);
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
 $sql = "SELECT * FROM products WHERE name ='$name' LIMIT " . $page_first_result . ',' . $results_per_page;
 //$result = mysqli_query($conn, $query);  
 $result = mysqli_query($db,  $sql);
 
    */ ?>
 
<!DOCTYPE html>
<html 
dir="rtl"
      lang="ar">
<!-- Basic -->

<head>

<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 225px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 38px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>????????????????</title>
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????? ?????? ???????????????? 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????? ?????? ???????????? ???? ?????????????? ?????????? 
                                </li>
                               <!-- <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????????? ???? ?????? ???? ???????? ?????????? ?????????????? ???????????? ????????
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????????? ????????????????
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????? ?????? ????????????????
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????? ?????? ???????????? ???? ?????????????? ?????????? 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????????? ???? ?????? ???? ???????? ?????????? ?????????????? ???????????? ????????
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> ?????? ?????? ???????????? ????????????????
                                </li>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        
           
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
						<option>???????? ????????????</option>
						<option>$ USD</option>
						<option>??? EUR</option>
					</select>
                    
                     </div>
                    <div class="right-phone-box">
                        <p>???????? ?????? :- <a href="tel:+249994032712">+249994032712</a></p>

                    </div>
                    <div class="our-link">
                        <ul>
                           <!-- <li><a href="#">??????????</a></li> -->
                            <li><a href="#1">????????????</a></li>
                            <li><a href="#1">?????????? ????????</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/falmallogo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
  <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                   <!--     <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>-->
                        <li class="side-menu"><a href="viewCart.php">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"><?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?> </span>
					</a></li>
                    </ul>
                </div>
				
                <!-- End Atribute Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
					
                      <li class="nav-item active"><a class="nav-link" href="index.php">????????????????</a></li>
                      <li class="nav-item"><a class="nav-link" href="shop.php">????????????</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">??????????????????</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <!--<h6 class="title">??????????</h6>
                                            <!--<div class="content">-->
                                                <ul class="menu-col">
                                                    <li><a href="shop.php#7">  ?????????? ?????????????????? ?????????? </a></li>
                                                    
                                                </ul>
                                            <!--</div>-->
                                        </div>
                                        <!-- end col-3 -->
                                       <div class="col-menu col-md-3">
                                            <!--<h6 class="title">??????????</h6>
                                           <!-- <div class="content">-->
                                                <ul class="menu-col">
                                                     <li><a href="shop.php#4"> ???????????????? ???????????? </a></li>
                                                    
                                                </ul>
                                           </div>
                                      <!--  </div>-->
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                           <!-- <h6 class="title">??????????</h6>
                                         <!--   <div class="content">-->
                                                <ul class="menu-col">
                                                <li><a href="shop.php#5"> ??????????</a></li>
                                                    
                                                </ul>
                                          </div>
                                         <!-- </div> -->
                                        <div class="col-menu col-md-3">
                                            <!--<h6 class="title">??????????????????</h6>
                                          <!--  <div class="content">-->
                                                <ul class="menu-col">
                                                    <li><a href="shop.php#6"> ?????????????? ???????? </a></li>
                                                  
                                                </ul>
                                           <!-- </div>-->
                                        </div>
                                        
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">??????????????????</a>
                            <ul class="dropdown-menu">
                                <li><a href="viewCart.php">???????? ????????????</a></li>
                                <li><a href="checkout.php">??????????</a></li>
                               
                               <!-- <li><a href="my-account.html">??????????</a></li>
                                <li><a href="wishlist.html">?????????? ??????????????????</a></li>
                                <li><a href="shop-detail.html">???????????? ????????????</a></li>-->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="index.php#8">??????????????</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">???? ??????</a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            
            <!-- Start Side Menu 
            <div class="side">
			<?php /*
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                        */   ?>
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <href="#" class="photo"><img src="images/<?php //echo $item["image"]; ?>" class="cart-thumb" alt="" width= 100px height 100px /></a>
                            <h6><a href="#"><?php// echo $item["name"]; ?></a></h6>
                            <p><?php// echo $item["qty"]; ?>x - <span class="price"><?php //echo '??'.$item["price"].' SD'; ?></span></p>
                        </li>
                        
                        <li class="total">
                            <a href="viewCart.php" class="btn btn-default hvr-hover btn-cart">?????? ????????????</a>

                            <span class="float-right"><strong>???????????? ??????????</strong>: <?php// echo '$'.$cart->total().' SD'; ?></span>
                        
                        </li>
                    </ul>
                </li>
				<?php//  }} ?>
            </div>  </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- Start Top Search
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
				<div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search " />
        <div class="result"></div>
    </div>
                <!--<input type="text" class="form-control" placeholder="Search">-->
           <!--     <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    
     <!-- Start All Title Box -->
      
    <div class="all-title-box">
        
        <div class="container">
            <div class="row">
               <!-- <div class="col-md-12">
                            <h1 class="m-b-20"><strong>???????? ?????????????? ???????????? ??????????????<br> ?????????? ???????????? ?????????????? ???????????? ??????</strong></h1>
                            <p class="m-b-40">???????? ?????????????? ?????????????????? ?????????? ?????????? ??????????????  <br> ?????????? ???????? ???????? ?????????? </p>
                            <p><a class="btn hvr-hover" href="shop.php">???????? ???????? </a></p>
                        </div>-->
               <div class="col-lg-12">
                   <h2 class="m-b-20"><strong>???????? ?????????????? ???????????? ??????????????
                   <br><br> ?????????? ???????????? ?????????????? ???????????? ??????</strong></h2>
                   <br>
                  
         
                    
                 <!--   <h2>???????????????? </h2>-->
                    <ul class="breadcrumb">
                       <li class="breadcrumb-item">  <a class="btn hvr-hover" href="shop.php">???????? ???????? </a>  </li>
                       <li class="breadcrumb-item">  <a class="btn hvr-hover" href="memproducts.php#3">  ?????????? ??????????</a> </li>
                      <li class="breadcrumb-item">  <a class="btn hvr-hover" href="memproducts.php"> ?????????? ????????????</a> </li>
                       <!-- <li class="breadcrumb-item"><a href="#">????????????????</a></li>
                        <li class="breadcrumb-item active">?????? ??????????????????</li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
     
    <!-- End All Title Box -->

    <!-- Start Slider 
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-left">
                <!--<img src="images/banner-01.jpg" alt="">-->
			 <!--  <img src="images/salla5.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong  >?????? ?????? <br> ???????????? ????????????????</strong></h1>
                            <p class="m-b-40" >???????? ?????????????? ?????????????????? ?????????? ?????????? ?????????????? <br> ?????????? ???????? ???????? ?????????? </p>
                            <p><a class="btn hvr-hover" href="shop.php">???????? ???????? </a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
               <!-- <img src="images/banner-02.jpg" alt="">-->
           <!--     <img src="images/salla6.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>???????? ?????????????? ???????????? ??????????????<br> ?????????? ???????????? ?????????????? ???????????? ??????</strong></h1>
                            <p class="m-b-40">???????? ?????????????? ?????????????????? ?????????? ?????????? ??????????????  <br> ?????????? ???????? ???????? ?????????? </p>
                            <p><a class="btn hvr-hover" href="shop.php">???????? ???????? </a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-right">
               <!-- <img src="images/banner-03.jpg" alt="">-->
             <!--   <img src="images/salla2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>???????? ?????????????? ???????????? ??????????????<br> ?????????? ???????????? ?????????????? ???????????? ?????? </strong></h1>
                            <p class="m-b-40">???????? ?????????????? ?????????????????? ?????????? ?????????? ?????????????? <br> ?????????? ???????? ???????? ?????????? </p>
                            <p><a class="btn hvr-hover" href="shop.php">???????? ???????? </a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
     <br> <br>
   <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <!--<button class="active" data-filter="*">????????</button>-->
						<!--	<div class="search-product">
							<div class="search-box">
<input type="text" autocomplete="off" placeholder="???????? ???? ?????? ???????????????? ???????? ?????????? ??????" />
        <div class="result"></div>
    </div>
							
                           <!--<form action="index.php" method="post">
                            ???????? ???? ???????????? ???????? ?????????? ?????? <input type="text" name="search">
                            <input type ="submit" value="????????" class="btn hvr-hover" >
                              </form>-->
                       <!-- </div>
                            <!--<button data-filter=".top-featured">???????? ??????????????</button>-->
                            <!--<button data-filter=".best-seller">???????????? ??????????</button>-->
							
                       <!-- </div>
                    </div>
                </div>
            </div>-->
            
            <!-- <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">-->
                    
                   <!-- Start Side Menu -->
           
                         
        <!-- Start Navigation -->
     <!--   <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav" align="center" >-->
            <div  align="center" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
            
                    <!--    <h3 align="center"> -->
                    <a data-toggle="collapse" href="#signin" role="button" aria-expanded="false">
              ???????? ?????? ???? ???????? ???? ??????  </a>
     <form action="" method="POST" id="signin" class="mt-3 collapse review-form-box" >
     
 &nbsp; <input type="number" min="0" id="subject" name="mem_id" placeholder="???????? ?????? ????????????  "/> 
 <button  class="btn hvr-hover" id="submit" type="submit" style="color: #ffffff;">????????</button> 
           </form><br>
             
                <div class="col-lg-8 col-sm-12" >
                    <div class="contact-form-right">
          
                                  <?php /*      $sql = "SELECT * FROM products ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;
if( isset($_GET['search']) ){
    $pname = mysqli_real_escape_string($db, $_GET['search']);
    $sql = "SELECT * FROM products WHERE pname ='$pname' LIMIT " . $page_first_result . ',' . $results_per_page;
}
$result = $db->query($sql);
*/?>
                         
                            <a data-toggle="collapse" href="#search" role="button" aria-expanded="false">
                               ???????? ???? ???????? <span class="input-group-addon"><i class="fa fa-search"></i></span> </a>
                            <form action="shop.php" method="GET" id="search" class="mt-3 collapse review-form-box">
   <div class="search-box">
        
<input type="text" autocomplete="off" placeholder=" ???????? ???? ???? ???????? ?????? " name="search" />
<div class="result"></div>
<input type="submit" value="????????" name="btn" class="btn hvr-hover" style="color: #ffffff;" >
</div>
</form> 
                <!-- </h3>   -->
                 </div>
                </div>
                    </div>  
                    
                    </div>
        </div>
    </div>
    </div>
                </div>
            <!-- End Side Menu -->
  <!--      </nav>-->
        <!-- End Navigation -->
    

 <!--     </div>
     </div>-->
    
    
    
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
            <img class="img-fluid" src="images/sh1 (14).jpg" alt="" />
                        <a class="btn hvr-hover" href="pagsns.php">?????????? ????????????</a>
                    </div>
					
                   <!-- <div class="shop-cat-box">
                        <img class="img-fluid" src="images/shoes-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">??????????</a>
                    </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/living-room-2569325_1920.jpg" alt="" />
                        <a class="btn hvr-hover" href="furniture.php">  ???????????? </a>
                    </div>
                
                    <!-- <div class="shop-cat-box">
                        <img class="img-fluid" src="images/women-bag-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">??????????</a>
                    </div> -->
                    
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                   <div class="shop-cat-box">
                        <img class="img-fluid" src="images/ginsburgconstruction-kitchen-3-330737_19201.jpg" alt="" />
                        <a class="btn hvr-hover" href="dishes.php"> ?????????? ???????????? ???????? </a>
                    </div>
                    <!--<div class="shop-cat-box">
                        <img class="img-fluid" src="images/women-shoes-img.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">?????????? ????????????</a>
                    </div>-->
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
            <img class="img-fluid" src="images/device.PNG" alt="" />
                        <a class="btn hvr-hover" href="edv.php">?????????? ???????????????? </a>
                    </div></div>
					
            </div>
        </div>
    </div>
    <!-- End Categories -->
    
    <div class="row my-5" dir="ltr">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>???????? ?????????? </h1>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>-->
                    </div>

                   
                    <div class="featured-products-box owl-carousel owl-theme">
                         <?php 
        // Get products from database 
		$query = "select *from products where star='s'" ; 
		$result = mysqli_query($db, $query);
//while ($row = mysqli_fetch_array($result)) { 
       if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
       
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;          <div class="item">
                             
                            <div class="products-single fix">
                                <div class="box-img-hover">
                                    <?php
				  
                                                    echo "<img src='images/".$row["image"]."'  width= 200px height= 300px >";
				                                      ?>
                                    <div class="mask-icon">
                                       <!-- <ul>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        </ul>-->
                                        <a class="cart" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">?????? ?????? ??????????</a>
                                    </div>
                                </div>
                                <div class="why-text">
                                    <h4 style="text-align:right;"><?php echo $row["pname"]; ?> </h4>
 <h5 style="text-align:right;"> <?php echo $row["price"];'??' ?>  
 ?? ??</h5> 
                                </div>
                            </div>
                        </div> 
                        
                        	<?php // }else{ ?>
      <!--  <p>Product(s) not found.....</p>-->
<?php } }  ?>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
 
    
    <!-- Start Products  -->
       <!--<p>???????? ???? ?????????? ???????? ?????????? ??????</p>-->
						

               <!-- <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">????????????</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">?????? ?????? ??????????</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>L?????? ????????????</h4>
                            <h5> 100 ??</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">??????????</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">?????? ?????? ??????????</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>?????? ????????????</h4>
                            <h5> 60 ??</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">??????????</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">?????? ??????????</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>?????? ????????????</h4>
                            <h5> 34 ??</h5>
                        </div>
                    </div>
                </div>
            </div> -->
            
			
        
    
    
    <!-- End Products  -->
	
			

			
			<!--	</div></div> --> </div></div>
			<!-- Start Services  -->
    <div class="services-box-main" id="8">
        <div class="container">
            

            <div class="row my-4">
                <div class="col-12">
				<!--<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">-->
                    <div class="title-all text-center">
					 <h1>   ?????????? ?????? ?????? 
                           </h1>
                   <!-- </div>
                </div>
            </div>
			</div>-->
			</div>
			
                    <h2 class="noo-sh-title"></h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/package-1511683_1920.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title"  > ?????????? ?????? ??????</h3> <span class="post">???????????? ???????????? ??????????????????  </span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249912276358" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;"> ?????????? ?????? ??????</h1>
                            <p style="text-align:right;" >???????????? ???????????? ?????????????????? ???????????? ???????? ???????????? ???????? ?????????? ??????????????. ?????? ???????? ?????????????? ???????????? ?????? ?????????????? ???????????????? ?????????? ???? ?????????????? ?????????????? ???????????? ?????? ???? ?????????????? ???? ???????????? ???????????? ?????????????? ???????????????? ???????????? ??????????.
 . </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/port-4188383_1920.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title"  >  ???????? ?????????????????? ???????????????? </h3> <span class="post"> ?????????????? ??????????????????   </span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249129453899" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;">  ???????? ?????????????????? ???????????????? </h1>
                            <p style="text-align:right;" >???????? ?????? ???????????? ???????????????? ???? ?????? ?????????????? ?????????????? ???? ???????? ?????????????????? ???????????????? 
?? ?????? ?????? ???????? ???? ???????? ???? ???????? ???????? ?????????????????? ???? ?????????????? . </p>
 
                    <h5 align=right ><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">???????? ?????? ???????? ?????????????????? </a></h5>
                    <form ction="index.php" method="post" class="mt-3 collapse review-form-box" id="formRegister" align=right >
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="product" name="product" placeholder="?????? ???????????? ???? ???????????? "> </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="????????????"> </div>
                            
                            <div class="form-group col-md-6">
                                <label for="InputPassword1" class="mb-0">?????? ????????????????</label>
                                <select id="transaction" name="transaction" >
        <option value="">??????</option>
        <option value="??????????????">
            ??????????????</option> <!-- first option contains value="" -->
        <option value="??????????">
            ?????????? </option> 
    </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                                <label for="InputEmail1" class="mb-0"> ???????????? ???????? ???????? ?????????????????? ???????? ???? ?????????????? ?????????? </label>
                                <input type="text" class="form-control" id="country" name="country" placeholder=" ???????? ?????? ????????????"> </div>
                        
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder=" ?????? ??????????  "> </div>
                        
                        <button type="submit" class="btn hvr-hover" name=submit8>????????</button>
                    </form>
                </div>
         <!--   </div>-->
         <?php
							$msg8 = "";
if (isset($_POST['submit8'])) {
	$product = mysqli_real_escape_string($db, $_POST['product']);
$quantity = mysqli_real_escape_string($db, $_POST['quantity']);
   $transaction = mysqli_real_escape_string($db, $_POST['transaction']);
   $country = mysqli_real_escape_string($db, $_POST['country']);
   $phone = mysqli_real_escape_string($db, $_POST['phone']);

$sql8 = "INSERT INTO importexport (product, quantity, transaction, country, phone) VALUES ('$product', '$quantity', '$transaction', '$country', '$phone')";  

	// execute query
  	

  	if (mysqli_query($db, $sql8)) {
  		echo "???? ??????????";
  	}else{
  		echo "?????? ??????????????";
		
		}  
		}
?>
            
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/computer-design.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title"  >   ?????????? ?????????????? ??????????????????????</h3> <span class="post">?????????????? ?????????? ????????????    </span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249994032712" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;">   ?????????? ?????????????? ??????????????????????</h1>
                            <p style="text-align:right;" >???????? ?????????????? ?????????????????????? ?????????????? ?????????? ???????????? ?????????? ???????????????? .
 . </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/computermaintiance.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title"  >?????????? ????????????</h3> <span class="post">?????????? ???? ?????? ??????????</span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249126650311" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;">?????????? ????????????</h1>
                            <p style="text-align:right;" >?????????? ???? ?????????? ???????????????? ???????????? ???????????????? ?????? ?????????????? ?????????????? ?????????????????? ???????????? ???? ?????????????? ????????????????
 . </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                      <div class="our-team"> <img src="images/translate.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">?????????? ?? ??????????</h3> <span class="post">???????????????????? &??????????????????</span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249994032712" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <h1 style="text-align:right;" >?????????? ????????????</h1>
							<p style="text-align:right;" >?????????????? ???? ?????????????? ???????????????????? ?? ?????????????????? ?????? ??????????????.
							???????? ?????????? ???????? ???????? ???????????? ??????.  
							<form method="POST" action="index.php" enctype="multipart/form-data">
							<br>
  	<div>
  	  <input type="file" name="file">
  	</div>
  	<div>
  	   
  	<li>	<button type="submit" name="upload" class="btn hvr-hover" style="color: #ffffff;" >????????</button></li>
  	
  	</div>
  </form>
							<?php
							$msg = "";
if (isset($_POST['upload'])) {
	
  	// Get file name
  	$file = $_FILES['file']['name'];
	//  file directory
  	$target = "files/".basename($file);

$sql = "INSERT INTO files (file) VALUES ('$file')";  

	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  		$msg = "???? ?????????? ?????????? ??????????";
  	}else{
  		$msg = "?????? ?????????? ??????????";
		
		}  
		}
?>
 </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/print.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">?????????? ????????????</h3> <span class="post">???????????? - ???????? - ??????????????</span> </div>
                            <ul class="social">
                                <!--<li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249927673988" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;" >?????????? ????????????</h1>
                            <p style="text-align:right;" >?????????? ???????? ( ?????????????? ?? ???????? ?????? ??????????) ?? ?????? ???????? ???????????????? ?????????????? ?????????????? ?????????????? ?????????????????????? ???????????? ???? ?????????? ?????????? ?????????????? ?? ???????? ???????????? ?????????? ?????? , ???????????? ... ??????
. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                       <div class="our-team"> <img src="images/blog-img.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">?????????? ?? ?????????? </h3> <span class="post">???? ???????? - ?????????? ????????????</span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                                <li>
                                    <a href="tel:+249123631978" class="fas fa-phone-square"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;" >?????????? ????????????</h1>
                            <p style="text-align:right;" >?????????? ?????????????? ?????????????? ???????????????? ???????????????? ???????????????? ?????????????????? ???????????? ???????????? ?????????? ?????????? ???? ?????????????? ?? ?????? ???????? ?????????? ???????????? ???????????? ?????????? ???????????????? ???????????? ????????????. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                
                <!--<div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                       <div class="our-team"> <img src="images/mazinhost1-logo.png" alt="" />
                            <div class="team-content">
                                <h3 class="title"> ???????? ????????  </h3> <span class="post"> ???????? ?????????????? ???????????????? ??????????????    </span> </div>
                            <ul class="social">
                               <!-- <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>-->
                               <!-- <li>
                                    <a https://"client.mazinhost.com/aff.php?aff=115" class="fas fa-link-square">???????????? </a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
						<h1 style="text-align:right;" > ???????? ???????? </h1>
                             <p style="text-align:right;" > ???????? ?????????? - ?????? ?????????????? - ?????? ?????????????? ???????? ?????? <a href="https://client.mazinhost.com/aff.php?aff=115"> ???????????? </a>. </p>

                        </div>
                        <hr class="my-0"> </div>
                </div>-->
                

                
                
            </div>

        </div>
    </div>
    <!-- End Services -->
    <!-- Start Blog  -->
   <!-- <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>??????????????</h1>
                        <p>???????????? ????????</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>?????????????? ????????????????</h3>
                                <p>?????? ????????????</p>
                            </div>
                            <ul class="option-blog">
                               <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>?????????? ???????????????? </h3>
                                <p>?????? ????????????</p>
                            </div>
                            <ul class="option-blog">
                               <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>-->
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>-->
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>?????????????? ????????????????</h3>
                                <p>?????? ????????????</p>
                            </div>
                            <ul class="option-blog">
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->
	<!--<div class="latest-blog">
        <div class="container">
	<div class="row">
 <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                          <img class="img-fluid" src="images/image/lab5.jfif" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
<h3 style ="text-alaign : right ;">?????????? ????????????</h3>
                                <p>???????? ??????????</p>
                            </div>
                            <ul class="option-blog">
                               <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>?????????? ???????????????? </h3>
                                <p>?????? ????????????</p>
                            </div>
                            <ul class="option-blog">
                               <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>-->
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>-->
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>?????????????? ????????????????</h3>
                                <p>?????? ????????????</p>
                            </div>
                            <ul class="option-blog">
                                <!--<li><a href="#" data-toggle="tooltip" data-placement="right" title="Likes"><i class="far fa-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Views"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Comments"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4 style="text-align:right;">???? ?????? ??????</h4>
                            <p style="text-align:right;">?????? ?????? ???????? ???????? ???????????? ???????????????? ???????????????? ???????????????? ?????? ?????????? ???? ???????? ???????? ?????????? ?????????????? ?????????????????? ???? ?????? ???????????????? ?????????????? ?????????????? ?????????? ?? ?????? ?????????? ?????????? ???????? ?????????????? ???? ???????????? ?????? ???? ???????????????????? ???? ?????????????? ???????????? ?????????? ?????????? .
                                </p>
                            <ul>
                                <li><a href="https://www.facebook.com/FalMalCOM"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <!--<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>-->
                                <li><a href="https://api.whatsapp.com/send?phone=249994032712"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4 style="text-align:right;">??????????????????</h4>
                             <a href="about.php"> <p style="text-align:right;"> - ???????? ?????? </p> </a> 
                             
                             <a href="index.php#8"> <p style="text-align:right;"> - ??????????????   </p> </a> 
                             
                             <a href="terms&privacy.php"> <p style="text-align:right;"> - ?????????????? ?????????????????? ?????????????? | ???????????????? </p> </a> 
                            
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-12 col-sm-12" id="1">
                        <div class="footer-link-contact">
                            <h4 style="text-align:right;">?????????? ????????</h4>
                            <ul>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-map-marker-alt" float=right ></i>?????????????? : ?????????? ???????????? <br>???????? ????????????<br>  </p>
                                </li>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-phone-square"></i>????????????: <a href="tel:+249994032712">+249994032712</a></p>
                                </li>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-envelope"></i>??????????????: <a href="mailto:info@falmal.com">info@falmal.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

   <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">???? ???????????? ????????????  2020 <a href="index.php">falmal.com</a>
        <br>Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>