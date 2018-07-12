<?php

    

    function ChamarCalculadora($mascara,$parte4){

        $enderecos = pow(2,(32-$mascara));
        echo "A quantidade de endereços por sub-rede é $enderecos";
        ?><br /><?php

        $subRede = 256 / $enderecos;
        echo "A quantidade de sub-rede é $subRede";
        ?><br /><?php

        $host = $enderecos - 2;
        echo "A quantidade de endereços de host em cada sub-rede $host";
		?><br /><?php

        $posicaoRede = (int)($parte4 / $enderecos);
        $primeiroEnd = $posicaoRede * $enderecos;
        $primeiroHost= $primeiroEnd + 1;
        echo "O primeiro endereço de host da sub-rede em que o endereço IP informado se encontra $primeiroHost";
		?><br /><?php

        $ultimoHost = (int)($primeiroEnd + $enderecos -2);
        echo "O último endereço de host da sub-rede em que o endereço IP informado se encontra $ultimoHost";
		?><br /><?php

        $broadcast = (int)($primeiroHost + $enderecos -2);
        echo "O endereço de broadcast da sub-rede em que o endereço informado se encontra $broadcast";
		?><br /><?php
	
        $maskDecimal = 256 - $enderecos;
        
        echo "A máscara da rede, em formato decimal $maskDecimal";
		?><br /><?php
        $classes = $parte4;


       		if ($classes <= 126){
       			echo "Classe A";
       			?><br /><?php
       	}
       		
			if ($classes >= 128 AND $classes <= 191){
				echo "Classe B";
				?><br /><?php
		}
 
			if ($classes >= 192 AND $classes <= 223){
				echo "Classe C";
				?><br /><?php		
		}
		 	
		 	if ($classes >= 224 AND $classes <= 239){
				echo "Classe D";
				?><br /><?php
		}

		 	if ($classes >= 240 AND $classes <= 256){
				echo "Classe E";
				?><br /><?php
		}

		switch ($classes){
            case $classes >= 10 AND $classes <= 10.255:
                echo  "O IP é privado";
                ?><br /><?php
                break;
            case $classes >= 172.16 AND $classes <= 172.31:
                echo "O IP é privado";
                ?><br /><?php
                break;
            case $classes >=192.168 AND $classes <= 172.169:
                echo "O IP é privado";
                ?><br /><?php
                break;
            default:
                echo "O IP é publico";
                break;
        }
    }

    if (isset($_POST['mascara'])) {
    	$mascara=$_POST['mascara'];
		$parte4 = $_POST['parte4'];
    	$calculo = ChamarCalculadora($mascara, $parte4);
    };



  
?>