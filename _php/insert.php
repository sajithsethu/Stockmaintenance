<?php
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");

// if (isset($_POST['submit']))
// {
//     $Make = $_POST['MAKE'];
//     $Model = $_POST['MODEL'];
//     $Serial = $_POST['SERIAL'];
//     $Category = $_POST['Category'];
//     $Count = $_POST['COUNT'];
//     $Da = $_POST['DATE'];
//     $Fl = $_POST['dropdown'];
//     $Tl = $_POST['dropdown1'];
//     $Dd = $_POST['dropdown2'];
//     $Em = $_POST['EMPLOYEE'];



//     if ($Make && $Model && $Serial && $Category && $Count && $Da && $Fl && $Dd && $Em != "") {
//         echo "DATA INSERTED SUCESSFULL";
//         $sql = mysqli_query($conn, "INSERT INTO `ze`(`Make`, `Model`, `Serial`, `Category`, `Count`, `Date`, `From_Location`, `To_location`, `Status`, `Employee_name`) VALUES ('$Make','$Model','$Serial','$Category','$Count','$Da','$Fl','$Tl','$Dd','$Em')");
//         header("location:form.php");
//     } else {
//         echo "DATA INSERTED UNSUCESSFULL";
//     }
// }

// else {


//     echo "Db error";
// }


if ($conn)
{
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



    if ($Make && $Model && $Serial && $Category && $Count && $Da && $Fl && $Dd && $Em != "") {
        echo "DATA INSERTED SUCESSFULL";
        $sql = mysqli_query($conn, "INSERT INTO `ze`(`Make`, `Model`, `Serial`, `Category`, `Count`, `Date`, `From_Location`, `To_location`, `Status`, `Employee_name`) VALUES ('$Make','$Model','$Serial','$Category','$Count','$Da','$Fl','$Tl','$Dd','$Em')");
        $sql1 = mysqli_query($conn, "INSERT INTO `insert_log`(`Make`, `Model`, `Serial`, `Category`, `Count`, `Date`, `From_Location`, `To_location`, `Status`, `Employee_name`) VALUES ('$Make','$Model','$Serial','$Category','$Count','$Da','$Fl','$Tl','$Dd','$Em')");
        header("location:form.php");
    } else {
        echo "DATA INSERTED UNSUCESSFULL";
    }
}

else {


    echo "Db error";
}
