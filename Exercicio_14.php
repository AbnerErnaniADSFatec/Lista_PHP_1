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
    $dias = isset($_GET["dias"])?$_GET["dias"]:0;
	$d = number_format(date('d'));
	$m = number_format(date('m'));
	$y = number_format(date('y'));
	$di = 0;
	$me = 0;
	$ano = 0;
	if( $dias >= 365 ){
		$ano = $y + number_format( $dias / 365 );
		$r = $dias/365;
		$me = ($r - number_format($r,(-1))) * 12;
		if( $me < 1 ){
			$di = $me * 31;
			$me = number_format($me) + 1;
			$di = number_format($di);
		}else if( number_format($me,0) == 2 ){
			$di = ($me - 1) * 28;
			$me = number_format($me) + 2;
			$di = number_format($di);
		}else if( number_format($me,0) == 8 ){
			$di = ($me - 1) * 31;
			$me = number_format($me) + 8;
			$di = number_format($di,0);
		}else if( number_format($me,0) <= 7 ){
			if( number_format($me,0) % 2 == 0 ){
				$di = ($me - 1) * 30;
			}else{
				$di = ($me - 1) * 31;
			}
			$me = number_format($me);
			$di = number_format($di,0);
		}else if( number_format($me,0) >= 7 ){
			if( number_format($me,0) % 2 == 0 ){
				$di = ($me - 1) * 31;
			}else{
				$di = ($me - 1) * 30;
			}
			$me = number_format($me);
			$di = number_format($di,0);
		}
	}
	echo number_format($di)." / 0".number_format($me)." / 20".number_format($ano);
?>
</h3>
</div>
</div>
</body>
</html>