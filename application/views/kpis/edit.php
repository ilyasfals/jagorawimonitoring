<?php echo validation_errors(); ?>

<script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/form.js');?>"></script>
<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.id.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.maskMoney.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/select2.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/media-queries.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php echo $title.' <small>'.$subtitle.'</small>'; ?>
        </h1>
    </div>
</div>

<?php //var_dump($master_kpis); die();?>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="grid-content">

                <form role="form" action="<?php echo base_url('kpis/edit').'/'.$tahun.'/'.$id_master_kpis;?>" class="form-horizontal" method="post">
                    <input type="hidden" name="tahun" value="<?php echo $tahun ?>" />
                    <input type="hidden" name="id_master_kpis" value="<?php echo $id_master_kpis ?>" />
                    <input type="hidden" name="id_kpis" value="<?php echo $kpi['id_kpis'] ?>" />

                    <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Perspektif</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="<?php echo $master_kpis['perspektif']; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Area</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="<?php echo $master_kpis['area']; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Deskripsi</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="<?php echo $master_kpis['perspektif']; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Data</label>
                        <div class="col-sm-10">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="15px;" class="success">Bulan</th>
                                        <th class="success">Target</th>
                                        <th class="success">Realisasi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Januari</th>
                                            <th><input type="text" id="target_1" name="target_1" class="form-control" value="<?php echo $kpi['target_1'] ?>"></th>
                                            <th><input type="text" id="realisasi_1" name="realisasi_1" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Februari</th>
                                            <th><input type="text" id="target_2" name="target_2" class="form-control" value="<?php echo $kpi['target_2'] ?>"></th>
                                            <th><input type="text" id="realisasi_2" name="realisasi_2" class="form-control" value="<?php echo $kpi['realisasi_2'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Maret</th>
                                            <th><input type="text" id="target_3" name="target_3" class="form-control" value="<?php echo $kpi['target_3'] ?>"></th>
                                            <th><input type="text" id="realisasi_3" name="realisasi_3" class="form-control" value="<?php echo $kpi['realisasi_3'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>April</th>
                                            <th><input type="text" id="target_4" name="target_4" class="form-control" value="<?php echo $kpi['target_4'] ?>"></th>
                                            <th><input type="text" id="realisasi_4" name="realisasi_4" class="form-control"  value="<?php echo $kpi['realisasi_4'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Mei</th>
                                            <th><input type="text" id="target_5" name="target_5" class="form-control" value="<?php echo $kpi['target_5'] ?>"></th>
                                            <th><input type="text" id="realisasi_5" name="realisasi_5" class="form-control"  value="<?php echo $kpi['realisasi_5'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Juni</th>
                                            <th><input type="text" id="target_6" name="target_6" class="form-control" value="<?php echo $kpi['target_6'] ?>"></th>
                                            <th><input type="text" id="realisasi_6" name="realisasi_6" class="form-control"  value="<?php echo $kpi['realisasi_6'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Juli</th>
                                            <th><input type="text" id="target_7" name="target_7" class="form-control" value="<?php echo $kpi['target_7'] ?>"></th>
                                            <th><input type="text" id="realisasi_7" name="realisasi_7" class="form-control"  value="<?php echo $kpi['realisasi_7'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Agustus</th>
                                            <th><input type="text" id="target_8" name="target_8" class="form-control" value="<?php echo $kpi['target_8'] ?>"></th>
                                            <th><input type="text" id="realisasi_8" name="realisasi_8" class="form-control"  value="<?php echo $kpi['realisasi_8'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>September</th>
                                            <th><input type="text" id="target_9" name="target_9" class="form-control" value="<?php echo $kpi['target_9'] ?>"></th>
                                            <th><input type="text" id="realisasi_9" name="realisasi_9" class="form-control"  value="<?php echo $kpi['realisasi_9'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Oktober</th>
                                            <th><input type="text" id="target_10" name="target_10" class="form-control" value="<?php echo $kpi['target_10'] ?>"></th>
                                            <th><input type="text" id="realisasi_10" name="realisasi_10" class="form-control"  value="<?php echo $kpi['realisasi_10'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>November</th>
                                            <th><input type="text" id="target_11" name="target_11" class="form-control" value="<?php echo $kpi['target_11'] ?>"></th>
                                            <th><input type="text" id="realisasi_11" name="realisasi_11" class="form-control"  value="<?php echo $kpi['realisasi_11'] ?>"></th>
                                        </tr>
                                        <tr>
                                            <th>Desember</th>
                                            <th><input type="text" id="target_12" name="target_12" class="form-control" value="<?php echo $kpi['target_12'] ?>"></th>
                                            <th><input type="text" id="realisasi_21" name="realisasi_12" class="form-control"  value="<?php echo $kpi['realisasi_12'] ?>"></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput"></label>
                        <div class="col-sm-6">
                            <input type="submit" value="Simpan" class="btn btn-default">
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        //CURRENCY
        $(function() {
            $(".currencyInput").maskMoney({prefix:'Rp. ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
        })

    });
</script>