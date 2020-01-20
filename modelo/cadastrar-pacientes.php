<?php
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
/*Método que irá chamar as querys */
$cx->query("insert into pacientes (nome, cpf, nascimento, telefone, email) values ('$_POST[nome]', '$_POST[cpf]',  '$_POST[nascimento]', '$_POST[telefone]', '$_POST[email]')");
/*função para mandar uma metatag para o navegador */
header("Location: pacientes.php");