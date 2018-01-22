<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>


<div class="row">
    <div class="col-sm-12">
        <div id="my-slider" class="carousel slide" data-ride="carousel">
            <!-- indicators dot nov -->
            <ol class="carousel-indicators">
                <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                <li data-target="#my-slider" data-slide-to="1"></li>
            </ol>

           <!-- --><?php /*print_r($list_banner)*/?>
            <!-- Wrapper for slides -->

           <!-- <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="http://www.google.com">
                        <img src="<?php /*echo base_url('assets/images/banner/jagorawi1.jpg');*/?>" width="100%">
                    </a>
                    <div class="carousel-caption">
                        <a href="http://www.google.com" style="color:white;">
                            <h1 href="/Internet">Truespeed Internet Services</h1>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.google.com">
                        <img src="<?php /*echo base_url('assets/images/banner/jagorawi1.jpg');*/?>" width="100%">
                    </a>
                    <div class="carousel-caption">
                        <h1 href="/Internet">Kedua</h1>
                    </div>
                </div>
            </div>-->
    </div>
</div>
<br/>
<br/>
<h3>Semua Pengguna</h3>
<?php if (in_array($_SESSION['role'], array('ADMIN'), true)){ ?>
    <a href="<?php echo base_url('user/createusers') ?>" class="btn btn-default" role="button">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Pengguna
    </a>
<?php } ?>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-hover display" id="datatableId" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(function(){
            $('.carousel').carousel({
                interval: 5000
            });
        });

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
                { "sWidth": "5%" },
                {
                    "sWidth" : "5%",
                    "mRender": function(data, oObj, row)
                    {
                        return "<a href='<?php echo base_url('home/createusers'); ?>/"+ row[0] + "' title='Ubah'> <span class='fa fa-pencil-square-o' style='font-size:medium;'></span></a>&nbsp;" +
                            "<a href='<?php echo base_url('home/deleteUsers'); ?>/"+ row[0] + "' title='Hapus'> <span class='fa fa-trash-o' style='font-size:medium;'></span></a>";
                    }
                },

            ],
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?php echo base_url('api/users');?>",
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