<?php

    require_once "index.php";

    function ChamarCalculadora($mascara,$parte4){

        $enderecos = pow(2,(32-$mascara));
        echo "A quantidade de endereços por sub-rede é $enderecos";

        $subRede = 256 / $enderecos;
        echo "A quantidade de sub-rede é $subRede";

        $host = $enderecos - 2;
        echo "A quantidade de endereços de host em cada sub-rede $host";

        $posicaoRede = (int)($parte4 / $enderecos);
        $primeiroEnd = $posicaoRede * $enderecos;
        $primeiroHost= $primeiroEnd + 1;
        echo "O primeiro endereço de host da sub-rede em que o endereço IP informado se encontra $primeiroHost";

        $ultimoHost = (int)($primeiroEnd + $enderecos -2);
        echo "O último endereço de host da sub-rede em que o endereço IP informado se encontra $ultimoHost";

        $broadcast = (int)($primeiroHost + $enderecos -2);
        echo "O endereço de broadcast da sub-rede em que o endereço informado se encontra $broadcast";

        $maskDecimal = 256 - $enderecos;
        
        echo "A máscara da rede, em formato decimal $maskDecimal";

        $classes = $parte4;


       		if ($classes <= 126){
       			echo "classe a";
       	}
       		
			if ($classes >= 128 AND $classes <= 191){
				echo "classe b";
		}
 
 
			if ($classes >= 192 AND $classes <= 223){
				echo "classe c";
				

		}
		 	
		 	if ($classes >= 224 AND $classes <= 239){
				echo "classe d";
				
		}

		 	if ($classes >= 240 AND $classes <= 256){
				echo "classe e";
				
		}

		//while (list(, $value) = each($arr)) {
   				// echo "Value: $value<br />\n";
		//	}

        //classes A 1 até 126
               //B 128 a 191
               //C 192 a 223
               //D 224 a 239
               //E 240 a 255

        //return $posicaoRede;
        //$primeiroHost //= $posicaoRede + 1;
        //$posicaoRede = (int)($subRede * $enderecos);
        //$ultimoEnd = $posicaoRede / $enderecos;
        //$ultimoHost= $ultimoEnd - 1;
        //echo "a $ultimoHost";

    }

    //$mascara = $_POST['mascara'];
$mascara=26;
$parte4 = 223;
    $calculo = ChamarCalculadora($mascara, $parte4);


