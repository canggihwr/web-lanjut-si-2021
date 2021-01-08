        <div class="card">
            <div class="card-header">
                Data Barang Menu User
            </div>
            <div class="card-body">
            <div class="alert alert-info" role="alert" style="text-align: center;">
            <b>VIEW ONLY / LOGIN TO EDIT DATA</b>
            </div>
            <a href="<?= site_url('Login/index') ?>" class="btn btn-success container-md" value="">
                <strong>LOGIN</strong> 
            </a>
            <h6><br></h6>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">ID_017</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Stok</th>
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
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
            </div>
        </div>