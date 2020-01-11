function comparaParImpar(){
	var i;
var resultado = "";
var numero = document.querySelector("#n1").value;
var opcao = document.querySelector("#nip");
var verificar = numero%2;
if(opcao.value == 2 && verificar == 0){
i= -2;
while (i<numero){
i=i+2;

	resultado = resultado+i+', ';}
	
 ;} else
	 if(opcao.value == 1 && verificar !== 0){
		i=-1;
while(i<numero){
i= i+2;
		resultado = resultado+i+', ';};} else
{resultado = "escolha outro número! Este não corresponde ao tipo selecionado!";}
document.getElementById("s").innerHTML = resultado;}
document.querySelector("#b").addEventListener("click", ()=> {comparaParImpar()
});
