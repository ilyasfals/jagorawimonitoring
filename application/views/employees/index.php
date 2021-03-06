<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Pegawai <small><?php echo $title; ?></small>
        </h1>
        <a href="<?php echo base_url('employees/create');?>" class="btn btn-default" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Pegawai
        </a>
    </div>

    <div class="col-lg-12">
        <table id="datatableId" class="display" cellspacing="0" width="100%">
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
</div>


<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        // No. 1
        $('#datatableId tfoot th').each( function () {
            var title = $(this).text();
            var inp   = '<input type="text" class="form-control" placeholder="Search '+ title +'" />';
            $(this).html(inp);
        } );

        // DataTable
        // No. 2
        var table = $('#datatableId').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('api/employees');?>",
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