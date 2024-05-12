<?php


$conn = mysqli_connect("localhost", "root", "", "ze_form");

if ($conn) {

    $from = $_POST['from'];
    $to = $_POST['to'];


    if (!empty($from) && !empty($to)) {
        $sql = mysqli_query($conn, "SELECT * FROM `ze` WHERE `Date`>='$from' AND `Date`<='$to';");
        if ($sql) {
            $json_array = array();
            while ($result = mysqli_fetch_assoc($sql)) {
                $json_array[] = $result;
            }
            echo json_encode($json_array);
        } else {
            $response = array("error" => "Query error");
            echo json_encode($response);
        }
    } else {

        echo "error";
    }
}
?>



