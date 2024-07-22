<?php

//panggil koneksi database
include 'koneksi.php';
$pass=md5($_POST['password']);
$username=mysqli_escape_string($koneksi,$_POST['username']);
$password=mysqli_escape_string($koneksi,$pass);
$level=mysqli_escape_string($koneksi,$_POST['level']);

//cek username, terdaftar atsu tidak
$cek_user=mysqli_query($koneksi, "SELECT * FROM user where username=
'$username' and level='$level'");
$user_valid=mysqli_fetch_array($cek_user);

//uji jika username terdaftar
if ($user_valid){
    //jika username terdaftar
    //cek password apa terdaftar atau tidak
    if($password == $user_valid['password']){
        //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if($level == "Mahasiswa"){
            echo "<script>alert('Login Berhasil');
            document.location='dash_mhs.php'</script>";
        }elseif($level == "Dosen"){
            echo "<script>alert('Login Berhasil');
            document.location='dash_dosen.php'</script>";
        }elseif($level == "Admin"){
            echo "<script>alert('Login Berhasil');
            document.location='dash_admin.php'</script>";
        }
    }else{
        echo "<script>alert('Maaf, Login gagal, Password Anda salah!');
        document.location='login.php'</script>";
    }
}else{
    echo "<script> alert('Maaf, Login gagal, Username Anda tidak terdaftar!');
        document.location='login.php'</script>";
}
?>
