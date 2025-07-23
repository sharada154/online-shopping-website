<?php session_start(); include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['cart'][] = $_POST['id'];
}
echo "<h1>Your Cart</h1>";
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id) {
        $result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
        echo "<p>{$row['name']} - ₹{$row['price']}</p>";
    }
} else {
    echo "<p>Cart is empty.</p>";
}
?>
<a href='checkout.php'>Checkout</a>
