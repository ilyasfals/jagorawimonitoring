<nav class="navtop navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><a href="https://demo4.mitradesa.id/#" class="navbar-brand"><img
                        src="<?php echo base_url();?>assets/images/jm-icon.png" class="logo">
                <small>Jasa Marga Jagorawi Monitoring System</small>
            </a><span class="btn btn-success btn-rounded collapse-sidebar"></span></div>
        <div class="collapse navbar-collapse" id="yii_booster_collapse_yw1"><span id="mobile-search"></span>
            <ul class="pull-right nav navbar-nav" id="yw2">
                <li id="notifikasi">
                    <a title="Pemberitahuan" href="#"><i
                                class="fa fa-bell-o"></i>
                    </a></li>
                <li class="user-profile dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="#">admin <span
                                class="caret"></span></a>
                    <ul id="yw3" class="dropdown-menu">
                        <li>
                            <a tabindex="-1" href="#">Profil</a></li>
                        <li>
                            <a tabindex="-1" href="#">Ubah
                                sandi</a></li>
                    </ul>
                </li>
                <li>
                    <a style="color:red;" title="Keluar" href="<?php echo base_url('login/logout') ?>"><i
                                class="fa fa-power-off"></i>
                    </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- begin:content -->
<!-- <div class="row"> -->

<!-- begin:sidebar -->
<div class="sidebar">
    <div class="row">
        <div class="col-md-12">
            <ul id="yw4" class="nav nav-pills nav-stacked">
                <li class="active">
                    <a href="<?php echo base_url();?>"><i class="fa icon-home"></i> <span
                                data-menus="Beranda">Beranda</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>employees"><i class="fa icon-penduduk"></i>
                        <span data-menus="Kependudukan">Pegawai</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>pulls"><i class="fa icon-highway"></i> <span>Pull Toll</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>senkoms"><i class="fa icon-senkom"></i> <span>Sentral Komunikasi</span></a>
                </li>
                <li class="dropdownmenu">
                    <a class="collapsed" data-toggle="collapse"
                       href="#" data-href="#kemiskinan"
                       data-link="#"><i
                                class="fa icon-statistik"></i>
                        <span data-menus="Kemiskinan">Dashboard</span>
                        <span class="caret"></span>
                    </a>
                    <div id="kemiskinan" class="collapse">
                        <ul id="yw5" class="nav nav-pills nav-stacked">
                            <li>
                                <a href="<?php echo base_url();?>dasboard">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>report">Dashboard 2</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdownmenu">
                    <a class="collapsed" data-toggle="collapse"
                       href="#" data-href="#pertanahan"
                       data-link="#"><i class="fa icon-pustaka-alt"></i> <span
                                data-menus="Pertanahan">Laporan</span> <span class="caret"></span>
                    </a>
                    <div id="pertanahan" class="collapse">
                        <ul id="yw6" class="nav nav-pills nav-stacked">
                            <li>
                                <a href="<?php echo base_url();?>report">Laporan 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>report/">Laporan 2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>report">Laporan 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdownmenu"><a class="collapsed" data-toggle="collapse"
                                            href="https://demo4.mitradesa.id/#pengguna" data-href="#pengguna"
                                            data-link="/index.php/user/admin/admin"><i class="fa icon-user"></i> <span>Pengguna</span>
                        <span class="caret"></span></a>
                    <div id="pengguna" class="collapse">
                        <ul id="yw10" class="nav nav-pills nav-stacked">
                            <li>
                                <a href="<?php echo base_url();?>user">Pengguna</a></li>
                            <li>
                                <a href="<?php echo base_url();?>user/privilege">Hak Akses</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo base_url();?>datamaster"><i
                                class="fa icon-setting"></i> <span>Pengaturan</span></a></li>
            </ul>
            <div class="copyright">
                <p><strong>Versi: 2.1.13</strong></p>
                <p>Code Name</p>
                <img src="<?php echo base_url();?>assets/images/jm-banner.png" alt="jmj" class="code-name">
                <p>Dikembangkan oleh <br>
                    <a href="#" title="">
                        <img src="#" style="width:110px;margin-top:10px;">
                    </a></p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-rekap-sidebar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Rekap Ekpedisi Surat</h4>
            </div>
            <div class="modal-body">
                <!-- <i class="fa fa-file-o fa-5x" ></i> -->
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pilih Tahun</label>
                        <div class="col-sm-6">
                            <select id="select-tahun" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-md-2 control-label">Pilih Format</label>
                        <div class="col-sm-6">
                            <select name="format" id="format" class="form-control">
                                <option value="excel5">EXCEL</option>
                                <option value="pdf">PDF</option>
                            </select>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-rekap-ekpedisi">Rekap</button>
            </div>
        </div>
    </div>
</div>

