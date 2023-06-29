<br>
<?php
	$autor   = @$_REQUEST["autor_id_autor"];
	$titulo  = @$_REQUEST["titulo_livro"];
	$edicao  = @$_REQUEST["edicao_livro"];
	$editora = @$_REQUEST["editora_livro"];
	$uf      = @$_REQUEST["uf_livro"];
	$ano     = @$_REQUEST["ano_livro"];
	
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO livro (autor_id_autor, titulo_livro, edicao_livro, editora_livro, uf_livro, ano_livro) VALUES ($autor, '$titulo', '$edicao', '$editora', '$uf', '$ano')";
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'><p>Cadastrou com sucesso!</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível cadastrar.</p></div>";
			}
		break;
		case "editar":
			$sql = "UPDATE livro SET
						autor_id_autor=$autor,
						titulo_livro='$titulo',
						edicao_livro='$edicao',
						editora_livro='$editora',
						uf_livro='$uf',
						ano_livro='$ano'
					WHERE
						id_livro=".$_REQUEST["id_livro"];
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'><p>Editou com sucesso!</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível editar.</p></div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST["id_livro"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'><p>Excluido com sucesso!</p></div>";
			}else{
				print "<div class='alert alert-danger'><p>Não foi possível excluir.</p></div>";
			}
		break;
	}
?>


