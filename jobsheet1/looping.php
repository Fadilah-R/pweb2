<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap 1-10 <br>";
    for ($x = 2; $x <= 10; $x += 2){
        echo "$x <br>";
    }
    echo "<br>Perulangan WHILE bilangan ganjil 1-10 <br>";
    $x = 1;
    while ($x <= 10){
        echo "$x <br>";
        $x += 2;
    }
    echo "<br>Perulangan DO WHILE bilangan prima < 20 <br>";
    function isPrime($angka) {//menggunakan function isPrime dg inisialisasi variabel angka
        if ($angka <= 1) {
            return false;
        }
        // berikut untuk menginisialisaikan bilangan prima, yaitu bilangan yang hanya bisa dibagi dg dirinya sendiri
        for ($i = 2; $i * $i <= $angka; $i++) {
            if ($angka % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $x = 2; // Mulai dari bilangan prima terkecil (2)
    do {
        if (isPrime($x)) {
            echo $x . "<br>";
        }
        $x++;
    } while ($x < 20);
    ?>
</body>
</html>