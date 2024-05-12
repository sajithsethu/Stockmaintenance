$(document).ready(function () {


    $("#btn2").on("click", function () {



        var Make = document.getElementById("Ma").value;
        var Model = document.getElementById("Mo").value;
        var Serial = document.getElementById("Se").value;
        var Category = document.getElementById("Ca").value;
        var Count = document.getElementById("Co").value;
        var Da = document.getElementById("Da").value;
        var Fl = document.getElementById("F").value;
        var Tl = document.getElementById("T").value;
        var Dd = document.getElementById("Dd").value;
        var Em = document.getElementById("Em").value;

        $.ajax({

            url: "insert.php",
            type: "POST",

            data: {
                Make: Make,
                Model: Model,
                Serial: Serial,
                Category: Category,
                Count: Count,
                Da: Da,
                Fl: Fl,
                Tl: Tl,
                Dd: Dd,
                Em: Em
            },

            success: function (data) {
                alert('success');
                // alert(data);


            },

            error: function (data) {

                alert('error message');
            }


        });

    });

});