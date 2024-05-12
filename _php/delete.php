<?php
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");
if ($conn) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        echo $id;


        $sql = mysqli_query($conn, "DELETE FROM `ze` WHERE `id`='$id'");
        header('location:form.php');
       
    } else {
        echo "No ID parameter found in the request.";
    }
} else {
    echo "Database connection error.";
}
?>

