<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>11º Exercício</title>
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
>>>
<?php
    $preco = isset($_GET["preco"])?$_GET["preco"]:0;
	echo "Preço = R$ $preco </br>";
	$ncq = 0;
	$nv = 0;
	$nt = 0;
	$nc = 0;
	$nd = 0;
	$mcq = 0;
	$mvc = 0;
	$mt = 0;
	$mc = 0;
	while( $preco >= 50 ){
		$preco -= 50;
		$ncq++;
	}
	while( $preco >= 20 ){
		$preco -= 20;
		$nv++;
	}
	while( $preco >= 10 ){
		$preco -= 10;
		$nt++;
	}
	while( $preco >= 5 ){
		$preco -= 5;
		$nc++;
	}
	while( $preco >= 2 ){
		$preco -= 2;
		$nd++;
	}
	while( $preco >= 0.50 ){
		$preco -= 0.50;
		$mcq++;
	}
	while( $preco >= 0.25 ){
		$preco -= 0.25;
		$mvc++;
	}
	while( $preco >= 0.10 ){
		$preco -= 0.10;
		$mt++;
	}
	while( $preco >= 0.05 ){
		$preco -= 0.05;
		$mc;
	}
	echo "<table border = '1' align = 'center' width = '50%'>";
	echo "<caption>Notas</caption>";
	echo "<tr>";
	echo "<th>Cédula</th>";
	echo "<th>Quantidade</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>50</td>";
	echo "<td>$ncq</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>20</td>";
	echo "<td>$nv</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>10</td>";
	echo "<td>$nt</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>5</td>";
	echo "<td>$nc</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>2</td>";
	echo "<td>$nd</td>";
    echo "</tr>";
	echo "</table>";
	
	echo "</br>";
	
	echo "<table border = '1' align = 'center' width = '50%'>";
	echo "<caption>Moedas</caption>";
	echo "<tr>";
	echo "<th>Valor</th>";
	echo "<th>Quantidade</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>0.50</td>";
	echo "<td>$mcq</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>0.25</td>";
	echo "<td>$mvc</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>0.10</td>";
	echo "<td>$mt</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<td>0.05</td>";
	echo "<td>$mc</td>";
    echo "</tr>";
	echo "</table>";
?>
</h3>
</div>
</div>
</body>
</html>