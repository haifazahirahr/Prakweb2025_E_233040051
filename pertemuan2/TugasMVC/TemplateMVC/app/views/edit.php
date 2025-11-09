<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Data Pengguna</h4>

                    <form action="<?= BASEURL; ?>/User/update/<?= $data['user']['id']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($data['user']['id']); ?>">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?= htmlspecialchars($data['user']['name']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?= htmlspecialchars($data['user']['email']); ?>" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="<?= BASEURL; ?>/User" class="btn btn-outline-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>