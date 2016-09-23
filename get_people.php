<!doctype HTML>
<html>
<head>
<title> PHPTEST </title>
</head>
<body>


<?php
echo "php is a hell of a drug";
$link = mysqli_connect("127.0.0.1","root","boardinghouseprojectiondisruptblurt");
mysqli_select_db($link, "PeopleData");

$q=mysqli_query($link, "SELECT * FROM people");

while($e=mysqli_fetch_assoc($q))
	$output[]=$e;

print(json_encode($output));
mysqli_close();
?>

</body>
</html>
