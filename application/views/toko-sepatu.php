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
                Form Pembelian Sepatu
            </div>
            <div class="card-body">
                <form action="<?= base_url('tokosepatu/proses'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Pembeli</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="nohp">No Telp/HP</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Telp/HP">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Sepatu</label>
                        <select class="form-control" id="merk" name="merk">
                            <option>-Pilih Merk-</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran Sepatu</label>
                        <select class="form-control" id="ukuran" name="ukuran">
                            <option>-Pilih Ukuran-</option>
                            <?php
                            for ($i = 32; $i <= 44; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nohp">Jumlah Beli</label>
                        <input type="text" class="form-control" id="jml" name="jml" placeholder="Jumlah Beli">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>