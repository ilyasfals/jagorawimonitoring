<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/js/c3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/d3.v3.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/c3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>KPI</h5>
                <h4>Last Month</h4>
                <div id="monthly_bar"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">
                <h5>KPI</h5>
                <h4>Data Bulanan</h4>
                <table id="tabel-kpi" class="table table-striped">
                    <thead>
                    <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">KPI</th>
                        <th colspan="12" style="text-align: center">Bulan</th>
                        <th rowspan="2" style="text-align: center">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </th>
                    </tr>
                    <tr>
                        <th>01</th>
                        <th>02</th>
                        <th>03</th>
                        <th>04</th>
                        <th>05</th>
                        <th>06</th>
                        <th>07</th>
                        <th>08</th>
                        <th>09</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                    </tr>
                    </thead>
                    <?php
                        for ($x = 0; $x < sizeof($kpi['row_kpis']); $x++) {
                            $jan = $kpi['row_kpis'][$x][4+12+1]-$kpi['row_kpis'][$x][4+1];
                            $feb = $kpi['row_kpis'][$x][4+12+2]-$kpi['row_kpis'][$x][4+2];
                            $mar = $kpi['row_kpis'][$x][4+12+3]-$kpi['row_kpis'][$x][4+3];
                            $apr = $kpi['row_kpis'][$x][4+12+4]-$kpi['row_kpis'][$x][4+4];
                            $mei = $kpi['row_kpis'][$x][4+12+5]-$kpi['row_kpis'][$x][4+5];
                            $jun = $kpi['row_kpis'][$x][4+12+6]-$kpi['row_kpis'][$x][4+6];
                            $jul = $kpi['row_kpis'][$x][4+12+7]-$kpi['row_kpis'][$x][4+7];
                            $agu = $kpi['row_kpis'][$x][4+12+8]-$kpi['row_kpis'][$x][4+8];
                            $sep = $kpi['row_kpis'][$x][4+12+9]-$kpi['row_kpis'][$x][4+9];
                            $okt = $kpi['row_kpis'][$x][4+12+10]-$kpi['row_kpis'][$x][4+10];
                            $nov = $kpi['row_kpis'][$x][4+12+11]-$kpi['row_kpis'][$x][4+11];
                            $des = $kpi['row_kpis'][$x][4+12+12]-$kpi['row_kpis'][$x][4+12];

                            echo '<tr>
                                <td>'.($x+1).'</td>
                                <td>'.$kpi['row_kpis'][$x][4].'</td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+1].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+1].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$jan.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                            if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($jan>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($jan==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+2].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+2].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$feb.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($feb>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($feb==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+3].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+3].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$mar.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else  if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($mar>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($mar==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+4].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+4].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$apr.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($apr>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($apr==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+5].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+5].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$mei.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($mei>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($mei==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+6].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+6].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$jun.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($jun>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($jun==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+7].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+7].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$jul.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($jul>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($jul==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+8].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+8].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$agu.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($agu>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($agu==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+9].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+9].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$sep.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($sep>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($sep==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+10].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+10].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$jan.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($okt>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($okt==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+11].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+11].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$nov.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($nov>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($nov==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['row_kpis'][$x][4+12].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Realisasi</td>
                                                            <td>: '.$kpi['row_kpis'][$x][4+12+12].'</td>
                                                        </tr>
                                                        <tr>
                                                             <td>Selisih</td>
                                                            <td>: '.$jan.'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                             if($current_month<1){
                                                echo  '<span class="glyphicon glyphicon-times" aria-hidden="true"></span>';
                                            }else if($des>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($des==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';
                            echo'
                                <td>
                                    <a href="#" data-toggle="popover" data-trigger="hover"   data-trigger="hover"
                                                data-placement="left"
                                                class="closeLink"
                                                title="Data" 
                                                data-html="true"
                                                data-content="<table> 
                                                        <tr>
                                                             <td>Target</td>
                                                             <td>: '.$kpi['rekap_kpis_target'][$x+1].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Realisasi</td>
                                                            <td>: '.$kpi['rekap_kpis_realisasi'][$x+1].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selisih</td>
                                                            <td>: '.$kpi['rekap_kpis_nilai'][$x+1].'</td>
                                                        </tr>
                                                </table>"
                                                ">';
                                            if($kpi['rekap_kpis_nilai'][$x+1]>0){
                                                echo  '<span class="glyphicon glyphicon-thumbs-up alert-success" aria-hidden="true"></span>';
                                            }else if($kpi['rekap_kpis_nilai'][$x+1]==0){
                                                echo '<span class="glyphicon glyphicon-minus alert-warning" aria-hidden="true"></span>';
                                            }else{
                                                echo '<span class="glyphicon glyphicon-thumbs-down alert-danger" aria-hidden="true"></span>';
                                            }
                            echo '    </a> 
                                  </td>';

                        }
                    ?>

<!--                    <tfoot>-->
<!--                    <tr>-->
<!--                        <th>Npp</th>-->
<!--                        <th>Nama</th>-->
<!---->
<!--                    </tr>-->
<!--                    </tfoot>-->
                </table>
            </div>
        </div>
    </div>
</div>

<br/>


<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script>
    $(document).ready(function() {

        $('[data-toggle="popover"]').popover();

        $('.closeLink').click( function() {
                return false;
        });

        $('body').on('click', function (e) {
            //only buttons
            if ($(e.target).data('toggle') !== 'popover'
                && $(e.target).parents('.popover.in').length === 0) {
                $('[data-toggle="popover"]').popover('hide');
            }
            //buttons and icons within buttons
            /*
            if ($(e.target).data('toggle') !== 'popover'
                && $(e.target).parents('[data-toggle="popover"]').length === 0
                && $(e.target).parents('.popover.in').length === 0) {
                $('[data-toggle="popover"]').popover('hide');
            }
            */
        });

        <?php

            $js_array = json_encode($kpi['rekap_kpis']);
            echo "var deltaKPI = ". $js_array . ";\n";

            $js_array_jenis = json_encode($kpi['jenis_kpis']);
            echo "var jenisKPI = ". $js_array_jenis . ";\n";

        ?>

        var chart = c3.generate({
            size: {
                height: 800,
            },
            padding: {
                left: 150,
            },
            bindto: '#monthly_bar',
            data: {
                columns: [
                    deltaKPI,
                ],
                type: 'bar',
                onclick: function (d, element) { console.log("onclick", d, element); },
                onmouseover: function (d) { console.log("onmouseover", d); },
                onmouseout: function (d) { console.log("onmouseout", d); }
            },
            axis: {
                rotated: true,
                x: {
                    type: 'category',
                    categories: jenisKPI,
                },
                y: {
                    //max: 80,
                    //min: -80,
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
                    show: false
                },
                y: {
                    show: true,
                    lines: [{value:0}]
                }
            }

        });
    });
</script>