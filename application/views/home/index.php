    <?php
    if (!empty($this->session->userdata('email'))) {
        ?>
        <div class="jumbotron">
            <h1 class="display-4">Halo <b><?= $user; ?></b>, Selamat Datang di Pustaka Booking</h1>
            <p class="lead">Website ini digunakan untuk melakukan reservasi peminjaman buku pada perpustakaan.<br> untuk melihat katalog buku silahkan klik tombol berikut <i class="fas fa-angle-double-right"></i> <a href="<?= base_url('buku/lihat_katalog'); ?>" class="btn btn-secondary">Katalog</a></p>
            <hr class="my-4">
            <p>Untuk melihat data booking, silahkan klik tombol berikut</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Data Booking <i class="fas fa-angle-double-right"></i> </a>
        </div>
    <?php } else { ?>
        <div class="jumbotron">
            <h1 class="display-4">Halo <b><?= $user; ?></b>, Selamat Datang di Pustaka Booking</h1>
            <p class="lead">Website ini digunakan untuk melakukan reservasi peminjaman buku pada perpustakaan.<br> untuk melihat katalog buku silahkan klik tombol berikut <i class="fas fa-angle-double-right"></i> <a href="<?= base_url('buku/lihat_katalog'); ?>" class="btn btn-secondary">Katalog</a></p>

        </div>

    <?php  } ?>

    <!-- login modal -->
    <div class="modal fade" tabindex="-1" id="loginModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('member'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>