<html>
<head><meta charset="utf-8"></head>
<body>
<h3>Homework 3-3 : Fibonacci 결과</h3>
<?php
$n = $_POST['n'];

if ($n > 0 && $n <= 100) {
    $f = array();
    $f[1] = 1;
    $f[2] = 1;

    // 비율을 구하려면 다음 항($n+1)까지 미리 계산해 둬야 해.
    for($i = 3; $i <= $n + 1; $i++) {
        $f[$i] = $f[$i-1] + $f[$i-2];
    }

    echo "i &nbsp;&nbsp;&nbsp; f_i &nbsp;&nbsp;&nbsp; f_{i+1} / f_i<br>";
    echo "--------------------------<br>";
    
    for($i = 1; $i <= $n; $i++) {
        if ($i < $n) {
            $ratio = $f[$i+1] / $f[$i];
            echo $i . " &nbsp;&nbsp;&nbsp; " . $f[$i] . " &nbsp;&nbsp;&nbsp; " . $ratio . "<br>";
        } else {
            // 마지막 항은 다음 항과 비교할 수 없으니 비율 출력 생략
            echo $i . " &nbsp;&nbsp;&nbsp; " . $f[$i] . "<br>";
        }
    }
} else {
    echo "1부터 100 사이의 정수를 입력하세요.";
}
?>
</body>
</html>