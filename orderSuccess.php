<?php 
if(!isset($_REQUEST['id'])){ 
header("Location: shop.php"); 
 
} 
 
// Include the database config file 
require_once 'dbconfig.php'; 
 
// Fetch order details from database 
$result = $db->query("SELECT r.*, c.first_name, c.last_name, c.email, c.phone, c.address FROM orders as r LEFT JOIN customers as c ON c.id = r.customer_id WHERE r.id = ".$_REQUEST['id']); 
 
if($result->num_rows > 0){ 
    $orderInfo = $result->fetch_assoc(); 
}else{ 
    header("Location: shop.php"); 
} 
?>

<!DOCTYPE html>
<html 
dir="rtl"
      lang="ar">
<!-- Basic -->
<head>
<title>حالة الطلب - الفاتورة النهائية </title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 style="text-align:right;">حالة الطلب</h1>
    <div class="col-12">
        <?php if(!empty($orderInfo)){ ?>
            <div class="col-md-12">
             <h3 style="text-align:right;" >   <div class="alert alert-success">الطلب مكتمل </div></h3>
          <!--   <p style="text-align:right;"> هذه الفاتوره لا تشمل سعر التوصيل </p>-->
            </div>
			
            <!-- Order status & shipping info -->
            <div class="row col-lg-12 ord-addr-info">
                <div  class="hdr" style"float:right;"><h3>&nbsp; معلومات الطلب:-</div>&nbsp;&nbsp;&nbsp;</h3>
                <br>
                <p> &nbsp;<b>كود الطلب:</b> #<?php echo $orderInfo['id']; ?></p><br>&nbsp;&nbsp;
              <!--  <p><b> |</b> &nbsp;<b>المبلغ الكلي:</b> <?php /*echo '$'.$orderInfo['grand_total'].' USD'; */ ?></p><br>&nbsp;&nbsp;-->
                <p><b> |</b>&nbsp; <b>تم الطلب في:</b> <?php echo $orderInfo['created']; ?></p><br>&nbsp;&nbsp;
               <!-- <p><b> |</b>&nbsp;<b>إسم المشتري:</b> <?php// echo $orderInfo['first_name'].' '.$orderInfo['last_name']; ?></p><br>&nbsp;&nbsp;-->
               <p><b> |</b>&nbsp;<b>رقم الهاتف 1:</b> <?php echo $orderInfo['phone']; ?></p><br>&nbsp;&nbsp;
               <p><b> |</b>&nbsp;<b>رقم الهاتف 2:</b> <?php echo $orderInfo['phone2']; ?></p><br>&nbsp;&nbsp;
                <p><b> |</b>&nbsp;<b>الإيميل  :</b> <?php echo $orderInfo['email']; ?></p><br>&nbsp;&nbsp;
                
                <p><b> |</b>&nbsp;<b>  العنوان:</b> <?php echo $orderInfo['address']; ?></p><br>&nbsp;&nbsp;
            </div>
            
  
  
			
            <!-- Order items -->
         <!--   <div class="row col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>كود المنتج</th>
                            <th>كود البائع</th>
                            <th>اسم المنتج</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                            <th>إجمالي الطلب من المنتج</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php /*
                        // Get order items from the database 
                        $result = $db->query("SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id = ".$orderInfo['id']); 
                        if($result->num_rows > 0){  
                            while($item = $result->fetch_assoc()){ 
                                $price = $item["price"]; 
                                $quantity = $item["quantity"]; 
                                $sub_total = ($price*$quantity); 
                        ?>
                        <tr>
                            <td><?php echo $item["id"]; ?>  </td>
                            <td><?php echo $item["name"]; ?></td>
                            <td><?php echo $item["pname"]; ?></td>
                            <td><?php echo ''.$price.'ج س'; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo ''.$sub_total.'ج س'; ?></td>
                        </tr>
                        <?php } 
                        } */?>
                    </tbody>
                </table>
            </div>-->
      
        <?php } ?>
    </div>
</div>
</body>
</html>