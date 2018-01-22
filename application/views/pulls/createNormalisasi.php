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
                <form role="form" action="<?php echo base_url('kpis/create');?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Tahun</label>
                        <div class="col-sm-2">
                            <select class="form-control select2-single-basic" name="tahun">
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Indikator</label>
                        <div class="col-sm-6">
                            <select class="form-control select2-single-basic" name="id_master_kpis">
                                <?php
                                    echo "<option>--pilih--</option>";
                                    for ($x = 0; $x <= count($master_kpis)-1; $x++) {
                                        echo '<option value = "'.$master_kpis[$x]['id_master_kpis'].'">'.$master_kpis[$x]['deskripsi'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-next">Simpan</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput"></label>
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
                                            <th><input type="text" id="target_1" name="target_1" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_1" name="realisasi_1" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Februari</th>
                                            <th><input type="text" id="target_2" name="target_2" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_2" name="realisasi_2" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Maret</th>
                                            <th><input type="text" id="target_3" name="target_3" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_3" name="realisasi_3" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>April</th>
                                            <th><input type="text" id="target_4" name="target_4" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_4" name="realisasi_4" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Mei</th>
                                            <th><input type="text" id="target_5" name="target_5" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_5" name="realisasi_5" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Juni</th>
                                            <th><input type="text" id="target_6" name="target_6" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_6" name="realisasi_6" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Juli</th>
                                            <th><input type="text" id="target_7" name="target_7" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_7" name="realisasi_7" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Agustus</th>
                                            <th><input type="text" id="target_8" name="target_8" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_8" name="realisasi_8" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>September</th>
                                            <th><input type="text" id="target_9" name="target_9" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_9" name="realisasi_9" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Oktober</th>
                                            <th><input type="text" id="target_10" name="target_10" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_10" name="realisasi_10" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>November</th>
                                            <th><input type="text" id="target_11" name="target_11" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_11" name="realisasi_11" class="form-control currencyInput"></th>
                                        </tr>
                                        <tr>
                                            <th>Desember</th>
                                            <th><input type="text" id="target_12" name="target_12" class="form-control currencyInput"></th>
                                            <th><input type="text" id="realisasi_21" name="realisasi_12" class="form-control currencyInput"></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput"></label>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-next">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        //Select2
        $(".select2-single-basic").select2();

        //CURRENCY
        $(function() {
            $(".currencyInput").maskMoney({prefix:'Rp. ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
        })

    });
</script>