$('document').ready(function(){


    $('button').on("click",function(){

      var username=document.getElementById('userName').value;
      var password=document.getElementById('pwd').value;
      alert(username);
      alert(password);

      $.ajax({
        type:"POST",
        url:"./_php/login.php",
        data:{

            username:username,
            password:password,




        },


        success: function(data){

        alert("success");

        },

        error: function(data){

            alert("error");
            alert(data);
            console.log(data);
        }


      });

    });
});