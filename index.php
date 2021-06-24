<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Meus Projetos</title>
	</head>
	<body>
		<header>
			<nav>
				<div class="wrapper-nav">
					<div class="logo"><img src="logo.png"></div>
				</div>
			</nav>
		</header>
		<main class='wrapper'>
			<!-- inicio do todo -->
			<div class="todo wrapper-group">
				<div class="todo-header">To Do</div>
				<?php
						$pasta = '/var/www/html/';
						if(is_dir($pasta))
						{
						$diretorio = dir($pasta);
						while(($arquivo = $diretorio->read()) !== false)
						{
							if($arquivo != "." && $arquivo != ".."){
								echo '
								<div class="postit postit-todo">
										<div class="postit-header postit-todo-header">
												<a href='.$arquivo.'>'.$arquivo.'</a>
										</div>
										<div class="postit-content postit-todo-content">
												Descrição do projeto a ser executado.
										</div>
								</div>';
								
							}
							
						}
						$diretorio->close();
						}
						else
						{
						echo 'A pasta não existe.';
						}
				?>
				
			</div>
			<!-- inicio do doing -->
			<div class="doing wrapper-group">
				<div class="doing-header">Doing</div>
				<div class="postit postit-doing">
					<div class="postit-header">
						Nome do arquivo	
					</div>
					<div class="postit-content postit-doing-content">
						Descrição do projeto a ser executado.
					</div>
				</div>
			</div>
			<!-- inicio do done -->
			<div class="done wrapper-group">
				<div class="done-header">Done</div>
				<div class="postit postit-done">
					<div class="postit-header">
						Nome do arquivo
					</div>
					<div class="postit-content postit-done-content ">
						Descrição do projeto a ser executado.
						será pego da DB
					</div>
				</div>
			</div>
			
		</main>
		<footer>
			
		</footer>
	</body>
</html>