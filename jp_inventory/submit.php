<?php
include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['category'];
    $quantity = $_POST['quantity'];

    if (!empty($product_id) && !empty($quantity)) {
        $sql = "SELECT name, category, supplier FROM product WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $product_name = $row['name'];
            $category = $row['category'];
            $supplier = $row['supplier'];

            $insert_sql = "INSERT INTO history (product_id, category, name, quantity, supplier, order_date) 
                           VALUES (?, ?, ?, ?, ?, NOW())";
            $insert_stmt = $conn->prepare($insert_sql);
            $insert_stmt->bind_param("issis", $product_id, $category, $product_name, $quantity, $supplier);

            if ($insert_stmt->execute()) {
               header("Location: order.php");
            } else {
                echo "Error: " . $insert_stmt->error;
            }
        } else {
            echo "Error: Product not found.";
        }

        $stmt->close();
        $insert_stmt->close();
    } else {
        echo "Please select a product and enter a quantity.";
    }
}

$conn->close();
?>
