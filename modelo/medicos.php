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
 
<form action="cadastrar-medicos.php" method="post"    role="search">
   <div class="form-group">
<label for="c">CRM</label>
<input type="search" name="crm" id="c" >
</div>
<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="cadastrar-medicos.php" method="post"   >
 <div class="form-group">
<label for="n6" > CRM </label>
<input name="crm" id="n6" type="number" required  class="form-control" />
</div>
 
<div class="form-group">
<label for="n1" > Nome</label>
<input name="nome" id="n1" type="text" required  class="form-control" />
</div>

<div class="form-group">
<label for="esp" > Especialidade</label> 
<select name="especialidade" id="esp">
<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$especialidade = $cx->query ("select * from médicos order by especialidade");
while ($especialidades = $especialidade->fetch_assoc()){
    echo "<option value='$especialidades[id]'>$especialidades[especialidade] </option>";
}
?>    
</select> 
</div>
<div class="form-group">
<label for="n2" > CPF </label>
<input name="cpf" id="n2" type="number" required  class="form-control" />
</div>

<div class="form-group">
<label for="n4" > Telefone com ddd		 </label>
<input name="telefone" id="n4" type="tel" class="form-control" />
</div>
<div class="form-group">
<label for="n5" > E-mail</label>
<input name="email" id="n5" type="email" class="form-control" />
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