<?php
/*comando para logar no banco */
$cx = new mysqli ("localhost","root","","clinicapsiquiatrica");
/*Método que irá chamar as querys */
$cx->query("insert into medicamentos (nome, quantidadedisponivel,  quantidadesolicitada, status) values ( '$_POST[nome]', '$_POST[quantidadedisponivel]'   '$_POST[quantidadesolicitada]' '$_POST[status]')");
/*função para mandar uma metatag para o navegador */
header("Location: medicamentos.php");s