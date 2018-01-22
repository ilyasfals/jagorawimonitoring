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

                <form role="form" action="<?php echo base_url('pulls/editNormalisasi').'/'.$tahun.'/'.$bulan;?>" class="form-horizontal" method="post">
                    <input type="hidden" name="tahun" value="<?php echo $tahun ?>" />
                    <input type="hidden" name="bulan" value="<?php echo $bulan ?>" />

                    <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Tahun</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="<?php echo $tahun; ?>" readonly>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Bulan</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="<?php echo $bulan; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Normalisasi</label>
                        <div class="col-sm-10">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th width="15px;" class="success">Golongan</th>
                                        <th class="success">Volume Lalu Lintas</th>
                                        <th class="success">Pendapatan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($normalisasi)) { ?>
                                            <tr>
                                                <th>1</th>
                                                <th><input type="text" id="lalin_1" name="lalin_1" class="form-control" value="<?php echo $normalisasi['_1'] ?>"></th>
                                                <th><input type="text" id="pendapatan_1" name="pendapatan_1" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <th><input type="text" id="lalin_2" name="lalin_2" class="form-control" value="<?php echo $kpi['_1'] ?>"></th>
                                                <th><input type="text" id="pendapatan_2" name="pendapatan_2" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <th><input type="text" id="lalin_3" name="lalin_3" class="form-control" value="<?php echo $kpi['_1'] ?>"></th>
                                                <th><input type="text" id="pendapatan_3" name="pendapatan_3" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <th><input type="text" id="lalin_4" name="lalin_4" class="form-control" value="<?php echo $kpi['_1'] ?>"></th>
                                                <th><input type="text" id="pendapatan_4" name="pendapatan_4" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <th><input type="text" id="lalin_5" name="lalin_5" class="form-control" value="<?php echo $kpi['_1'] ?>"></th>
                                                <th><input type="text" id="pendapatan_5" name="pendapatan_5" class="form-control" value="<?php echo $kpi['realisasi_1'] ?>"></th>
                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <th>1</th>
                                                <th><input type="text" id="lalin_1" name="lalin_1" class="form-control"></th>
                                                <th><input type="text" id="pendapatan_1" name="pendapatan_1" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <th><input type="text" id="lalin_2" name="lalin_2" class="form-control"></th>
                                                <th><input type="text" id="pendapatan_2" name="pendapatan_2" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <th><input type="text" id="lalin_3" name="lalin_3" class="form-control"></th>
                                                <th><input type="text" id="pendapatan_3" name="pendapatan_3" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <th><input type="text" id="lalin_4" name="lalin_4" class="form-control"></th>
                                                <th><input type="text" id="pendapatan_4" name="pendapatan_4" class="form-control"></th>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <th><input type="text" id="lalin_5" name="lalin_5" class="form-control"></th>
                                                <th><input type="text" id="pendapatan_5" name="pendapatan_5" class="form-control"></th>
                                            </tr>
                                        <?php }?>
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