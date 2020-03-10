<div class="container">
    <h3 class="h3 mt-3">Order Makanan</h3>
    <a class="btn btn-sm btn-primary mb-3" href="<?= site_url('order/tambah_order') ?>">Tambah masakan</a>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>No meja</th>
            <th>Tanggal</th>
            <th>User</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($orderall as $key) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $key['no_meja'] ?></td>
                <td><?= $key['order_tanggal'] ?></td>
                <td><?= $key['user_id'] ?></td>
                <td><?= $key['order_keterangan'] ?></td>
                <td>
                    <?php if ($key['order_status'] == 0) { ?>
                        <a class="btn btn-sm btn-success" onclick="return confirm('maaf saya belum selesai') ">Order</a>
                    <?php } else { ?>
                    <a class="btn btn-sm btn-danger" onclick="return confirm('maaf saya belum selesai')" >Sudah order</a>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>