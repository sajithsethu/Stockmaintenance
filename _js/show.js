$(document).ready(function(){

    $('#submit').on("click",function(event){
 
        event.preventDefault();     




    var from=document.getElementById('Fda').value;
    var to=document.getElementById('Tda').value;

    // alert(from);
    // alert(to);



    $.ajax({
        url:"table.php",
        type:"POST",


        data:{

            from:from,
            to:to,



        },


        success: function(response){
            // alert(response);
            // console.log(response);
            var data = JSON.parse(response);
            var em_data = '';
            $.each(data, function(key, value) {
              em_data += '<tr>';
              em_data += '<td>' + value.id + '</td>';
              em_data += '<td>' + value.Make + '</td>';
              em_data += '<td>' + value.Model + '</td>';
              em_data += '<td>' + value.Serial + '</td>';
              em_data += '<td>' + value.Category + '</td>';
              em_data += '<td>' + value.Count + '</td>';
              em_data += '<td>' + value.From_Location + '</td>';
              em_data += '<td>' + value.To_location + '</td>';
              em_data += '<td>' + value.Status + '</td>';
              em_data += '<td>' + value.Employee_name + '</td>';
              em_data += '<td>' + value.Date + '</td>';
              em_data += '<td>' + "<button type='button' class='btn btn-primary' onclick='productEdit(this);'data-id='" + value.id + "'>EDIT</button> <button type='button' class='btn btn-danger btn3' onclick='productDelete(this);' data-id='" + value.id + "'>DELETE</button>" + '</td>';
              em_data += '</tr>';
            });
            $('#mytable').empty().append(em_data);
            e.stopPropagation();
        },

        error:function(data){

            alert('error');
        }


    });

});

});








    function productDelete(button) {
      var id = $(button).data('id');
      alert(id);

      $.ajax({
        url: "delete.php",
        type: "POST",
        data: {
          id: id
        },
        success: function(response) {

            if (data == 'success') {
              window.location.href = "show.php?"

              } else {
                alert('Error deleting data');
              }


        },
        error: function(data) {

          alert('Error deleting data');
        }
      });

    }


    $(document).on('click', '.btn-delete', function() {
      productDelete(this);
    });




 function productEdit(button) {
      var id = $(button).data('id');
      alert(id);

      $.ajax({
        url: "update.php",
        type: "POST",
        data: {
          id: id
        },
        success: function(response) {

         console.log(response);
         window.location.href = "update.php?id=" + id;

        },
        error: function(data) {

          alert('Error deleting data');
        }
      });

    }


    $(document).on('click', '.btn-edit', function() {
        productEdit(this)
    });



    $(document).ready(function() {
      $('#export').on('click', function() {
        // Extract table data
        var tableData = [];
        $('#mytable tbody tr').each(function() {
          var rowData = [];
          $(this).find('td').each(function() {
            rowData.push($(this).text());
          });
          tableData.push(rowData.join(','));
        });
    
        // Send data to server-side script
        $.ajax({
          url: 'export.php',
          type: 'POST',
          data: { data: tableData.join('\n') },
          success: function() {
            // Initiate file download
            var downloadLink = document.createElement('a');
            downloadLink.href = 'export.php';
            downloadLink.download = 'dashboard_data.csv';
            downloadLink.click();
          }
        });
      });
    });