<nav class="navtop navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="yii_booster_collapse_yw1">
            <ul class="pull-right nav navbar-nav" id="yw2">
                <li class="user-profile dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                       href="#"><?php echo $_SESSION['tahun'];?> <span
                                class="caret"></span></a>
                    <ul id="yw3" class="dropdown-menu">
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2017">2017</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2018">2018</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2019">2019</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2020">2020</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2021">2021</a></li>
                        <li><a tabindex="-1" href="<?php echo base_url() ?>SessionManagements/setTahun/2022">2022</a></li>
                    </ul>
                </li>
                <li>
                    <a style="color:red;" title="Keluar" href="<?php echo base_url('login/logout') ?>"><i
                                class="fa fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
