<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Berita <small>Daftar terbaru</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
    <div class="col-lg-12"> 
        <h2><?php echo $title; ?></h2>
        <?php foreach ($news as $news_item): ?>
            <h3><?php echo $news_item['title']; ?></h3>
            <div class="main">
                    <?php echo $news_item['text']; ?>
            </div>
            <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
        <?php endforeach; ?>
    </div>
</div>
