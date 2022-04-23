<?php include "logincheck.php"; ?>
<?php 
// Initialize shopping cart class 
include_once 'cart.class.php'; 
$cart = new Cart; 
 // Include the database config file 
require_once 'dbconfig.php'; 
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
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>تسجيل جديد |تسجيل الدخول</title>
    
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
                                    <i class="fab fa-opencart"></i> فال مال خطوة نحو الرفاهية 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> فال مال منصة بيع وتسويق من المجتمع وإليه 
                                </li>
                               <!-- <li>
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
                                </li>-->
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
                        <p>إتصل بنا :- <a href="tel:+249994032712">+249994032712</a></p>

                    </div>
                    <div class="our-link">
                        <ul>
                           <!-- <li><a href="#">حسابي</a></li> -->
                            <li><a href="#1">موقعنا</a></li>
                            <li><a href="#1">تواصل معنا</a></li>
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
  
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
					
                      <li class="nav-item active"><a class="nav-link" href="index.php">الرئيسية</a></li>
                      <li class="nav-item"><a class="nav-link" href="shop.php">التسوق</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">التصنيفات</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <!--<h6 class="title">متصدر</h6>
                                            <!--<div class="content">-->
                                                <ul class="menu-col">
                                                    <li><a href="shop.php#7">  ملابس ومستلزمات شخصية </a></li>
                                                    
                                                </ul>
                                            <!--</div>-->
                                        </div>
                                        <!-- end col-3 -->
                                       <div class="col-menu col-md-3">
                                            <!--<h6 class="title">ملابس</h6>
                                           <!-- <div class="content">-->
                                                <ul class="menu-col">
                                                     <li><a href="shop.php#4"> مستلزمات المنزل </a></li>
                                                    
                                                </ul>
                                           </div>
                                      <!--  </div>-->
                                        <!-- end col-3 -->
                                        <div class="col-menu col-md-3">
                                           <!-- <h6 class="title">أجهزه</h6>
                                         <!--   <div class="content">-->
                                                <ul class="menu-col">
                                                <li><a href="shop.php#5"> أجهزة</a></li>
                                                    
                                                </ul>
                                          </div>
                                         <!-- </div> -->
                                        <div class="col-menu col-md-3">
                                            <!--<h6 class="title">اكسسوارات</h6>
                                          <!--  <div class="content">-->
                                                <ul class="menu-col">
                                                    <li><a href="shop.php#6"> تصنيفات أخرى </a></li>
                                                  
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
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">المشتريات</a>
                            <ul class="dropdown-menu">
                                <li><a href="viewCart.php">عربة التسوق</a></li>
                                <li><a href="checkout.php">الدفع</a></li>
                               
                               <!-- <li><a href="my-account.html">حسابي</a></li>
                                <li><a href="wishlist.html">قائمة المرغوبات</a></li>
                                <li><a href="shop-detail.html">تفاصيل التسوق</a></li>-->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="index.php#8">الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">من نحن</a></li>
                        
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
                            <p><?php// echo $item["qty"]; ?>x - <span class="price"><?php //echo 'ج'.$item["price"].' SD'; ?></span></p>
                        </li>
                        
                        <li class="total">
                            <a href="viewCart.php" class="btn btn-default hvr-hover btn-cart">سلة التسوق</a>

                            <span class="float-right"><strong>المبلغ الكلي</strong>: <?php// echo '$'.$cart->total().' SD'; ?></span>
                        
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
                    <h2>التسجيل للمتجر</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">إنشاء متجر  </a></li>
                        <li class="breadcrumb-item active"> تسجيل الدخول</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    
    <br><br>
	<div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2 style="text-align:right" >تسجيل الدخول</h2>
                        
                       <p style="text-align:right" > <?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
 echo  ' <div id="reg-head" class="headrg"> إذا لم يكن لديك حساب متجر بعد إذهب لتسجيل متجر جديد بالأسفل </div> ';
}
if ($remarks=='failed') {
 echo ' <div id="reg-head-fail" class="headrg">تسجيل الدخول فشل !, معلوماتك غير صحيحة</div> ';
}
?> </p>
						<form action="" method="POST" id="signin" id="reg">
                           
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="username" placeholder="اسم المتجر " required data-error="أدخل إسم المتجر ">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="subject" name="password" placeholder="كلمة المرور" required data-error="أدخل كلمة المرور">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
  
  <div class="col-md-12">
                                   
                                    <div class="submit-button text-center">
                                        <br><button class="btn hvr-hover" id="submit" type="submit">تسجيل الدخول</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <a href=iconstore.php> نسيت معلومات الدخول  </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
						 </div>
    </div>
	
    <!-- Start Contact Us  -->
    <div class="contact-box-main" id="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                       <h2  style="text-align:right" >   موجهات الإستخدام </h2>
                        <p style="text-align:right" >
						- يتم رفع المنتجات في الموقع عن طريق إنشاء حساب متجر خاص بك  .<br>
											- التسجيل لإنشاء المتجر مجانا.<br>
									- يمكنك رفع أي نوع من المنتجات مادامت قانونية.<br>
						- المنتجات تظهر لزوار الموقع بمجرد رفعها مباشرة في متجرك و تحت تصنيفات المنتجات في الموقع ويمكنك متابعة الطلبات عليها من حسابك .<br>
						-يتم الوصول إلى متجرك من قبل أي شخص عن طريق إدخال رقم متجرك في خانة الذهاب إلى المتاجر في الصفحة الرئيسية . <br> 
