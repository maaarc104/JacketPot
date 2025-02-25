<?php
include("db_conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE product SET quantity = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $quantity, $id);

    if ($stmt->execute()) {
        header("Location: inventory.php");
        exit();
    } else {
        echo "Error updating record!";
    }
}
?>
