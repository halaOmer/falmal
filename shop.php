<?php
include_once 'cart.class.php';
$cart = new Cart; 
require_once "dbconfig.php";
?>

<?php 
  
    
  
    //define total number of results you want per page  
    $results_per_page = 18;  
  
    //find the total number of results stored in the database  
 $query = "select *from products";
 $result = mysqli_query($db, $query);
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
 $query = "SELECT *FROM products LIMIT " . $page_first_result . ',' . $results_per_page; 
 //$result = mysqli_query($conn, $query);  
 $result = mysqli_query($db, $query);
 
      ?>

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
        width: 200px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>???????????? </title>
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
            <!-- Start Atribute Navigation -->
               <!-- <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"><?php //echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?> </span>
					</a></li>
                    </ul>
                </div>
				
                <!-- End Atribute Navigation -->
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
            </div>
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
                <div class="col-lg-12">
                    <h2>????????????</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">????????????????</a></li>
                        <li class="breadcrumb-item active">????????????</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        
                         
                    
                <!--        
                       <div class="filter-sidebar-left" style="float:right;">
                            <div class="title-left">
                                <h3 style="text-align:right;">??????????????</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men" align=right >
                                <div class="list-group-collapse sub-men" id="7">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">?????????????? ?????????????????????? ??????????????  <small class="text-muted"></small>
								</a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men" style="text-align=right;">
                                        <div class="list-group">
                                            
                                            <a href="mclothes.php" class="list-group-item list-group-item-action">?????????? ???????????? <small class="text-muted"></small></a>
                                            <a href="wclothes.php" class="list-group-item list-group-item-action active">?????????? ????????????<small class="text-muted"></small></a>
                                            <a href="tobs.php" class="list-group-item list-group-item-action active">???????? ?????????????? <small class="text-muted"></small></a>
                                            <a href="childcl.php" class="list-group-item list-group-item-action">?????????? ?????????? <small class="text-muted"></small></a>
                                            <a href="mneeds.php" class="list-group-item list-group-item-action"> ???????????????? ????????????  <small class="text-muted"></small></a>
                                            <a href="wneeds.php" class="list-group-item list-group-item-action">???????????????? ????????????  <small class="text-muted"></small></a>
                                            <a href="childneed.php" class="list-group-item list-group-item-action">???????????????? ??????????  <small class="text-muted"></small></a> 
                                            <a href="pags.php" class="list-group-item list-group-item-action">?????????? ???????????? ????????????  <small class="text-muted"></small></a>
                                            <a href="pagsns.php" class="list-group-item list-group-item-action"> ?????????? ???????????? ???????????? <small class="text-muted"></small></a>
                                            <a href="acc.php" class="list-group-item list-group-item-action">?????????????????? <small class="text-muted"></small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men" id="4" >
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2"> ???????????????? ????????????  
								<small class="text-muted"></small>
								</a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="decor.php" class="list-group-item list-group-item-action" >  ?????????? ????????????  <small class="text-muted"> </small></a>
                                            <a href="dishes.php" class="list-group-item list-group-item-action">  ?????????? ????????  <small class="text-muted"> </small></a>
                                            <a href="furniture.php" class="list-group-item list-group-item-action">  ????????????  <small class="text-muted"> </small></a>
                                            <a href="house.php" class="list-group-item list-group-item-action">  ???????????????? ???????? ????????  <small class="text-muted"> </small></a>
                                            
                                           <!-- <a href="#" class="list-group-item list-group-item-action">?????????? ???????????? <small class="text-muted">(20)</small></a>-->
                                  <!--      </div>
                                    </div>
                                </div>
                                
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men3" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">  ?????????? ???????????????? ???????????????????? ?? ?????????? ?? ????????  
								<small class="text-muted"></small>
								</a>
                                    <div class="collapse" id="sub-men3" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="phone.php" class="list-group-item list-group-item-action">   ??????????  <small class="text-muted"> </small></a>
                                            <a href="computers.php" class="list-group-item list-group-item-action">  ????????????   <small class="text-muted"> </small></a>
                                            <a href="games.php" class="list-group-item list-group-item-action">  ?????? ???????? ??????????   <small class="text-muted"> </small></a>
                                            <a href="carts.php" class="list-group-item list-group-item-action">  ???????? ??????????   <small class="text-muted"> </small></a>
                                            <a href="edv.php" class="list-group-item list-group-item-action"> ?????????? ???????????????? <small class="text-muted"> </small></a>
                                            
                                           <!-- <a href="#" class="list-group-item list-group-item-action">?????????? ???????????? <small class="text-muted">(20)</small></a>-->
                          <!--              </div>
                                    </div>
                                </div>
                       <!--         <div  id="6">
                                <a href="handmade.php" class="list-group-item list-group-item-action">?????????? ?????????? <small class="text-muted"></small></a>
                                <a href="cars.php" class="list-group-item list-group-item-action"> ????????????<small class="text-muted"></small></a>
                                <a href="builds.php" class="list-group-item list-group-item-action"> ???????????? <small class="text-muted"></small></a>
                                <a href="foods.php" class="list-group-item list-group-item-action"> ???????? ???????????? <small class="text-muted"></small></a>
                            </div> </div>
                        </div>
                       <!-- <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div>
                        </div>
                        <div class="filter-brand-left">
                            <div class="title-left">
                                <h3>Brand</h3>
                            </div>
                            <div class="brand-box">
                                <ul>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios1" value="Yes" type="radio">
                                            <label for="Radios1"> Supreme </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios2" value="No" type="radio">
                                            <label for="Radios2"> A Bathing Ape </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios3" value="declater" type="radio">
                                            <label for="Radios3"> The Hundreds </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios4" value="declater" type="radio">
                                            <label for="Radios4"> Alife </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios5" value="declater" type="radio">
                                            <label for="Radios5"> Neighborhood </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios6" value="declater" type="radio">
                                            <label for="Radios6"> CLOT </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios7" value="declater" type="radio">
                                            <label for="Radios7"> Acapulco Gold </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios8" value="declater" type="radio">
                                            <label for="Radios8"> UNDFTD </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios9" value="declater" type="radio">
                                            <label for="Radios9"> Mighty Healthy </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio radio-danger">
                                            <input name="survey" id="Radios10" value="declater" type="radio">
                                            <label for="Radios10"> Fiberops </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>-->

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <!--<div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price ??? High Price</option>
									<option value="3">Low Price ??? High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>-->
                            
                        
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                     
								&nbsp;	<li> 
                                        <a  class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i>                                    
