<h1>Editar Autor</h1>
<?php
	$sql = "SELECT * FROM autor WHERE id_autor = ".$_REQUEST["id_autor"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result==true){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=s_autor&acao=editar&id_autor=<?php print $row["id_autor"];  ?>" method="POST">
	<div class="form-group">
		<label>Nome</label>
		<input type="text" name="nome_autor" class="form-control" value="<?php print $row["nome_autor"]; ?>">
	</div>
	<div class="form-group">
		<label>Filiação</label>
		<input type="text" name="filiacao_autor" class="form-control" value="<?php print $row["filiacao_autor"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //fim do if
?>