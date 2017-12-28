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
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tahun</th>
                <th>KPI</th>
                <th>Rata-rata</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($master_kpis as $master_kpi):?>
                <tr>
                    <th><?php echo '1 ' ?></th>
                    <th><?php echo $master_kpi[1] ?></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>