</a> ?????? ???????????????? ??????	&nbsp;
                                    </li> 
                                  
								&nbsp;	<li> 
                                        <a  class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> 									  
 </a>?????? ???????????????? ???? ??????????
                                    </li>  
                                      
                                </ul>
                            </div>
                           
                           <?php       $sql = "SELECT * FROM products where name !=32 ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page;
if( isset($_GET['search']) ){
    $pname = mysqli_real_escape_string($db, $_GET['search']);
    $sql = "SELECT * FROM products WHERE pname ='$pname' LIMIT " . $page_first_result . ',' . $results_per_page;
}
$result = $db->query($sql);
//result = mysqli_query($db, $sql);
?>
                         <!-- <div class="search-product">-->
                            <!--<form action="index.php" method="GET">
                                <input class="form-control" type="text" autocomplete="off" placeholder="?? ??????  ??????" name="search" />&nbsp;
                                <div class="result"></div>
                                <button type="submit" value="????????" name="btn"> <i class="fa fa-search"></i> </button>
                            </form>-->
                           <br> <div align="center">
                            <form action="shop.php" method="GET">
   <div class="search-box">
        
<input type="text" autocomplete="off" placeholder=" ???????? ???? ???? ???????? ?????? " name="search" />
<div class="result"></div>
<input type="submit" value="????????" name="btn" class="btn hvr-hover"  >
         
     <!--  <button type="submit" value="????????" name="btn"> <i class="fa fa-search"></i></button>-->
    <!--</div>-->
    
<!--<input type="text" placeholder="Type the name here" name="search">&nbsp;
 <input type="submit" value="????????" name="btn"  >-->
</div>
</form></div>

                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
									<?php 
        // Get products from database 
	//	$query = "SELECT *FROM products LIMIT " . $page_first_result . ',' . $results_per_page; 
	//	$result = mysqli_query($db, $query);
//while ($row = mysqli_fetch_array($result)) { 
      // if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                     <div class="type-lb">
                                                        <p class="sale"> ???????? ?????? <?php echo $row["name"]; ?> </p>
                                                    </div>
                                                    
                                                   
                       
                
                                                    
													<div class="img-fluid">
                                                   <?php  echo "<img src='images/".$row["image"]."'  width= 200px height 200px >"; ?>
				                                    </div>
                                                    <div class="mask-icon">
                                                        <ul>
                                                           <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                                        </ul>
                                                        <a class="cart" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">?????? ?????? ??????????</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
												   
