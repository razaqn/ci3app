<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Edit Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>" />
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="nama@example.com" value="<?= $siswa['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <?php foreach ($jurusan as $jrs) : ?>
                                    <?php if ($jrs == $siswa['jurusan']) : ?>
                                        <option value="<?= $jrs; ?>" selected><?= $jrs; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $jrs; ?>"><?= $jrs; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary mt-3 float-end">
                            Edit Data
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>

</div>