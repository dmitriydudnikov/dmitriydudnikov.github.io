<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Работа с массивами</title>
</head>

<body>

<form method="post" action=''>

<input type="text" name="a" placeholder="Введите число" required>

<input type="text" name="b" placeholder="Введите номер месяца" required>

<input type='submit' name='data' value='Показать дату'> 

</form> 



<?php 
$arr = array(января, февраля, марта, апреля, мая, июня, июля, августа, сентября, октября, ноября, декабря); 

$a = $_POST['a'];
$b = $_POST['b'];

if ($_POST['data'])
{ 
    if ($b>12 || $b<1 || $a>31) echo "Месяц указан не верно или число.";
  					else echo "Введена дата &laquo;$a " .$arr[$b-1] ."&raquo;.";
  } 
?>

</body>
</html>



