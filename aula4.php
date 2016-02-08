<?php
# controladores do fluxo de execucao
############################# IF ################################
# if - so aceita booleanos

$idade=19;
#if ($idade >= 18)
#	echo "pode dirigir";

if ($idade >= 18){
#	echo "pode dirigir";
#	echo "<br>pode votar";
}

if($idade >= 18):
#	echo "pode votar";
endif;

#else
#if ($idade >= 18)
#	echo "pode dirigir";
#else
#	echo "nao pode dirigir";

/*
#em cascata
$hora = 13;
#$hora = date('H');
if($hora < 5){
	echo "boa madrugada";
} else if($hora < 12){ #nao precisamos perguntar se a hora e antes, pq a hora ja nao e menor
	echo "bom dia";
} else if($hora <= 18){
	echo "boa tarde";
} else {
	echo "boa noite";
}

############################# SWITCH ################################
#switch
$estado = "SC";
switch($estado){
	case "SP":
	case "RJ":
	case "MG":
	case "ES":
		$regiao = "sudeste";
		break;
		#sem o break ele invade o outro bloco;		
	
	case "RS":
	case "SC":
	case "PR":
		$regiao = "sul";
		break;
	
	case "DF":
		$regiao = "capital";	
		break;
		
	default:
		$regiao = "outra regiao";
}

echo $regiao;

*/
############################### WHILE ##################################
# Parte 2
# estruturas de fluxo - loop
# permite o mesmo bloco repetidas vezes

/*
$a=5;
while($a < 30){
	echo $a,"<br>";
	$a += 5;
}

 # loop infinito.
 do {
	echo $b;
	$b += 5;
 } while($b < 40);

for($i=0;$i<10;$i++){
	echo $i,"<br>";
}

for($j=0;$j<20;$j+=4){
	echo $j,"<br>";
}

for($k=20;$k>2;$k-=3){
	echo $k,"<br>";
}

#foreach

########################### BREAK CONTINUE ##############################
$i=2;
#break e continue
while($i < 20){
	$i++;
	if($i==5){
		continue;
	}
	if($i==10){
		break;
	}
	echo $i,'<br>';
}

*/
########################### INSTRUCOES ANINHADAS ##########################
#instrucoes aninhadas
# if dentro de um for, while dentro de um if e etc
for($i=0; $i < 30; $i++){
	if($i % 2 ==0){
		echo "$i e par<br>";
	} else {
		echo "$i e impar<br>";
	}
}

#include e require.