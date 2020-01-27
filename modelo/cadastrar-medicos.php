<?php
include_once "conectar-banco.php";
/*Método que irá chamar as querys */
$cx->query("insert into medicos (crm, nome,   cpf,  telefone, email, id_especialidade) values ( '$_POST[crm]', '$_POST[nome]', '$_POST[cpf]',   '$_POST[telefone]', '$_POST[email]', '$_POST[especialidade]'  )");
/*função para mandar uma metatag para o navegador */
header("Location: medicos.php");