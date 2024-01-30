<?php

include 'sql\connection.php';
include 'sql\function.php';
include 'getpostfunction.php';
$product_id = $product_name = $sku = $product_type = $category = $manufacturer_cost = $shipping_cost = $total_cost = $price = $status = $created_at = $updated_at = '';
$conn = mysqlConnection();
// $id=$_GET['id'];
$id = isset($_GET['id']) ? $_GET['id'] : null;


if (isset($_GET['action']) && $id) {
    $action = $_GET['action'];
    // $product_id = $_GET['product_id'];
    global $id;
    if ($action === 'edit') {
        $query = select('ccc_product',['*'], ['product_id' => $id]);
        $result = mysqli_query($conn, $query);
        if ($result && $row = mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $value) {
                $$key = $value;
            }

        } else {
            echo 'Error: ' . mysqli_error($conn);
        }
    //   $row=mysqli_fetch_assoc($result);
    //   var_dump($row); 
        mysqli_close($conn);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_data = $_POST['ccc_product'];
    foreach ($product_data as $key => $value) {
        $$key = $value;
    }

    if (empty($product_data['product_id'])) {
        $query = insert('ccc_product',$product_data);
    } else {
        $where_condition = ['product_id' => $product_data['product_id']];
        $query = update('ccc_product',$product_data, $where_condition);
    }

    
    mysqli_query($conn, $query);
    mysqli_close($conn);

    echo "Record " . (empty($product_data['product_id']) ? "added" : "updated") . " successfully!";
}
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $where_condition = ['product_id' => $product_id];
    $query = delete('ccc_product', $where_condition);
   

    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
    
</head>
<body>
       <h2 style="text-align: center;">Product Information Form</h2>

       <form action="product.php" method="post" style="max-width: 600px; margin: 0 auto;">
        <input type="hidden" name="ccc_product[product_id]" value="<?php echo $product_id; ?>">

        <label for="product_name" style="display: block; margin-top: 10px;">Product Name:</label>
        <input type="text" id="product_name" name="ccc_product[product_name]" value="<?php echo $product_name; ?>" placeholder="<?php echo $product_name; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="sku" style="display: block; margin-top: 10px;">SKU:</label>
        <input type="text" id="sku" name="ccc_product[sku]" value="<?php echo $sku; ?>" placeholder="<?php echo $sku; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label style="display: block; margin-top: 10px;">Product Type:</label>
        <input type="radio" id="product_type_simple" name="ccc_product[product_type]" value="Simple" <?php echo ($product_type === 'Simple') ? 'checked' : ''; ?> style="margin-right: 5px;">
        <label for="product_type_simple">Simple</label>
        <input type="radio" id="product_type_bundle" name="ccc_product[product_type]" value="Bundle" <?php echo ($product_type === 'Bundle') ? 'checked' : ''; ?> style="margin-right: 5px;">
        <label for="product_type_bundle">Bundle</label>

        <label for="category" style="display: block; margin-top: 10px;">Category:</label>
        <select id="category" name="ccc_product[category]" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; box-sizing: border-box;">
            <?php
            $categories = ["Bar & Game Room", "Bedroom", "Decor", "Dining & Kitchen", "Lighting", "Living Room", "Mattresses", "Office", "Outdoor"];
            foreach ($categories as $cat) {
                echo "<option value=\"$cat\" " . (($category === $cat) ? 'selected' : '') . ">$cat</option>";
            }
            ?>
        </select>

        <label for="manufacturer_cost" style="display: block; margin-top: 10px;">Manufacturer Cost:</label>
        <input type="text" id="manufacturer_cost" name="ccc_product[manufacturer_cost]" value="<?php echo $manufacturer_cost; ?>" placeholder="<?php echo $manufacturer_cost; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="shipping_cost" style="display: block; margin-top: 10px;">Shipping Cost:</label>
        <input type="text" id="shipping_cost" name="ccc_product[shipping_cost]" value="<?php echo $shipping_cost; ?>" placeholder="<?php echo $shipping_cost; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="total_cost" style="display: block; margin-top: 10px;">Total Cost:</label>
        <input type="text" id="total_cost" name="ccc_product[total_cost]" value="<?php echo $total_cost; ?>" placeholder="<?php echo $total_cost; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="price" style="display: block; margin-top: 10px;">Price:</label>
        <input type="text" id="price" name="ccc_product[price]" value="<?php echo $price; ?>" placeholder="<?php echo $price; ?>" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="status" style="display: block; margin-top: 10px;">Status:</label>
        <select id="status" name="ccc_product[status]" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <option value="Enabled" <?php echo ($status === 'Enabled') ? 'selected' : ''; ?>>Enabled</option>
            <option value="Disabled" <?php echo ($status === 'Disabled') ? 'selected' : ''; ?>>Disabled</option>
        </select>

        <label for="created_at" style="display: block; margin-top: 10px;">Created At:</label>
        <input type="date" id="created_at" name="ccc_product[created_at]" value="<?php echo $created_at; ?>" style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="updated_at" style="display: block; margin-top: 10px;">Updated At:</label>
        <input type="date" id="updated_at" name="ccc_product[updated_at]" value="<?php echo $updated_at; ?>" style="width: 100%; padding: 8px; box-sizing: border-box;">

        <input type="submit" value="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; cursor: pointer; border-radius: 5px;">
    </form>
</body>
</html>