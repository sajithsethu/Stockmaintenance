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
    <link rel="stylesheet" href="../_css/show.css">
    <!-- <link rel="stylesheet" href="../_css/nav.css"> -->

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
        

</head>
<!-- <script src="../_js/export.js"></script> -->
<script src="../_js/show.js"></script>

<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <!-- <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>ZEALOUS</h3>
            </div>

            <ul class="list-unstyled components">
                <p>DASHBOARD</p>
                <li>
                    <a href="./dashboard.php"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Home</a>
                </li>
                <li>
                    <a href="./form.php"><i class="fa fa-file" aria-hidden="true"></i> &nbsp;FORM</a>
                </li>
                <li>
                    <a href="./show.php"><i class="fa fa-table" aria-hidden="true"></i>&nbsp;SHOW</a>
                </li>
                <li>
                </li>
                <li>
                    <a href="../index.html"><i class="fa fa-outdent" aria-hidden="true"></i>&nbsp;LOGOUT</a>
                </li>
            </ul>
        </nav> -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <a href="dashboard.php"><button class="btn btn-info"><span>Home</span>
                        <i class="fas fa-align-left"></i></button></a>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>&nbsp;&nbsp;&nbsp;
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="nav navbar-nav ml-auto">
                        
                            <div class="btn-group">
                            <a href="../index.html"><button class="btn btn-danger">LOGOUT</button></a>
</div>

                        </ul>
                    </div>
                </div>
            </nav>


        </div>

    <div class="container  container1"><form>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label>Search</label>
      <input type="search" class="form-control" id="searchs">
    </div>
    <div class="form-group col-md-2">
      <label>From-Date</label>
      <input type="date" class="form-control" name="from_date" id="Fda">
    </div>
    <div class="form-group col-md-2">
      <label >To-Date</label>
      <input type="date" class="form-control" name="to_date"id="Tda">

    </div>
    <button type="submit" class="btn btn-success  col-md-2 mt-4" style=" height:50px" id="submit">Submit</button>&nbsp;
    <button type="submit" class="btn btn-warning  col-md-1 mt-4" style=" height:50px"  id="export">Export</button>
  </div>
  </div>
</form>
    
     <div class="container table1">
        <div class="panel-body">
            <table class="table table-bordered">
                <thead style="background-color: #14a4bc">
                    <tr class="text-white text-center">
                        <th>ID</th>
                        <th>MAKE</th>
                        <th>MODEL</th>
                        <th>SERIAL</th>
                        <th>CATEGORY</th>
                        <th>COUNT</th>
                        <th>FROM-LOCATION</th>
                        <th>TO-LOCATION</th>
                        <th>STATUS</th>
                        <th>EMPLOYEE-NAME</th>
                        <th>DATE</th>
                        <th>ACTION</th>



                    </tr>
                </thead>
                <tbody class="text-center" id="mytable">


                </tbody>


            </table> 



        </div>

    </div>
    </div>


</div>

</body>

<!-- -------------SERACH--------------- -->
<script>
    $(document).ready(function() {
      $("#searchs").on("keyup", function() {
        // alert()
        var value = $(this).val().toLowerCase();
        $("#mytable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>