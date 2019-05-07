<?php
	include("cabecalho.php");
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-7">
<?php
	$nome = filter_input(INPUT_POST, "nome");
	$email = filter_input(INPUT_POST, "email");
	$descricao = filter_input(INPUT_POST, "descricao");
	$fone = filter_input(INPUT_POST, "fone");
	echo "Nome:" . $nome;
	echo "<br>E-mail:" . $email;
	echo "<br>descrição:" . $descricao;
	echo "<br>fone:" . $fone;
 	?>
 	</div>
 	</div>
 	</div>
 	<?php
	include ("rodape.php");
?>