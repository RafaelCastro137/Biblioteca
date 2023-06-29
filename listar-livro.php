<h1>Listar Livro</h1>
<?php
	$sql = "SELECT * FROM livro AS li
			INNER JOIN autor AS au
			ON au.id_autor = li.autor_id_autor";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($result==true){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Autor</th>";
			print "<th>Título</th>";
			print "<th>Edição</th>";
			print "<th>Editora</th>";
			print "<th>UF</th>";
			print "<th>Ano</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $result->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_livro"]."</td>";
			print "<td>".$row["nome_autor"]."</td>";
			print "<td>".$row["titulo_livro"]."</td>";
			print "<td>".$row["edicao_livro"]."</td>";
			print "<td>".$row["editora_livro"]."</td>";
			print "<td>".$row["uf_livro"]."</td>";
			print "<td>".$row["ano_livro"]."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='index.php?page=e_livro&id_livro=".$row["id_livro"]."';\"><i class='fa fa-edit'></i></button>
						<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_livro&acao=excluir&id_livro=".$row["id_livro"]."';\"><i class='fa fa-trash'></i></button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>