<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Welcome to Online Shopping</h1>
    <div class="products">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product'>
                    <h3>{$row['name']}</h3>
                    <p>Price: ₹{$row['price']}</p>
                    <a href='product.php?id={$row['id']}'>View Product</a>
                  </div>";
        }
        ?>
    </div>
</body>
</html>
