<?php 
include 'db.php';
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id='$id'")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $conn->query("UPDATE products SET name='$name', quantity='$quantity', price='$price' WHERE id='$id'");
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form method="POST" class="form">
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
            <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>" required min="1">
            <input type="number" name="price" value="<?php echo $product['price']; ?>" required min="0" step="0.01">
            <button type="submit" class="btn edit-btn">Update Product</button>
        </form>
        <a href="index.php" class="btn back-btn">← Back to Products</a>
    </div>
</body>
</html>
