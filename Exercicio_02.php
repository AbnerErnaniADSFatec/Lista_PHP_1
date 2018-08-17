<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>2º Exercício</title>
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
    $n = isset($_GET["n"])?$_GET["n"]:1;
	for( $i = 1; $i <= $n; $i++ ){
		if( $n % $i == 0 ){
			echo "$i ";
		}
	}
?>
</h3>
</div>
</div>
</body>
</html>