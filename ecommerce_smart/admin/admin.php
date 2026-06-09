<?php
include("../config/db.php");

$product_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Admin Dashboard</h1>

<a href="products.php">Manage Products</a> |
<a href="../cart/cart.php">Cart</a>

<hr>

<h3>Total Products: <?php echo $product_count; ?></h3>

</body>
</html>