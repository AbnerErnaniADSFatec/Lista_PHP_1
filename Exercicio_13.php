<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>13º Exercício</title>
<link rel = 'stylesheet' type = 'text/css' href = '_css/estilo.css'/>
</head>
<body>
<div id = 'titulo' >
<h1>Testanto PHP</h1>
</div>
<div id = 'code' >
<h2>
Código Saída:</br>
</h2>
<div id = 'cmd'>
<h3>
<?php
    $velocidade = isset($_GET["velocidade"])?$_GET["velocidade"]:0;
	$tempo = isset($_GET["tempo"])?$_GET["tempo"]:0;
	$distancia = $velocidade * $tempo;
	$litros = $distancia / 12;
	echo "<table width = '50%'>";
	echo "<tr>";
	echo "<td>Velocidade Média</td>";
	echo "<td>$velocidade km/h</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Tempo Gasto</td>";
	echo "<td>$tempo horas</td>";
	echo "</td>";
	echo "<tr>";
	echo "<td>Distância</td>";
	echo "<td>$distancia km</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Combustível Gasto</td>";
	echo "<td>".number_format($litros,2)." L</td>";
	echo "</tr>";
	echo "</table>";
?>
</h3>
</div>
</div>
</body>
</html>