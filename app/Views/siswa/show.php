<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" value="<?= $siswa['nama'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nik Siswa</label>
                    <input type="text" value="<?= $siswa['nik'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kelas Siswa</label>
                    <input type="text" value="<?= $siswa['kelas'] ?>" class="form-control">
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-primary text-light">
                <small>Dibuat:<?= $siswa['created_at']; ?></small>
                <small>DiUpdate:<?= $siswa['updated_at']; ?></small>
            </div>
        </div>
    </div>
</div>