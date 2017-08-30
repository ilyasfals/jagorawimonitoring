<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $title.' <small>'.$subtitle.'</small>'; ?>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <a href="<?php echo base_url('KPIs/create');?>" class="btn btn-default" role="button">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Data KPI
        </a>
    </div>

    <div class="col-lg-12">
        <table id="datatableId" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>KPI</th>
                <th>Rata-rata</th>
                <th>Action</th>

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>KPI</th>
                <th>Rata-rata</th>
                <th></th>

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
                        return "<a href='<?php echo base_url('KPIs/view'); ?>/"+ row[0] + "'>"+data+"</a>";
                    }
                },

            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('api/kpis');?>",
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