<?php
include_once 'cart.class.php';
$cart = new Cart; 
require_once "dbconfig.php";
?>
<?php 
// Default redirect page 

$redirectLoc = 'store.php'; 
 
// Process request based on the specified action 
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ 
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){ 
        $storetID = $_REQUEST['id']; 
         
        // Get product details 
        $query = $db->query("SELECT * FROM stores WHERE id = ".$storeID); 
        $row = $query->fetch_assoc(); 
        $itemData = array( 
            'id' => $row['id'],
			'image' => $row['image'],
            'storename' => $row['storename'], 
            'mem_id' => $row['mem_id'], 
             
        ); 
         
        // Insert item to cart 
        $insertItem = $cart->insert($itemData); 
         
        // Redirect to cart page 
      $redirectLoc = $insertItem?'store.php':'stores.php'; 
    }
         
        // Redirect to cart page 
        $redirectLoc = 'store.php'; 
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){ 
        $redirectLoc = 'checkout.php'; 
header("Location: $redirectLoc"); 
exit();