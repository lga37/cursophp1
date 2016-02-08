<?php
session_start();
$_SESSION['a']="session_a";

#EGPCS
# Revisão geral sobre arrays superglobais.

# Os arrays superglobais sao sobrescritos conforme ordem pre-estabelecida no arquivo php.ini
setcookie('a',"adicionar");

#echo $_REQUEST['a'];

/*
 * Define a ordem de interpretação das variáveis EGPCS (Environment, Get, Post, Cookie, e Server).
 * Por exemplo, se variables_order estiver defindo como "SP" então o PHP vai criar as variáveis superglobals $_SERVER e $_POST,
 * mas não irá criar $_ENV, $_GET e $_COOKIE. Configurar para "" significa que superglobals não será definida.

 O conteúdo e ordem do $_REQUEST é também afetada por esta diretiva.

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

