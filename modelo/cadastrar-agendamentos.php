include once "conectar-banco.php";

<?php
include_once 'conectar-banco.php';        

/*Método que irá chamar as querys */
$cx->query("insert into agendamentos (data, horario, idmedicos,     idpacientes) values ( '$_POST[data]', '$_POST[horario]', '$_POST[idmedicos]',   '$_POST[idpacientes]'    )");
/*função para mandar uma metatag para o navegador */
header("Location: agendamentos.php");