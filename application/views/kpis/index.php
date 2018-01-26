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
                <th>Indikator</th>
                <th>Metode Pengukuran</th>
                <th>Satuan</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($master_kpis as $master_kpi):?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $master_kpi[1] ?></td>
                    <td><?php echo $master_kpi[2] ?></td>
                    <td><?php echo $master_kpi[3] ?></td>
                    <td><?php if ( $master_kpi[0] === $_SESSION['role'] || $master_kpi[0] ==='ALL')  { ?>
                        <a href="<?php echo base_url();?>kpis/edit/<?php echo $tahun.'/'.$master_kpi[4] ?>"><span class="fa fa-edit"></span></a>
                        <?php } ?>
                    </td>
                </tr>
                <?php
                    $i++;
                endforeach; ?>
            </tbody>
        </table>
    </div>
</div>