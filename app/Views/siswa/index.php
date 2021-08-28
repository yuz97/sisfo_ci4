<?php $this->extend('layouts/app'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <a href="<?= base_url('siswa/create'); ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Siswa</a>
    </div>
    <div class="col-md-6">

        <form class="d-none d-sm-inline-block form-inline  mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?= base_url('siswa/search'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="input-group">
                <input name="search" type="text" class="form-control bg-light border-1 small" placeholder="Pencarian..." aria-label="Search" aria-describedby="basic-addon2" style="width: 400px;" required>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php if (count($siswa) > 0) : ?>
            <table class="table table-bordered table-striped mt-2">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th colspan="3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr class="text-center">
                            <td><?= $i++; ?></td>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['nik']; ?></td>
                            <td><?= $s['kelas']; ?></td>
                            <td><?= $s['nama_jurusan']; ?></td>
                            <td><a href="<?= base_url('siswa/edit/' . $s['id']); ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</button></a>
                            </td>
                            <td><button class="btn btn-success btn-edit" data-id="<?= $s['id'] ?>"><i class="fas fa-info-circle"></i> Detail</button></a>
                            </td>
                            <td>
                                <form action="<?= base_url('siswa/destroy/' . $s['id']); ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-warning"></i> Hapus</button>
                            </td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php else : ?>
                <div class="text-center mt-5">-- data tidak ditemukan --</div>
            <?php endif ?>
            </table>
            <?= $page->links('siswa', 'my_pager'); ?>

    </div>
</div>
<?php $this->endSection(); ?>

<?= $this->section('modal'); ?>
<!-- edit -->
<div class="modal fade mt-5" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></i> Detail Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {


        $('.btn-edit').on('click', function(e) {
            let id = e.target.dataset.id;
            $.ajax({
                url: `http://localhost:8080/siswa/show/${id}`,
                method: "GET",
                success: function(data) {
                    $('#edit').find('.modal-body').html(data)
                    $('#edit').modal('show')
                },
                error: function() {
                    console.log('data gagal');
                }
            })
        })
    })
</script>
<?= $this->endSection(); ?>