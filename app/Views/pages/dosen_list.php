<?= view("layout/header") ?>
<div class="row">
    <div class="col-12">
        <?php if (!empty(session()->getFlashdata('message'))): ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>
                    <?php echo session()->getFlashdata('message'); ?>
                </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        <?php endif ?>
        <div class="card">

            <div class="card-header">
                <a class="btn btn-primary btn-sm" href="dosen/tambah_dosen"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($DataDosen as $dosen):
                            ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $dosen['kode_dosen'] ?>
                                </td>
                                <td>
                                    <?= $dosen['nama_dosen'] ?>
                                </td>
                                <td>
                                    <?= $dosen['status_dosen'] ?>
                                </td>
                                <td class="text-center">
                                    <a href="/dosen/update/<?= $dosen['id_dosen']; ?>">Edit </a>|
                                    <a href="/dosen/delete/<?= $dosen['id_dosen']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= view("layout/footer") ?>