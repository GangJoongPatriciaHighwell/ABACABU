<html>
<body>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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

<?php
$conn = mysqli_connect("localhost", "root", "", "pricecal");
mysqli_set_charset($conn, "utf8");

$sql = "select * from pricecal order by id desc";
$result = mysqli_query($conn, $sql);
?>

<h2>전체 리스트 보기</h2>

<table>
    <tr>
        <th>번호</th>
        <th>고객이름</th>
        <th>입장권 어린이</th>
        <th>입장권 어른</th>
        <th>BIG3 어린이</th>
        <th>BIG3 어른</th>
        <th>자유이용권 어린이</th>
        <th>자유이용권 어른</th>
        <th>연간이용권 어린이</th>
        <th>연간이용권 어른</th>
        <th>합계</th>
        <th>등록일시</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["select1"]; ?></td>
        <td><?php echo $row["select2"]; ?></td>
        <td><?php echo $row["select3"]; ?></td>
        <td><?php echo $row["select4"]; ?></td>
        <td><?php echo $row["select5"]; ?></td>
        <td><?php echo $row["select6"]; ?></td>
        <td><?php echo $row["select7"]; ?></td>
        <td><?php echo $row["select8"]; ?></td>
        <td><?php echo $row["total"]; ?></td>
        <td><?php echo $row["regdate"]; ?></td>
    </tr>
    <?php
    }
    ?>

</table>

<br>
<a href="homework4.php">입력화면으로 돌아가기</a>

</body>
</html>