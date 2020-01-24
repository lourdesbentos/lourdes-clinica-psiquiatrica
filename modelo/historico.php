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
<?php 

include_once 'conectar-banco.php';
?>
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
 
<form action="cadastrar-historico.php" method="post"   role="search">
   <div class="form-group">
<label for="nome">Nome do Médico </label>
<input type="search" name="nome" id="nome" >
</div>
<div class="form-group">
<label for="especialidade" > Especialidade</label> 
<select name="especialidade" id="especialidade">
<?php 
$especialidade = $cx->query ("select * from especialidades order by especialidades");
while ($especialidades = $especialidade->fetch_assoc()){
    echo "<option value='$especialidades[id]' > $especialidades[especialidades] </option>";
}
?>    
</select> 
</div>

<div class="form-group">
<label for="nomepaciente" > Nome do Paciente </label>
<select name="nomepaciente" id="nomepaciente">
<?php 
$paciente= $cx->query ("select * from pacientes order by nome");
while ($pacientes = $paciente->fetch_assoc()){
    echo "<option value='$pacientes[id]' > $pacientes[nome] </option>";
}
?>    
</select> 

</div>

<button type="submit" class="btn btn-primary">buscar</button>
</form>


 <form action="cadastrar-historico.php" method="post"   >
 <div class="form-group">
<label for="data" > Data </label>
<input name="data" id="data" type="date" required  class="form-control" />
</div>
 
<div class="form-group">
<label for="nomemedico" > Nome do Médico </label>
<select name="nomemedico" id="nomemedico">
<?php 
 $medico=$cx->query ("select * from medicos order by Nome");
while ($medicos = $medico->fetch_assoc()){
    echo "<option value='$medicos[id]' > $medicos[Nome] </option    >";
}
?>    
</select> 
</div>

<div class="form-group">
<label for="especialidademedico" > Especialidade</label> 
<select name="especialidademedico" id="especialidademedico">
<?php 
$especialidade = $cx->query ("select * from especialidades order by especialidades");
while ($especialidades = $especialidade->fetch_assoc()){
    echo "<option value='$especialidades[id]' > $especialidades[especialidades] </option>";
}
?>    
</select> 
</div>

<div class="form-group">
<label for="nomepaciente" > Nome do Paciente </label>
<select name="nomepaciente" id="nomepaciente">
<?php 
$paciente= $cx->query ("select * from pacientes order by nome");
while ($pacientes = $paciente->fetch_assoc()){
    echo "<option value='$pacientes[id]' > $pacientes[nome] </option>";
}
?>    
</select> 

</div>

<div class="form-group">
<label for="comentario" > Comentário </label>
<textarea rows="5" cols="30"id="comentario" Name="comentario" > </textarea></div>

<div class="form-group">
<label for="medicamentos" > Solicitar medicamentos </label> 
<select name="medicamentos" id="medicamentos">
<option value="1"> sim</option>
<option value="2"> não </option>
</select> 
</div>
<button type="button" id="o" class="btn btn-primary"> OK </button>
<!-- <div id="l" " </div>


<div  class="form-group">
			<label for="farmacia" > Medicamentos da farmácia </label> 
			<select name="farmacia" id="farmacia">
			<?php 
$medicamento = $cx->query ("select * from medicamentos order by Nome");
while ($medicamentos = $medicamento->fetch_assoc()){
    echo "<option value='$medicamentos[id]' > $medicamentos[Nome] </option>";
}
?>    
</select> 
			</div>
						<div class="form-group">
			<label for="quantidadecaixas" > Quantidade de caixas </label>
			<input name="quantidadecaixas" id="quantidadecaixas" type="number" class="form-control" />
			</div>
			<div class="form-group">
			<fieldset>
			 <legend> Status do pedido de medicamentos para a farmacia </legend>
			   <label for="solicitado" > Medicamento solicitado  </label>
			   <input type="radio"  id="solicitado" name="status" value="1"  />
			   <label for="entregue">  Medicamento Entregue </label>
			   <input type="radio"  id="entregue" name="status" value="2"/>
			   
			</fieldset>
			</div>
		-->
<button type="submet" id="b" class="btn btn-primary"> Executar </button>
 </form>
 <script> 
 function mostrarCampos(){ var resultadoCampos = "";
var opcaoCampos = document.querySelector("#medicamentos");

	if(opcaoCampos.value == 1){
		resultadoCampos ='<div  class="form-group">
			<label for="farmacia" > Medicamentos da farmácia </label> 
			<select name="farmacia" id="farmacia">
			<?php 
$medicamento = $cx->query ("select * from medicamentos order by Nome");
while ($medicamentos = $medicamento->fetch_assoc()){
    echo "<option value='$medicamentos[id]' > $medicamentos[Nome] </option>";
}
?>    
</select> 
			</div>
						<div class="form-group">
			<label for="quantidadecaixas" > Quantidade de caixas </label>
			<input name="quantidadecaixas" id="quantidadecaixas" type="number" class="form-control" />
			</div>
			<div class="form-group">
			<fieldset>
			 <legend> Status do pedido de medicamentos para a farmacia </legend>
			   <label for="solicitado" > Medicamento solicitado  </label>
			   <input type="radio"  id="solicitado" name="status" value="1"  />
			   <label for="entregue">  Medicamento Entregue </label>
			   <input type="radio"  id="entregue" name="status" value="2"/>
			   
			</fieldset>
			</div>';} else
		  resultadoCampos = 'Medicamentos não foram solicitados!';}
		document.getElementById("l").innerHTML ="<div>"+resultadoCampos+"</div>";}
document.querySelector("#o").addEventListener("click", ()=> {mostrarCampos()
);});
</script>

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