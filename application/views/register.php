<?= $header ?>

<?php if($this->session->flashdata('error')) { ?>
    <div id="toastsContainerTopRight" class="toasts-top-right mt-3 mr-3 fixed">
        <div class="toast bg-danger fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header"><strong class="mr-auto">Error</strong><small>Subtitle</small><button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="toast-body"><?= $this->session->flashdata('error') ?></div>
        </div>
    </div>
<?php } ?>

<div class="d-flex align-items-center justify-content-center" style='height: 100vh'>
    <div class="login-box">
        <div class="login-logo">
            <span><?= $title ?></span>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Register</p>
                <form action="<?= base_url('register/register') ?>" method="post">
                    <div class="input-group mb-3">
                        <input required name="username" type="text" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input required type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <!-- <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin"> -->
                        <select name="jk" id="jk" class="form-control">
                            <option selected>-- Pilih Jenis Kelamin --</option>
                            <option value='L'>Laki-Laki</option>
                            <option value='P'>Perempuan</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-venus-mars"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" name="no_hp" class="form-control" placeholder="Nomor HP">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button name="kirim" value='login' type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>

                <p class="mb-0">
                    <a href="<?= base_url('login') ?>" class="text-center">Kembali</a>
                </p>
            </div>

        </div>
    </div>
</div>

<?= $footer ?>