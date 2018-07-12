<?php

    require_once "calculadora.php";

?>

<!doctype html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>CALCULADORA IP</title>
    <script>
    	
    	$(document).ready(function(){
    		$("button").click(function(){
    			if( ($("#1").val() == "") ||
    				($("#2").val() == "") ||
					($("#3").val() == "") ||
					($("#4").val() == "") ||
					($("#5").val() == "") )
    				{
    					alert('Preencha todos os campos!');

    			}else{
		    		$.post('calculadora.php',
		    		{
						parte1: $("#1").val(),
						parte2: $("#2").val(),
						parte3: $("#3").val(),
						parte4: $("#4").val(),
						mascara: $("#5").val(),
					},
					function(dados){
		                $('.resultado').html(dados);
		            });

    			}

        });
    });

    </script>
</head>
<body>

	<h1>Calculadora IP</h1>

	<p> Esta é uma imprescindível ferramenta para técnicos e especialistas de rede. 

	Com ela você pode calcular todos endereços que fazem parte de uma Classe IP, a partir de um endereço IP e sua respectiva Máscara. </p>

	<h2>Endereço IP</h2>
    <input id="1"" style="border:1px solid blue; line-height: 2; padding: 0 5px; width: 100px;"type="text" size="3"    maxlength="3" name="parte1">
    <input id="2" style="border:1px solid blue; line-height: 2; padding: 0 5px; width: 100px;"type="text" size="3"    maxlength="3" name="parte2">
    <input id="3" style="border:1px solid blue; line-height: 2; padding: 0 5px; width: 100px;"type="text" size="3"    maxlength="3" name="parte3">
    <input id="4" style="border:1px solid blue; line-height: 2; padding: 0 5px; width: 100px;"type="text" size="3"    maxlength="3" name="parte4">

    <h2>Máscara </h2>
    <input id="5" style="border:1px solid green; line-height: 2; padding: 0 5px; width: 150px;"type="text" name="mascara" placeholder=" Máscara - Ex: /24 "> 
    <button style="border:1px solid green; background: green; color: #fff; font-weight: 700; cursor: pointer; line-height: 2; padding: 0 5px;">Enviar</button>

	<div class="resultado"></div>

	<p>Desenvolvedores: Carolina Burckhardt Luciani, Rafaela Gilgen e Suyanne Xavier da Cunha</p>
</body>
</html>
