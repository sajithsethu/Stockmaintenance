
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ze_form");

if ($conn) {

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $_SESSION['id'] = $id;





  $sql = mysqli_query($conn, "SELECT * FROM `extra` WHERE 1");
  $sql1 = mysqli_query($conn, "SELECT * FROM `extra_1` WHERE 1");
  $data=  mysqli_query($conn, "SELECT * FROM `ze` WHERE `id`=$id");



  $result = $sql->fetch_all(MYSQLI_ASSOC);
  $result1 = $sql1->fetch_all(MYSQLI_ASSOC);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SYSTEM</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../_css/form.css">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <?php include("navbar.php")?>


</head>



<body>
<script src="../_js/update.js"></script>


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform"  action="" method="POST">
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">DETAILS</h2>
                    <?php foreach($data as $d) {?>
                    <input type="text" name="MAKE" id="Ma"placeholder="MAKE" value="<?php echo $d['Make']?>"required/>
                    <input type="text" name="MODEL" id="Mo"placeholder="MODEL-NO" value="<?php echo $d['Model']?>"required/>
                    <input type="text" name="SERIAL" id="Se"placeholder="SERIAL-NO" value="<?php echo $d['Serial']?>"/>
                    <!-- <h2 class="fs-title">ENTRY-DETAILS</h2> -->
                    <input type="number" name="COUNT" id="Co"placeholder="COUNT" value="<?php echo $d['Count']?>"/>
                    <input type="date" name="DATE" id="Da"placeholder="dd-mm-yyyy" value="<?php echo $d['Date']?>"required/>
                    <input type="text" name="EMPLOYEE" id="Em"placeholder="EMPLOYEE-NAME" value="<?php echo $d['Employee_name']?>"required/>
                    <!-- <h2 class="fs-title">Select</h2> -->
                        <select name="Category" id="Ca" placeholder="CATEGORY" style="color:black"  required>
                        <option value="" style="color:black"><?php echo $d['Category'];?></option>
                            <?php foreach ($result as $r) { ?>
                            <option value="<?php echo $r['Category']?>" style="color:black"><?php echo $r['Category'];?></option><?php } ?>
                        </select>

                        <select name="dropdown" id="F" style="color:black" placeholder="FROM-LOCATION" required>
                        <option value=""<?php echo $d['To_location'];?>" style="color:black"><?php echo $d['From_Location'];?></option>
                            <?php foreach ($result1 as $r1) { ?>

                                <option value="<?php echo  $r1['LOCATION']; ?>" style="color:black"><?php echo  $r1['LOCATION']; ?></option><?php } ?>
                        </select>
                        <select name="dropdown1" id="T" style="color:black"placeholder="TO-LOCATION">
                        <option value="<?php echo $d['To_location'];?>" style="color:black"><?php echo $d['To_location'];?></option>
                            <?php foreach ($result1 as $r1) { ?>
                                <option value="<?php echo  $r1['LOCATION']; ?>" style="color:black"><?php echo  $r1['LOCATION']; ?></option><?php } ?>
                            </select>
                        <select name="dropdown2" id="Dd" style="color:black" placeholder="STATUS">
                        <option value="<?php echo $d['Status'];?>" style="color:black"><?php echo $d['Status'];?>
                            <option value="STOCK" style="color:black">STOCK</option>
                            <option value="DAMAGED" style="color:black">DAMAGED</option>
                            <option value="OBSOLETE" style="color:black">OBSOLETE</option><?php }?>
                        </select>
                    <button class="btn btn-success" id="btn2" name="submit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-warning">RESET</button>&nbsp;&nbsp;&nbsp;&nbsp;



                </fieldset>
            </form>

        </div>
    </div>
</body>
<br><br><br>
