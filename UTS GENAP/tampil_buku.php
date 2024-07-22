<?php
//memanggil kelas
include 'Buku.php';
//instansiasi class database
$db = new Database;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIBUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<div class="px-4 py-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIBUK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_buku">Buku</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li> -->
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="px-5">
<h3>Data Buku</h3>
<a href="tambah_buku.php"><button type="button" 
class="btn btn-success mb-2 mt-2">Tambah Data</button></a>
<table class="table table-striped table-sm">
    <tr>
        <th>No</th>
        <th>ID Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($db->tampilkan_buku() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['id'] ?></td>
        <td><?php echo $x['judul'] ?></td>
        <td><?php echo $x['pengarang'] ?></td>
        <td><?php echo $x['tahun_terbit'] ?></td>
        <td><?php echo $x['harga'] ?></td>
        <td>
            <a href="edit_buku.php?id=<?php echo $x['id']; ?>&aksi=edit_buku"><button type="button" 
            class="btn btn-primary">Edit</button></a>
            <a href="proses_buku.php?id=<?php echo $x['id']; ?>&aksi=hapus_buku"><button type="button" 
            class="btn btn-danger">Hapus</button></a>
        </td>
    </tr>
<?php
}
?>
</table>
</div>
</div>