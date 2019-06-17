<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
if($num1 == 0 | $num2 == 0)
{
	echo "no se permiten ceros";
	
}
else
{
echo $Suma= "El resultado de la suma es: ",$num1 + $num2."<br>"; 
echo $Resta= "El resultado de la resta es: ", $num1 - $num2."<br>"; 
echo $Mul = "El resultado de la multiplicacion es: ",$num1 * $num2."<br>";
echo $Div = "El resultado de la division es: ",$num1 / $num2."<br>";
}
?>