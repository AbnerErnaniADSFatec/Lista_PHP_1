<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>4º Exercício</title>
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
    $num = isset($_GET["num"])?$_GET["num"]:0;
	echo "Sucessor = ".( $num + 1 );
?>
</h3>
</div>
</div>
</body>
</html>