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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacket Potato</title>
    <link rel="stylesheet" href="media/style.css">
</head>
<body class="bg-history">
  
<?php include 'header.php'; ?>

 <h3>History Purchase</h3>

    <div class="history-container">
        <br>

       <?php
        include("db_conn.php");

        // Fetch data from the history table
        $sql = "SELECT product_id, category, name, quantity, supplier, order_date FROM history";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Product ID</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Supplier</th>
                    <th>Order Date</th>
                  </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['product_id']}</td>
                        <td>{$row['category']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['supplier']}</td>
                        <td>{$row['order_date']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No purchase history found.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
