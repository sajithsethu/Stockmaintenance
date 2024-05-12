



<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
    <meta name="viewport" col-3ntent="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../_css/dash.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="../_js/dash.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include("navbar.php"); ?>
    

<body>
    <div class="container conatiner1">
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card1.jpg">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <h3><span class="span-class"></span></h3>
                    <p><span class="co"id='mo'>0</span></p>
                </div>
            </div>
        </div>
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card-2.png">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3><span class="span-class"></span></h3>
                    <p><span  class="co" id='cp'>0</span></p>
                </div>
            </div>
        </div>
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card-3.png">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <h3><span class="span-class"></span></h3>
                    <p><span  class="co" id='gr'>0</span></p>
                </div>
            </div>
        </div>
</div>
<div class="container conatiner1">
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card-4.jpg">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <h3><span class="span-class"></span></h3>
                    <p><span  class="co" id='pr'>0</span></p>
                </div>
            </div>
        </div>
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card-5.jpg">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <h3><span class="span-class"></span></h3>
                    <p><span  class="co" id='ra'>0</span></p>
                </div>
            </div>
        </div>
        <div class="card p-3 m-3">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <img src="../_img/card-6.jpeg">
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                <h3><span class="span-class"></span></h3>
                    <p><span  class="co" id='mb'>0</span></p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="conatiner filter">
        <form action="" method="POST">
            <div class="form-group col-md-12">
                <label for="inputPassword4">LOCATION</label>
                <select id="loca" class="loca" name="dropdown" style="color:black">
                    <option value="" style="color:black"></option>
                    <option value="NUNGUMBAKKAM" style="color:black">NUNGUMBAKKAM</option>
                    <option value="TRICHY" style="color:black">TRICHY</option>
                    <option value="SALEM" style="color:black">SALEM</option>
                    <option value="VELACHERY" style="color:black">VELACHERY</option>


                </select>
                <label for="inputPassword4" style="margin-left: 150px;">STATUS</label>
                <select id="status" class="status"name="dropdown1" style="color:black">
                    <option value="" style="color:black"></option>
                    <option value="STOCK" style="color:black">STOCK</option>
                    <option value="DAMAGED" style="color:black">DAMAGED</option>
                    <option value="OBSOLETE" style="color:black">OBSOLETE</option>
                </select>
                <button class="btn btn-danger filterbutton" >Submit</button>
            </div>

        </form>
    </div>
            <div class="container">
                <div class="panel-body table-responsive">
                    <table class="table table-bordered">
                        <thead style="background-color: #14a4bc">
                            <tr class="text-white text-center">
                                <th>ID</th>
                                <th>MAKE</th>
                                <th>MODEL</th>
                                <th>CATEGORY</th>
                                <th>COUNT</th>
                                <th>FROM-LOCATION</th>
                                <th>TO-LOCATION</th>
                                <th>STATUS</th>



                            </tr>
                        </thead>
                        <tbody class="text-center" id="mytable">

                        </tbody>


                    </table>


                </div>

            </div>
</body>

</html>
</div>