- عند طلب منتج من منتجاتك من قبل الزبائن وفي حال لم يكن لديك توصيل يمكنك طلب توصيل فال مال لتوصيل طلبياتك إلى وجهتها
<!--	- نصلك في موقعك ونستلم منك المنتج ونسلمك إيصال إستلام بإسم الشركة ومختوم بختمها. <br>
						- يفضل أن يرافق عملية التوصيل صاحب المنتج أو مندوب من طرفه إذا رغب بذلك. <br>
						- عند إتمام عملية البيع يتم تسليم المبلغ لصاحب المنتج نقدا وإسترجاع إيصال الإستلام منه. <br>
						- في حالة عدول المشتري عن رغبته في الشراء أو عدم إستلام السلعة لأي سبب يتم إرجاع المنتج إلى صاحبه في نفس اليوم وبنفس الحالة التي أخذ بها. <br>-->
<br>	-    يأخذ الموقع مبلغ قدره ١% فقط من قيمة أي منتج يتم بيعه عن طريقه ويتم سداد المبلغ بالطريقة التي يراها صاحب المتجر مناسبة له ( تحويل بنكي ، تحويل رصيد ) .<br>
<!--	- لمعرفة عناوين ومعلومات الطلبات الخاصة بك عليك أولا دفع عمولة الموقع وإرفاق صوره من إيصال الدفع أو المعاملة البنكية أو الهاتفية. <br>
		- يلتزم الموقع بإرجاع العمولة في حالة التأكد من أن عملية البيع لم تتم . <br>-->
	- لأي إستفسار إتصل على <p><i class="fas fa-phone-square"></i>الهاتف: <a href="tel:00249994032712">00249994032712</a></p>. <br>

                         						</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-envelope"></i>للدفع عن طريق التحويل البنكي : <br>رقم الحساب : 920921 (بنك أمدرمان الوطني)
                                <br>  </p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i> للدفع عن طريق تحويل الرصيد :<br>0126655826</p>
                            </li>
                           <!-- <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                            </li>
                        </ul>-->
                    </div>
                </div>
				
	
	
				<p style="text-align:right" > <?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <!--<div id="reg-head" class="headrg" style="text-align:right" >سجل متجرك</div> -->';
}
if ($remarks=='success') {
    echo ' <div id="reg-head" class="headrg" style="text-align:right"> تم تسجيل متجرك بنجاح </div> ';
}
if ($remarks=='failed') {
 echo ' <div id="reg-head-fail" class="headrg" style="text-align:right"> التسجيل فشل ! , إسم المتجر موجود </div> ';
}
if ($remarks=='error') {
 echo ' <div id="reg-head-fail" class="headrg" style="text-align:right">التسجيل فشل!  <br> Error: '.$_GET['value'].' </div> ';
}
?> </p>
                <div class="col-lg-8 col-sm-12" id="3">
                    <div class="contact-form-right">
                        <h2 style="text-align:right" >تسجيل متجر جديد</h2>
                        <p style="text-align:right" >عزيزنا المشترك الكريم مرحبا بك ، نود أن نلفت إنتباهك إلى أن منتجاتك سيتم مشاركتها مع بقية المنتجات في الموقع لذا يفضل أن تتأكد من الأسعار الصحيحة لمنتجاتك في السوق حتى تستطيع المنافسه مع مثيلاتها .</p>
                      
						<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="fname" placeholder="الإسم &nbsp;الأول" required data-error="أدخل الإسم الأول">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="lname" placeholder="الإسم &nbsp;الأخير" required data-error="أدخل الإسم الأخير">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!--<div class="col-md-12">
                                    <div class="form-group">:
                                        <input type="text" placeholder="الإيميل - إختياري" id="address" class="form-control" name="address"  >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="username" placeholder="اسم المتجر "  required data-error="أدخل إسم المتجر">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="phone" class="form-control" id="subject" name="phone" placeholder="رقم الهاتف" required data-error="أدخل رقم هاتفك">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="subject" name="password" placeholder="كلمة المرور" required data-error="أدخل كلمة المرور">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder=" أدخل عنوانك" name="location" rows="4" data-error="أدخل عنوانك" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
									</div>
									
									<!--<div class="contact-form-right">
									<div class="col-md-12">
                                    <div class="form-group">
									<label  style="text-align:right" >لديك توصيل </label><br>
                                        <input type="radio" id="yes" name="delevery" value="yes" style="text-align:right" checked required >
  <label for="yes" style="text-align:right" >نعم </label><br>
  <input type="radio" id="no" name="delvery" value="no" style="text-align:right" required >
  <label for="no" style="text-align:right" >  لا </label><br>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								</div>-->
								 <div class="contact-form-right">
								<div class="col-md-12">
                                    <div class="form-group">
									<input type="checkbox" name="agree[]" value="agree" style ="float: center" placeholder="أوافق" required >
									
