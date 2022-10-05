<?= $header ?>
<?= $navbar ?>
<?= $sidebar ?>

<?php
  if(!$this->session->userdata('username')) {
    redirect('login');
  }
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>3</h3>
              <p>Total User</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="<?= base_url('users') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>1</h3>
              <p>User (L)</p>
            </div>
            <div class="icon">
              <i class="fas fa-male"></i>
            </div>
            <a href="<?= base_url('users') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>2</h3>
              <p>User (P)</p>
            </div>
            <div class="icon">
              <i class="fas fa-female"></i>
            </div>
            <a href="<?= base_url('users') ?>" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>3</h3>
              <p>Total Konten</p>
            </div>
            <div class="icon">
              <i class="fas fa-file"></i>
            </div>
            <div class="small-box-footer h-100">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $footer ?>