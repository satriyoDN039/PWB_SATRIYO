<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                    <?= $mhs['nama']; ?>
                    <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
                </li>
            <?php endforeach; ?>
        </div>
    </div>
</div>