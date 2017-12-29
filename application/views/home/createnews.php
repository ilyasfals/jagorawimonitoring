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
            echo  '<form role="form" action="'.base_url("home/createnews/$news_id").'" class="form-horizontal" method="post" enctype="multipart/form-data">';


        ?>
        <?php
            if($this->uri->segment(3, 0)>0){
                $myArray = array();
                foreach ($list_news as $item):
                    array_push($myArray,$item);
                endforeach;
        ?>

                <fieldset>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Judul</label>
                        <div class="col-sm-3">
                            <input class="form-control" type="text" id="title" name="title" value="<?php echo $myArray[1]?>">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?php $news_id = $this->uri->segment(3, 0); echo $news_id?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Sub Judul</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" id="subtitle" name="subtitle" value="<?php echo $myArray[2]?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Isi</label>
                        <div class="col-sm-10">
                            <textarea id="summernote" name="content" ><?php echo $myArray[3]?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Aktif?</label>
                        <div class="col-sm-1">
                            <?php if($myArray[5]>0){ ?>
                                <input class="form-control" type="checkbox" name="is_active" checked/>
                            <?php }
                                else{
                            ?>

                                <input class="form-control" type="checkbox" name="is_active"/>
                            <?php }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="textinput">Banner</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" name="banner"/>
                            <label><?php echo $myArray[4]?></label>
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
                    <label class="col-sm-2 control-label" for="textinput">Judul</label>
                    <div class="col-sm-3">
                        <input class="form-control" type="text" id="title" name="title">
                        <input class="form-control" type="hidden" id="id" name="id" value="<?php $news_id = $this->uri->segment(3, 0); echo $news_id?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Sub Judul</label>
                    <div class="col-sm-6">
                        <input class="form-control" type="text" id="subtitle" name="subtitle">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Isi</label>
                    <div class="col-sm-10">
                        <textarea id="summernote" name="content">Silakan ganti dengan isi berita..</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Aktif?</label>
                    <div class="col-sm-1">
                        <input class="form-control" type="checkbox" name="is_active" value="1"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="textinput">Banner</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="file" name="banner" />
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