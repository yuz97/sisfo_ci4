<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mt-4">
        <form action="<?= base_url('guru/update/' . $data['id']); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label>Nama Guru</label>
                <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Nip</label>
                <input type="text" name="nip" class="form-control" value="<?= $data['nip']; ?>">
            </div>
            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan']; ?>">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $data['alamat']; ?>">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>