<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6 justify-content-x">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <table class="table table-stripped">
        <tr>
            <th>No</th>
            <th nowrap>Photo</th>
            <th nowrap>Nama</th>
            <th nowrap>Email</th>
            <th nowrap>Bergabung</th>
            <th nowrap>Status</th>
            <th nowrap>Aksi</th>
        </tr>
        <?php
        $i = 1;
        foreach ($anggota as $a) { ?>

            <tr>
                <td><?= $i++; ?></td>
                <td><img src="<?= base_url('assets/img/profile/') . $a->image; ?>" class="rounded" alt="..." width="50px" height="65px"></td>
                <td><?= $a->nama; ?></td>
                <td><?= $a->email; ?></td>
                <td><?= date('d F Y', $a->tanggal_input); ?></td>
                <?php if ($a->is_active == 1) {
                    $status = "Aktif";
                } else {
                    $status = "Tidak Aktif";
                } ?>
                <td><?= $status; ?></td>
                <td><a href="<?= base_url('user/hapusAnggota/' . $a->id); ?>" class="btn btn-sm btn-outline-danger"><i class="fas fa-fw fa-trash"></i></a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->