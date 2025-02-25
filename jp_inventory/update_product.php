<?php
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self' data:; object-src 'none'; frame-ancestors 'none'; base-uri 'self'; form-action 'self';");
    header("X-Content-Type-Options: nosniff");
     session_set_cookie_params([
    'lifetime' => 0, 
    'path' => '/', 
    'domain' => '', 
    'secure' => true, 
    'httponly' => true, 
    'samesite' => 'Strict' ]);
session_start();
include("db_conn.php");


if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Product not found!";  
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jacket Potato</title>
        <link rel="stylesheet" href="media/style.css">
    </head>
    <body class="bg-update">
     <?php include 'header.php'; ?>
      <h3>Update Product</h3>
        <div class="update-container">
            <form action="update_product_process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label><b>Quantity</b></label>
                <br><br>
                <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
                <br><br>
                <button type="submit">Update</button>
            </form>
        </div>
    </body>
</html>
