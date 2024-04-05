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
                <a class="btn btn-primary btn-sm" href=""><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($DataUser as $user):
                            ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $user->nama ?>
                                </td>
                                <td>
                                    <?= $user->username ?>
                                </td>
                                <td>
                                    <?= $user->password ?>
                                </td>
                                <td>
                                    <?= $user->created_at ?>
                                </td>
                                <td>
                                    <?= $user->updated_at ?>
                                </td>
                                <td class="text-center">
                                    <a href="/user/update/<?= $user->id_user; ?>">Edit </a>|
                                    <a href="/user/delete/<?= $user->id_user; ?>">Delete</a>
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