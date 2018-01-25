<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/c3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/d3.v3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/accounting.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/c3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />


<script src="<?php echo base_url('assets/js/Chart.bundle.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/Chart.PieceLabel.js');?>"></script>
<script src="<?php echo base_url('assets/js/chartjs-utils.js');?>"></script>
<style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $title ?> <small><?php echo $subtitle; ?></small>
        </h1>
    </div>
    <div class="col-md-12">
        <div class="col-md-4">
            <div class="grid-content">
                <h4>Total Volume Lalu Lintas(Lalin)</h4>
                    <br/> <span class="big-font" id="totalJumlahTransaksi"> <?php echo $transaksi['jumlah'];?> </span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="grid-content">
                <h4>Total Pendapatan</h4>
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
                <h5>Pendapatan Bulanan</h5>
                <h4>Nilai (Rp.)</h4>
                <div style="width: 100%">
                    <canvas id="monthly_bar_chartjs"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>Pendapatan Bulanan</h5>
                <h4>Kumulatif (Rp.)</h4>
                <div style="width: 100%">
                    <canvas id="spline_nilai_kumulatif_chartjs"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>Volume Lalu Lintas</h5>
                <h4>Jumlah Kendaraan</h4>
                <div style="width: 100%">
                    <canvas id="monthly_bar2_chartjs"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="grid-content">
                <h5>Sebaran Tahunan</h5>
                <h4>Pendapatan (Rp.)</h4>
                <div style="width: 100%">
                    <canvas id="yearly_pie_chartjs"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="grid-content">
                <h5>Sebaran Tahunan</h5>
                <h4>Volume Lalu Lintas</h4>
                <div style="width: 100%">
                    <canvas id="yearly_pie2_chartjs"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                Keterangan: <br/>
                - Volume lalu lintas dan pendapatan tol termasuk kartu tol perusahaan.
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
    });
</script>

