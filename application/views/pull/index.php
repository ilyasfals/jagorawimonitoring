<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
        </ul>
    </div>
    <div class="col-lg-12">
        <h1 class="page-header">
            Pegawai <small>Daftar Aktif</small>
        </h1>
    </div>
    <div class="col-lg-12"> 
        <h2><?php echo $title; ?></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPP</th>
                    <th>Lihat Detail </th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; foreach ($pull as $pull_item): ?>
                    <tr>
                        <td><?php $i++; echo $i ?></td>
                        <td><?php echo $employees_item['nama']; ?></td>
                        <td><?php echo $employees_item['npp']; ?></td>
                        <td><a href="<?php echo site_url('employees/'.$employees_item['npp']); ?>">Lihat Pegawai</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
d