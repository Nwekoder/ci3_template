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
          <h1 class="m-0">Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="card-title">Daftar User</h3>

          <div class="ml-auto">
            <a href="<?= base_url('users/add') ?>" class="btn bg-gradient-primary">Tambah User</a>
          </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 16px">ID</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th colspan='2'></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users->result() as $user) { ?>
                <tr>
                  <td><?= $user->id_user ?></td>
                  <td><?= $user->username ?></td>
                  <td><?= $user->nama_lengkap ?></td>
                  <td><?= $user->email ?></td>
                  <td><?= $user->jk ?></td>
                  <td><a href="<?= base_url('users/edit/' . $user->id_user) ?>" class="btn bg-gradient-info">Edit</a></td>
                  <td><a href="<?= base_url('users/delete/' . $user->id_user) ?>" class="btn bg-gradient-danger">Delete</a></td>
                </tr>
                
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $footer ?>