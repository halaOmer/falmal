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
 
    */  ?>
 
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
    <title>الرئيسية</title>
    
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
               
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    
    <!-- End Top Search -->
     <div class="contact-box-main" id="2">
     <div class="container">
            <div class="row">
             <!--   <div class="col-lg-4 col-sm-12">-->
                    <div class="contact-info-left">
         <b>               <h2  style="text-align:right" >إتفاقية الإستخدام والشروط | الخصوصية     </h2></b>
                     
    <h4 align=right>   
    
<br>     إتفاقية الأستخدام والشروط والقوانين الخاصة بإستخدام موقع فال مال و الخدمات والمنتجات المرتبطة  مع العلم ان إتفاقية الاستخدام سارية على جميع المستخدمين بمجرد اشتراكهم في إنشاء متجر أو الشراء عن طريق فال مال أو إستخدام أي خدمة من خدمات الموقع<br> 
تعتبر هذه الشروط العقد الموقع من قبل كلا الطرفين فال مال والمستخدم في حال إستخدام أي من خدماتنا. رجاءٍا قراءة محتوى هذة الاتفاقية بعناية والالتزام بها، لأن إتفاقية الخدمة هي عقد التعامل الإكتروني والاتفاق بين الطرفين وبهذا يوافق المستخدم و فال مال  على إحالة أي نزاع أو خلاف قد ينشأ حول هذه الشروط والأحكام إلى الجهة القضائية المختصة في جمهورية السودان.<br> 
عند قيام المستخدم بطلب اي خدمة من الخدمات الي يقدمها فال مال من خدمة المتجر الإلكتروني أو الشراء عن طريق الموقع أو غيرها من الخدمات يعتبر ذلك توقيعاَ إلكترونياً وقبولاً للتعاملات الإلكترونية والموافقة عليها بالإضافة إلى قبول والموافقة التامة لشروط وأحكام استخدام موقع وخدمات فال مال.<br> 
للعلم فإنه لن يتم السماح لك بالوصول إلى الخدمة إلا إذا كنت موافقا على شروط هذه الإتفاقية.<br> <br>
يقصد بالمصطلحات والعبارات الآتية – أينما وردت في هذه الإتفاقية – المعاني المبينة أمامها، ما لم يقتض السياق خلاف ذلك:<br> 
فال مال أو موقع فال مال : هو مقدم الخدمة للمستخدم falmal.com.<br> 
المستخدم: الشخص الطبيعي (الفرد) أو المعنوي (منشأة تجارية) الذي يستخدم خدمات فال مال.<br>

 <br> <br> <h3 align=right> الشروط العامة </h3><br> <p align=right> <p align=right>
 يحق لموقع فال مال رفض إنشاء أي متجر أو رفض تقديم أو تجديد اي خدمة من خدمات فال مال لاي شخص او جهة يرى فال مال أنه يخالف السياسات العامة لفال مال بدون ابداء أسباب.  <br> 
يحق لفال مال تعديل هذه الشروط والأحكام أو استبدالها كليا بشروط وأحكام أخرى جديدة دون إشعار بذلك، وتصبح التعديلات نافذة فور نشرها على موقع فال مال ما لم يتم بيان خلاف ذلك، ويعتبر استمرارية دخول المستخدم أو المشترك لموقع فال مال أو استخدامه للخدمات التي يوفرها موقع فال مال بمثابة موافقة منه على هذه التغييرات.<br> 
لموقع فال مال الحق في تعديل كامل موقع فال مال أو جزء منه أو إيقافه أو تعليقه مؤقتا أو بشكل دائم دون إشعار مسبق وفي أي وقت يراه. ولا يعد فال مال مسئولاً تجاه المستخدم أو تجاه أي أطراف أخرى عن أي تعديل لموقع فال مال أو تعليق أو إيقاف. <br> 
<br> 
</p>  <h3 align=right>  محتوى الموقع </h3><br>     <br > <p align=right>
المحتوى الموجود على موقع فال مال نابع من المستخدمين وبالتالي لا يتحمل موقع فال مال أي مسؤولية عن المستخدمين في المحتوى المضاف ولا على أسعار المنتجات المعروضة ويتحمل المستخدمين كافة المسؤولية.  <br> 
فال مال يقوم بدور رقابي فقط على المتاجر والمحتوى المُضاف عليها من قبل المستخدمين  ولذلك، لا يسمح للمستخدم بنشر منتجات بمحتوى مُخالف لسياسة الموقع مع العلم أن مثل هذه المنتجات أو المتاجر سوف يتم حذفها إذا لزم الأمر من قبل مسؤولي الموقع.<br> 
 وكمثال عليها لا للحصر :<br> 
