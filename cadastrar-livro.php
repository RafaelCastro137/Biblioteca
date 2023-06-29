<h1>Cadastrar Livro</h1>
<form action="index.php?page=s_livro&acao=cadastrar" method="POST">	
	<div class="form-group">
		<label>Autor</label>
		<?php
			$sql = "SELECT * FROM autor";
			
			$result = $conn->query($sql) or die($conn->error);
			
			$qtd = $result->num_rows;
			
			if($qtd > 0){
				print "<select class='form-control' name='autor_id_autor'>";
				while($row = $result->fetch_assoc()){
					print "<option value='".$row["id_autor"]."'>".$row["nome_autor"]."</option>";
				}
				print "</select>";
			}else{
				print "Não encontrou resultados";
			}
		?>
	</div>
	<div class="form-group">
		<label>Título</label>
		<input type="text" name="titulo_livro" class="form-control">
	</div>
	<div class="form-group">
		<label>Edição</label>
		<input type="text" name="edicao_livro" class="form-control">
	</div>
	<div class="form-group">
		<label>Editora</label>
		<input type="text" name="editora_livro" class="form-control">
	</div>	
	<div class="form-group">
		<label>UF</label>
		<input type="text" name="uf_livro" class="form-control">
	</div>
	<div class="form-group">
		<label>Ano</label>
		<input type="text" name="ano_livro" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
</form>