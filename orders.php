<?php
 include('session.php');
 include('execute.php');
?>
 <?php 
// Initialize shopping cart class 
include_once 'cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbconfig.php'; 

?>
<?php
  // Create database connection
$db = mysqli_connect("localhost", "falmalco_falmal", "Fd[G1w1OG#3~", "falmalco_falmal");
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	//$name = mysqli_real_escape_string($db, $_POST['name']);
  	// Get image name
  	$image = $_FILES['image']['name'];
	// Get text
  	$description = mysqli_real_escape_string($db, $_POST['description']);
  	// Get text
$category = mysqli_real_escape_string($db, $_POST['category']);
   $pname = mysqli_real_escape_string($db, $_POST['pname']);
   $price = mysqli_real_escape_string($db, $_POST['price']);

  	// image file directory
  	$target = "images/".basename($image);

$sql = "INSERT INTO products (name, image, description, category, price, pname) VALUES ('$loggedin_id','$image', '$description', '$category', '$price', '$pname')"; 
 	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  

	if (isset($_GET['del'])) {
	$id = $_GET['del'];
mysqli_query($db, "DELETE FROM products WHERE id=$id");
	$_SESSION['message'] = "product deleted!"; 
	header('location: welcome.php');
}



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
    <title>فال مال</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                                    <i class="fab fa-opencart"></i> فال مال خطوة نحو الرفاهية 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال منصة بيع وتسويق من المجتمع وإليه 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> حيث يمكنك أن تجد ما تطلب وتعرض منتجاتك ليجدها غيرك
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال رفاهية الإختيار
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال خطوة نحو الرفاهية
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال منصة بيع وتسويق من المجتمع وإليه 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> حيث يمكنك أن تجد ما تطلب وتعرض منتجاتك ليجدها غيرك
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال رفاهية الإختيار
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
						<option>جنيه سوداني</option>
						<option>$ USD</option>
						<option>€ EUR</option>
					</select>
                    </div>
                    <div class="right-phone-box">
                        <p>إتصل بنا :- <a href="00249994032712"> 00249994032712</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                           <!-- <li><a href="#">حسابي</a></li> -->
                            <li><a href="www.falmal.com">موقعنا</a></li>
                            <li><a href="about.php">تواصل معنا</a></li>
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
                    <a class="navbar-brand" href="index.html"><img src="images/image/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
					
                      <li class="nav-item active"><a class="nav-link" href="index.php">الرئيسية</a></li>
					  <li class="nav-item"><a class="nav-link" href="about.php">من نحن</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">المنتجات</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">متصدر</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="pags.php">حقائب نسائية</a></li>
                                                    <li><a href="awani.php">أواني مطبخ </a></li>
                                                    <li><a href="athath.php">أثاثات</a></li>
                                                    <li><a href="#">تياب سودانية</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                       <div class="col-menu col-md-3">
                                            <h6 class="title">ملابس</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">ملابس رجالية</a></li>
                                                    <li><a href="#">ملابس نسائية</a></li>
                                                    <li><a href="#">ملابس أطفال</a></li>
                                                    <li><a href="#">ملابس حديثي الولادة</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">أجهزه</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">هواتف</a></li>
                                                    <li><a href="#">حواسيب ولابتوبات</a></li>
                                                    <li><a href="#">أدوات كهربائية منزلية</a></li>
                                                    <li><a href="#">أدوات كهربية أخرى</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">اكسسوارات</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="#">إكسسوارات نسائية</a></li>
                                                    <li><a href="#">فريمات</a></li>
                                                    <li><a href="#">ساعات</a></li>
                                                    <li><a href="#">هدايا</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col-3 -->
                                    </div>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">التسوق</a>
                            <ul class="dropdown-menu">
                                <li><a href="viewCart.php">عربة التسوق</a></li>
                                <li><a href="checkout.php">الدفع</a></li>
                               <!-- <li><a href="my-account.html">حسابي</a></li>
                                <li><a href="wishlist.html">قائمة المرغوبات</a></li>
                                <li><a href="shop-detail.html">تفاصيل التسوق</a></li>-->
                            </ul>
                        </li>
                        <!--<li class="nav-item"><a class="nav-link" href="service.html">الخدمات</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="memproducts.php">متجري</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge"><?php echo ($cart->total_items() > 0)?$cart->total_items().' ':'0'; ?> </span>
					</a></li>
                    </ul>
                </div>
				
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
			<?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                           ?>
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <href="#" class="photo"><img src="images/<?php echo $item["image"]; ?>" class="cart-thumb" alt="" width= 100px height 100px /></a>
                            <h6><a href="#"><?php echo $item["name"]; ?></a></h6>
                            <p><?php echo $item["qty"]; ?>x - <span class="price"><?php echo 'ج'.$item["price"].' SD'; ?></span></p>
                        </li>
                        
                        <li class="total">
                            <a href="viewCart.php" class="btn btn-default hvr-hover btn-cart">سلة التسوق</a>

                            <span class="float-right"><strong>المبلغ الكلي</strong>: <php echo 'ج'.$cart->total().' SD'; ?></span>
                        
                        </li>
                    </ul>
                </li>
				<?php }} ?>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
				<div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search " />
        <div class="result"></div>
    </div>
                <!--<input type="text" class="form-control" placeholder="Search">-->
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>مرحبا بك</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item active"><h1 align='center'><?php echo $loggedin_session; ?></h1> في متجرك الخاص </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
	
  
 
    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-gift"> </i> </a>
                                </div>
                                <div class="service-desc">
                                   
                                    <h4>الطلبات الخاصة بك</h4>
                                    
  
  
