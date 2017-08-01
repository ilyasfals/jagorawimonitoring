<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>JMJ-<?php echo $title;?></title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>

    <!-- page specific plugin styles -->
</head>

<body>