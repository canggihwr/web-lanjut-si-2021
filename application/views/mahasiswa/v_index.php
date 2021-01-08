<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOAD MELALUI VIEW -> MAHASISWA -> V_INDEX</title>

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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('mahasiswa/tambah')?>" tabindex="-1">Tambah Data</a>
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

        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $nim; ?></td>
                            <td><?php echo $alamat; ?></td>
                            <td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><?php echo $nama2; ?></td>
                            <td><?php echo $nim2; ?></td>
                            <td><?php echo $alamat2; ?></td>
                            <td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><?php echo $nama3; ?></td>
                            <td><?php echo $nim3; ?></td>
                            <td><?php echo $alamat3; ?></td>
                            <td><button type="button" class="btn btn-warning">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="logo" style="text-align: right;">
            <br />
            <a href="index.html"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="" /></a>
        </div>

        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    </body>
</html>
