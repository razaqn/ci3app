<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="nama@example.com">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option selected>pilih jurusan</option>
                                <option value="tehnik mesin">tehnik mesin</option>
                                <option value="rekayasa perangkat lunak">rekayasa perangkat lunak</option>
                                <option value="tehnik komputer">tehnik komputer</option>
                                <option value="alat berat">alat berat</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">
                            Tambah Data
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>