<label  align=center > أوافق على  شروط الموقع   </label>
							<br>		<a href="terms&privacy.php"> الإطلاع على الشروط </a>
                                        
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								 </div>
								
									
  
  <div class="col-md-12">
                                   
                                    <div class="submit-button text-center">
                                        <br><button class="btn hvr-hover" id="submit" type="submit">تسجيل</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				 
	

	 
            </div>
        </div>
    </div>
    <!-- End Cart -->

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
                            <h4 style="text-align:right;">عن فال مال</h4>
                            <p style="text-align:right;">فال مال موقع مختص بالبيع والتسويق للمنتجات والخدمات وهو عبارة عن منصة تمكن أصحاب الأعمال والمنتجات من عرض منتجاتهم ومتابعة الطلبات عليها و على الطرف الآخر تمكن الزبائن من الحصول على كل إحتياجاتهم من معروضات الموقع بأيسر الطرق .
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
                            <h4 style="text-align:right;">المعلومات</h4>
                             <a href="about.php"> <p style="text-align:right;"> - نبذة عنا </p> </a> 
                             
                             <a href="index.php#8"> <p style="text-align:right;"> - خدماتنا   </p> </a> 
                             
                             <a href="terms&privacy.php"> <p style="text-align:right;"> - إتفاقية الإستخدام والشروط | الخصوصية </p> </a> 
                            
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-4 col-md-12 col-sm-12" id="1">
                        <div class="footer-link-contact">
                            <h4 style="text-align:right;">تواصل معنا</h4>
                            <ul>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-map-marker-alt" float=right ></i>العنوان : السوق العربي <br>شارع الحرية<br>  </p>
                                </li>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-phone-square"></i>الهاتف: <a href="tel:+249994032712">+249994032712</a></p>
                                </li>
                                <li>
                                    <p style="text-align:right;"><i class="fas fa-envelope"></i>الإيميل: <a href="mailto:info@falmal.com">info@falmal.com</a></p>
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
        <p class="footer-company">كل الحقوق محفوظة  2020 <a href="index.php">falmal.com</a>
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