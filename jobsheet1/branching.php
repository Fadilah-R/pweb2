<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post" action="">Masukkan bilangan: 
        <input type="number" name="bilangan">
        <input type="submit" value="Cek">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan_input = $_POST["bilangan"];
    }

    if($bilangan_input > 0){
        echo $bilangan_input. " adalah bilangan positif <br>";
    }elseif ($bilangan_input < 0) {
        echo $bilangan_input. " adalah bilangan negatif <br>";
    }else {
        echo $bilangan_input. " adalah bilangan nol";
    }
    ?>
</body>
</html>