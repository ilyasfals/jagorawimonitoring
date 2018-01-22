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
        $news_id = $this->uri->segment(3, 0);
            echo  '<form role="form" action="'.base_url("user/createusers/$news_id").'" class="form-horizontal" method="post" enctype="multipart/form-data">';


        ?>
        <?php
            if($this->uri->segment(3, 0)>0){
                $myArray = array();
                foreach ($list_user as $item):
                    array_push($myArray,$item);
                endforeach;
        ?>

                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Username</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="title" name="title" value="<?php echo $myArray[1]?>">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?php $news_id = $this->uri->segment(3, 0); echo $news_id?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="password" id="subtitle" name="subtitle" value="<?php echo $myArray[2]?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"> Role</label>
                        <div class="col-md-3">
                            <select class="form-control" name="role">
                                <option  value="">---Select Role---</option>
                                <?php foreach($list_role as $row) { ?>
                                    <option  <?php if($row->kode == $myArray[3]){ echo 'selected="selected"'; } ?> value="<?php echo $row->kode?>"><?php echo $row->kode?> </option><?php }?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-next col-sm-offset-2">Simpan</button>
                </fieldset>

        <?php

            }

        else{
        ?>

            <fieldset>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Username</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="username" name="username" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Password</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="password" id="password" name="password" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label"> Role</label>
                    <div class="col-md-3">
                        <select class="form-control" name="role">
                            <option  value="">---Select Role---</option>
                            <?php foreach($list_role as $row) { ?>
                                <option value="<?php echo $row->kode;?>"><?php echo $row->kode;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-next col-sm-offset-2">Simpan</button>
            </fieldset>


            <?php
        }
        ?>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>