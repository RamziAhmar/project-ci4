<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $judul ?> | <?= $title ?></title>
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="header-title">
            <h4>
                <?= $title ?>
            </h4>
        </div>
        <form action="<?= base_url('dosen') ?>" method="POST">
        <div class="modal-body">
                <div class="form-group">
                    <label for="kode_dosen">Kode</label>
                    <input type="text" class="form-control <?= session('errors.kode_dosen') ? 'is-invalid' : '' ?>" name="kode_dosen" id="kode_dosen" placeholder="Kode Dosen" value="<?= old('kode_dosen') ?>">
                    <?php if(session('errors.kode_dosen')) : ?>
                        <div class="invalid-feedback">Kode Dosen tidak boleh kosong</div>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="nama_dosen">Nama</label>
                    <input type="text" class="form-control <?= session('errors.nama_dosen') ? 'is-invalid' : '' ?>" name="nama_dosen" id="nama_dosen" placeholder="Nama Dosen" value="<?= old('nama_dosen') ?>">
                    <?php if(session('errors.nama_dosen')) : ?>
                        <div class="invalid-feedback">Nama Dosen tidak boleh kosong!</div>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <label for="status_dosen">Status</label>
                    <select name="status_dosen" id="status_dosen" class="form-control <?= session('errors.status_dosen') ? 'is-invalid' : '' ?>">
                        <option value="">--Pilih--</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                    <?php if(session('errors.status_dosen')) : ?>
                        <div class="invalid-feedback">Status Dosen tidak boleh kosong!</div>
                    <?php endif ?>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('dosen') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>