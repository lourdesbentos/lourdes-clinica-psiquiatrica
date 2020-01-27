
<?php
include_once 'conectar-banco.php';        

/*Método que irá chamar as querys */
$cx->query("insert into agendamentos (data, horario, idmedicos,     idpacientes) values ( '$_POST[data]', '$_POST[horario]', '$_POST[nomemedico]',   '$_POST[nomepaciente]'    )");
/*função para mandar uma metatag para o navegador */
header("Location: agendamentos.php");