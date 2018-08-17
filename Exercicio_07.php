<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>7º Exercício</title>
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
    $x = isset($_GET["x"])?$_GET["x"]:0;
	$y = isset($_GET["y"])?$_GET["y"]:0;
	$div = number_format( $x / $y );
	echo "Divisão inteira => $x / $y = $div";
?>
</h3>
</div>
</div>
</body>
</html>