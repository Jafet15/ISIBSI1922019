<!DOCTYPE html> 
<html>
<head>

</head>

<body>

<form action= "PHP_ejercicio_10_codigo.php" method = "post" name="frm">

<input type = "text" name = "textoplano"/>
<br>
<br>
<textarea name="texto" rows = "3"></textarea>
<br>
<br>
<select name="Seleccion">

<option>Hombre</option>

<option>Mujer</option>


</select>
<br>
<br>

<input type="checkbox" name="transporte" value="coche">Coche
<br>
<input type="checkbox" name="transporte" value="avion" checked>Avión
<br>
<input type="checkbox" name="transporte" value="tren">Tren
<br>
<br>

<input type="Radio" name="color" value="rojo"> Rojo 
<br> 
<input type="Radio" name="color" value="verde"> Verde 
<br> 
<input type="Radio" name="color" value="azul"> Azul 
<br> 
<br> 
<input type="range" name="rango">
<br> 
<br> 
<input type = "submit" value="Mostrar datos en PHP"/>

</form>


</body>

</html> 