<script>
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
    var monthly_bar_chartjs_data = {
        labels: ["January", "February", "March", "April", "May", "June",
            "July", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
            label: 'Gol. 1',
            backgroundColor: window.chartColors.red,
            stack: 'Stack 0',
            data:  bulan_nilai_gol1,
        },{
            label: 'Gol. 2',
            backgroundColor: window.chartColors.orange,
            stack: 'Stack 0',
            data:  bulan_nilai_gol2,
        },{
            label: 'Gol. 3',
            backgroundColor: window.chartColors.yellow,
            stack: 'Stack 0',
            data:  bulan_nilai_gol3,
        },{
            label: 'Gol. 4',
            backgroundColor: window.chartColors.green,
            stack: 'Stack 0',
            data:  bulan_nilai_gol4,
        },{
            label: 'Gol. 5',
            backgroundColor: window.chartColors.blue,
            stack: 'Stack 0',
            data:  bulan_nilai_gol5,
        },{
            label: 'Realisasi-Target',
            backgroundColor: window.chartColors.grey,
            stack: 'Stack 1',
            data:  delta_transaksi,
        }]
    };

    <?php
        $js_array = json_encode($transaksi['bulan_nilai_kumulatif']);
        echo "var bulan_nilai_kumulatif = ". $js_array . ";\n";

        $js_array = json_encode($transaksi['target_transaksi_kumulatif']);
        echo "var bulan_target_kumulatif = ". $js_array . ";\n";
    ?>


    var spline_nilai_kumulatif_chartjs_data = {
        labels: ["January", "February", "March", "April", "May", "June",
            "July", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
            label: "Target",
            fill: false,
            backgroundColor: window.chartColors.green,
            borderColor: window.chartColors.green,
            borderDash: [5, 5],
            data: bulan_target_kumulatif,
        },{
            label: "Realisasi",
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data: bulan_nilai_kumulatif,
        }]
    };

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

    var monthly_bar2_chartjs_data = {
        labels: ["January", "February", "March", "April", "May", "June",
            "July", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
            label: 'Gol. 1',
            backgroundColor: window.chartColors.red,
            stack: 'Stack 0',
            data:  bulan_jumlah_gol1,
        },{
            label: 'Gol. 2',
            backgroundColor: window.chartColors.orange,
            stack: 'Stack 0',
            data:  bulan_jumlah_gol2,
        },{
            label: 'Gol. 3',
            backgroundColor: window.chartColors.yellow,
            stack: 'Stack 0',
            data:  bulan_jumlah_gol3,
        },{
            label: 'Gol. 4',
            backgroundColor: window.chartColors.green,
            stack: 'Stack 0',
            data:  bulan_jumlah_gol4,
        },{
            label: 'Gol. 5',
            backgroundColor: window.chartColors.blue,
            stack: 'Stack 0',
            data:  bulan_jumlah_gol5,
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("monthly_bar_chartjs").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: monthly_bar_chartjs_data,
            options: {
                title:{
                    display:true,
                    text:"Pendapatan Bulanan"
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return 'Rp. '+tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }, },
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Bulan'
                        }
                    }],
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Pendapatan'
                        },
                        ticks: {
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                if(parseInt(value) >= 1000){
                                    return 'Rp.' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                } else {
                                    return 'Rp.' + value;
                                }
                            }
                        }
                    }]
                }
            }
        });

        var ctx2 = document.getElementById("spline_nilai_kumulatif_chartjs").getContext("2d");
        window.myLine = new Chart(ctx2, {
            type: 'line',
            data: spline_nilai_kumulatif_chartjs_data,
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Target vs Realisasi - Bulanan'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return 'Rp.' + tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }, },
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Bulan'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Pendapatan'
                        },
                        ticks: {
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                if(parseInt(value) >= 1000){
                                    return 'Rp.' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                } else {
                                    return 'Rp.' + value;
                                }
                            }
                        }
                    }]
                }
            }
        });

        var ctx3 = document.getElementById("monthly_bar2_chartjs").getContext("2d");
        window.myBar2 = new Chart(ctx3, {
            type: 'bar',
            data: monthly_bar2_chartjs_data,
            options: {
                title:{
                    display:true,
                    text:"Volume Lalu Lintas - Bulanan"
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            return tooltipItem.yLabel.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); }, },
                },
                responsive: true,
                scales: {
                    xAxes: [{
                        stacked: true,
                        scaleLabel : {
                            labelString: 'Bulan'
                        },
                    }],
                    yAxes: [{
                        scaleLabel : {
                            labelString: 'Volume Lalu Lintas'
                        },
                        ticks: {
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                if(parseInt(value) >= 1000){
                                    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                } else {
                                    return value;
                                }
                            }
                        }
                    }]
                }
            }
        });

        var ctx4 = document.getElementById("yearly_pie_chartjs").getContext("2d");
        window.myPie = new Chart(ctx4, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                        <?php echo $transaksi['total_nilai'][0]?>,
                        <?php echo $transaksi['total_nilai'][1]?>,
                        <?php echo $transaksi['total_nilai'][2]?>,
                        <?php echo $transaksi['total_nilai'][3]?>,
                        <?php echo $transaksi['total_nilai'][4]?>,
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Nilai Transaksi-Per Golongan'
                }],
                labels: [
                    "Gol. 1",
                    "Gol. 2",
                    "Gol. 3",
                    "Gol. 4",
                    "Gol. 5",
                ]
            },
            options: {
                legend: {
                    display: true,
                    position: 'right'
                },
                responsive: true,
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            // get the data label and data value to display
                            // convert the data value to local string so it uses a comma seperated number
                            var dataLabel = data.labels[tooltipItem.index];
                            var value = ': Rp.' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                            // make this isn't a multi-line label (e.g. [["label 1 - line 1, "line 2, ], [etc...]])
                            if (Chart.helpers.isArray(dataLabel)) {
                                // show value on first line of multiline label
                                // need to clone because we are changing the value
                                dataLabel = dataLabel.slice();
                                dataLabel[0] += value;
                            } else {
                                dataLabel += value;
                            }

                            // return the text to display on the tooltip
                            return dataLabel;
                        }
                    }
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                },
                pieceLabel: {
                    render: 'percentage',
//                    arc: true,
                    fontColor: '#000',
                    position: 'outside',
                    fontSize: 14,
                    precision: 2,
                }
            }
        });

        var ctx5 = document.getElementById("yearly_pie2_chartjs").getContext("2d");
        window.myPie = new Chart(ctx5, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [
                        <?php echo $transaksi['total_jumlah'][0]?>,
                        <?php echo $transaksi['total_jumlah'][1]?>,
                        <?php echo $transaksi['total_jumlah'][2]?>,
                        <?php echo $transaksi['total_jumlah'][3]?>,
                        <?php echo $transaksi['total_jumlah'][4]?>,
                    ],
                    backgroundColor: [
                        window.chartColors.red,
                        window.chartColors.orange,
                        window.chartColors.yellow,
                        window.chartColors.green,
                        window.chartColors.blue,
                    ],
                    label: 'Nilai Transaksi-Per Golongan'
                }],
                labels: [
                    "Gol. 1",
                    "Gol. 2",
                    "Gol. 3",
                    "Gol. 4",
                    "Gol. 5",
                ]
            },
            options: {
                legend: {
                    display: true,
                    position: 'right'
                },
                responsive: true,
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            // get the data label and data value to display
                            // convert the data value to local string so it uses a comma seperated number
                            var dataLabel = data.labels[tooltipItem.index];
                            var value = ': ' + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                            // make this isn't a multi-line label (e.g. [["label 1 - line 1, "line 2, ], [etc...]])
                            if (Chart.helpers.isArray(dataLabel)) {
                                // show value on first line of multiline label
                                // need to clone because we are changing the value
                                dataLabel = dataLabel.slice();
                                dataLabel[0] += value;
                            } else {
                                dataLabel += value;
                            }

                            // return the text to display on the tooltip
                            return dataLabel;
                        }
                    }
                },
                animation: {
                    duration: 500,
                    easing: "easeOutQuart",
                },
                pieceLabel: {
                    render: 'percentage',
//                    arc: true,
                    fontColor: '#000',
                    position: 'outside',
                    fontSize: 14,
                    precision: 2,
                }
            }
        });


    };

</script>