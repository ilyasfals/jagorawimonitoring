<!-- Bootstrap -->
<link href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>


<div class="row">
    <div class="col-md-10">
        <p class="title"><h1><b><?php  echo $title; ?></b></h1></p>
        <?php

        echo  '<form role="form" action="#" class="form-horizontal" method="post" enctype="multipart/form-data">';
        ?>
        <fieldset>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Username</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="password" name="password" value="<?php echo $_SESSION['username'];?>" readonly disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">NPP</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="repassword" name="repassword" value="<?php echo $_SESSION['npp'];?>" readonly disable>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Nama</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="repassword" name="repassword" value="<?php echo $_SESSION['nama'];?>" readonly disable>
                </div>
            </div>
        </fieldset>

        </form>
    </div>
</div>