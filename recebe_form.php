<?php

echo "<pre>";
print_r($_POST);
print_r($_GET);
echo "</pre>";
echo "Exibindo so o nome","<hr>";

#echo $_GET['nome'];

if(isset($_POST['UF'])){
	echo $_POST['UF'];
}

if($_POST){
	echo $_POST['UF'];
}

