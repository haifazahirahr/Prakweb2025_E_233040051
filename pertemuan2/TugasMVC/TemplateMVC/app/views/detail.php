<div class="container mt-5">
    <div class="card shadow-sm" style="max-width: 28rem; margin:auto;">
        <div class="card-body">
            <h4 class="card-title"><?= htmlspecialchars($data['user']['name']); ?></h4>
            <h6 class="text-muted mb-3"><?= htmlspecialchars($data['user']['email']); ?></h6>
            <p class="mb-3"><strong>ID Pengguna:</strong> <?= htmlspecialchars($data['user']['id']); ?></p>
            <a href="<?= BASEURL; ?>/user" class="btn btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>