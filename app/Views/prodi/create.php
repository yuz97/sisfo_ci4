<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
    </div>
</div>
<div class="row justify-content-center d-flex">
    <div class="col-md-6">
        <form action="<?= base_url('prodi/store'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label>Nama Prodi</label>
                <select name="nama_prodi" id="" class="form-control" required>
                    <option selected disabled>-- Pilih Program Studi --</option>
                    <?php foreach ($jurusan as $j) : ?>
                        <option type="text" value="<?= $j['id']; ?>" class="form-control"><?= $j['nama_jurusan']; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="from-group">
                <label for="">Kode Prodi</label>
                <input type="text" name="kode_prodi" id="" class="form-control" required>
            </div>
            <div class="form-group mt-2">
                <label for="">Fakultas</label>
                <select name="fakultas" class="form-control" required>
                    <option selected disabled>-- Pilih Fakultas --</option>
                    <option value="Fakultas Teknik">Fakultas Teknik</option>
                    <option value="Fakultas MIPA">Fakultas MIPA</option>
                    <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                    <option value="Fakultas Sastra">Fakultas Sastra</option>
                    <option value="Fakultas Sejarah">Fakultas Sejarah</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>