<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<meta charset="utf-8">
	<title>Estados do Brasil</title>
</head>
<body>
<div>
	<?php
	$e = isset($_GET["test"])?$_GET["test"]:0;
	echo "Você mora na ";
    switch ($e) {
        case 1:
            echo "<span class='foco'>REGIÃO SUDESTE!</span>";
            break;
        case 2:
            echo "<span class='foco'>REGIÃO SUL!</span>";
            break;
        case 3:
            echo "<span class='foco'>REGIÃO CENTRO-OESTE!</span>";
            break;
        case 4:
        	echo "<span class='foco'>REGIÃO NORTE!</span>";  
        	break;
        case 5:
        	echo "<span class='foco'>REGIÃO NORDESTE!</span>"; 
        	break; 
        default:
            echo "<span class='foco'>Estado inválido</span>";
    }
	?>
	 <br/><a href="javascript:history.go(-1)" class="botao">VOLTAR</a>
</div>
</body>
</html>