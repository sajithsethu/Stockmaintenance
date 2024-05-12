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
        success: function(response) {
            // Initiate file download
            var downloadLink = document.createElement('a');
            downloadLink.href = response.file;
            downloadLink.download = response.filename;
            downloadLink.click();
        }
      });
    });
  });
