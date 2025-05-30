<?php 
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $conn->query("INSERT INTO products (name, quantity, price) VALUES ('$name', '$quantity', '$price')");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form method="POST" class="form">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="number" name="quantity" placeholder="Quantity" required min="1">
            <input type="number" name="price" placeholder="Price" required min="0" step="0.01">
            <button type="submit" class="btn add-btn">Add Product</button>
        </form>
        <a href="index.php" class="btn back-btn">← Back to Products</a>
    </div>
</body>
</html>
