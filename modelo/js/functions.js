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
var opcaoCampos = document.querySelector("#med");

	if(opcaoCampos.value == 1){
		resultadoCampos ='<div  class="form-group">
			<label for="n8" > Medicamentos da farmácia </label> 
			<select name="n8" id="n8">
			<option value="1"> Fluoxetina </option>
			<option value="2"> Bupropiona  </option>
			</select> 
			</div>
			<div class="form-group">
			<label for="n9" > Dosagem </label> 
			<select name="n9" id="n9">
			<option value="1"> 10mg </option>
			<option value="2"> 20 mg </option>
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
			   <input type="checkbox"  id="sol" />
			   <label for="ent">  Medicamento Entregue </label>
			   <input type="checkbox"  id="ent"/>
			   
			</fieldset>
			</div>';} else
		  resultadoCampos = 'Medicamentos não foram solicitados!';}
		document.getElementById("l").innerHTML ="<div>"+resultado+"</div>";}
document.querySelector("#o").addEventListener("click", ()=> {mostrarCampos()
);});*/
