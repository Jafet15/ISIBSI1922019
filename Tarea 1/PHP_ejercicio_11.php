<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sel = $_POST['sel'];


if($num1 == 0 | $num2 == 0)
{
	echo "no se permiten ceros o campos vacios";
	
}
else
{
	if ($sel == "+") 
	{
		echo $Suma= "El resultado de la suma es: ",$num1 + $num2."<br>"; 
	}
	elseif ($sel == "-") {
		echo $Resta= "El resultado de la resta es: ", $num1 - $num2."<br>"; 
	}
	elseif ($sel == "*")
	{
		echo $Mul = "El resultado de la multiplicacion es: ",$num1 * $num2."<br>";
	}
	else
	{
		echo $Div = "El resultado de la division es: ",$num1 / $num2."<br>";

	}




}
?>