<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Калькулятор</title>
</head>

<body>
	
<form method="post" action=''>
<input type="text" name="a" required>

<select name="operation" required>
<option value='+'/>+</option>
<option value='-'/>-</option>
<option value='*'/>*</option>
<option value='/'/>/</option>
<select>

<input type="text" name="b" required><br><br>

<input type='submit' name='vichislit' value='Вычислить'> 
<input type="reset" name='ochistit' value='Отменить'>  
</form> 


<?php
$a = $_POST['a'];
$b = $_POST['b'];
$g = $_POST['operation'];
if ($_POST['vichislit'])
{
if ($g=='+'){$c = $a + $b; echo  $c;}
elseif ($g=='-'){$d = $a - $b; echo $d;}
elseif ($g=='*'){$e = $a *$b;  echo  $e;}

elseif ($g=='/'){if ($b==0) echo "На ноль делить нельзя.";
  					else $f = $a / $b; echo $f;}
}
?>

</body>
</html>