<?php
$hasil = 0; // Inisialisasi $hasil

if (isset($_POST['hitung'])) {
    $bilangan1 = floatval($_POST['bilangan1']);
    $bilangan2 = floatval($_POST['bilangan2']);
    $operator = $_POST['operator'];

    if ($operator == "+") {
        $hasil = $bilangan1 + $bilangan2;
    } elseif ($operator == "-") {
        $hasil = $bilangan1 - $bilangan2;
    } elseif ($operator == "*") {
        $hasil = $bilangan1 * $bilangan2;
    } elseif ($operator == "/") {
        if ($bilangan2 == 0) {
            echo "Tidak bisa membagi dengan nol.";
        } else {
            $hasil = $bilangan1 / $bilangan2;
        }
    } elseif ($operator == "<") {
        $bil = $bilangan1 < $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    } elseif ($operator == ">") {
        $bil = $bilangan1 > $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    } elseif ($operator == "<=") {
        $bil = $bilangan1 <= $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    } elseif ($operator == ">=") {
        $bil = $bilangan1 >= $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    } elseif ($operator == "!=") {
        $bil = $bilangan1 != $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    } elseif ($operator == "==") {
        $bil = $bilangan1 == $bilangan2;
        if ($bil == TRUE) {
            $hasil = "BENAR";
        } else {
            $hasil = "SALAH";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITUNG</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hitung Bilangan</h1>
        <form method="post" action="">
            <label for="">Input Bilangan 1</label>
            <input type="text" id="bil" name="bilangan1"><br>
            <label for="">Input Bilangan 2</label>
            <input type="text" id="bil" name="bilangan2"><br>
            Operator
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="<"><</option>
                <option value=">">></option>
                <option value="<="><=</option>
                <option value=">=">>=</option>
                <option value="!=">!=</option>
                <option value="==">==</option>
            </select><br>
            <div class="hasil">
                <h1><?php echo "$hasil"; ?></h1>
            </div>
            <br>
            <input id="btn" type="submit" name="hitung" value="Hitung">
        </form>
    </div>
</body>
</html>
