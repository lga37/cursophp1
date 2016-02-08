<?php
# vamus fazer um crud para demonstrar a conexao mysqli
# No projeto TCC vamos usar PDO
$host = "localhost";
$user = "root";
$pass = "123";
$database = "loja";


$cn = mysqli_connect($host,$user,$pass);
mysqli_select_db($cn, $database);


if($_POST){
	$sql = "insert into categorias (nome) values('". $_POST['nome'] ."');";
	echo $sql;
	$res = mysqli_query($cn, $sql);
	if(mysqli_affected_rows($cn)>0){
		echo "Categ Incluida";
	}
}


if(isset($_GET['acao']) && $_GET['acao']=='del' && is_numeric($_GET['id'])){
	$sql = "delete from categorias where id=". $_GET['id'].";";
	echo $sql;
	$res = mysqli_query($cn, $sql);
	if(mysqli_affected_rows($cn)==1){
		echo "Categ excluida";
	}
}

$lista="";
$sql = "select * from categorias;";
$res = mysqli_query($cn, $sql);
while($registro = mysqli_fetch_row($res)){
	$id = $registro[0];
	$nome = $registro[1];
	$lista .= $nome ." - <a href='". $_SERVER['PHP_SELF'] ."?acao=del&id=".$id."'>del</a><br>";
	
}


mysqli_close($cn);



?>
<html>
<head><title>aula 9 - crud</title></head>
<body>
<hr>
<p>Categorias</p>
<form method="post">
<?=$lista?>
<hr>
nome:<input type="text" name="nome"><br>

<button>OK</button>
</form>

</body>
</html>