<?php
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
/*Método que irá chamar as querys */
$cx->query("insert into médicos (crm, nome,   cpf,  telefone, email, id_especialidade) values ( '$_POST[crm]', '$_POST[nome]', '$_POST[cpf]',   '$_POST[telefone]', '$_POST[email]', '$_POST[especialidade]'  )");
/*função para mandar uma metatag para o navegador */
header("Location: medicos.php");