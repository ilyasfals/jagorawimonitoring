<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employees</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

</head>
<body>
<div class="container">
    <header>
        <h2>Employees</h2>
    </header>
    <hr>

    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Npp</th>
            <th>Nama</th>

        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Npp</th>
            <th>Nama</th>

        </tr>
        </tfoot>
    </table>
</div>


<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        // No. 1
        $('#example tfoot th').each( function () {
            var title = $(this).text();
            var inp   = '<input type="text" class="form-control" placeholder="Search '+ title +'" />';
            $(this).html(inp);
        } );

        // DataTable
        // No. 2
        var table = $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('employees/datatables_ajax');?>",
                "type": "POST"
            }
        });

        // Apply the search
        // No. 3
        table.columns().every( function () {
            var that = this;

            $( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>
</body>
</html>