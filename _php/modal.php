<?php
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");


 if($conn){

   $ca = $_POST['ca'];
   $lo = $_POST['lo'];


   if ($ca != "") {
    //   echo "DATA INSERTED SUCESSFULL";
      $sql = mysqli_query($conn, "INSERT INTO `extra`(`Category`) VALUES ('$ca')");
       header("location:form.php");
    } 
   elseif ($lo != "") {



    //   echo "DATA INSERTED SUCESSFULL";
      $sql = mysqli_query($conn, "INSERT INTO `extra_1`(`LOCATION`)VALUES ('$lo')");
       header("location:form.php");
    } else {
      echo "DATA INSERTED UNSUCESSFULL";
   }
}
 else {

}
//    echo "Db error";


?>