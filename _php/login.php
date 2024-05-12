<?php
// Start a session
session_start();

// Establish a database connection
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM `login` WHERE `User`='$username' AND `Password`='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $role = $row['Role'];

        if ($role == 'Admin') {
            // Insert login log (consider adding a timestamp)
            $query = "INSERT INTO `login_log`(`User`, `Role`) VALUES ('$username','$role')";
            mysqli_query($conn, $query);

            // Redirect to the admin dashboard
            header("location: dashboard.php");
            exit(); // Important to stop further execution
        } elseif ($role == 'User') {
            // Insert login log (consider adding a timestamp)
            $query = "INSERT INTO `login_log`(`User`, `Role`) VALUES ('$username','$role')";
            mysqli_query($conn, $query);

            // Redirect to the user dashboard
            header("location: dashboard1.php");
            exit(); // Important to stop further execution
        }
    } else {
        // Invalid login, redirect to an error page or login page
        header("location: ../index.html");
        exit(); // Important to stop further execution
    }
}

// Close the database connection at the end
mysqli_close($conn);
?>
