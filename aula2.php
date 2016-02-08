<?php
################################ INT #################################

#$a = 0542;
#$b = 0122;

# 2x8^0 + 4x8^1 + 5x8^2 = 2 + 32 + 320 = 354
# 2x8^0 + 2x8^1 + 1x8^2 = 2 + 16 + 64 = 82

# 436 ======== 664 ??

#$a = 0x12;
#$b = 0X34;

#2x16^0 + 1x16^1 = 2 + 16 = 18
#4x16^0 + 3x16^1 = 4 + 48 = 52
#70

#$a = 023;
#$b = 034;

#3x8^0 + 2x8^1 = 3 + 16 = 19
# + 34 ======= 53

#$a = "aaaa";
#$b = "bbb";
#$d = $a+$b;

#echo $d;
################################ STRING #################################

$s1 = 'caixa d\'agua'; 
#echo $s1;
$ss1 = "caixa d\"agua";
#echo $ss1;
$s2 = 'neste caso aspas duplas " podem';
#echo $s2;
$s3 = 'a variável $s1 não será expandida';
#echo $s3;

$s4 = "neste caso a var $s1 será expandida";
#echo $s4;
# se eu nao quiser expandir a variavel uso a barra e escapo
$s5 = "Concatenando \$s1 e $s2". $s1 ." e ". $s2;
#echo $s5;

################################ FLOAT #################################

$f1 = 6.04e+5;
#m x 10^e 6.04 x 10^5
#echo $f1;

$a = 300;
$b = 13; #ou 15
$c = $a / $b;
#echo gettype($c);

#The size of an integer is platform-dependent, although a maximum value of about two billion is the usual value (that's 32 bits signed). 
# 64-bit platforms usually have a maximum value of about 9E18, except for Windows, which is always 32 bit. PHP does not support unsigned integers. 
#Integer size can be determined using the constant PHP_INT_SIZE, and maximum value using the constant PHP_INT_MAX since PHP 4.4.0 and PHP 5.0.5.

$large_number = 9223372036854775805;
#var_dump($large_number);                    
echo "<br>";
$large_number = 9223372036854775808;
#var_dump($large_number);

$b1 = True; $b2 = FALSE; $b3 = FaLsE;
#echo gettype($b1);
################################ Conversão #################################

$a = "20x10";
$b = "x10";
$c = TRUE;        
$e = 7.49;
$f = "str";        
$h = array();

#var_dump($a);
settype($a, 'int');
#var_dump($a);

#var_dump($b);
settype($b, 'int');
#var_dump($b);

#var_dump($c);
#(int) $c;
settype($c, 'int');
#var_dump($c);

#var_dump($e);
settype($e, 'int');
#var_dump($e);

#var_dump($f);
#(bool) $f;
settype($f, 'bool');
#var_dump($f);

#var_dump($h);
#(bool) $f;
settype($h, 'bool');
#var_dump($h);

################################ empty isset unset #################################
$var;
#print(isset($var)); 
$res = empty($var); 
#print($res);
#echo "<br>","O resultado e : ",gettype($res),'<hr>';
#echo gettype($res)==0? 'Falso':'True';

$var2 = "Gustavo";
#print(isset($var2)); 
#print(empty($var2));
unset($var2); # oque ocorrerá?
#print(isset($var2));


################################ HEREDOC #################################
# com heredoc jogamos um html inteiro em uma variavel.

$titulo = "meu titulo"; #HEREDOC
$html = <<<HTML
<html>
	<title>$titulo</title>
	<body> bla bla bla</body>
</html>
HTML;
#dar um enter aqui
$nome = "gustavo"; #veio do form
$tel = "2334-5566";
$end = "Rua xpto, 123";
$insert = <<<INSERT
"INSERT tabela ('nome','tel','end') values ('$nome','$tel','$end')";
INSERT;
echo $insert;


################################ CONSTANTES #################################
$magicas = get_defined_constants();
echo "<pre>";
#print_r($magicas);
echo "</pre>";

#echo PHP_INT_MAX;
define("NOME","Gustavo A.");
#echo NOME;

################################ escopo #################################
$var = "valor qq";
$var2 = "123";

function faz(){
	$var = "outo valor";
	echo $var,'<br>';
}

#echo $var,'<hr>';
#faz();
#$var = "345";
#faz();
#echo $var,'<hr>';
################################ $$ #################################

$var = "codigo";
$codigo = 90;
#echo $$var;
#echo "<hr>";
#echo "$var = ". $$var; # oque ocorre ?
################################ referencia #################################

$a = "Impacta";
$b = & $a;
$c = & $a;
#echo $b;
$a = "Tecnologia";
#echo "<br>";
#echo $b;

################################ VARIAVEIS SERVIDOR #################################
#echo $_SERVER['REMOTE_ADDR']; #pegar o num do ip do visitante do site
echo "<pre>";
#print_r($_SERVER);
echo "</pre>";

################################ printf #################################
$a = 12;
$b = "Texto qq";
$c = 12.9;

printf("<hr>Misturando %d com %s e %.2f",$a,$b,$c);