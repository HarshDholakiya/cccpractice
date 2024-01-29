<?php
// Include necessary files and functions
include 'sql\connection.php';
include 'sql\function.php';

$conn = mysqlConnection();
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    // Validate and insert category
    if (!empty($name)) {
        // Use an associative array for the insert function
        $data = ['name' => $name];

        // Call the insert function with correct parameters
        $query = insert('ccc_category', $data);

        if (mysqli_query($conn, $query)) {
            echo "Category added successfully!";
        } else {
            echo "Error adding category: " . mysqli_error($conn);
        }
    } else {
        echo "Category name is required!";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <h2>Add Category</h2>
    <form action="category.php" method="post">
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Add Category</button>
    </form>
</body>
</html>
