function mostrarLink(){
var resultado = "";
var opcao = document.querySelector("#per");

if(opcao.value == 1){
resultado ='<a href="agendamentos.html" >Agendamento de consultas </a>'+'<a href="pacientes.html" >Nossos Pacientes   </a>';} else
 if(opcao.value == 2){
  resultado = '<a href="medicos.html" >Corpo Clínico </a>' + '<a href="historico.html" > Histórico de consultas </a>';}
else 
{resultado = '<a href="medicamentos.html" > Farmácia </a>';}
document.getElementById("l").innerHTML ="<nav>"+resultado+"</nav>";}
document.querySelector("#b").addEventListener("click", ()=> {mostrarLink()
});

/*function mostrarCampos(){
var resultado = "";
var opcao = document.querySelector("#med");

	if(opcao.value == 1){
		resultado ='<div  class="form-group">
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
		  resultado = 'Medicamentos não foram solicitados!';}
		document.getElementById("l").innerHTML ="<div>"+resultado+"</div>";}
document.querySelector("#o").addEventListener("click", ()=> {mostrarCampos()
});*/
