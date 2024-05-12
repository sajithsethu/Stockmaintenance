$(document).ready(function () {

    $("#popup").on("click", function () {

        var ca = document.getElementById("ca").value;
        var lo = document.getElementById("lo").value;


        // alert(ca);
        // alert(lo);


        $.ajax({
                type: "POST",
            url: "modal.php",

            data: {
                ca:ca,
                lo:lo


            },

            success: function (data) {
                alert('success');


            },

            error: function (data) {

                alert('error message');
            }


        });

    });

    });