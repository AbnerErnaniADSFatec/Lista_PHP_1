<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>3º Exercício</title>
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
    $a = isset($_GET["a"])?$_GET["a"]:0;
	$b = isset($_GET["b"])?$_GET["b"]:0;
	$c = isset($_GET["c"])?$_GET["c"]:0;
	if( $a >= $b && $a >= $c ){
		if( $b >= $c ){
			echo "$c $b $a";
		}else{
			echo "$b $c $a";
		}
	}
	if( $b >= $a && $b >= $c ){
		if( $a >= $c ){
			echo "$c $a $b";
		}else{
			echo "$a $c $b";
		}
	}
	if( $c >= $a && $c >= $b ){
		if( $a >= $b ){
			echo "$b $a $c";
		}else{
			echo "$a $b $c";
		}
	}
?>
</h3>
</div>
</div>
</body>
</html>