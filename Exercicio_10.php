<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>10º Exercício</title>
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
	if( $x > $y ){
		$cont = 0;
		for( $i = $x; $i >= $y; $i-- ){
			echo "$i ";
			if( $i % 2 == 0 ){
				$cont++;
			}
		}
		echo "</br> Quantidade de números pares = $cont";
	}else if( $y > $x ){

		$soma = 0;
		$cont = 0;
		for( $i = $x; $i <= $y; $i++ ){
			echo "$i ";
			$soma += $i;
			$cont++;
		}
		$media = $soma / $cont;
		echo "</br> Média = $media";
	}else{
		echo "Os números são iguais !!!";
	}
?>
</h3>
</div>
</div>
</body>
</html>