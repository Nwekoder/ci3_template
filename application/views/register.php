<?= $header ?>

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