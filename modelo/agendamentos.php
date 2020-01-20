<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<title>Clínica Psiquiatrica - Agendamento de Consultas </title>
</head>
<body>
<header>
<h1> Clínica Psiquiátrica! </h1>
<nav>
<a href="index.php" >Home </a>
 </nav> 
 </header>
 <main>
 
<h1>Clínica Psiquiatrica! Consultas são agendadas aqui! </h1>
<p> Os agendamentos são feitos levando em conta as seguintes informações: <br> Verifique se o paciente não tem agendamento pendente. <br/> Caso não localize, faça o agendamento. 
</p> 

<p> Selecione a especialidade ou digite o nome do médico para localizar horários disponíveis. <br> Sugira sempre o próximo horário vago na agenda. </p>

<p> Lembre-se de solicitar ao paciente ou a pessoa que está agendando, que anote as informações de dia e horário, como também o local de comparecimento. <br>
</p>

 
 
<form action="conectar-banco.php" method="post"  role="search">
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
<input name="nome" id="n5" type="text" class="form-control" required  autofocus />
</div>

<button type="submit" class="btn btn-primary">buscar</button>
</form>


<form action="conectar-banco.php" method="post"   >
 <div class="form-group">
<label for="n6" > Data </label>
<input name="data" id="n6" type="date" required autofocus   class="form-control" />
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

$medico= $cx->query ("select * from médicos order by especialidade");
while ($especialidades = $medico->fetch_assoc()){
    echo "<option value='$especialidades[id]'>$especialidades[especialidade] </option>";
} ?>
</select> 
</div>
<div class="form-group">
<label for="n2" > Horário </label>
<input name="horario" id="n2" type="time" required autofocus   class="form-control" />
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