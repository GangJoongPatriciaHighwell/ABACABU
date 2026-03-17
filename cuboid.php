<html>
<head><meta charset="utf-8"></head>
<body>
직육면체: 가로, 세로, 높이를 입력 받아서 체적을 출력한다<br>
가로 <?php echo $_POST["가로"]; ?><br>
세로 <?php echo $_POST["세로"]; ?><br>
높이 <?php echo $_POST["높이"]; ?><br>
체적 <?php echo $_POST["가로"] * $_POST["세로"] * $_POST["높이"]; ?><br>
</body>
</html>