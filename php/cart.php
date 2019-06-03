<?php
session_start();
 $database_name= "product_details";
 $con1= mysqli_connect("localhost","root","",$database_name);

 if (isset($_POST["add"])){
   if (isset($_SESSION["cart"])){
     $item_array_id= array_column($_SESSION["cart"], "product_id");
     if(! in_array($_POST["id"],$item_array_id)){
       $count = count($_SESSION["cart"]);
       $item_array= array(
         'product_id' => $_POST["id"],
         'item_name' => $_POST["hidden_name"],
         'product_price' => $_POST["hidden_price"],
         'item_quantity' => $_POST["quantity"],
         'item_description' => $_POST["hidden_desc"],

       );
       $_SESSION["cart"][$count] = $item_array;
       echo '<script>alert("Product has been Added to Cart")</script>';
     } else{
       echo '<script>alert("Product is already Added to Cart")</script>';
     }
   }else{
     $item_array= array(
       'product_id' => $_POST["id"],
       'item_name' => $_POST["hidden_name"],
       'product_price' => $_POST["hidden_price"],
       'item_quantity' => $_POST["quantity"],
       'item_description' => $_POST["hidden_desc"],
     );
     $_SESSION["cart"][0]=$item_array;
   }
 }

 if (isset($_GET["action"])){
   if($_GET["action"] == "delete"){
     foreach ($_SESSION['cart'] as $keys => $value) {
      if ($value["product_id"] == $_GET["id"]){
        unset($_SESSION["cart"][$keys]);
        echo '<script>alert("Product has been removed")</script>';
        echo '<script>window.location= "cart.php"</script>';
      }
     }
   }
 }

 if (isset($_GET["action"])){
   if($_GET["action"] == "clearall"){
     $count = count($_SESSION["cart"]);
     if($count>0){
     echo '<script>alert("Purchase has been successful")</script>';
     echo '<script>window.location= "cart.php"</script>';
   }
   else{
     echo '<script>alert("No item in cart")</script>';
   }
 }
}
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <style>
      table, th, tr {
        text-align: center;
      }

      .shoppingtitle{
        text-align: center;
        color: #f8f8f8;
        background-color: #000000;
        padding: 2%;
      }

      table th{
        background-color: #efefef;
      }
    </style>
  </head>
  <body>


    <div style="clear: both;"></div>
    <h1 class="shoppingtitle">Shopping Cart Details</h1>
      <table class="table table-boarded">

      <tr>
        <th width="20%">Product Name</th>
        <th width="20%">Description</th>
        <th width="10%">Quantity</th>
        <th width="13%">Price Details</th>
        <th width="10%">Total Price</th>
        <th width="17%">Remove Item</th>
      </tr>

      <?php
      if(!empty($_SESSION["cart"])){
        $total=0;
        foreach ($_SESSION["cart"] as $key => $value) {

       ?>
       <tr>
         <td><?php echo $value["item_name"]; ?></td>
         <td><?php echo $value["item_description"] ?></td>
         <td><?php echo $value["item_quantity"]; ?></td>
         <td>$ <?php echo $value["product_price"]; ?></td>
          <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"],2); ?></td>
          <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span>Remove Item</spam></a></td>

       </tr>
       <?php
       $total = $total + ($value["item_quantity"] * $value["product_price"]);
     }
       ?>

       <tr>
         <td colspan="4" align="right">Total</td>
         <th align="right">$ <?php echo number_format($total, 2); ?></th>
       </tr>
       <?php
     }
       ?>
       </table>
    </div>
<a href="cart.php?action=clearall"><span style="margin-top: 5%; margin-left:45%; font-size:20px;">Checkout</spam></a>
  </body>
</html>
