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
                <p class="login-box-msg">Silahkan Login</p>
                <form action="<?= base_url('login/login') ?>" method="post">
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
                    <div class="d-flex">
                        <button name="kirim" value='login' type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
                
                <p class="mb-0">
                    <a href="<?= base_url('register') ?>" class="text-center">Buat Akun Baru</a>
                </p>
            </div>
    
        </div>
    </div>
</div>

<?= $footer ?>