<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information Form</title>
</head>
<body>
    <h2 style="text-align: center;">Product Information Form</h2>

    <form action="form_database.php" method="post" style="max-width: 600px; margin: 0 auto;">
        <label for="product_name" style="display: block; margin-top: 10px;">Product Name:</label>
        <input type="text" id="product_name" name="ccc_product[product_name]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="sku" style="display: block; margin-top: 10px;">SKU:</label>
        <input type="text" id="sku" name="ccc_product[sku]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label style="display: block; margin-top: 10px;">Product Type:</label>
        <input type="radio" id="product_type" name="ccc_product[product_type]" value="Simple" checked style="margin-right: 5px;">
        <label for="simpleType">Simple</label>
        <input type="radio" id="bundleType" name="ccc_product[product_type]" value="Bundle" style="margin-right: 5px;">
        <label for="bundleType">Bundle</label>

        <label for="category" style="display: block; margin-top: 10px;">Category:</label>
        <select id="category" name="ccc_product[category]" style="width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; box-sizing: border-box;">
            <option value="Bar & Game Room">Bar & Game Room</option>
            <option value="Bedroom">Bedroom</option>
            <option value="Decor">Decor</option>
            <option value="Dining & Kitchen">Dining & Kitchen</option>
            <option value="Lighting">Lighting</option>
            <option value="Living Room">Living Room</option>
            <option value="Mattresses">Mattresses</option>
            <option value="Office">Office</option>
            <option value="Outdoor">Outdoor</option>
        </select>

        <label for="manufacturer_cost" style="display: block; margin-top: 10px;">Manufacturer Cost:</label>
        <input type="text" id="manufacturer_cost" name="ccc_product[manufacturer_cost]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="shipping_cost" style="display: block; margin-top: 10px;">Shipping Cost:</label>
        <input type="text" id="shipping_cost" name="ccc_product[shipping_cost]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="total_cost" style="display: block; margin-top: 10px;">Total Cost:</label>
        <input type="text" id="total_cost" name="ccc_product[total_cost]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="price" style="display: block; margin-top: 10px;">Price:</label>
        <input type="text" id="price" name="ccc_product[price]" required style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="status" style="display: block; margin-top: 10px;">Status:</label>
        <select id="status" name="ccc_product[status]" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select>

        <label for="created_at" style="display: block; margin-top: 10px;">Created At:</label>
        <input type="date" id="created_at" name="ccc_product[created_at]" style="width: 100%; padding: 8px; box-sizing: border-box;">

        <label for="updated_at" style="display: block; margin-top: 10px;">Updated At:</label>
        <input type="date" id="updated_at" name="ccc_product[updated_at]" style="width: 100%; padding: 8px; box-sizing: border-box;">

        <input type="submit" value="submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin-top: 10px; cursor: pointer; border-radius: 5px;">
    </form>
    

</body>
</html>
