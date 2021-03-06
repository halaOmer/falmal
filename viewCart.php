<?php 
// Initialize shopping cart class 
include_once 'cart.class.php';
$cart = new Cart; 
require_once "dbconfig.php";
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
        width: 300px;
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
            $.get("backend-search1.php", {term: inputVal}).done(function(data){
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
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>?????? ??????????????????</title>
    
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
                                                    <!--<li><a href="pagsns.php">?????????? ???????????? ???????????? </a></li>-->
                                                    
                                                   <!-- <li><a href="furniture.php">????????????</a></li>
                                                    <li><a href="decor.php">?????????? ????????????</a></li>
                                                    <li><a href="phone.php">??????????</a></li>
                                                 <!--   <li><a href="tobs.php">???????? ??????????????</a></li>-->
                                                </ul>
                                            <!--</div>-->
                                        </div>
                                        <!-- end col-3 -->
                                       <div class="col-menu col-md-3">
                                            <!--<h6 class="title">??????????</h6>
                                           <!-- <div class="content">-->
                                                <ul class="menu-col">
                                                     <li><a href="shop.php#4"> ???????????????? ???????????? </a></li>
                                                    <!-- <li><a href="wneeds.php">???????????????? ????????????  </a></li>
                                                    <li><a href="mclothes.php">?????????? ????????????</a></li>
                                                    <li><a href="wclothes.php">?????????? ????????????</a></li>
                                                    <li><a href="childcl.php">?????????? ??????????</a></li>-->
                                                </ul>
                                           </div>
                                      <!--  </div>-->
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                           <!-- <h6 class="title">??????????</h6>
                                         <!--   <div class="content">-->
                                                <ul class="menu-col">
                                                <li><a href="shop.php#5"> ??????????</a></li>
                                                  <!--  <li><a href="childneed.php">???????????????? ?????????? </a></li>-->
                                                    
                                               <!--     <li><a href="handmade.php">?????????? ??????????  </a></l
                                             <!--       <li><a href="acc.php">?????????????????? </a></li>-->
                                                    
                                                </ul>
                                          </div>
                                         <!-- </div> -->
                                        <div class="col-menu col-md-3">
                                            <!--<h6 class="title">??????????????????</h6>
                                          <!--  <div class="content">-->
                                                <ul class="menu-col">
                                                    <li><a href="shop.php#6">???????? ?????????????????? </a></li>
                                                   <!-- <li><a href="computers.php">???????????? </a></li>
                                                    <li><a href="edv.php">?????????? ???????????????? </a></li>
                                                    
                                                   <!-- <li><a href="builds.php">????????????</a></li>
                                                    <li><a href="cars.php">????????????</a></li>-->
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
             <!--   <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>?????? ????????????</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">????????????</a></li>
                        <li class="breadcrumb-item active">?????? ??????????????????</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
 <!--   <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                           <div> <thead>
                              <div>   <tr>
                         <div>     <th>??????????</th></div>
                          <div>           <th align=right style="font-size:5;">???????? ????????????</th></div>
                <!--         <div>            <th align=right >?????? ????????????</th></div>
                           <div>            <th> ?????? ????????????</th></div>
                           <div>          <th>?????? ????????????</th></div>-->
                  <!--         <div>          <th>?????? ????????????</th></div>
                            <div>         <th>????????????</th></div>
                              <div>       <th> ?????????? ??????????</th></div>
                                  
                                </tr></div>
                            </thead> </div>
                         <div>    <tbody>
							<?php /*
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                   */         ?>
                             <div>    <tr>
                                    
                               <div>      <td class="remove-pr">
                                        
									<i class="fas fa-times"></i>
									<button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash"></i> </button>
								</a>
                                    </td></div>
                                    
                            <div>         <td class="thumbnail-img">
                                        <a href="#">
									<?php //echo "<img src='images/".$item["image"]."' width= 50px height 50px >";
				                                      ?>
								</a>
                                     </td></div>
                            <!--    <div>     <td class="name-pr">
                                        <a href="#">
									<?php// echo $item["id"]; ?>
								</a>
                                    </td></div>
                              <div>       <td class="price-pr">
                                        <p><?php// echo $item["name"].''; ?></p>
                                    </td></div>
                               <div>     <td class="name-pr">
                                        <p><?php// echo $item["pname"].''; ?></p>-->
                         <!--           </td></div>
                             <div>        <td class="price-pr">
                                        <p><?php// echo $item["price"].'?? ??'; ?></p>
                                    </td></div>
                             <div>        <td class="quantity-box">

<?php //echo $item["qty"]; ?>
                               <input class="form-control" type="number" value="<?php// echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php// echo $item["rowid"]; ?>')"/>
                             
                             </td></div>
                            
                                    <!--<td class="add-pr">-->
           <!--                   <div>           <td class="text-right"><?php //echo $item["subtotal"].'?? ??'; ?></td></div>
                                    <!--</td>-->
         <!--                           
                                </tr></div>
								<?php// } }else{ ?>
                      <div>       <tr><td colspan="5"><p>???????? ?????????? .....</p></td></div>
                            <?php// } ?>
                           
                     <!--  <div>          <tr>-->
								<?php// if($cart->total_items() > 0){ ?>
                 <!--    <div>        <tr>
                         <div>        <td></td></div>
                            <div>     <td></td></div>
                       <div>          <td><strong>???????????? ??????????</strong></td></div>
                       <div>          <td class="text-right"><strong><?php// echo $cart->total().' ?? ??'; ?></strong></td></div>
                         <div>        <td></td></div>
                            </tr></div>
                            <?php// } ?>
                        </tbody></div>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                    <a href="shop.php" class="btn hvr-hover">???????????? ????????????</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php //if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn hvr-hover">???????? ??????????</a>
							<?php // }?>
                            <br> <br>  <br> <br>
                    </div>
                </div>
            </div>
			</div>
        </div>
    </div>-->
    <!-- End Wishlist -->

    <div class="wishlist-box-main">
    <div class="container">
<p align=right>"?????? ?????? ???????????? ???????? ???????? ???????????? ?????? ???????????? ?????????? ???????? ??????????"</p>
    <div class="row">
        <div class="cart">
            <div class="col-12">
               <!-- <div class="table-responsive">
                 <div>   <table class="table table-striped">-->
                     <div class="table-main table-responsive">
                        <table class="table">
                   <div>     <thead>
                     <div>       <tr>
					<div>		    <th width="30%">???????? ????????????</th></div>
                    <div>            <th width="20%">?????? ????????????</th></div>
                    <div>          <!--  <th width="20%"> ???????????? ????????????????</th></div>-->
                    <div>            <th width="10%">??????????</th></div>
                     <div>           <th width="10%">????????????</th></div>
                     <div>           <th class="text-right" width="20%">?????????? ??????????</th></div>
                     <div>           <th width="10%">?????????? </th></div>
                            </tr></div>
                        </thead></div>
                        <tbody>
                            <?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
                 <div>           <tr>
				<div>			    <td><?php
				  
                                echo "<img src='images/".$item["image"]."' width= 50px height 50px >";
				                                      ?></td>
                   <div>             <td><?php echo $item["id"]; ?></td></div>
                  <!-- <div>             <td class="quantity-box" ><?php /*  if($item["quantity"]<0)
                                                    { echo 0 ; } else echo $item["quantity"];' ' */?>   </td></div>-->
                   <div>             <td><?php echo ' '.$item["price"].'  '; ?></td></div>
                   <div>             <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" min="0" max="<?php echo $item["quantity"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/>
                                <?php 

    if(($item["qty"]<$item["quantity"])&&($item["quantity"]>0))
{
                                $item["quantity"] =  $item["quantity"]- $item["qty"];
                                $id = $item["id"] ;
                                $quantity = $item["quantity"];
                                $sql="UPDATE products SET quantity = '$quantity' WHERE id = '$id' ";
                                mysqli_query($db, $sql);
} 
else
if($item["qty"]>$item["quantity"]){
    echo "???????????? ???????????????? ?????? ????????????" ;
    echo $item["quantity"] ;
}
                                ?>
                                </td></div>
                <div>                <td class="text-right"><?php echo ' '.$item["subtotal"].' ?? ??'; ?></td></div>
                 <div>               <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash"></i> </button> </td></div>
                            </tr></div>
                            <?php } }else{ ?>
                <div>            <tr> <div> <td colspan="5"><p>???????? ?????????? .....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                 <div>           <tr>
                 <div>               <td></td></div>
                  <div>              <td></td></div>
                 <div>               <td><strong> ???????????? ??????????</strong></td> </div>
                 <div>               <td class="text-right"><strong><?php echo ' '.$cart->total().' ?? ??'; ?></strong></td> </div>
                 <div>               <td></td> </div>
                            </tr></div>
                            <?php } ?>
                        </tbody></div>
                    </table></div>
                </div>
     <!--       </div><br>
           <div class="col mb-2">-->
                <div class="row" align=right>
                    <div class="col-sm-12  col-md-6">
                    <a href="shop.php" class="btn hvr-hover">???????????? ???????????? </a>
                <!--    </div>
                   <div class="col-sm-12 col-md-6 text-right">-->
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn hvr-hover">?????????? ??????????</a>
                        <?php } ?>
          <!--          </div>
                </div>-->
            </div>
        </div>
    </div>
</div>
</div></div>
<br><br>
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