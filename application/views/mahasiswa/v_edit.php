<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT DATA</title>

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
                        <a class="nav-link" href="<?= site_url('AController/index') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1">Tambah Data</a>
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
                Tambah Data
            </div>
            <form action="<?=site_url('AController/proses_edit')?>" method="post" class="container-md">
                <div class="card-body">
                    <table width="40%">
                    <tbody class="form-group">
                        <tr>
                            <td><label for=""> ID_BARANG[017] </label></td>
                            <td><input type="text" name="tid" class="form-control" value="<?= $brg['id_017'] ?>"><br></td>
                        </tr>

                        <tr>
                            <td><label for="">Merek</label></td>
                            <td><input type="text" name="tmerek" class="form-control" value="<?= $brg['merek'] ?>"><br></td>
                        </tr>

                        <tr>
                            <td><label for="">Jenis</label></td>
                            <td><input type="text" name="tjenis" class="form-control" value="<?= $brg['jenis'] ?>"><br></td>
                        </tr>

                        <tr>
                            <td><label for="">Stok</label></td>
                            <td><input type="text" name="tstok" class="form-control" value="<?= $brg['stok'] ?>"><br></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                

                <input type="submit" name="edit" value="Simpan" class="btn btn-primary">
                <a href="<?= site_url('AController/index
                ') ?>" class="btn btn-warning">Batal</a>
            </form>
            <br>
        </div>


        <div id="logo" style="text-align: right;">
            <br />
            <a href="index.html"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="" /></a>
        </div>

        <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    </body>
</html>