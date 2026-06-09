<?php
session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

echo "<h2>Shopping Cart</h2>";

print_r($_SESSION['cart']);
?>