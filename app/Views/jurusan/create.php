<div class="row">
    <div class="col-md-12">
        <form action="<?= base_url('jurusan/store'); ?>" method="post">
            <?= csrf_field(); ?>
            <label>Nama Jurusan</label>
            <input type="text" name="nama_jurusan" class="form-control">
            <div class="text-danger text-sm"><?= $validation->getError('nama_jurusan'); ?></div>
            <label>Created_at</label>
            <input type="date" name="created_at" class="form-control">
            <div class="text-danger text-sm"><?= $validation->getError('created_at'); ?></div>
            <label>Updated_at</label>
            <input type="date" name="updated_at" class="form-control">
            <div class="text-danger text-sm"><?= $validation->getError('updated_at'); ?></div>

            <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-paper-plane"></i> Simpan</button>
        </form>
    </div>
</div>