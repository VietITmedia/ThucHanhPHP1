<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Tạo số ngẫu nhiên từ -100 đến 100
$N = rand(-100, 100);

echo "N = " . $N . "<br>";

if ($N > 0) {

    echo "N là số dương<br>";

    // 1. In các ước số của N
    echo "Các ước số của N: ";

    for ($i = 1; $i <= $N; $i++) {
        if ($N % $i == 0) {
            echo $i . " ";
        }
    }

    echo "<br>";

    // 2. Kiểm tra N có phải số nguyên tố
    function kiemTraSoNguyenTo($n)
    {
        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }

    if (kiemTraSoNguyenTo($N)) {
        echo "N là số nguyên tố<br>";
    } else {
        echo "N không phải số nguyên tố<br>";
    }

    // 3. Tổng các số nguyên tố nhỏ hơn N
    $tong = 0;

    for ($i = 2; $i < $N; $i++) {
        if (kiemTraSoNguyenTo($i)) {
            $tong = $tong + $i;
        }
    }

    echo "Tổng các số nguyên tố nhỏ hơn N: " . $tong . "<br>";

    // 4. Kiểm tra số chính phương
    $can = sqrt($N);

    if ($can == (int)$can) {
        echo "N là số chính phương";
    } else {
        echo "N không phải số chính phương";
    }

} else {

    echo "N không phải số dương";

}

?>
    

</body>
</html>