<html>
<body>
<h2> 놀이공원 입장권 구매 </h2>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<form action="homework4.php" method="get">
고객이름 : <input type="text" name="name"><br>
<input type="submit" value="합계"> <br>
<br>

<table>
    <tr>
        <th>No</th>
        <th>구분</th>
        <th colspan="2">어린이</th>
        <th colspan="2">어른</th>
        <th>비고</th>
    </tr>

    <tr>
        <td>1</td>
        <td>입장권</td>
        <td>7000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>10000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>입장</td>
    </tr>

    <tr>
        <td>2</td>
        <td>BIG3</td>
        <td>12000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>16000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>입장+놀이3종</td>
    </tr>

    <tr>
        <td>3</td>
        <td>자유이용권</td>
        <td>21000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>26000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>입장+놀이자유</td>
    </tr>

    <tr>
        <td>4</td>
        <td>연간이용권</td>
        <td>70000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>90000</td>
        <td>
            <select name="select[]">
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </td>
        <td>입장+놀이자유</td>
    </tr>
</table>
</form>

<?php
if (isset($_GET["name"]) && isset($_GET["select"])) {

    $name = $_GET["name"];

    $select1 = $_GET["select"][0];
    $select2 = $_GET["select"][1];
    $select3 = $_GET["select"][2];
    $select4 = $_GET["select"][3];
    $select5 = $_GET["select"][4];
    $select6 = $_GET["select"][5];
    $select7 = $_GET["select"][6];
    $select8 = $_GET["select"][7];

    $total = $select1 * 7000
           + $select2 * 10000
           + $select3 * 12000
           + $select4 * 16000
           + $select5 * 21000
           + $select6 * 26000
           + $select7 * 70000
           + $select8 * 90000;

    if ($name == "") {
        echo "<br>고객이름을 입력하세요.";
    }
    else if ($total == 0) {
        echo "<br>수량을 선택하세요.";
    }
    else {
        echo "<br>";
        date_default_timezone_set("Asia/Seoul");
        echo date("Y년 m월 d일 H:i:s a") . "<br>";
        echo $name . " 고객님 감사합니다.<br>";

        if ($select1 > 0) echo "어린이 입장권 " . $select1 . "매<br>";
        if ($select2 > 0) echo "어른 입장권 " . $select2 . "매<br>";
        if ($select3 > 0) echo "어린이 BIG3 " . $select3 . "매<br>";
        if ($select4 > 0) echo "어른 BIG3 " . $select4 . "매<br>";
        if ($select5 > 0) echo "어린이 자유이용권 " . $select5 . "매<br>";
        if ($select6 > 0) echo "어른 자유이용권 " . $select6 . "매<br>";
        if ($select7 > 0) echo "어린이 연간이용권 " . $select7 . "매<br>";
        if ($select8 > 0) echo "어른 연간이용권 " . $select8 . "매<br>";

        echo "합계 " . number_format($total) . "원입니다.<br>";

        $conn = mysqli_connect("localhost", "root", "", "pricecal");
        mysqli_set_charset($conn, "utf8");

        $sql = "insert into pricecal(name, select1, select2, select3, select4, select5, select6, select7, select8, total)
                values('$name', $select1, $select2, $select3, $select4, $select5, $select6, $select7, $select8, $total)";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
}
?>

<br>
<a href="homework4_list.php">전체 리스트 보기</a>

</body>
</html>
