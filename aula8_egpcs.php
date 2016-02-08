<?php
session_start();
$_SESSION['a']="session_a";

#EGPCS
# Revis�o geral sobre arrays superglobais.

# Os arrays superglobais sao sobrescritos conforme ordem pre-estabelecida no arquivo php.ini
setcookie('a',"adicionar");

#echo $_REQUEST['a'];

/*
 * Define a ordem de interpreta��o das vari�veis EGPCS (Environment, Get, Post, Cookie, e Server).
 * Por exemplo, se variables_order estiver defindo como "SP" ent�o o PHP vai criar as vari�veis superglobals $_SERVER e $_POST,
 * mas n�o ir� criar $_ENV, $_GET e $_COOKIE. Configurar para "" significa que superglobals n�o ser� definida.

 O conte�do e ordem do $_REQUEST � tamb�m afetada por esta diretiva.

*/

echo "_ENV:<pre>";
print_r($_ENV);
echo "</pre>";
		
echo "_GET:<pre>";
print_r($_GET);
echo "</pre>";
		
echo "_POST:<pre>";
print_r($_POST);
echo "</pre>";

echo "_COOKIE:<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "_SERVER:<pre>";
print_r($_SERVER);
echo "</pre>";

#Percebam que o array superglobal, ira pegar POST['a'] ... EGPCS
echo "_REQUEST:<pre>";
print_r($_REQUEST);
echo "</pre>";


echo "_SESSION:<pre>";
print_r($_SESSION);
echo "</pre>";

?>


<html>
<head><title>EGPCS</title></head>
<body>


<hr>
<p>Form</p>
<form action="aula8_egpcs.php?a=get_a" method="post">

<input type="hidden" name="a" value="post_a">
<br>
<button>Submeter</button>

</form>


</body>
</html>

