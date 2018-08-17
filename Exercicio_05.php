<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>5º Exercício</title>
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
    $p1 = isset($_GET["p1"])?$_GET["p1"]:0;
	$p2 = isset($_GET["p2"])?$_GET["p2"]:0;
	$p3 = isset($_GET["p3"])?$_GET["p3"]:0;
	$media = ( $p1 + $p2 + $p3 )/3;
	if( $media >= 7 ){
		echo "Media = $media, aprovado! ;)";
	}else if( 5 <= $media && $media < 7 ){
		echo "Media = $media, recuperação! :|";
	}else if( $media < 5 ){
		echo "Média = $media, reprovado! :(";
	}
	
?>
</h3>
</div>
</div>
</body>
</html>