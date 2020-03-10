<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <h3><?= $title ?></h3>
    <hr>
    <form action="<?= site_url('admin/tambah_masakan') ?>" method="post">
        <table>
            <tr>
                <td><label>nama masakan</label></td>
                <td> <input type="text" name="masakan_nama" autocomplete="off"></td>
            </tr>
            <tr>
                <td></td>
                <td><?= form_error('masakan_nama', '<small>', '</small>') ?></td>
            </tr>
            <tr>
                <td><label>harga </label></td>
                <td><input type="number" name="masakan_harga" autocomplete="off"></td>
            </tr>
            <tr>
                <td></td>
                <td><?= form_error('masakan_harga', '<small>', '</small>') ?></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>

</body>

</html>