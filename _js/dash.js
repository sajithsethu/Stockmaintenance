$(document).ready(function() {
    var sta =''
    var loca =''
    $("#loca").on("change", function() {
      loca = $("#loca").val();
      local_filter_today(loca,sta);
    });

    $("#status").on("change", function() {
       sta = $("#status").val();
      local_filter_today(loca,sta);

    });

    function local_filter_today(loca,sta) {

      $('.filterbutton').on("click", function(event) {
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'dash.php?action=filter',
          data: {
            loca:loca,
            sta:sta,

          },
          success: function(response) {
            // alert(response);
            var data = JSON.parse(response);
            var em_data = '';
            $.each(data, function(key, value) {
              em_data += '<tr>';
              em_data += '<td>' + value.id + '</td>';
              em_data += '<td>' + value.Make + '</td>';
              em_data += '<td>' + value.Model + '</td>';
              em_data += '<td>' + value.Category + '</td>';
              em_data += '<td>' + value.Count + '</td>';
              em_data += '<td>' + value.From_Location + '</td>';
              em_data += '<td>' + value.To_location + '</td>';
              em_data += '<td>' + value.Status + '</td>';
              em_data += '</tr>';
            });
            $('#mytable').empty().append(em_data);
          },
          error: function(response) {
            alert('Error');
          }
        });
      });
    }
  });



  $(document).ready(function() {
    var loca = '';

    $("#loca").on("change", function() {
      loca = $("#loca").val();
      local_filter_dash(loca);
    });

    function local_filter_dash(loca) {
      $('.filterbutton').on("click", function(event) {
        event.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'dash.php?action=filter1',
          data: {
            loca: loca
          },
          success: function(response) {
            var data = JSON.parse(response);
            $('.span-class').text(loca);
            $('#mo').text(data.monitor);
            $('#cp').text(data.cpu);
            $('#gr').text(data.graphics);
            $('#pr').text(data.processor);
            $('#ra').text(data.ram);
            $('#mb').text(data.motherboard);
          },
          error: function(response) {
            alert('Error');
          }
        });
      });
    }
  });





