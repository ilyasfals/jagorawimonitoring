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
                <?php
                    if ( $isi ) {
                        $this->load->view($isi);
                    }
                ?>
            </div>
        </div>
        <!-- end:Content -->

        <!-- end:content-loop -->

        <script type="text/javascript">
            /*<![CDATA[*/
            jQuery(function ($) {
                jQuery('[data-toggle=popover]').popover();
                jQuery('[data-toggle=tooltip]').tooltip();

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

</div>
<!-- end:content -->