


<?php
session_start();
$conn=mysqli_connect("localhost","root","","ze_form");



if(isset($_POST['submit'])){
$username=$_POST['userName'];
$password=$_POST['password'];

$_SESSION['username']=$username;

$sql=mysqli_query($conn,"SELECT * FROM `login` WHERE `User`='$username'AND`Password`='$password'");


    while($result=mysqli_fetch_assoc($sql)){


        $role=$result['Role'];


    if($username && $role=='Admin'){

        $query=mysqli_query($conn,"INSERT INTO `login_log`(`User`, `Role`) VALUES ('$username','$role')");
        echo"hello";


        header("location:dashboard.php");
    }

    elseif($username && $role=='User'){
        $query=mysqli_query($conn,"INSERT INTO `login_log`(`User`, `Role`) VALUES ('$username','$role')");


        header("location:dashboard1.php");
    }
    else{

        header("location:../index.html");
    }
    }
}
?>

