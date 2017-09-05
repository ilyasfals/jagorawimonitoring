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
        <?php
        echo  '<form role="form" action="'.base_url("pengaturan/createposisi").'" class="form-horizontal" method="post">';
        ?>
        <fieldset>
            <legend>Posisi</legend>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Kode</label>
                <div class="col-sm-2">
                    <?php if($id!="0")
                    {
                        foreach($posisi as $m):
                            echo '<input type="text" id="kode" name="kode" value="'.$m["kode"].'">';
                        endforeach;
                    }
                    else{
                        echo '<input type="text" id="kode" name="kode" >';
                    }
                    ?>
                    <?php
                    echo '<input type="hidden" id="id" name="id" value="'.$id.'">';
                    ?>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Nama</label>
                <div class="col-sm-2">
                    <?php if($id!="0")
                    {
                        foreach($posisi as $m):
                            echo '<input type="text" id="nama" name="nama" value="'.$m["nama"].'">';
                        endforeach;
                    }
                    else{
                        echo '<input type="text" id="nama" name="nama" >';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Deskripsi</label>
                <div class="col-sm-2">
                    <?php if($id!="0")
                    {
                        foreach($posisi as $m):
                            echo '<input type="text" id="deskripsi" name="deskripsi" value="'.$m["deskripsi"].'">';
                        endforeach;
                    }
                    else{
                        echo '<input type="text" id="deskripsi" name="deskripsi" >';
                    }
                    ?>
                </div>
            </div>
            <button type="submit" class="btn btn-next col-sm-offset-2">Simpan</button>
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