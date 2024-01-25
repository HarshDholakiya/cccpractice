<?php
include("getpost_function.php");
include("sql/mysql_function.php");
$conn = mysqli_connect("localhost","root","","ccc_practice");

$data=getPostData("ccc_product");

$sql=insert("ccc_product",$data);

if($insert){
    echo "<script>alert('Data add successfully')</script>";
    echo "<script>location. href='form_practice.php'</script>";
}else {
    echo "error";
}
?>