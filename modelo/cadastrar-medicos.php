<?php
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
/*Método que irá chamar as querys */
$cx->query("insert into médicos (crm, nome, especialidade,  cpf,  telefone, email) values ( '$_POST[crm]', '$_POST[nome]', '$_POST[especialidade]', '$_POST[cpf]',   '$_POST[telefone]', '$_POST[email]')");
/*função para mandar uma metatag para o navegador */
header("Location: medicos.php");