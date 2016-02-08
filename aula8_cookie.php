<?php

$nome = "Gustavo";
setcookie("nome",$nome);

echo "<pre>";
echo $_COOKIE['nome'];
print_r($_COOKIE);
echo "</pre>";

#com tempo de expiracao :
# o tempo deve ser em Timestamp
$tempo = time()+60*60*24*30;
echo $tempo;
setcookie("curso","PHP1 Impacta",$tempo);

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

#unset($_COOKIE['curso']);
#para deletar todos os cookies, nao podemos usar unset, devemos varrer todos os cookies
foreach ( $_COOKIE as $key => $value ){
	echo $key ."--". $value ."<br>";
	setcookie($key, '', -1);
	setcookie($key, '', -1, '/');
}

echo "<pre>Depois da exclusao";
print_r($_COOKIE);
echo "</pre>";
