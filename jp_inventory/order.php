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



<?php
include 'db_conn.php';

$sql = "SELECT id, name FROM product";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacket Potato</title>
</head>

<?php include 'header.php'; ?>

<body class="bg-order">

    <h3><b>Create an Order</b></h3>

    <div class="order-container">
        <form action="submit.php" method="post">
        <label for="category"><b>Select Product</b>
        <br><br>

        </label>
        <select name="category" id="category" required>
            <option value="">Select Product</option>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
            }
            ?>
        </select>
        
        <br><br>

        <label for="quantity"><b>Enter Quantity</b></label>
        <br><br>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <br><br>

        <button type="submit">Submit</button>
    </form></div>
    

</body>
</html>
