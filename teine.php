<?php 
	session_start();
	$first_name = $_SESSION["first_name"];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>2-periood-9-praktikum-teine</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<pre>
	<?php
	print_r($_SESSION);
?>
</pre>
<br>
<?php
	echo $first_name;
?>
<a href="index.php">esimene leht</a>

<?php
	$muutuja = array("esimene" => 3,"teine" => 4, "kolmas" => 5);
	print_r($muutuja);
	echo $muutuja["teine"];
?>

</body>
</html>