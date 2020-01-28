
<?php
include_once 'conectar-banco.php';        

/*Método que irá chamar as querys */
$cx->query("insert into historico (comentário, idmedicos,     idpacientes, idmedicamentos, data) values ( '$_POST[comentario]',  $_POST[nomemedico],   $_POST[nomepaciente], $_POST[farmacia], '$_POST[data]'  )");
/*função para mandar uma metatag para o navegador */
header("Location: historico.php");