<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $sql = "DELETE FROM billing WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Bill deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header('Location: display.php');
}
?>
