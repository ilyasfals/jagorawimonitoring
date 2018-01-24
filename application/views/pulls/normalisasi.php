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
        <table id="" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Bulan</th>
                    <th>Pendapatan</th>
                    <th>Norm. Pendapatan</th>
                    <th>Volume Lalin</th>
                    <th>Norm. Volume Lalin</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
            <?php
                $i = 0;
                foreach ($transaksiList as $transaksi):?>
                    <tr>
                        <td><?php echo $i+1 ?></td>
                        <td><?php echo $transaksi[0] ?></td>
                        <td><?php echo $transaksi[1]; ?></td>
                        <td><?php echo $transaksi[3]; ?></td>
                        <td><?php echo $transaksi[2]; ?></td>
                        <td><?php echo $transaksi[4]; ?></td>
                        <td>
                            <?php
                                if (isset($_SESSION['role'])){ ?>
                                <a href="<?php echo base_url();?>pulls/editnormalisasi/<?php echo $tahun.'/'.($i+1) ?>"><span class="fa fa-edit"></span></a>
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