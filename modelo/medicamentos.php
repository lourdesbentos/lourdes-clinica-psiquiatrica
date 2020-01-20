<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Clínica Psiquiatrica - Farmácia </title>
</head>
<body>
<header>
<h1> Clínica Psiquiátrica! </h1>
									<nav>
<a href="index.php" >Home </a>
 </nav> 
 </header>
 <main>
 
<h1>Clínica Psiquiatrica! Nossa farmácia está aqui!</h1>
<p> Medicamentos da Farmácia:<br/> Possível verificar os medicamentos disponíveis e os solicitados para os pacientes pelos médicos. 
</p> 

<p> Lembre-se de marcar a opção de "Entregue" ao Entregar o medicamento ao pacente. 
<br /></p>
 
<form action="cadastrar-medicamentos.php" method="post"    role="search">	
<div class="form-group">
<fieldset>
 <legend> Status do pedido de medicamentos para a farmacia </legend>
   <label for="solic" > Medicamento solicitado  </label>
   <input type="radio"  id="solic" name="status" value="1" />
   <label for="entr">  Medicamento Entregue </label>
   <input type="radio"  id="entr" name="status" value="1" />
   
</fieldset>
</div>
<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="cadastrar-medicamentos.php" method="post"   >
 <div class="form-group">
<label for="n8" > Medicamentos da farmácia </label> 
<select name="n8" id="n8">
<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$medicamento = $cx->query ("select * from medicamentos order by Nome");
while ($medicamentos = $medicamento->fetch_assoc()){
    echo "<option value='$medicamentos[id]'>$medicamentos[Nome] </option>";
}
?>    
<div class="form-group">
<label for="n10" > Quantidade de caixas </label>
<input name="n10" id="n10" type="number" class="form-control" />
</div>
<div class="form-group">
<fieldset>
 <legend> Status do pedido de medicamentos para a farmacia </legend>
<label for="sol" > Medicamento solicitado  </label>
   <input type="radio"  id="sol" name="status" value="1" />
   <label for="ent">  Medicamento Entregue </label>
   <input type="radio"  id="ent" name="status" value="2" />
      
</fieldset>
</div>
<button type="button" id="b" class="btn btn-primary"> Executar </button>
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