<h4 style="text-align:right;"><?php echo $row["pname"]; ?>    </h4>
 <h5 style="text-align:right;"> <?php echo $row["price"];'??' ?>  
 ?? ??  &nbsp; 
  ??????????  <?php  if($row["quantity"]<0)
                                                    { echo 0 ; } else echo $row["quantity"];' ' ?>   
 </h5>
                                                </div>
                                            </div>
                                        </div>
										<?php // }else{ ?>
      <!--  <p>Product(s) not found.....</p>-->
<?php }   ?>
		
		
                           <!--           <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="new">New</p>
                                                    </div>
                                                    <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                    <div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                        <a class="cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> $9.79</h5>
                                                </div>
                                            </div>
                                        </div>-->
										
                                    </div>
                                </div>
								
								
								
	
								
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
								
								<?php 
        // Get products from database 
		$query = "SELECT *FROM products ORDER BY id DESC LIMIT " . $page_first_result . ',' . $results_per_page; 
		$result = mysqli_query($db, $query);
//while ($row = mysqli_fetch_array($result)) { 
       if($result->num_rows > 0){  
            while($row = $result->fetch_assoc()){ 
        ?>
								
                                    <div class="list-view-box">
									
									
									
                                        <div class="row">
										
										
										
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                        <p class="sale"> ???????? ?????? <?php echo $row["name"]; ?> </p>
                                                    </div>
                                                    
                                                  <!--  <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                                                     <div class="carousel-inner" role="listbox">
                            
                          
                          <div  class="d-block w-100" >  <div class="carousel-item active"> <?php // echo "<img src='images/".$row["image"]."' width= 200px >"; ?> </div> </div>
                        <div  class="d-block w-100" >    <div class="carousel-item"> <?php //  echo "<img src='images/".$row["image2"]."' width= 200px >"; ?> </div> </div>
                       <div  class="d-block w-100" >     <div class="carousel-item"> <?php  //echo "<img src='images/".$row["image3"]."' width= 200px >"; ?> </div> </div>
                        </div> 
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">????????????</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">????????????</span> 
					</a>
                        <ol class="carousel-indicators">
                            
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                          <div  class="d-block w-100 img-fluid" >     <?php // echo "<img src='images/".$row["image"]."'  width= 50px />"; ?> </div>
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                           <div  class="d-block w-100 img-fluid" >       <?php // echo "<img src='images/".$row["image2"]."' width= 50px />"; ?> </div>
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                          <div  class="d-block w-100 img-fluid" >         <?php // echo "<img src='images/".$row["image3"]."' width= 50px />"; ?> </div>
                            </li>
                        </ol>
                    </div>
                    </div>-->
                                                    
                                                       <div class="img-fluid">
                                                   <?php  echo "<img src='images/".$row["image"]."'  width= 200px height 200px >"; ?>
				                                    </div>
                                                        <div class="mask-icon">
                                                            <!--<ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>-->

                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                           
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4 style="text-align:right;"><?php echo $row["pname"]; ?> </h4>
                                                    <h5 style="text-align:right;"> <?php echo $row["price"];'?? ??' ?>   
                                                    ?? ??</h5>
                                                    <h5 style="text-align:right;">???????????? ????????????????   &nbsp;&nbsp; <?php  if($row["quantity"]<0)
                                                    { echo 0 ; } else echo $row["quantity"];' ' ?>   
                                                     </h5>
                                                    <p style="text-align:right;"> <?php echo $row["description"]; ?>.</p>
                                                    <a class="btn hvr-hover" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">?????? ?????? ??????????</a>
                                                </div>
                                            </div>
                                        </div>
										</div>
                                    
									<?php//  }else{ ?>
     <!--   <p>Product(s) not found.....</p>-->
	   <?php } }?>
	   
	   
	  
             <!--                       <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="images/big-img-01.jpg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-02.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-03.jpg" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-view-box">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4>Lorem ipsum dolor sit amet</h4>
                                                    <h5> <del>$ 60.00</del> $40.79</h5>
                                                    <p>Integer tincidunt aliquet nibh vitae dictum. In turpis sapien, imperdiet quis magna nec, iaculis ultrices ante. Integer vitae suscipit nisi. Morbi dignissim risus sit amet orci porta, eget aliquam purus
                                                        sollicitudin. Cras eu metus felis. Sed arcu arcu, sagittis in blandit eu, imperdiet sit amet eros. Donec accumsan nisi purus, quis euismod ex volutpat in. Vestibulum eleifend eros ac lobortis aliquet.
                                                        Suspendisse at ipsum vel lacus vehicula blandit et sollicitudin quam. Praesent vulputate semper libero pulvinar consequat. Etiam ut placerat lectus.</p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div><h3 align=center ><?php 
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
echo '<a href = "shop.php?page=' . $page . '">' . $page . ' </a>';
 }  
  
?>  </h3>   
								
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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