<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>9º Exercício</title>
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
    function maximo( $a , $b ){
		if( $a > $b ){
			return $a;
		}else{
			return $b;
		}
	}
	function minimo( $a , $b ){
		if( $a < $b ){
			return $a;
		}else{
			return $b;
		}
	}
    $s1 = isset($_GET["s1"])?$_GET["s1"]:0;
	$s2 = isset($_GET["s2"])?$_GET["s2"]:0;
	$s3 = isset($_GET["s3"])?$_GET["s3"]:0;
	$ma = maximo( maximo( $s1 , $s2 ) , $s3 );
	$mi = minimo( minimo( $s1 , $s2 ) , $s3 );
	$d = $ma - $mi;
	$p = ( 100 * $d ) / $ma;
	echo "Maior valor R$ ".number_format($ma,2)."</br>";
	echo "Menor valor R$ ".number_format($mi,2)."</br>";
	echo "Do maior valor para o menor valor houve um decréscimo de ".number_format($p,2)."%";
?>
</h3>
</div>
</div>
</body>
</html>