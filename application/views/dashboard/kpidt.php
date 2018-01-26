<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            KPI <small><?php echo $title; ?></small>
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <?php echo $parameter; ?>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/0">Tahunan</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/101">Triwulan 1</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/102">Triwulan 2</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/103">Triwulan 3</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/1">Januari</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/2">Februari</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/3">Maret</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/4">April</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/5">Mei</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/6">Juni</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/7">Juli</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/8">Agustus</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/9">September</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/10">Oktober</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/11">November</a></li>
                <li><a href="<?php echo base_url() ?>dashboard/kpidt/12">Desember</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table id="datatableId" class="display table table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>No.</th>
                <th>Indikator</th>
                <th>Metode Pengukuran</th>
                <th>Target</th>
                <th>Reallisasi</th>
                <th>Pencapaian (%)</th>
            </tr>
            </thead>
            <tbody>
                <?php
                for ($x = 0; $x < sizeof($kpi); $x++) { ?>
                    <tr>
                        <td><?php echo $x+1 ; ?></td>
                        <td><?php echo $kpi[$x][1]; ?></td>
                        <td><?php echo $kpi[$x][2]; ?></td>
                        <td><?php echo round($kpi[$x][3], 2); ?></td>
                        <td><?php echo round($kpi[$x][4], 2); ?></td>
                        <td><?php   if($kpi[$x][3]!=0){
                                        echo round((($kpi[$x][4]/$kpi[$x][3])*100), 2).' %';
                                    }else{
                                        echo '0 %';
                                    } ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
