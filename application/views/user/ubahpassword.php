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

<!-- include summernote css/js-->
<link href="<?php echo base_url('assets/plugins/summernote/summernote.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/plugins/summernote/summernote.min.js'); ?>"></script>


<div class="row">
    <div class="col-md-10">
        <?php
            echo $errorMsg;
            echo  '<form role="form" action="'.base_url("user/ubahpassword/").'" class="form-horizontal" method="post" enctype="multipart/form-data">';
        ?>
            <fieldset>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Password</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Re-Password</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="password" id="repassword" name="repassword">
                    </div>
                </div>
                <button type="submit" class="btn btn-next col-sm-offset-2">Simpan</button>
            </fieldset>

        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>