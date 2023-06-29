<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Biblioteca</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<a class="navbar-brand" href="#"><i class="fa fa-2x fa-book"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Autor</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=c_autor">Cadastrar</a>
							<a class="dropdown-item" href="index.php?page=l_autor">Listar</a>
						</div>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Livro</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=c_livro">Cadastrar</a>
							<a class="dropdown-item" href="index.php?page=l_livro">Listar</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						include("config.php");
						switch(@$_REQUEST["page"]){
							case "c_autor":
								include("cadastrar-autor.php");
							break;
							case "l_autor":
								include("listar-autor.php");
							break;
							case "s_autor":
								include("salvar-autor.php");
							break;
							case "e_autor":
								include("editar-autor.php");
							break;
							case "c_livro":
								include("cadastrar-livro.php");
							break;
							case "l_livro":
								include("listar-livro.php");
							break;
							case "s_livro":
								include("salvar-livro.php");
							break;
							case "e_livro":
								include("editar-livro.php");
							break;
							default:
								include("home.php");
						}
					?>
				</div>
			</div>
		</div>
		
		
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>






