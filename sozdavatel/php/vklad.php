<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Калькулятор</title>
</head>

<body>
	
<form method="post" action=''>
<input type="text" name="a" placeholder="Сумма вклада" required>

<input type="text" name="b" placeholder="Срок вклада в месяцах" required>

<input type="text" name="c" placeholder="Годовой процент" required>

<input type='submit' name='vichislit' value='Вычислить'> 
<input type="reset" name='ochistit' value='Отменить'>  
</form> 


<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];


if ($_POST['vichislit'])
{
{$d =$a * (((($c/12) * $b))/100+1); echo "Сумма вклада после $b месяцев при годовой процентной ставке $c % будет равна $d рублей.";}
}
?>


</body>
</html>