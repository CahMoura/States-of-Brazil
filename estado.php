<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
	<meta charset="utf-8">
	<title>States of Brasil</title>
</head>
<body>
<div>
	<?php
	$e = isset($_GET["test"])?$_GET["test"]:0;
	echo "This state belongs to ";
    switch ($e) {
        case 1:
            echo "<span class='foco'>SOUTHEAST REGION!</span>";
            break;
        case 2:
            echo "<span class='foco'>SOUTH REGION!</span>";
            break;
        case 3:
            echo "<span class='foco'>MIDWEST REGION!</span>";
            break;
        case 4:
        	echo "<span class='foco'>NORTH REGION!</span>";  
        	break;
        case 5:
        	echo "<span class='foco'>NORTHEAST REGION!</span>"; 
        	break; 
        default:
            echo "<span class='foco'>Invalid state</span>";
    }
	?>
	 <br/><br/><a href="javascript:history.go(-1)" class="botao">RETURN</a>
</div>
</body>
</html>
