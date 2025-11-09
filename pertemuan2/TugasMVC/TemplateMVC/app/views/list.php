<div class="container mt-4">

    <?php Flasher::flash(); ?>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Pengguna</h2>
        <a href="<?= BASEURL; ?>/User/tambah" class="btn btn-success">Tambah Pengguna</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th style="width: 220px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['users'] as $user) : ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']); ?></td>
                        <td><?= htmlspecialchars($user['email']); ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/User/detail/<?= $user['id']; ?>" class="btn btn-sm btn-info">Detail</a>
                            <a href="<?= BASEURL; ?>/User/edit/<?= $user['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= BASEURL; ?>/User/hapus/<?= $user['id']; ?>" class="btn btn-sm btn-danger"
                                onclick="return confirm('Yakin ingin menghapus <?= htmlspecialchars($user['name']); ?>?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>