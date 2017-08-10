<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>

<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="<?php echo base_url('pulls/index');?>">Transaksi</a></li>
            <li role="presentation"><a href="<?php echo base_url('pulls/checklist');?>">Checklist</a></li>
        </ul>
    </div>
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $title.' <small>'.$subtitle.'</small>'; ?>
        </h1>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo base_url('pulls/create');?>" class="btn btn-default" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Transaksi
        </a>
    </div>

    <div class="col-lg-12">
        <table id="datatableId" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Gerbang</th>
                <th>Pengawas</th>
                <th>Shift</th>

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Gerbang</th>
                <th>Pengawas</th>
                <th>Shift</th>

            </tr>
            </tfoot>
        </table>
    </div>
</div>

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
                { "sWidth": "10%" },
                {
                    "sWidth" : "30%",
                    "sName": "gerbang",
                },
                {
                    "sWidth" : "30%",
                    "sName": "pengawas",
                },
                {
                    "sWidth" : "10%",
                    "mRender": function(data, oObj, row)
                    {
                        return "<a href='<?php echo base_url('pulls/view'); ?>/"+ row[0] + "'>"+data+"</a>";
                    }
                },

            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('api/pulls');?>",
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