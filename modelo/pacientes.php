	<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Clínica Psiquiatrica - Pacientes</title>
</head>
<body>
<header>
<h1> Clínica Psiquiátrica! </h1>
<?php
include_once 'conectar-banco.php';

?>
									<nav>
<a href="index.php" >Home </a>
 </nav> 
 </header>
 <main>
 
<h1>Clínica Psiquiatrica! Cadastro de pacientes atualizado! </h1>
<p> O Cadastro de nossos pacientes deve estar sempre atualizado. No contato telefônico, certifique-se que ele não está cadastrado. </p> 

<p> Se  não localizar,  faça o cadastro corretamente, solicitando todos os dados. Entenda se ele não quiser fornecer todos para você. <br />
Se você localizar o cadastro, atualize  as informações de contato, como telefone e e-mail.  </p> <br />
 
<form action="cadastrar-pacientes.php" method="post"    role="search">
   <div class="form-group">
<label for="nomepesquisa">pesquisa</label>
<input type="search" name="nomepesquisa" id="nomepesquisa" >
</div>
<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="cadastrar-pacientes.php" method="post"   >
<div class="form-group">
<label for="nome" > Nome</label>
<input name="nome" id="nome" type="text" required  class="form-control" />
</div>
<div class="form-group">
<label for="cpf" > CPF </label>
<input name="cpf" id="cpf" type="text" class="form-control" />
</div>
<div class="form-group">
<label for="nascimento" > Data de Nascimento </label>
<input name="nascimento" id="nascimento" type="date" class="form-control" />
</div>
<div class="form-group">
<label for="telefone" > Telefone com ddd </label>
<input name="telefone" id="telefone" type="tel" class="form-control" />
</div>
<div class="form-group">
<label for="email" > E-mail</label>
<input name="email" id="email" type="email" class="form-control" />
</div>

<button type="submit" id="b" class="btn btn-primary"> Executar </button>
 </form>
</main>
<footer>Clínica Psiquiátrica! Trabalhando pela saúde da mente!  <br/> 2020! Todos os direitos reservados. </footer>
<!--  comentário aqui para não utilizar esse comando nesta página <p id="s" aria-live="assertive"> </p -->

<!-- arquivos js importantes -->
<script src="js/jquery-3.4.1.js" > </script>
    <script src="js/bootstrap.bundle.min.js" > </script>
        <script src="js/functions.js" > </script>
        <script>
        
        </script>
  </body>
</html>