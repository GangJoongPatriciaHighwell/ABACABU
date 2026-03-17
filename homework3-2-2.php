<html>
<head><meta charset="utf-8"></head>
<body>
<h3>Homework 3-2 : Sorting 결과</h3>
<?php
$n = $_POST['n'];

if ($n >= 10 && $n <= 100) {
    $arr = array();
    
    // 랜덤 넘버 생성 및 출력
    echo "<b>생성된 결과:</b><br>";
    for($i = 0; $i < $n; $i++) {
        $arr[$i] = rand(1, 100); // 1~100 사이 랜덤
        echo $arr[$i] . " ";
    }
    echo "<br><br>";

    // 올림차순 정렬
    sort($arr);

    // 정렬된 결과 출력
    echo "<b>올림차순 소팅 결과:</b><br>";
    for($i = 0; $i < $n; $i++) {
        echo $arr[$i] . " ";
    }
} else {
    echo "10 이상 100 이하의 정수를 입력하세요.";
}
?>
</body>
</html>