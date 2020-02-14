<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>$_POST</title>
</head>
<body>
   <?php
	require_once("samochod.php");
	require_once("modelPierwszy.php");
	require_once("modelDrugi.php");
	$modelPierwszy=new modelPierwszy();
	$modelPierwszy->ustaw(7, 5.12);//spalanie, koszt paliwa
	echo $modelPierwszy->koszt(3)."<br />";
	
	
	$modelDrugi=new modelDrugi();
	$modelDrugi->ustaw(5.1, 5.12);//spalanie, koszt paliwa
	echo $modelDrugi->koszt(3.5)."<br />";
	
	?>   
</body>
</html>