<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Jabatan <small><?php echo $title; ?></small>
        </h1>
        <a href="<?php echo base_url('pengaturan/createjabatan');?>" class="btn btn-default" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"> Tambah</span>
        </a>
    </div>

    <div class="col-lg-12">
        <table id="datatableId" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <!-- <th>Keterangan</th>
                 <th>Action</th>-->

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
            "aoColumns" : [
                { "sWidth": "3%",  "bSortable": false },
                { "sWidth": "50%" },
                { "sWidth": "35%" },
                {
                    "sWidth" : "10%",
                    "mRender": function(data, oObj, row)
                    {
                        return " &nbsp&nbsp&nbsp <a href='<?php echo base_url('pengaturan/createjabatan'); ?>/"+ row[3] + "' class='fa fa-pencil-square-o'> </a>"+" &nbsp <a href='<?php echo base_url('pengaturan/deletejabatan'); ?>/"+ row[3] + "' class='fa fa-trash-o'></a>";
                    }
                },


            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('api/jabatan');?>",
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