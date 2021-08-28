<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
        <a href="<?= base_url('prodi/create'); ?>" class="btn btn-primary ">Tambah Prodi</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Kode Prodi</th>
                    <th>Fakultas</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($prodi as $p) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $p['nama_jurusan']; ?></td>
                        <td><?= $p['kode_prodi']; ?></td>
                        <td><?= $p['fakultas']; ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>
<?= $this->endSection(); ?>