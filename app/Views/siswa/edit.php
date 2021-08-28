<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <form action="<?= base_url('siswa/update/' . $siswa['id']); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" value="<?= $siswa['nama'] ?>" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nik Siswa</label>
                <input type="text" value="<?= $siswa['nik'] ?>" name="nik" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kelas Siswa</label>
                <input type="text" value="<?= $siswa['kelas'] ?>" name="kelas" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Update Pada</label>
                <input type="date" value="<?= $siswa['updated_at'] ?>" name="updated_at" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>