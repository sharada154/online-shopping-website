<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Product</title></head>
<body>
<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($result);
echo "<h1>{$row['name']}</h1>
      <p>{$row['description']}</p>
      <p>Price: ₹{$row['price']}</p>
      <form method='POST' action='cart.php'>
        <input type='hidden' name='id' value='{$row['id']}'>
        <input type='submit' value='Add to Cart'>
      </form>";
?>
</body>
</html>
