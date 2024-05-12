<?php
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // header("Location: update.php?id=$id");
    exit();
}
?>