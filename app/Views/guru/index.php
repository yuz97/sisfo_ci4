<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
        <a href="<?= base_url('guru/create'); ?>" class="btn btn-primary btn-create"> Tambah Guru</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Guru</th>
                    <th>Nip</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($guru as $g) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $g['nama']; ?></td>
                        <td><?= $g['nip']; ?></td>
                        <td><?= $g['jurusan']; ?></td>
                        <td><?= $g['alamat']; ?></td>
                        <td class="text-center"><a href="<?= base_url('guru/edit/' . $g['id']); ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a></td>
                        <td class="text-center"><a href="<?= base_url('guru/destroy/' . $g['id']); ?>" class="btn btn-danger"><i class="fas fa-danger"></i> Hapus</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>