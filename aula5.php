<?php
$a = array(1,2,2);
$a = ["a","b","c"];

$a = array('cod'=>12,'preco'=>123.45,'nome'=>"geladeira abc",12,5=>"valor qq",56,"chave qq"=>"valor abc");
$a = array("a","b","c");

#echo "<pre>Antes";
#print_r($a);
#echo "</pre>";

#$a[1]="x";
#unset($a[1]);
#$a[]="valor add";
#unset($a);

$a = array("cod","nome","preco");
$b = array(123,"geladeira abc",123.45);

$c = array_merge($a,$b);
$c = count($a);
$c = array_combine($a,$b);

$c = array('cod'=>12,'preco'=>123.45,'nome'=>"geladeira abc");

#$c = array_keys($c);
#$c = array_values($c);
#$c = array_rand($c,2);

$primeiroItem = array('cod'=>12,'preco'=>123.45,'nome'=>"geladeira abc");
$segundoItem = array('cod'=>23,'preco'=>234.45,'nome'=>"fogao def");

$c = array($primeiroItem,$segundoItem);

$tercItem = array('cod'=>34,'preco'=>1234.45,'nome'=>"TV 50");

$c[] = $tercItem;

echo "<pre>";
print_r($c);
echo "</pre>";

foreach($c as $key=>$valor){
	#echo $key .' -- '. $valor . '<br>';
	echo $key . '<hr>';
	foreach($valor as $key2=>$valor2){
		echo $key2 .' -- '. $valor2 . '<br>';
	}
}

#unset($c[1]);
#$c[1]['preco']=222.33;

#echo "<pre>";
#print_r($c);
#echo "</pre>";