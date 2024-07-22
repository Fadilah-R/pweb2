<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.101.0">
    <title>SIATUSa-PNC</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/brand/faviconpnc.png" rel="icon">
    <link href="assets/brand/apple-touch-iconpnc.png" rel="apple-touch-icon">
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    
<form class="form-signin" method="POST" action="login.php">
<div class="text-center mb-4">
    <img class="mb-4" src="assets/brand/logopnc.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">SIATUSa-PNC Daftar Akun</h1>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" placeholder="Masukkan Email Anda" required autofocus>
    <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email Anda dengan siapa pun</small>
  </div>
  <div class="form-label-group">
    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Anda" required autofocus>
    <label>Masukkan Nama Lengkap Anda</label>
  </div>
  <div class="form-label-group">
    <input type="text" class="form-control" name="username" placeholder="Buat Username Anda" required autofocus>
    <label>Buat Username Anda</label>
  </div>
  <div class="form-label-group">
    <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
    <label>Masukkan Password Anda</label>
  </div>
  <div class="form-label-group">
    <select class="form-control" name="level">
      <option value="Mahasiswa">Mahasiswa</option>
      <option value="Dosen">Dosen</option>
      <option value="Admin">Admin</option>
    </select>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar Sekarang</button>
  <div class="col-12">
  <p class="small mb-0">Sudah punya akun? <a href="login.php">Login di sini</a></p>
  </div>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2023-<?=date('Y')?></p>
</form>


    
  </body>
</html>