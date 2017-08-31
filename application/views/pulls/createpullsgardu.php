
<script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/form.js');?>"></script>
<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.id.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/select2.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/media-queries.css');?>" rel="stylesheet" />

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<div class="row">
    <div class="col-md-10">
        <form role="form" action="<?php echo base_url('pulls/createPullsGardu');?>" class="form-horizontal" method="post">
            <input type="hidden" name="id_pulls" value="<?php echo $id_pulls; ?>">
            <fieldset>
                <legend>Gardu Tol (Pra Tugas)</legend>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Gardu Tol</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="id_gardus">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Renc. Petugas</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="plan_petugas">
                            <?php $i = 0; foreach ($employees as $employees_item): ?>
                                <?php echo '<option value="'.$employees_item['id_employees'].'">'.$employees_item['nama'].'</option>'; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Real. Petugas</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="real_petugas">
                            <?php $i = 0; foreach ($employees as $employees_item): ?>
                                <?php echo '<option value="'.$employees_item['id_employees'].'">'.$employees_item['nama'].'</option>'; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Jam Hadir</label>
                    <div class="col-sm-3">
                        <input type="text" id="jam_hadir" name="jam_hadir" class="form-control" placeholder="HH:mm (24 format)" aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Sifat Tugas</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="sifat_tugas">
                            <option value="0">Normal</option>
                            <option value="1">Tukar Libur</option>
                            <option value="2">Tukar Shift</option>
                            <option value="3">Tukar Gardu</option>
                            <option value="3">Lembur</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Cash Box</label>
                    <div class="col-sm-2">
                        <input type="text" id="cashbox" name="cashbox" class="form-control"  aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Kar Pul</label>
                    <div class="col-sm-2">
                        <input type="text" id="karpul" name="karpul" class="form-control"  aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">KTTM</label>
                    <div class="col-sm-10">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Golongan</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Awal</td>
                                    <td><input type="text" id="kttmawal1" name="kttmawal1" class="form-control"  aria-describedby="basic-addon2"></td>
                                    <td><input type="text" id="kttmawal2" name="kttmawal2" class="form-control"  aria-describedby="basic-addon2"></td>
                                    <td><input type="text" id="kttmawal3" name="kttmawal3" class="form-control"  aria-describedby="basic-addon2"></td>
                                    <td><input type="text" id="kttmawal4" name="kttmawal4" class="form-control"  aria-describedby="basic-addon2"></td>
                                    <td><input type="text" id="kttmawal5" name="kttmawal5" class="form-control"  aria-describedby="basic-addon2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">UKem.</label>
                    <div class="col-sm-2">
                        <input type="text" id="ukem" name="ukem" class="form-control"  aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Uang Pribadi</label>
                    <div class="col-sm-2">
                        <input type="text" id="uangpribadi" name="uangpribadi" class="form-control"  aria-describedby="basic-addon2">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Barang Pribadi</label>
                    <div class="col-sm-4">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td><input type="checkbox" id="hp" name="hp" class="col-sm-2"> <span>HP</span></td>
                                <td><input type="checkbox" id="rokok" name="rokok" class="col-sm-2"> <span>Rokok</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Cek Fisik</label>
                    <div class="col-sm-6">
                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>1 <input type="checkbox" id="cekfisik1" name="cekfisik1" class="col-sm-2"  aria-describedby="basic-addon2"></td>
                                <td>2 <input type="checkbox" id="cekfisik2" name="cekfisik2" class="col-sm-2"  aria-describedby="basic-addon2"></td>
                                <td>3 <input type="checkbox" id="cekfisik3" name="cekfisik3" class="col-sm-2"  aria-describedby="basic-addon2"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="submit" class="btn btn-next col-sm-offset-2">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        //Select2
        $(".select2-single-basic").select2();
    });
</script>