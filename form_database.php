<?php
if(isset($_POST['product_name'])){
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "ccc_practice";

      $con = mysqli_connect( $server,$username,$password,$dbname);
      if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
      }
     
      $product_name= $_POST['product_name'];
      $sku = $_POST['sku'];
      $product_type = $_POST['product_type'];
      $category = $_POST['category'];
      $manufacturer_cost = $_POST['manufacturer_cost'];
      $shipping_cost = $_POST['shipping_cost'];
      $total_cost = $_POST['total_cost']; 
      $price = $_POST['price'];
      $status = $_POST['status'];

      $sql = "INSERT INTO `ccc_product` ( `product_name`, `sku`, `product_type`, `category`, `manufacturer_cost`,`shipping_cost`,`total_cost`,`price`, `status`)
       VALUES ('$product_name', '$sku', '$product_type', '$category','$manufacturer_cost', '$shipping_cost', '$total_cost', '$price', '$status')";
  $insert=mysqli_query($con,$sql);
  if($insert){
      echo "Data add successfully";
  }else {
      echo "Error: " . mysqli_error($con);
    }
      mysqli_close($con);
}
?>