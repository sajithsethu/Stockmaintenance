<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ze_form");
$sql = null;
$action = $_GET['action'];

if ($action == 'filter') {
    $loca = $_POST['loca'];
    $sta = $_POST['sta'];


//     if($loca!="" ||$sta!="" )
// {



//     $sql = mysqli_query($conn, "SELECT * FROM `ze` WHERE `From_Location`='$loca'or`Status`='$sta'");
//     $json_array = array();
//     while ($result = mysqli_fetch_assoc($sql)) {
//         $json_array[] = $result;
//     }
//     echo json_encode($json_array);
// }
// }
    if ((!empty($loca) && !empty($sta))) {
        $sql = mysqli_query($conn, "SELECT * FROM `ze` WHERE `From_Location`='$loca' AND `Status`='$sta'");
    } elseif ((!empty($loca) && empty($sta))) {
        $sql = mysqli_query($conn, "SELECT * FROM `ze` WHERE `From_Location`='$loca'");
    } elseif ((!empty($sta) && empty($loca))) {
        $sql = mysqli_query($conn, "SELECT * FROM `ze` WHERE `Status`='$sta'");
    }
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
//     echo "if error";
 }


if ($action == 'filter1') {
    $loca = $_POST['loca'];

   

    $result = array();

    if (!empty($loca)) {
        $query = "SELECT
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='MONITOR') as monitor,
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='CPU') as cpu,
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='GRAPHICS') as graphics,
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='PROCESSOR') as processor,
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='RAM') as ram,
            (SELECT COUNT(`Count`) FROM ze WHERE `From_Location`='$loca' AND `Category`='MOTHERBOARD') as motherboard";

        $query_result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($query_result);

        // $result['monitor'] = $monitorCount;
        // $result['cpu'] = $cpuCount;
        // $result['graphics'] = $graphicsCount;
        // $result['processor'] = $processorCount;
        // $result['ram'] = $ramCount;
        // $result['motherboard'] = $motherboardCount;
    }

    echo json_encode($row);
    // echo json_encode($loca);
}
session_destroy();
?>