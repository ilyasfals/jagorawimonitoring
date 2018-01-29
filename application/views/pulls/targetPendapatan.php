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

                <form role="form" action="<?php echo base_url('pulls/targetPendapatan')?>" class="form-horizontal" method="post">
                    <input type="hidden" name="tahun" value="<?php echo $tahun ?>" />

                    <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Tahun</label>
                        <div class="col-sm-2">
                            <input class="form-control" value="<?php echo $tahun; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Normalisasi</label>
                        <div class="col-sm-10">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="15px;" class="success">Bulan</th>
                                        <th class="success">Pendapatan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($target)) { ?>
                                            <tr>
                                                <th>Januari</th>
                                                <th><input type="text" id="target_1" name="target_1" class="form-control" value="<?php echo $target['target_1']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Februari</th>
                                                <th><input type="text" id="target_2" name="target_2" class="form-control" value="<?php echo $target['target_2']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Maret</th>
                                                <th><input type="text" id="target_3" name="target_3" class="form-control" value="<?php echo $target['target_3']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>April</th>
                                                <th><input type="text" id="target_4" name="target_4" class="form-control" value="<?php echo $target['target_4']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Mei</th>
                                                <th><input type="text" id="target_5" name="target_5" class="form-control" value="<?php echo $target['target_5']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Juni</th>
                                                <th><input type="text" id="target_6" name="target_6" class="form-control" value="<?php echo $target['target_6']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Juli</th>
                                                <th><input type="text" id="target_7" name="target_7" class="form-control" value="<?php echo $target['target_7']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Agustus</th>
                                                <th><input type="text" id="target_8" name="target_8" class="form-control" value="<?php echo $target['target_8']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>September</th>
                                                <th><input type="text" id="target_9" name="target_9" class="form-control" value="<?php echo $target['target_9']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Oktober</th>
                                                <th><input type="text" id="target_10" name="target_10" class="form-control" value="<?php echo $target['target_10']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>November</th>
                                                <th><input type="text" id="target_11" name="target_11" class="form-control" value="<?php echo $target['target_11']; ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>Desember</th>
                                                <th><input type="text" id="target_12" name="target_12" class="form-control" value="<?php echo $target['target_12']; ?>"></th>
                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <th>Januari</th>
                                                <th><input type="text" id="target_1" name="target_1" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Februari</th>
                                                <th><input type="text" id="target_2" name="target_2" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Maret</th>
                                                <th><input type="text" id="target_3" name="target_3" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>April</th>
                                                <th><input type="text" id="target_4" name="target_4" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Mei</th>
                                                <th><input type="text" id="target_5" name="target_5" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Juni</th>
                                                <th><input type="text" id="target_6" name="target_6" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Juli</th>
                                                <th><input type="text" id="target_7" name="target_7" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Agustus</th>
                                                <th><input type="text" id="target_8" name="target_8" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>September</th>
                                                <th><input type="text" id="target_9" name="target_9" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Oktober</th>
                                                <th><input type="text" id="target_10" name="target_10" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>November</th>
                                                <th><input type="text" id="target_11" name="target_11" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>Desember</th>
                                                <th><input type="text" id="target_12" name="target_12" class="form-control"></th>

                                        <?php }?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput"></label>
                        <div class="col-sm-6">
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <input type="button" value="Batal" class="btn btn-danger" onclick="window.history.back();">
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>