<?php
$sql = "SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id ORDER BY order_id DESC LIMIT 5";


$result = mysqli_query($db,$sql);
while($item = mysqli_fetch_array($result))
{
if ($item["name"] == $loggedin_id ){
   ?>

   <table border="2" align="center" cellpadding="2" cellspacing="2">
<tr>
<th> كودالطلب </th>
<th> المنتج </th>
<th> الكمية</th>
<!--<th> البائع </th>-->
<th> السعر</th>
</tr>
   
<tr>
 <tr> <td   >   <?php  echo $item["order_id"]; ?> </td>
                           <td>  <?php  echo $item["product_id"]; ?>  </td>
                          <td> <?php  echo $item["quantity"]; ?> </td>
                            <!--<td> <?php// echo $item["name"]; ?> </td>-->
                           <td>  <?php  echo $item["price"]; ?> </td>
                        
</table>
<br>
     
	 

<?php   } ?>
<?php  }  ?>


                                </div>
                            </div>
                        </div>
                    </div>
       
				
    <!-- End My Account -->
	</div>
	</div>
                </div>
				 </div>
	<br>
	
	
	
	

	
	

 
					
					
					


 

					
					


            

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
                            <h4>عن فال مال</h4>
                            <p>فال مال موقع مختص بالبيع والتسويق للمنتجات والخدمات وهو عبارة عن منصة تمكن أصحاب الأعمال والمنتجات من عرض منتجاتهم ومتابعة الطلبات عليها و على الطرف الآخر تمكن الزبائن من الحصول على كل إحتياجاتهم من معروضات الموقع بأيسر الطرق .
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
                        <div class="footer-link">
                            <h4>المعلومات</h4>
                            <ul>
                                <li><a href="about.php">نبذة عنا</a></li>
                                <li><a href="index.php">خدماتنا</a></li>
                                <!--<li><a href="#">خريطة موقعنا</a></li>-->
                                <li><a href="memproducts.php">شروط &amp; الإستخدام</a></li>
                                <!--<li><a href="#">سياسة الخصوصية</a></li>
                                <li><a href="#">معلومات التوصيل</a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>تواصل معنا</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>العنوان : السوق العربي <br>شارع الحرية<br>  </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">0126655826</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">sit36111@gmail.com</a></p>
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
        <p class="footer-company">كل الحقوق محفوظة &copy; 2020 <a href="index.php">FalMal</a> صمم بواسطة :
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