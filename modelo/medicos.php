<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Clínica Psiquiatrica - Corpo Clínico </title>
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
 
<h1>Clínica Psiquiatrica! Cadastro dos nossos médicos! </h1>
<p> Nosso corpo clínico é composto por médicos com especialidades específicas. <br/> Psiquiatria Infantil, Psiquiatria adulto, e psiquiatria geriátrica.
</p> 

<p> O ccadastro dos profissionais, está sendo atualizado constantemente e contém informações essenciais. 
<br/>Se você considerar necessário,  atualize  as informações de contato, como telefone e e-mail nesta página. </p>
 
<!--  
<form action="cadastrar-medicos.php" method="post"    role="search">
   <div class="form-group">
<label for="crmpesquisa">CRM</label>
<input type="search" name="crmpesquisa" id="crmpesquisa" >
</div>
<button type="submit" class="btn btn-primary">buscar</button>
</form> -->

<h2 id="medicoscadastrados"> Médicos cadastrados : </h2>
<ul>


<?php 
$medicos= $cx->query ("select medicos.nome, medicos.crm, medicos.cpf, medicos.telefone, medicos.email, especialidades.especialidades from medicos inner join especialidades on medicos.id_especialidade = especialidades.id;");
        /*busca os dados no banco */
while ($listaMedicos= $medicos->fetch_assoc()){
echo "<li 'un-listened' > CRM: $listaMedicos[crm];   Nome: $listaMedicos[nome];   CPF: $listaMedicos[cpf];   Telefone: $listaMedicos[telefone]; E-mail: $listaMedicos[email]; Especialidade: $listaMedicos[especialidades];     </li>";
}
?>
  </ul>

 <form action="cadastrar-medicos.php" method="post"   >
 <div class="form-group">
<label for="crm" > CRM </label>
<input name="crm" id="crm" type="number" required  class="form-control" />
</div>
 
<div class="form-group">
<label for="nome" > Nome</label>
<input name="nome" id="nome" type="text" required  class="form-control" />
</div>

<div class="form-group">
<label for="cpf" > CPF </label>
<input name="cpf" id="cpf" type="text" required  class="form-control" />
</div>

<div class="form-group">
<label for="telefone" > Telefone com ddd </label>
<input name="telefone" id="telefone" type="tel" class="form-control" />
</div>
<div class="form-group">
<label for="email" > E-mail</label>
<input name="email" id="email" type="email" class="form-control" />
</div>

<div class="form-group">
<label for="especialidade" > Especialidade</label> 
<select name="especialidade" id="especialidade">
<?php 
$especialidade = $cx->query ("select * from especialidades order by especialidades");
while ($especialidades = $especialidade->fetch_assoc()){
    echo "<option value='$especialidades[id]'> $especialidades[especialidades] </option>";}
?>    
</select> 
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