<?php
include 'sql\connection.php';
include 'sql\function.php';

$conn = mysqlConnection();


$query = select('ccc_category',['*']);
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<h2>Category List</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>{$row['name']}</li>";
    }
    echo "</ul>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>