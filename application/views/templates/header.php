<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>DATA BARANG</title>

        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    </head>

    <body class="container-md" style="background-image: url('<?php echo base_url('assets/img/bg.jpg');?>');">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 15px;">
            <a class="navbar-brand" href="#">Tugas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('Mahasiswa/tambah') ?>" tabindex="-1">Tambah Data</a>
                    </li>
                </ul>
                <span class="navbar-item">
                    Canggih Wahyu Rinaldi
                </span>
            </div>
        </nav>

        <div class="alert alert-info" role="alert" style="text-align: center;">
            <b>Canggih Wahyu Rinaldi / 1901050017</b>
        </div>