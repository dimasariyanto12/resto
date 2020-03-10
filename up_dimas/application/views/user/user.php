<div class="container">
    <h3>Data Users</h3>
    <a href="<?= site_url('admin/tambah_user') ?>" class="btn btn-primary">Tambah User</a><br><br>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Nama Username</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($userall as $key) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $key['user_nama'] ?></td>
                <td><?= $key['user_password'] ?></td>
                <td>
                <a href="" class="badge badge-warning">Edit</a> |
                <a onclick="return('anda yakin?')"  href="" class="badge badge-danger">Delete</a>
                    
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
