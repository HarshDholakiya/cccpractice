<?php
// Assuming you have a function to establish a database connection
include 'sql\connection.php';
$conn = mysqlConnection();

// Query to retrieve the last 20 records from the ccc_product table
$query = "SELECT * FROM ccc_product ORDER BY created_at DESC LIMIT 20";
$result = mysqli_query($conn, $query);

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    echo '<table border="1">';
    echo '<tr>
            <th>Product Name</th>
            <th>SKU</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['product_name'] . '</td>';
        echo '<td>' . $row['sku'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        
        // Edit link with product ID
        // echo '<td><a href="product.php?action=edit&id=' . $row['product_id'] . '">Edit</a></td>';
        
        // // Delete link with product ID
        // echo '<td><a href="product.php?action=delete&id=' . $row['product_id'] . '">Delete</a></td>';
        
        echo "<td><a href='product.php?action=edit&id={$row['product_id']}'>Edit</a></td>";
        echo "<td><a href='product.php?action=delete&id={$row["product_id"]}'>Delete</a></td>";
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No records found.';
}

mysqli_close($conn);
?>
