<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>12º Exercício</title>
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
    $peso = isset($_GET["peso"])?$_GET["peso"]:0;
	$altura = isset($_GET["altura"])?$_GET["altura"]:0;
	$altura = $altura / 100;
	$imc = $peso / ( $altura * $altura );
	echo "Classificação = ";
	if( $imc < 18.5 ){
		echo "Abaixo do Peso";
	}else if( 18.5 <= $imc && $imc < 25 ){
		echo "Peso Normal";
	}else if( 25 < $imc && $imc <= 30 ){
		echo "Acima do peso";
	}else if( $imc > 30 ){
		echo "Obeso";
	}
	echo "</br>IMC = ".number_format($imc,2);
?>
</h3>
</div>
</div>
</body>
</html>