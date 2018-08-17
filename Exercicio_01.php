<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "UTF-8">
<title>1º Exercício</title>
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
    $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
	$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
	$media = ( $n1 + $n2 ) / 2;
	if( $media >= 6 ){
		echo " Sua media é $media, você passou no curso !!! ;)";
	}else{
		echo " Sua media é $media, você não passou no curso !!! :(";
	}
?>
</h3>
</div>
</div>
</body>
</html>