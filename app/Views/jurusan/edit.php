<form action="<?= base_url('jurusan/update/' . $jurusan['id']); ?>" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label>Nama Jurusan</label>
        <input type="text" name="nama_jurusan" value="<?= $jurusan['nama_jurusan']; ?>" class="form-control" required>

    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i>
        Update
    </button>
</form>