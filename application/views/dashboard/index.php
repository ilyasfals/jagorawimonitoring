<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/c3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/d3.v3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/accounting.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/c3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $title ?> <small><?php echo $subtitle; ?></small>
        </h1>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="grid-content">
                <h4>Jumlah</h4>
                    <br/> <span class="big-font" id="totalJumlahTransaksi"> <?php echo $transaksi['jumlah'];?> </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="grid-content">
                <h4>Nilai</h4>
                <br/> <span class="big-font" id="totalNilaiTransaksi"><?php echo $transaksi['nilai'];?> </span>
            </div>
        </div>
        <div class="col-md-2">
            <div class="grid-content">
                <h4>Last Trx</h4>
                <br/> <span class="medium-font"><?php echo $transaksi['last_date_trx'];?></span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>Transaksi Bulanan</h5>
                <h4>Nilai (Rp.)</h4>
                <div id="monthly_bar"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>Transaksi Bulanan</h5>
                <h4>Kumulatif (Rp.)</h4>
                <div id="spline_nilai_kumulatif"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>Transaksi Bulanan</h5>
                <h4>Jumlah</h4>
                <div id="monthly_bar2"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="grid-content">
                <h5>Transaksi Tahunan</h5>
                <h4>Nilai (Rp.)</h4>
                <div id="yearly_pie"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="grid-content">
                <h5>Transaksi Tahunan</h5>
                <h4>Jumlah</h4>
                <div id="yearly_pie2"></div>
            </div>
        </div>
    </div>
</div>
<br/>


