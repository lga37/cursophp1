<?php

$uf = array(
		
		"SP"=>"Sao Paulo",
		"RJ"=>"Rio de Janeiro",
		"MG"=>"Minas Gerais",
		"BA"=>"Bahia",
		"CE"=>"Ceara",
		"ES"=>"Esp Santo",
);

$estado = "RJ";

?>



<html>
	<head>
	<title>aula 6</title>
	
	</head>

<body>

<h1>Enviando dados via LINK</h1>
<a href="recebe_form.php?nome=Luis Gustavo&idade=38&naturalidade=SP">Enviando via Link (GET)</a>

<p>
<a href="recebe_form.php?cod=123&nome=geladeira 450l&preco=1234.55">adicionar ao carrinho</a>
</p>

<hr>
<p>Form</p>
<form action="recebe_form.php" method="post">

nome:<input type="text" name="nome"><br>
idade:<input type="text" name="idade"><br>
natural:<input type="text" name="naturalidade"><br>
estado:
<select name="UF">
<?php 
foreach($uf as $key=>$val){
	echo "<option value=\".$key.\">".$val."</option>";
}
?>
</select>
<br>

estado:(previamente selecionado)
<select name="UF2">
<?php 
foreach($uf as $key=>$val){
	$selected="";
	if($estado == $key){
		$selected = "selected";
	}
	echo "<option value=\"$key\" $selected>$val</option>";
}
?>
</select>
<br>



Linguagens de programação :<br>
<input type="checkbox" name="linguagens[]" value="javascript">javascript<br>
<input type="checkbox" name="linguagens[]" value="php">php<br>
<input type="checkbox" name="linguagens[]" value="html5">html5<br>
<input type="checkbox" name="linguagens[]" value="css3">css3<br>

Moeda :<br>
<input type="radio" name="moeda" value="BR">real<br>
<input type="radio" name="moeda" value="US">dolar<br>
<input type="radio" name="moeda" value="EUR">euro<br>



<br>
<button>Submeter</button>

</form>


</body>
</html>