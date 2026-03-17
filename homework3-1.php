<html>
<head><meta charset="utf-8"></head>
<body>
<h3>Homework 3-1 : Sum, Factorial</h3>
<?php
$n = 30;
$sum = 0;
$prod = 1;

for($i = 1; $i <= $n; $i++) {
    $sum += $i;
    $prod *= $i; 
}

echo "1 + ... + {$n} = {$sum}<br>";
// 30팩토리얼은 값이 매우 커서 PHP에서 지수(E) 형태로 자동 출력될 수 있어.
echo "1 * ... * {$n} = {$prod}<br>";
?>
</body>
</html>