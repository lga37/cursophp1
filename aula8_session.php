<?php
session_start();

$_SESSION['teste'] = "um valor qq";
$_SESSION['array'] = [1,2,"elemento",4,5];
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


echo $_SESSION['array'][2];
unset($_SESSION['array'][2]);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


unset($_SESSION);
echo "<pre> So unset";
print_r($_SESSION);
echo "</pre>";


session_destroy();
echo "<pre> session_destroy()";
print_r($_SESSION);
echo "</pre>";

echo "<hr>Cesta de compras :";
$primeiroItem = array('cod'=>12,'preco'=>123.45,'nome'=>"geladeira abc");
$segundoItem = array('cod'=>23,'preco'=>234.45,'nome'=>"fogao def");
$cesta = array($primeiroItem,$segundoItem);
$_SESSION['cesta'] = $cesta;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

