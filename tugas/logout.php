<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['password']);

session_destroy();
echo "<script>alert('Anda telah logout dari halaman ini');
document.location='login.php'</script>";

?>