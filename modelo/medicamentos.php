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
   <label for="solicitadopesquisa" > Medicamento solicitado  </label>
   <input type="radio"  id="solicitadopesquisa" name="status" value="0" />
   <label for="entreguepesquisa">  Medicamento Entregue </label>
   <input type="radio"  id="entreguepesquisa" name="status" value="1" />
   
</fieldset>
</div>
<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="cadastrar-medicamentos.php" method="post"   >
 <div class="form-group">
<label for="nome" > Nome do Medicamento</label> 
<input name="nome" id="nome" type="text"required autofocus class="form-control"> 
   </div> 
<div class="form-group">
<label for="quantidadedisponivel" > Quantidade de caixas no estoque </label>
<input name="quantidadedisponivel" id="quantidadedisponivel" type="number" class="form-control" />
</div>
<div class="form-group">
<label for="quantidadesolicitada" > Quantidade de caixas solicitadas </label>
<input name="quantidadesolicitada" id="quantidadesolicitada" type="number" class="form-control" />
</div>

<div class="form-group">
<fieldset>
 <legend> Status do pedido de medicamentos para a farmacia </legend>
<label for="medicamentosolicitado" > Medicamento solicitado  </label>
   <input type="radio"  id="medicamentosolicitado" name="status" value="0" />
   <label for="medicamentoentregue">  Medicamento Entregue </label>
   <input type="radio"  id="medicamentoentregue" name="status" value="1" />
      
</fieldset>
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