<?php
session_start();
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
    <link rel="stylesheet" href="../_css/nav.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<script src="../_js/modal.js"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
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
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>&nbsp;&nbsp;&nbsp;
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="nav navbar-nav ml-auto">
                            <h2>WELCOME <?php echo strtoupper($_SESSION['username']) ?>!</h2>&nbsp;&nbsp;
                            <div class="btn-group">
                            <button id="open-modal" class="btn btn-primary mr-3" style="height:40px;">Open Modal</button>
                            <a href="../index.html"><button class="btn btn-danger">LOGOUT</button></a>
                            </div>


                            <div id="my-modal" class="modal" Style="height:300px ;margin-left:500px;margin-top:300px;">
                                <form action="" method="POST">
                                    <label for="inputEmail4">Category</label>
                                    <input type="text" class="form-control" id="ca" name="ca">
                                    <label for="inputEmail4">Location</label>
                                    <input type="text" class="form-control" id="lo" name="lo">
                                    <div class="container m-3 p-1">
                                        <button class="btn btn-success" value="submit" name="submit"id="popup">Submit</button>
                                        <button id="close-modal" class="btn btn-danger">Close Modal</button>
                                    </div>
                                </form>

                            </div>
                            <script>
                                $(document).ready(function() {
                                    // Open modal on button click
                                    $('#open-modal').on('click', function() {
                                        $('#my-modal').modal();
                                    });

                                    // Close modal on button click
                                    $('#close-modal').on('click', function() {
                                        $.modal.close();
                                    });
                                });
                            </script>


                        </ul>
                    </div>
                </div>
            </nav>


        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>

</body>

</html>