<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script>
    $(document).ready(function() {
        var totalNilaiTransaksi = $("#totalNilaiTransaksi").text();
        function nilaiString() {
            if(totalNilaiTransaksi < 1000){

            }else if(totalNilaiTransaksi < 1000000){
            }else if(totalNilaiTransaksi < 1000000000){
            }else if(totalNilaiTransaksi < 1000000000000){
                var totalNilaiTransaksiString = accounting.formatMoney(totalNilaiTransaksi/1000000000, "Rp.", 2, ".", ",") +" M";
                $("#totalNilaiTransaksi").text(totalNilaiTransaksiString);
            }else if(totalNilaiTransaksi < 1000000000000000){
            }else{
            }

        }
        nilaiString();
        var totalJumlahTransaksi = $("#totalJumlahTransaksi").text();
        function jumlahString() {
            var totalJumlahTransaksiString = accounting.formatNumber(totalJumlahTransaksi, 0, ".", ",");
            $("#totalJumlahTransaksi").text(totalJumlahTransaksiString);
        }
        jumlahString();


        <?php
            $js_array = json_encode($transaksi['bulan_nilai_gol1']);
            echo "var bulan_nilai_gol1 = ". $js_array . ";\n";

            $js_array = json_encode($transaksi['bulan_nilai_gol2']);
            echo "var bulan_nilai_gol2 = ". $js_array . ";\n";

            $js_array = json_encode($transaksi['bulan_nilai_gol3']);
            echo "var bulan_nilai_gol3 = ". $js_array . ";\n";

            $js_array = json_encode($transaksi['bulan_nilai_gol4']);
            echo "var bulan_nilai_gol4 = ". $js_array . ";\n";

            $js_array = json_encode($transaksi['bulan_nilai_gol5']);
            echo "var bulan_nilai_gol5 = ". $js_array . ";\n";

            $js_array = json_encode($transaksi['delta_transaksi']);
            echo "var delta_transaksi = ". $js_array . ";\n";


            $js_array_bulan = json_encode($transaksi['bulan_nama']);
            echo "var bulanNama = ". $js_array_bulan . ";\n";

        ?>

        var chart = c3.generate({
            bindto: '#monthly_bar',
            data: {
                columns: [
                    bulan_nilai_gol1,
                    bulan_nilai_gol2,
                    bulan_nilai_gol3,
                    bulan_nilai_gol4,
                    bulan_nilai_gol5,
                    delta_transaksi,
                ],
                type: 'bar',
                groups: [
                    ['Gol-1', 'Gol-2', 'Gol-3', 'Gol-4', 'Gol-5']
                ],
                onclick: function (d, element) { console.log("onclick", d, element); },
                onmouseover: function (d) { console.log("onmouseover", d); },
                onmouseout: function (d) { console.log("onmouseout", d); }
            },
            axis: {
                x: {
                    type: 'category',
                    categories: bulanNama
                }
            },
            bar: {
                width: {
                    ratio: 0.8,
//            max: 30
                },
            },
            grid: {
                x: {
                    show: true
                },
                y: {
                    show: true,
                    lines: [{value:0}]
                }
            }

        });

        //Bar Chart Kumulatif
        <?php
        $js_array = json_encode($transaksi['bulan_nilai_kumulatif']);
        echo "var bulan_nilai_kumulatif = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['target_transaksi_kumulatif']);
        echo "var bulan_target_kumulatif = ". $js_array . ";\n";

//        var iKumulatif;
//        for (iKumulatif=0; i < bulan_nilai_kumulatif.length; iKumulatif++) {
//            var selisih_kumulatif[iKumulatif] = bulan_nilai_kumulatif[iKumulatif] - bulan_target_kumulatif[iKumulatif];
//        }
        //var selisih_kumulatif[0]=['Target-Realisasi'];


        $js_array_bulan = json_encode($transaksi['bulan_nama']);
        echo "var bulanNama = ". $js_array_bulan . ";\n";

        ?>

        var chart = c3.generate({
            bindto: '#spline_nilai_kumulatif',
            data: {
                columns: [
                    bulan_nilai_kumulatif,
                    bulan_target_kumulatif,
                ],
                type: 'spline',
                types: {
                    selisih_kumulatif: 'bar',
                },
                onclick: function (d, element) { console.log("onclick", d, element); },
                onmouseover: function (d) { console.log("onmouseover", d); },
                onmouseout: function (d) { console.log("onmouseout", d); }
            },
            axis: {
                x: {
                    type: 'category',
                    categories: bulanNama
                }
            },
            bar: {
                width: {
                    ratio: 0.3,
//            max: 30
                },
            }
        });



    <?php
        $js_array = json_encode($transaksi['bulan_jumlah_gol1']);
        echo "var bulan_jumlah_gol1 = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['bulan_jumlah_gol2']);
        echo "var bulan_jumlah_gol2 = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['bulan_jumlah_gol3']);
        echo "var bulan_jumlah_gol3 = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['bulan_jumlah_gol4']);
        echo "var bulan_jumlah_gol4 = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['bulan_jumlah_gol5']);
        echo "var bulan_jumlah_gol5 = ". $js_array . ";\n";


        $js_array_bulan = json_encode($transaksi['bulan_nama']);
        echo "var bulanNama = ". $js_array_bulan . ";\n";

        ?>

        var chart = c3.generate({
            bindto: '#monthly_bar2',
            data: {
                columns: [
                    bulan_jumlah_gol1,
                    bulan_jumlah_gol2,
                    bulan_jumlah_gol3,
                    bulan_jumlah_gol4,
                    bulan_jumlah_gol5
                ],
                type: 'bar',
                groups: [
                    ['Gol-1', 'Gol-2', 'Gol-3', 'Gol-4', 'Gol-5']
                ],
                onclick: function (d, element) { console.log("onclick", d, element); },
                onmouseover: function (d) { console.log("onmouseover", d); },
                onmouseout: function (d) { console.log("onmouseout", d); }
            },
            axis: {
                x: {
                    type: 'category',
                    categories: bulanNama
                }
            },
            bar: {
                width: {
                    ratio: 0.3,
//            max: 30
                },
            }
        });


        //PIE
        //Yearly Pie
        var chart = c3.generate({
            bindto: '#yearly_pie',
            data: {
                // iris data from R
                columns: [
                    ['Gol-1', <?php echo $transaksi['total_nilai'][0]?>],
                    ['Gol-2', <?php echo $transaksi['total_nilai'][1]?>],
                    ['Gol-3', <?php echo $transaksi['total_nilai'][2]?>],
                    ['Gol-4', <?php echo $transaksi['total_nilai'][3]?>],
                    ['Gol-5', <?php echo $transaksi['total_nilai'][4]?>],
                ],
                type : 'pie',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
            },
            pie: {
                label: {
                    format: function (value, ratio, id) {
                        return d3.format('Rp.')(value);
                    }
                }
            }
        });
        var chart = c3.generate({
            bindto: '#yearly_pie2',
            data: {
                // iris data from R
                columns: [
                    ['Gol-1', <?php echo $transaksi['total_jumlah'][0]?>],
                    ['Gol-2', <?php echo $transaksi['total_jumlah'][1]?>],
                    ['Gol-3', <?php echo $transaksi['total_jumlah'][2]?>],
                    ['Gol-4', <?php echo $transaksi['total_jumlah'][3]?>],
                    ['Gol-5', <?php echo $transaksi['total_jumlah'][4]?>],
                ],
                type : 'pie',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
            },
            pie: {
                label: {
                    format: function (value, ratio, id) {
                        return d3.format('Rp.')(value);
                    }
                }
            }
        });
    });
</script>