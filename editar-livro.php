<h1>Editar Livro</h1>
<?php
	$sql = "SELECT * FROM livro AS li
			INNER JOIN autor AS au
			ON au.id_autor = li.autor_id_autor
			WHERE id_livro=".$_REQUEST["id_livro"];
	
	$result = $conn->query($sql) or die($conn->error);
	
	if($result==true){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=s_livro&acao=editar&id_livro=<?php print $row["id_livro"]; ?>" method="POST">	
	<div class="form-group">
		<label>Autor</label>
		<?php
			$sql_1 = "SELECT * FROM autor";
			
			$result_1 = $conn->query($sql_1) or die($conn->error);
			
			$qtd_1 = $result_1->num_rows;
			
			if($qtd_1 > 0){
				print "<select class='form-control' name='autor_id_autor'>";
				print "<option value='".$row["id_autor"]."'>".$row["nome_autor"]."</option>";
				print "<option></option>";
				while($row_1 = $result_1->fetch_assoc()){
					print "<option value='".$row_1["id_autor"]."'>".$row_1["nome_autor"]."</option>";
				}
				print "</select>";
			}else{
				print "Não encontrou resultados";
			}
		?>
	</div>
	<div class="form-group">
		<label>Título</label>
		<input type="text" name="titulo_livro" class="form-control" value="<?php print $row["titulo_livro"]; ?>">
	</div>
	<div class="form-group">
		<label>Edição</label>
		<input type="text" name="edicao_livro" class="form-control" value="<?php print $row["edicao_livro"]; ?>">
	</div>
	<div class="form-group">
		<label>Editora</label>
		<input type="text" name="editora_livro" class="form-control" value="<?php print $row["editora_livro"]; ?>">
	</div>	
	<div class="form-group">
		<label>UF</label>
		<input type="text" name="uf_livro" class="form-control" value="<?php print $row["uf_livro"]; ?>">
	</div>
	<div class="form-group">
		<label>Ano</label>
		<input type="text" name="ano_livro" class="form-control" value="<?php print $row["ano_livro"]; ?>">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
	} // fim do if
?>