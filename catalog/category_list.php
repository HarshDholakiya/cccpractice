<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories List</title>
   
</head>
<body>
>
<div class="container mt-4">
    <h2>Categories</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost","root","","ccc_practice");
            $selectCategorySql = "SELECT * FROM ccc_category";
            $resultCategory = mysqli_query($conn, $selectCategorySql);
           
            while ($rowCategory = mysqli_fetch_assoc($resultCategory)) {
                echo "<tr>
                <td>{$rowCategory['cat_id']}</td>
                <td>{$rowCategory['name']}</td>
                <td><a href='delect_category.php?id={$rowCategory['cat_id']}'>Delete</a></td>
                <td><a href='category.php?id={$rowCategory['cat_id']}'>Update</a></td>
                </tr>";
            
            }
            ?>
        </tbody>
    </table>
</div>



</body>
</html>
