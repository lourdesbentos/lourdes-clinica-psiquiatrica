<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Clínica Psiquiatrica - Histórico de Consultas </title>
</head>
<body>
<header>
<h1> Clínica Psiquiátrica! </h1>
									<nav>
<a href="index.php" >Home </a>
 </nav> 
 </header>
 <main>
 
<h1>Clínica Psiquiatrica! Nosso histórico de consultas está aqui! </h1>
<p> Registro do histórico de atendimento do paciente:<br> O médico relata informações importantes, resultados de exames, indicações / encaminhamentos. Podendo, inclusive, solicitar medicamentos ao setor de farmácia.
</p> 

<p> Lembre-se que este histórico será cessado por todo o corpo clínico, então, procure ser claro e objetivo no relato de suas observações / orientações / solicitações. 
<br></p>
 
<form action="conectar-banco.php" method="post"   role="search">
   <div class="form-group">
<label for="n">Nome do Médico </label>
<input type="search" name="nome" id="n" >
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
<label for="n5" > Nome do Paciente </label>
<select name="nome" id="n5">
<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$paciente= $cx->query ("select * from pacientes order by nome");
while ($pacientes = $paciente->fetch_assoc()){
    echo "<option value='$pacientes[id]'>$pacientes[nome] </option>";
}
?>    
</select> 

</div>

<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="conectar-banco.php" method="post"   >
 <div class="form-group">
<label for="n6" > Data </label>
<input name="n6" id="n6" type="date" required  class="form-control" />
</div>
 
<div class="form-group">
<label for="n1" > Nome do Médico </label>
<select name="Nome" id="n1">
<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$nome= $cx->query ("select * from médicos order by Nome");
while ($medicos = $nome->fetch_assoc()){
    echo "<option value='$medicos[id]'>$medicos[Nome] </option>";
}
?>    
</select> 
</div>

<div class="form-group">
<label for="espc" > Especialidade</label> 
<select name="especialidade" id="espc">
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
<label for="n4" > Nome do Paciente </label>
<select name="nome" id="n4">
<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$paciente= $cx->query ("select * from pacientes order by nome");
while ($pacientes = $paciente->fetch_assoc()){
    echo "<option value='$pacientes[id]'>$pacientes[nome] </option>";
}
?>    
</select> 

</div>

<div class="form-group">
<label for="n2" > Comentário </label>
<textarea rows="5" cols="30"id="n2" Name="n2" > </textarea></div>

<div class="form-group">
<label for="med" > Solicitar medicamentos </label> 
<select name="med" id="med">
<option value="1"> sim</option>
<option value="2"> não </option>
</select> 
</div>
<button type="button" id="o" class="btn btn-primary"> OK </button>
<div  class="form-group">
			<label for="n8" > Medicamentos da farmácia </label> 
			<select name="nome" id="n8">
			<?php 
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
$medicamento = $cx->query ("select * from medicamentos order by Nome");
while ($medicamentos = $medicamento->fetch_assoc()){
    echo "<option value='$medicamentos[id]'>$medicamentos[Nome] </option>";
}
?>    
</select> 
			</div>
						<div class="form-group">
			<label for="n10" > Quantidade de caixas </label>
			<input name="n10" id="n10" type="number" class="form-control" />
			</div>
			<div class="form-group">
			<fieldset>
			 <legend> Status do pedido de medicamentos para a farmacia </legend>
			   <label for="sol" > Medicamento solicitado  </label>
			   <input type="radio"  id="sol" name="status" value="1"  />
			   <label for="ent">  Medicamento Entregue </label>
			   <input type="radio"  id="ent" name="status" value="2"/>
			   
			</fieldset>
			</div>
<button type="button" id="b" class="btn btn-primary"> Executar </button>
 </form>
</main>
<footer>Clínica Psiquiátrica! Trabalhando pela saúde da mente!  <br> 2020! Todos os direitos reservados. </footer>
<!--  comentário aqui para não utilizar esse comando nesta página <p id="s" aria-live="assertive"> </p -->

<!-- arquivos js importantes -->
<script src="js/jquery-3.4.1.js" > </script>
    <script src="js/bootstrap.bundle.min.js" > </script>
        <script src="js/functions.js" > </script>
        <script>
        
        </script>
  </body>
</html>