أمثلة حسابات المتاجر المعرضة للحذف:<br> 
 الحسابات المكررة حيث لا يجوز أن يمتلك المستخدم أكثر من حساب متجر واحد، وسيتم حذف الحسابات الجديدة والإبقاء على الأقدم.<br> 
المتاجر التي يتم عن طريقها النصب والاحتيال مثل: (عرض منتجات وهمية لأي من التصانيف الموجودة على الموقع) والتي هدفها النصب على مستخدمين الموقع حيث يتم التأكيد عليها من قبل فريق مراقبة المحتوى ومن ثم تعطيلها.<br> 
المتاجر التي تعمل على الإعلان فقط والترويج لنفسها دون إستخدام سياسات الموقع في بيع المنتجات حيث يتم التأكيد عليها من قبل فريق مراقبة المحتوى ومن ثم تعطيلها حيث يوجد مواقع خاصة بالإعلانات فقط.<br> 
المتاجر التي ثبت بأن أصاحبها قاموا بمخالفة وتم التبليغ عنهم من قبل مستخدمين آخرين من الموقع أو ثبت أنهم قاموا بعمل ما بخصوص إزعاج مستخدمين أخرين. حيث يتم التأكيد عليها من قبل فريق مراقبة المحتوى ومن ثم تعطيلها.<br> 
المتاجر التي يكون في تسميتها عدم مراعاة للعرف العام والأخلاق و الشريعة الأسلامية.<br> 
أمثلة للمنتجات المعرضة للحذف:<br> 
المنتجات المكررة، حيث لا يسمح بتكرار نفس المنتج لنفس المتجر أكثر من مرة واحدة، بدلاً عن ذلك يمكن حذف المنتج القديم و إعادة رفعه من جديد.<br> 
كل المنتجات الممنوعة أو التي تحتوي في وصفها على بيع أو تأجير أو تداول أو الإعلان أو الترويج للمواد الممنوعة مثل ( الأعضاء البشرية، الأسلحة، الآثار، الحشيش والمخدرات وما شابهها، و الممنوعات بكافة انواعها)، وذلك يحدد حسب قانون الدولة.<br> 
المنتجات التي يأتي في وصفها إشارة للإستخدام في أعمال التخريب مثل: (الإيذاء والقتل المأجورو الحرق و القتل و الإغتصاب و التكسيرو الضرب وعصابات العنف) وما شابه ذلك.<br> 
المنتجات المخالفة للشريعة الإسلامية، مثل: ( بيع خمور وغيرها).<br> 
المنتجات التي تستخدم في السحر والشعوذة أو أي أشياء ذات علاقة بها. <br> 
منتجات التسويق الشبكي و الربح عن طريق الإنترنت. <br> 
المنتجات ذات المعلومات غير الواضحة أو التي لها وصف مريب.<br> 
 الأجهزة الكهربائية الممنوعة مثل: (أجهزة التنصت، قلم تصوير، كاميرا صغيرة، صاعق كهربائي، أجهزة فك التشفير، أجهزة كشف الرادار أو اللاسلكي ) وما شابه ذلك من الأجهزة ، وكذلك المنتجات مثل (الأدوات أو الأدوية الجنسية) وهي غيرمسموحة ويعاقب القانون على حيازتها أو الإتجار بها.<br> 
المنتجات الخاصة بالآثارالتي يعاقب القانون على حيازتها او التجارة بها.<br> 
منتجات الدخان أو التبغ أو السيجارأو الغليون أو الأرجيلة وما شابه ذلك. <br> 
المنتجات التي لا تحتوي على صور، أوالتي تحتوي على صور غير لائقة وتخل بالآداب العامة.<br> 
المنتجات التي تكون عبارة عن إعلانات فقط ممنوعة هناك مواقع كثيرة مختصة بالإعلانات.<br> 

  </p><br>  <h3 align=right> نفي الضمان وعدم تحمل المسؤولية </h3><br>  <p align=right>
