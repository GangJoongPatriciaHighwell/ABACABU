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

echo "1 * ... * {$n} = {$prod}<br>";
?>
</body>
</html>
