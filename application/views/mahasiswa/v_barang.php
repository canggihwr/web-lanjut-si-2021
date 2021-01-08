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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <div class="card">
            <div class="card-header">
                Data Barang
            </div>
            <div class="card-body">
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ID_017</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        foreach ($brg as $row) { ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo $row->id_017; ?></td>
                            <td><?php echo $row->merek; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->stok; ?></td>
                            <td><button type="button" class="btn btn-warning">Edit</button> 
                            <a href="<?php echo site_url('AController/delete/'.$row->id_017);?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            </div>
        </div>
        <br><a href="<?= site_url('AController/tambah') ?>" class="btn btn-primary">Tambah Data</a><br>


        <div id="logo" style="text-align: right;">
            <br />
            <a href="index.html"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="" /></a>
        </div>

        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    </body>
</html>