إنك توافق على أن الموقع والخدمات والمنتجات التي به مقدمة على أساس "كما هي " أو " كما هي متاحة " دون أية ضمانات من أي نوع وموقع فال مال لا يتحمل أية ضمانات أو إقرارات حول جودة ودقة وإكتمال محتوى الموقع ولا يتحمل أية مسؤولية أو مسائلة لأي أخطاء أو الإصابة الشخصية أو أضرار في الممتلكات أو أي نوع آخر الناتجة عن الوصول إليك وإستخدام الموقع والخدمات الموجودة فيه بطريقة خاطئة من قبل المستخدمين ، أو استعمال جميع المعلومات الشخصية أو المعلومات المالية المخزنة بالوصول إليها عن طريق القرصنة أو ما شابه ، أو أي أخطاء أو حذف في أي محتوى ، أو عن أي خسارة أو ضرر من أي نوع يتم تكبده كنتيجة ل إستخدام الموقع الإلكتروني والخدمات التي به من طرف ثالث<br> 
</p> <br>  <h3 align=right>الشرط الجزائي   </h3><br>  <p align=right>
يحق لفال مال تطبيق الشرط الجزائي وذلك بايقاف اي خدمة بدون سابق انذار و إلغاء حسابك نهائياً بدون تنبيه، ولا يحق لك المطالبة بأي تعويضات مالية أو ارجاع اي مبلغ او جزء من اي مبلغ دفعته، ولا تحصل على أي نسخة احتياطية لحسابك، وقد يؤول الأمر إلى المقاضاة. يطبق بند الشرط الجزائي في احد الحالات التالية :<br> 
.الإساءة إلى فريق عمل فال مال أو أحد أفراده بأي شكل أو صيغة<br> 
 الإساءة بموقع فال مال بالتشهير أو التشهير بفريق العمل، انتحال الشخصية، القذف والتشهير، القرصنة الإلكترونية، وغيرها مما يدخل ضمن الجرائم الإلكترونية والتي يعاقب عليها النظام.  <br> 
.اذا كنت تستخدم منتجات غير مسموح بها أو تخالف القانون بأي طريقة <br> 
.في حال قيام متجرك لدى فال مال بنشر وتوزيع مواد مخلة بالآداب العامة<br> 
في حال تقديم بيانات غير صحيحة بقصد التضليل والاحتيال، كالأسم والعنوان ورقم الجوال ورقم الهوية.<br> 
<br> 
تسديد رسوم الخدمات<br> 
يتوجب على المستخدم لخدمات موقع فال مال تسديد رسوم الخدمات المشترك بها من فال مال أولاً بأول، وفي حال تأخر تسديد تلك الرسوم فمن حق فال مال تعطيل/تعليق الخدمة/الخدمات بشكل مؤقت لمدة 5 أيام ، وفي حال عدم تسديد المبالغ المتأخرة في خلال 5 أيام فمن حق موقع فال مال إلغاء الخدمة/الخدمات و حذفها، ولن يكون فال مال مسؤولا عن الاحتفاظ أو إرجاع أي بيانات أو محتوى خاص بالمستخدم بعد إلغاء خدمته بعد انقضاء المهلة.<br> 
عند إيداع/تحويل مبالغ ماليه بحسابتنا يجب ابلاغنا وذلك بمراسلتنا: لتاكيد الايداع خلال فترة لا تزيد عن 72 ساعة.<br> 


</p> <br>  <h3 align=right> الخصوصية </h3><br>  <p align=right>
يشارك فال مال معلومات المشترين مع أصحاب المتاجر بعد أخذ موافقتهم وهي (الهاتف ، والعنوان ) فقط.<br> 
فيما عدا ذلك لا يشارك فال مال جميع بيانات مستخدميه مع أي جهة أخرى رسمية أوغير رسمية حكومية أو خاصة.  <br> 

 </p>             
       
          
           
                 </h4>   
    </div>
                </div></div>
                </div>
    
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