<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <h3>MENGHITUNG LUAS PERSEGI PANJANG</h3>
    <form method="post" action="">
        Masukkan panjang : 
        <input type="number" name="panjang"> <br>
        Masukkan lebar : 
        <input type="number" name="lebar"> <br>
        <input type="submit" value="Hitung Luas">
    </form>
    <?php
    function persegi_panjang($panjang, $lebar){
        return $panjang*$lebar;
    }
    // function lingkaran($r){
    //     return 3.14*$r*$r;
    // }
    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
    echo "Luas persegi panjang : ". persegi_panjang($panjang, $lebar). "<br>";
    }
    ?>
</body>
</html>