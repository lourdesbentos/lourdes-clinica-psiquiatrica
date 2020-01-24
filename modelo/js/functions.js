function mostrarLink(){
var resultadoLink = "";
var opcaoLink = document.querySelector("#per");

if(opcaoLink.value == 1){
resultadoLink ='<a href="agendamentos.php" >Agendamento de consultas </a>'+'<a href="pacientes.php" >Nossos Pacientes   </a>';} else
 if(opcaoLink.value == 2){
  resultadoLink = '<a href="medicos.php" >Corpo Clínico </a>' + '<a href="historico.php" > Histórico de consultas </a>';}
else 
{resultadoLink = '<a href="medicamentos.php" > Farmácia </a>';}
document.getElementById("l").innerHTML ="<nav>"+resultadoLink+"</nav>";}
document.querySelector("#b").addEventListener("click", ()=> {mostrarLink()
});

/*
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
*/