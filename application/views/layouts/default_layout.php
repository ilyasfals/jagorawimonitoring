<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>JMJ-<?php echo $title;?></title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>

	<!-- page specific plugin styles -->
</head>
 
<body>
<nav class="navtop navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><a href="https://demo4.mitradesa.id/#" class="navbar-brand"><img
                        src="<?php echo base_url();?>assets/images/jm-icon.png" class="logo">
                <small>Jasa Marga Jagorawi Monitoring System</small>
            </a><span class="btn btn-success btn-rounded collapse-sidebar"></span></div>
        <div class="collapse navbar-collapse" id="yii_booster_collapse_yw1"><span id="mobile-search"></span>
            <form class="navbar-form navbar-left" id="nav-search">
                <div class="form-group"><input class="form-control ui-autocomplete-input" role="search"
                                               autocomplete="off" placeholder="Cari nama penduduk" id="query_penduduk"
                                               type="text" value="" name="query_penduduk"><span role="status"
                                                                                                aria-live="polite"
                                                                                                class="ui-helper-hidden-accessible"></span>
                </div>
                <div class="form-group" style="margin-left:20px;"><input class="form-control ui-autocomplete-input"
                                                                         autocomplete="off"
                                                                         placeholder="Cari No KK/Kepala Keluarga"
                                                                         id="query_kk" type="text" value=""
                                                                         name="query_kk"><span role="status"
                                                                                               aria-live="polite"
                                                                                               class="ui-helper-hidden-accessible"></span>
                </div>
            </form>
            <ul class="pull-right nav navbar-nav" id="yw2">
                <li id="notifikasi">
                    <a title="Pemberitahuan" href="https://demo4.mitradesa.id/index.php/site/#"><i
                                class="fa fa-bell-o"></i>
                    </a></li>
                <li class="user-profile dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="https://demo4.mitradesa.id/index.php/user/profile/profile">admin <span
                                class="caret"></span></a>
                    <ul id="yw3" class="dropdown-menu">
                        <li>
                            <a tabindex="-1" href="https://demo4.mitradesa.id/index.php/user/profile">Profil</a></li>
                        <li>
                            <a tabindex="-1" href="https://demo4.mitradesa.id/index.php/user/profile/changepassword">Ubah
                                sandi</a></li>
                    </ul>
                </li>
                <li>
                    <a style="color:red;" title="Keluar" href="https://demo4.mitradesa.id/index.php/user/logout"><i
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


<!-- end:sidebar -->

<!-- begin:content -->
<div class="content">

    <!-- begin:article -->
    <div class="article">
        <div id="loading" class="hide">Loading..</div>
        <!-- <nav class="child-navbar" role="navigation">
        <div class="container-fluid"> -->
        <!-- </div>
