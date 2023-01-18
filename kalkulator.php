<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>
    <hr>

    <form action="" method="post">
        Nilai 1 : <input type="number" name="nilai1" id=""><br>
        Nilai 2 : <input type="number" name="nilai2" id=""><br><br>

        <input type="submit" value="+" name='operasi'>
        <input type="submit" value="-" name='operasi'>
        <input type="submit" value="*" name='operasi'>
        <input type="submit" value="/" name='operasi'><br><br>

    </form>

    <?php

    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operasi = $_POST['operasi'];

    if ($nilai1 == '' || $nilai2 == '') {
        echo 'Hasil : <input type="text" value=' . 0 . '>';
    } elseif ($operasi == '+') {
        function operasi($nilai1, $nilai2)
        {
            $hasil = $nilai1 + $nilai2;
            return $hasil;
        }
        echo 'Hasil : <input type="text" value=' . operasi($nilai1, $nilai2) . '>';
    } elseif ($operasi == '-') {
        function operasi($nilai1, $nilai2)
        {
            $hasil = $nilai1 - $nilai2;
            return $hasil;
        }
        echo 'Hasil : <input type="text" value=' . operasi($nilai1, $nilai2) . '>';
    } elseif ($operasi == '*') {
        function operasi($nilai1, $nilai2)
        {
            $hasil = $nilai1 * $nilai2;
            return $hasil;
        }
        echo 'Hasil : <input type="text" value=' . operasi($nilai1, $nilai2) . '>';
    } elseif ($operasi == '/') {
        function operasi($nilai1, $nilai2)
        {
            $hasil = $nilai1 / $nilai2;
            return $hasil;
        }
        echo 'Hasil : <input type="text" value=' . operasi($nilai1, $nilai2) . '>';
    }

    ?>

</body>

</html>