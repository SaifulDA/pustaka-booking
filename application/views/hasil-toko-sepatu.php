<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOKO SEPATU</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
    <div class="col-lg-6 mt-5 mx-auto">
        <div class="card">
            <div class="card-header">
                Struk Pembelian Sepatu
                <a href="<?= base_url('tokosepatu'); ?>" class="badge badge-info float-right mt-1">Kembali ke Form</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" border="0">
                    <tbody>
                        <tr>
                            <td scope="col">Nama Pembeli</td>
                            <td scope="col">:</td>
                            <td scope="col"><?= $nama; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No telp/HP</th>
                            <td>:</td>
                            <td><?= $nohp; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Merk Sepatu</th>
                            <td>:</td>
                            <td><?= $merk; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Ukuran Sepatu</th>
                            <td>:</td>
                            <td><?= $ukuran; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Harga</th>
                            <td>:</td>
                            <td><?= $harga; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Jumlah Beli</th>
                            <td>:</td>
                            <td><?= $jumlah; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Total Harga</th>
                            <td>:</td>
                            <td><?= $hasil; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>