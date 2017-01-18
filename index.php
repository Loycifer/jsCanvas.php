<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<?php
	include 'JSCanvas.php';
	$ctx = new JSCanvas();
	$ctx->beginPath();
	$ctx->arc(2,3,1,2,3);
	$ctx->closePath();
	$ctx->clip(fnjklf,"nonzero");

	// put your code here
	?>
    </body>
</html>
