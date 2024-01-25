<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        /* Add your CSS styles here if needed */
    </style>
</head>
<body>
    <h2 style="text-align: center;">Product List</h2>

    <ul>
        <?php
            // Include the SQL functions file
            include 'mysql_function.php';

            // Connection details
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ccc_practice";

            // Establish a database connection
            $con = mysqli_connect($server, $username, $password, $dbname);
            if (!$con) {
                die("Connection to this database failed due to " . mysqli_connect_error());
            }

            // Query to fetch the last 10 records
            $query = "SELECT * FROM ccc_product ORDER BY created_at DESC LIMIT 10";
            $result = mysqli_query($con, $query);

            // Check if records are found
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Display each record as a list item
                    echo "<li>{$row['product_name']} - {$row['product_type']} - {$row['category']} - {$row['manufacturer_cost']} - {$row['shipping_cost']} - {$row['total_cost']} - {$row['price']} - {$row['status']} - {$row['created_at']} - {$row['updated_at']}</li>";
                }
            } else {
                echo "<li>No records found</li>";
            }

            // Close the database connection
            mysqli_close($con);
        ?>
    </ul>
</body>
</html>
