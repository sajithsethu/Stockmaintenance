<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ze_form");

if ($conn) {
    if (isset($_POST['Make'])) {
        $Make = $_POST['Make'];
        $Model = $_POST['Model'];
        $Serial = $_POST['Serial'];
        $Category = $_POST['Category'];
        $Count = $_POST['Count'];
        $Da = $_POST['Da'];
        $Fl = $_POST['Fl'];
        $Tl = $_POST['Tl'];
        $Dd = $_POST['Dd'];
        $Em = $_POST['Em'];
        $id = $_SESSION['id'];


        if($Make&&$Model&&$Serial&&$Category&&$Count&&$Da&&$Fl&&$Tl&&$Dd&&$Em){
            $sql = mysqli_query($conn, "UPDATE `ze` SET `Make`='$Make', `Model`='$Model', `Serial`='$Serial', `Category`='$Category', `Count`='$Count', `Date`='$Da',`To_location`='$Tl', `Status`='$Dd', `Employee_name`='$Em' WHERE `id` = '$id'");
        $sql1 = mysqli_query($conn, "INSERT INTO `update_log`(`old_id`, `Make`, `Model`, `Serial`, `Category`, `Count`, `Date`, `From_Location`, `To_location`, `Status`, `Employee_name`) 
        VALUES ( '$id','$Make',' $Model','$Serial','$Category','$Count','$Da','$Fl','$Tl','$Dd','$Em')");
        if ($sql!="") {
            header('location:show.php');
            exit();

            exit;
        } else {
            echo "Failed to update data.";
        }
    }
    }
} else {
    echo "Database connection error.";
}
