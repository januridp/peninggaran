<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
    <head>
        <title>Data Warga - Peninggaran</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    </head>
    <body>
       <table id="example" class="display mdl-data-table mdl-js-data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Position</th>
                <th class="mdl-data-table__cell--non-numeric">Office</th>
                <th class="mdl-data-table__cell--non-numeric">Age</th>
                <th class="mdl-data-table__cell--non-numeric">Start date</th>
                <th class="mdl-data-table__cell--non-numeric">Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Name</th>
                <th class="mdl-data-table__cell--non-numeric">Position</th>
                <th class="mdl-data-table__cell--non-numeric">Office</th>
                <th class="mdl-data-table__cell--non-numeric">Age</th>
                <th class="mdl-data-table__cell--non-numeric">Start date</th>
                <th class="mdl-data-table__cell--non-numeric">Salary</th>
            </tr>
        </tfoot>
    </table>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
		$('#example').DataTable( {
			"ajax": '<?=base_url();?>data.txt'
		} );
	} );
    </script>
	
    </body>
</html>