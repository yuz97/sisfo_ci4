<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
    </div>
    <div class="col-md-6">
        <form action="<?= base_url('siswa/store'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" value="<?= old('nama') ?? '' ?>" name="nama" class="form-control">
                <div class="text-danger text-sm"><?= $validation->getError('nama'); ?></div>
            </div>
            <div class="form-group">
                <label>Nik Siswa</label>
                <input type="text" value="<?= old('nik') ?? '' ?>" name="nik" class="form-control">
                <div class="text-danger text-sm"><?= $validation->getError('nik'); ?></div>
            </div>
            <div class="form-group">
                <label>Kelas Siswa</label>
                <input type="text" value="<?= old('kelas') ?? '' ?>" name="kelas" class="form-control">
                <div class="text-danger text-sm"><?= $validation->getError('nik'); ?></div>
            </div>
            <div class="form-group">
                <label>Jurusan Siswa</label>
                <select name="jurusan_id" class="form-control">
                    <option value="" selected disabled> -- Pilih Jurusan -- </option>
                    <?php foreach ($jurusan as $j) : ?>
                        <option value="<?= $j['id']; ?>"><?= $j['nama_jurusan']; ?></option>
                    <?php endforeach ?>
                </select>
                <div class="text-danger text-sm"><?= $validation->getError('jurusan'); ?></div>
            </div>
            <div class="form-group">
                <label>Create Pada</label>
                <input type="date" value="<?= old('created_at') ?? '' ?>" name="created_at" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Save</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>