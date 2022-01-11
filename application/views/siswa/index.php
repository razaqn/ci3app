<div class="container">
    <!-- <?php // if ($this->session->flashdata()) : 
            ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa <strong>Berhasil</strong> 
                    <? //= $this->session->flashdata(); 
                    ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php // endif; 
    ?> -->

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Siswa.." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data Siswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Siswa</h1>
            <?php if (empty($siswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    data Siswa tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($siswa as $ssw) : ?>
                    <li class="list-group-item">
                        <?= $ssw['nama']; ?>
                        <a href="<?= base_url(); ?>siswa/hapus/<?= $ssw['id']; ?>" class="float-end link-danger ms-3" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?= base_url(); ?>siswa/edit/<?= $ssw['id']; ?>" class="float-end link-success ms-3">edit</a>
                        <a href="<?= base_url(); ?>siswa/detail/<?= $ssw['id']; ?>" class="float-end link-primary ms-3">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>