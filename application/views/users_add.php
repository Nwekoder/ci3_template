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
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Add User</h3>
        </div>


        <form action='<?= base_url('users/add_data') ?>' method='POST'>
        <div class="card-body">
            <div class="form-group">
              <label for="nama_lengkap">Nama Lengkap</label>
              <input type="text" class="form-control" name='nama_lengkap' id="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name='username' id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name='email' id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name='password' id="password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="jk">Jenis Kelamin</label>
              <select name="jk" class='form-control' id="jk">
                <option selected>-- Pilih Jenis Kelamin --</option>
                <option value='L'>Laki-Laki</option>
                <option value='P'>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="no_hp">Nomor HP</label>
              <input type="tel" class="form-control" name='no_hp' id="no_hp" placeholder="Nomor HP">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" name='alamat' id="alamat" placeholder="Alamat">
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name='kirim' value='kirim data' class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $footer ?>