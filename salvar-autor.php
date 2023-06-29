<br>
<?php
	$nome 	  = @$_REQUEST["nome_autor"];
	$filiacao = @$_REQUEST["filiacao_autor"];

	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO autor (nome_autor, filiacao_autor) VALUES ('{$nome}', '{$filiacao}')";
	
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE autor SET nome_autor='{$nome}', filiacao_autor='{$filiacao}' WHERE id_autor=".$_REQUEST["id_autor"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM autor WHERE id_autor=".$_REQUEST["id_autor"];
			
			$result = $conn->query($sql) or die($conn->error);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
	}
?>






