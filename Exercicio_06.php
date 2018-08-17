<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>6º Exercício</title>
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
    $tempo = isset($_GET["tempo"])?$_GET["tempo"]:0;
	$cigarros = isset($_GET["cigarros"])?$_GET["cigarros"]:0;
	$preco = isset($_GET["preco"])?$_GET["preco"]:0;
	$ano = 365;
	$carteira = 20;
	$quant_cigarros = $tempo * $ano * $cigarros;
	$quant_carteira = $quant_cigarros / $carteira;
	$preco_total = $quant_carteira * $preco;
	echo "Sabia que você já perdeu R$ ".number_format($preco_total,2)." em cigarros !";
?>
</h3>
</div>
</div>
</body>
</html>