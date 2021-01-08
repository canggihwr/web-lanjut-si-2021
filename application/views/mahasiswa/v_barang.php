        <div class="card">
            <div class="card-header">
                Data Barang
                <a href="<?= site_url('Front/index') ?>" class="btn btn-warning float-right">
                <strong>LOG OUT</strong> 
            </a>
            </div>
            <div class="card-body">
                <div class="">
                <div class="float-right">
                    <form action="" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data.." name="key">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                        </div>
                    </form>
                </div>
                        <h1><br></h1>

                </div>

            <?php if ($this->session->flashdata('flash') ) : ?>
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    Data <b>berhasil</b> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

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
                            <td><a href="<?php echo site_url('AController/edit/'.$row->id_017);?>" class="btn btn-warning" onclick="return confirm('Yakin ingin mengubah data?')">Edit</a>

                            <a href="<?php echo site_url('AController/delete/'.$row->id_017);?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
            <br>
            <a href="<?= site_url('AController/tambah') ?>" class="btn btn-primary">Tambah Data</a><br>
            </div>
        </div>