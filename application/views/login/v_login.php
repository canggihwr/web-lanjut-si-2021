        <div class="card">
            <div class="card-header">
                Login
            </div>
            <form action="<?= site_url('login/verifikasi') ?>" method="post" class="container-md">
                <div class="card-body">
                    <?php if ($this->session->flashdata('pesan')){ ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('pesan'); ?>
                    </div>
                <?php } ?>
                    <table width="40%">
                    <tbody class="form-group">
                        <tr>
                            <td><label for=""> username </label></td>
                            <td><input type="text" name="username" class="form-control"><br></td>
                        </tr>

                        <tr>
                            <td><label for="">password</label></td>
                            <td><input type="password" name="password" class="form-control"><br></td>
                        </tr>
                    </tbody>
                    </table>
                    <input type="submit" name="submit" value="Login" class="btn btn-primary">
                </div>
                
                
            </form>
        </div>
