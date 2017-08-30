<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<script src="<?php echo base_url('assets/js/jquery.backstretch.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/form.js');?>"></script>
<script src="<?php echo base_url('assets/js/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datepicker.id.min.js');?>"></script>

<link href="<?php echo base_url('assets/css/select2.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css');?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/media-queries.css');?>" rel="stylesheet" />

<div class="row">
    <div class="col-md-10">
        <form role="form" action="<?php echo base_url('pulls/create');?>" class="form-horizontal" method="post">
            <fieldset>
                <legend>Gerbang Tol</legend>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Gerbang Tol</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="id_gerbang">
                            <option value="1">Taman Mini</option>
                            <option value="2">Cibubur</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Tanggal</label>
                    <div class="col-sm-2">
                        <input type="text" id="tanggal" name="tanggal" class="form-control datepicker" placeholder="dd-mm-yyyy" aria-describedby="basic-addon2">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Shift</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="shift">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Pengawas 1</label>
                    <div class="col-sm-6">
                        <select class="form-control select2-single-basic" name="pengawas1">
                            <?php $i = 0; foreach ($employees as $employees_item): ?>
                                <?php echo '<option value="'.$employees_item['id_employees'].'">'.$employees_item['nama'].'</option>'; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-2 control-label" for="textinput">Pengawas 2</label>-->
<!--                    <div class="col-sm-6">-->
<!--                        <select class="form-control select2-single-basic" name="pengawas[]">-->
<!--                            <option value="">--kosong--</option>-->
<!--                            --><?php //$i = 0; foreach ($employees as $employees_item): ?>
<!--                                --><?php //echo '<option value="'.$employees_item['id_employees'].'">'.$employees_item['nama'].'</option>'; ?>
<!--                            --><?php //endforeach; ?>
<!--                        </select>-->
<!--                    </div>-->
<!--                </div>-->


                <button type="submit" class="btn btn-next col-sm-offset-2">Next <i class="fa fa-angle-right"></i></button>
            </fieldset>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        //Select2
        $(".select2-single-basic").select2();

        //DatePicker
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            todayBtn: "linked",
            startDate: '-3d',
            language: 'id',
            autoclose: true,
            startDate: new Date()
        });

    });
</script>