</nav> -->
        <!-- begin:breadcrumb -->

        <div class="row">
            <div class="col-md-12">
                <i class="fa fa-home"></i>
            </div>
        </div>

        <!-- end:breadcrumb -->

        <!-- begin:heading-title -->
        <!-- <div class="row">
          <div class="col-md-12">
            <h2>Mitra Desa</h2>
          </div>
        </div> -->
        <!-- end:heading-title -->

        <!-- begin:Content -->

        <div class="row">
            <div class="col-md-12">
              <?php echo $contents;?>
            </div>
        </div>
        <!-- end:Content -->

        <!-- end:content-loop -->

        <script type="text/javascript">
            /*<![CDATA[*/
            jQuery(function ($) {
                jQuery('[data-toggle=popover]').popover();
                jQuery('[data-toggle=tooltip]').tooltip();
                jQuery('#kepala_keluarga').autocomplete({
                    'minChars': 3, 'autoFill': false, 'focus': function (event, ui) {
                        //$("#query_kk").val( ui.item.no_kk );
                        return false;
                    }, 'select': function (event, ui) {
                        window.location.replace("/index.php/penduduk/adminPenduduk/create/id_keluarga/" + ui.item.id_keluarga);
                    }, 'source': '/index.php/penduduk/keluarga/autocomplete'
                }).data("autocomplete")._renderItem = function (ul, item) {
                    return $("<li></li>")
                        .data("item.autocomplete", item)
                        .append("<a><small>KK " + item.no_kk + "</small><br/><span class=\"label label-success\"><i class=\"fa fa-star\"></i></span> <strong>" + item.kepala_keluarga + "</strong></a>")
                        .appendTo(ul);
                };
                ;
                jQuery('#query_penduduk').autocomplete({
                    'minChars': 3, 'autoFill': false, 'focus': function (event, ui) {
                        $("#query_penduduk").val(ui.item.nama);
                        return false;
                    }, 'select': function (event, ui) {
                        window.location.replace("/index.php/penduduk/adminPenduduk/view/id/" + ui.item.id_penduduk);
                    }, 'source': '/index.php/penduduk/adminPenduduk/autocomplete'
                }).data("autocomplete")._renderItem = function (ul, item) {
                    return $("<li></li>")
                        .data("item.autocomplete", item)
                        .append("<a><small>" + item.nik + "</small><br/><strong>" + item.nama + "</strong></a>")
                        .appendTo(ul);
                };
                ;
                jQuery('#query_kk').autocomplete({
                    'minChars': 3, 'autoFill': false, 'focus': function (event, ui) {
                        $("#query_kk").val(ui.item.no_kk);
                        return false;
                    }, 'select': function (event, ui) {
                        window.location.replace("/index.php/penduduk/keluarga/view/id/" + ui.item.id_keluarga);
                    }, 'source': '/index.php/penduduk/keluarga/autocomplete'
                }).data("autocomplete")._renderItem = function (ul, item) {
                    return $("<li></li>")
                        .data("item.autocomplete", item)
                        .append("<a><small>KK " + item.no_kk + "</small><br/><span class=\"label label-success\"><i class=\"fa fa-star\"></i></span> <strong>" + item.kepala_keluarga + "</strong></a>")
                        .appendTo(ul);
                };
                ;

                function sidebarin(data) {
                    $('.sidebar').find('.dropdownmenu').each(function (i, e) {
                        var con = $(e);
                        if (data == 0) {
                            var link = con.find('a:eq(0)').attr('data-link');
                            con.find('a:eq(0)').attr('href', link).attr('data-toggle', '');
                        } else if (data == 1) {
                            var href = con.find('a:eq(0)').attr('data-href');
                            con.find('a:eq(0)').attr('href', href).attr('data-toggle', 'collapse');
                        }
                    });
                }

                var navklik = 1;

                function cekNav(data) {
                    if (data == 0) {
                        $('.sidebar').addClass('sidebar-in');
                        $('.content').addClass('content-collapse');
                        $('.navbar-header').addClass('navbar-header-collapse');
                        $('.collapse-sidebar').addClass('collapse-sidebar-in');
                        navklik = 1;
                    } else if (data == 1) {
                        $('.sidebar').removeClass('sidebar-in');
                        $('.content').removeClass('content-collapse');
                        $('.navbar-header').removeClass('navbar-header-collapse');
                        $('.collapse-sidebar').removeClass('collapse-sidebar-in');
                        navklik = 0;
                    }
                }

                $.ajax({
                    url: '/index.php/site/navSession',
                    type: 'GET',
                    success: function (data) {
                        cekNav(data);
                        sidebarin(data);
                    }
                });

                $('nav').on('click', '.collapse-sidebar', function () {
                    $.ajax({
                        url: '/index.php/site/navSession',
                        type: 'POST',
                        data: {navtop: navklik},
                        success: function (data) {
                            cekNav(data);
                            sidebarin(data);
                        }
                    })
                    return false;
                });

                function cekNotif() {
                    $.ajax({
                        method: 'GET',
                        url: '/index.php/notifikasi/default/ceknotif',
                        cache: false,
                        success: function (msg) {
                            if (parseInt(msg) > 0) {
                                if ($('#notifikasi a .countNotif').length) {
                                    $('#notifikasi a .countNotif').html(msg);
                                } else {
                                    var appendCount = '<sup class=\'countNotif badge\'>' + msg + '</sup>';
                                    $('#notifikasi a').append(appendCount);
                                }
                            }
                        }
                    })
                    setTimeout(function () {
                        cekNotif();
                    }, 300000);
                }

                cekNotif();

                $('#notifikasi a').on('click', function () {
                    if (!$('#notifikasi .notification-container').length) {
                        var notifcontainer = '<div id=\'notificationContainer\' class=\'notification-container\'><div class=\'notification-content\'></div></div>';
                        $('#notifikasi').append(notifcontainer);
                    }
                    $('#notifikasi .notification-container').show();
                    $('#notifikasi .notification-container .notification-content').html('Mohon tunggu...');
                    $.ajax({
                        method: 'GET',
                        url: '/index.php/notifikasi/default/getNotifications',
                        cache: false,
                        success: function (msg) {
                            $('#notifikasi .notification-container .notification-content').html(msg);
                            $('#notifikasi .notification-container .notification-content').focus();
                            $('#notifikasi .notification-container .notification-content .notif-title a.set-all-readed').on('click', function () {
                                var url_set_read = $(this).attr('data-url');
                                $.ajax({
                                    method: 'GET',
                                    url: url_set_read,
                                    success: function (msg) {
                                        cekNotif();
                                    }
                                })
                            })
                            $('#notifikasi .notification-container .close').on('click', function () {
                                $('#notifikasi .notification-container').hide();
                            })
                        }
                    })

                })


                $('#ekport-ekpedisi-surat').live('click', function () {

                    $('.modal-rekap-sidebar').modal('show');
                    $.ajax({
                        type: 'get',
                        url: '/index.php/administrasi/ekspedisiSuratMasuk/getTahun',
                        dataType: 'json',
                        success: function (data) {
                            html = '<option value="" >--pilih--</option>';
                            $.each(data, function (index, value) {
                                html += '<option value=\'' + value + '\' >' + value + '</option>';
                            })
                            $('#select-tahun').html(html)
                        }
                    })
                    return false;

                });

                $('.btn-rekap-ekpedisi').live('click', function () {
                    tahun = $('#select-tahun').val();
                    format = $('#format').val();

                    if (tahun != '') {
                        window.location = '/index.php/administrasi/ekspedisiSuratKeluar/ExportSurat/format/' + format + '/tahun/' + tahun;
                    }
                    return false;
                })


                setTimeout(function () {
                    jQuery('.container-fluid').resize();
                }, 1000);


                /**
                 * Sets up defaults for any $.ajax Calls
                 **/
                $(document).ajaxSend(function () {
                    if ($("#loadingbar").length === 0) {
                        $("body").append("<div id=\"loadingbar\"></div>")
                        $("#loadingbar").addClass("waiting").append($("<dt/><dd/>"));
                        $("#loadingbar").width((50 + Math.random() * 30) + "%");
                    }
                });
                $(document).ajaxComplete(function () {
                    $("#loadingbar").width("101%").delay(200).fadeOut(400, function () {
                        $(this).remove();
                    });
                });
                $(document).ajaxError(function (event, jqxhr, settings, thrownError) {
                    console.error(jqxhr.responseText);
                    $.notify(thrownError + ": " + jqxhr.responseText, "error");
                    return false;
                });

                /*$.ajaxSetup({
                 beforeSend: function() {
                 if ($("#loadingbar").length === 0) {
                 $("body").append("<div id=\"loadingbar\"></div>")
                 $("#loadingbar").addClass("waiting").append($("<dt/><dd/>"));
                 $("#loadingbar").width((50 + Math.random() * 30) + "%");
                 }
                 },
                 complete : function() {
                 console.log("Stop");
                 $("#loadingbar").width("101%").delay(200).fadeOut(400, function() {
                 $(this).remove();
                 });
                 }
                 });*/

            });
            /*]]>*/
        </script>

    </div>
    <!-- end:article -->

    <!-- </div> -->
    <!-- end:content -->
</body>
</html>