<?php
$conn = mysqli_connect("localhost", "id21333439_root", "Dash@12345", "id21333439_ze_form");
// $filename = 'data.csv';

// // POST values
// $from_date = $_POST['from'];
// $to_date = $_POST['to'];

// // // Select query
// // $query = "SELECT * FROM `ze` ORDER BY id asc";

// if(isset($_POST['from']) && isset($_POST['to'])){
//    $query=  "SELECT * FROM `ze` WHERE `Date`>='$from_date' AND `Date`<='$to_date'";

//    $result=mysqli_query($conn,$query);
// }


// $employee_arr = array();

// // file creation
// $file = fopen($filename,"w");

// // Header row - Remove this code if you don't want a header row in the export file.
// $employee_arr = array( "id","Make","Model","Serial","Category","Count","From_Location","To_location","Status","Employee_name","Date"); 

// while($row = mysqli_fetch_assoc($result)){
//    $id = $row['id'];
//    $Ma=$row['Make'];
//    $Mo =$row['Model'];
//    $Se =$row['Serial'];
//    $Ca =$row['Category'];
//    $Co =$row['Count'];
//    $Fl =$row['From_Location'];
//    $Tl =$row['To_location'];
//    $St =$row['Status'];
//    $Em =$row['Employee_name'];
//    $Da =$row['Date'];


//    // Write to file
//    $employee_arr = array($id,$Ma,$Mo,$Se,$Ca, $Co,$Fl,$Tl, $St,$Em,$Da);
//    fputcsv($file,$employee_arr);
// }

// fclose($file);

// // download
// header("Content-Description: File Transfer");
// header("Content-Disposition: attachment; filename=$filename");
// header("Content-Type: application/csv; ");

// readfile($filename);

// // deleting file
// unlink($filename);
// exit();



if (isset($_POST['data'])) {
   $tableData = $_POST['data'];
 
   $filename = 'dashboard_data.csv';
 
   // Generate CSV content
   $csvContent = implode("\n", explode(',', $tableData));
 
   // Set appropriate headers
   header('Content-Type: text/csv');
   header('Content-Disposition: attachment; filename="' . $filename . '"');
 
   // Send the CSV content
   echo $csvContent;
   exit();
 }
 

