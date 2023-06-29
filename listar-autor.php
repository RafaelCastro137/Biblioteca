<h1>Listar Autor</h1>
<?php
	$sql = "SELECT * FROM autor";
	
	$result = $conn->query($sql) or die($conn->error);
	
	$qtd = $result->num_rows;
	
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Filiação</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $result->fetch_assoc()){
			print "<tr>";
			print "<td>".$row["id_autor"]."</td>";
			print "<td>".$row["nome_autor"]."</td>";
			print "<td>".$row["filiacao_autor"]."</td>";
			print "<td>
					
					<button class='btn btn-success'><i class='fa fa-edit' onclick=\"location.href='index.php?page=e_autor&id_autor=".$row["id_autor"]."'\"></i></button>
					<button class='btn btn-danger' onclick=\"location.href='index.php?page=s_autor&acao=excluir&id_autor=".$row["id_autor"]."'\"><i class='fa fa-trash'></i></button>
			
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
?>








