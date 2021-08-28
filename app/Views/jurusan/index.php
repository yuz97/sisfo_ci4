<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center"><?= $title; ?></h4>
        <button class="btn btn-primary btn-create">Tambah Jurusan</button>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($jurusan as $j) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $j['nama_jurusan']; ?></td>
                        <td><?= $j['created_at']; ?></td>
                        <td><?= $j['updated_at']; ?></td>
                        <td><button class="btn btn-warning btn-edit" data-id="<?= $j['id']; ?>"><i class="fas fa-edit"></i> Edit</button></td>
                        <td><a href="<?= base_url('jurusan/destroy/' . $j['id']); ?>" class="btn btn-danger"><i class="fas fa-trash"> </i>Hapus</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<!-- create -->
<div class="modal fade mt-5" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></i> Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<!-- edit -->
<div class="modal fade mt-5" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></i> Edit Jurusan</h5>
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

        $('.btn-create').on('click', function() {

            $.ajax({
                url: `http://localhost:8080/jurusan/create`,
                method: "GET",
                success: function(data) {
                    $('#create').find('.modal-body').html(data)
                    $('#create').modal('show')
                },
                error: function() {
                    console.log('data gagal');
                }
            })
        })

        $('.btn-edit').on('click', function(e) {

            let id = e.target.dataset.id;
            $.ajax({
                url: `http://localhost:8080/jurusan/edit/${id}`,
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
    });
</script>
<?= $this->endSection(); ?>