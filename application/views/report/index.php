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
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <a href="<?php echo base_url(); ?>report/download"><span class="fa fa-file-excel-o"></span> Rekapitulasi Transaksi</a>
            </div>
        </div>
    </div>
</div>