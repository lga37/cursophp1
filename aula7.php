<?php
function soma($a,$b){
	return $a + $b;
}

function soma2($a,$b=4){
	return $a + $b;
}


$a = 5;
$b = 7;
$c = soma($a,$b);
echo $c;

echo "<hr>";
$d = soma2($a,$b);
echo $d;

echo "<hr>";


function exibirNomeDoAluno($nome,$qtd=4){
	for($i=1;$i<=$qtd;$i++)
		echo $nome,"<br>";
}

exibirNomeDoAluno("Gustavo",7);

# funcoes de strings
echo "<hr>";
echo chr(89);
echo "<hr>";
echo ord("Y");
echo "<hr><br>";

$a1 = array(1,2,3,'a','b','c');
echo implode('---',$a1);

echo "<hr><br>";
$s = "www.impacta.com.br/aluno?cod=123&nome=joao";
$array = explode('?',$s);
echo "<pre>";
print_r($array);
echo "</pre>";

$array2 = explode('&',$array[1]);
echo "<pre>";
print_r($array2);
echo "</pre>";

$a = "Luis Gustavo";
echo str_pad($a, 20, '-');
echo "<hr>";
echo str_repeat("?",20);

$email = "blablabla@email.com.br";
echo "<hr>";
echo strlen($email);

##################################################
# date
echo "<hr>";
echo date("d/m/Y H:m:s");
echo "<hr>";
echo time();

##################################################
# numericas
echo "<hr>";
$number = 12345.456;
echo number_format($number,2,",",".");
echo "<hr>";
for($i=0;$i<=10;$i++)
	echo rand(1, 100),"<br>";


################################
# validacao
echo "<hr>";
$a = [1,2,4,8,9,12];
if(is_array($a)){
	if(in_array(5, $a)){
		echo "existe";
	} else {
		echo "nao achou";
	}

} else {
	echo "nao e array";
}

echo "<hr>";
###################################### is_int()
$a = "123";
$b = 123;

echo is_int($a)?"é INTEIRO" : "nao é inteiro";
echo "<br>";
echo is_int($b)?"é INTEIRO" : "nao é inteiro";
echo "<hr>";

##################### f codificacao
# htmlentities Converte todos os caracteres aplicáveis em entidades html.
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str),"<br>";

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES),"<br>";

echo "<hr>";

#html_entity_decode — Converte todas as entidades HTML para os seus caracteres
# html_entity_decode() é o oposto da função htmlentities() no que converte todas as entidades HTML para os seus caracteres de string.

$orig = "I'll \"walk\" the <b>dog</b> now";
$a = htmlentities($orig);
$b = html_entity_decode($a);
echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
echo "<br>";
echo $b; // I'll "walk" the <b>dog</b> now

echo "<hr>";

# utf8_encode — Codifica um string ISO-8859-1 para UTF-8

#utf8_encode();
#utf8_decode — Converte uma string com caracteres ISO-8859-1 codificadas com UTF-8 para single-byte ISO-8859-1.
#utf8_decode();











