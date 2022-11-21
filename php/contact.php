<?php
include('header.php');


$nome = $_POST['nome'];
$snome = $_POST['snome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];

$hora = "as ".date("H")." e ".date("t");
$hoje = "dia ".date("d")." de ".date("m")." de ".date("Y");


$sql = "INSERT INTO `contactos` (`nome`, `sobrenome`, `email`, `assunto`, `mensagem`, `quando`, `hora`) VALUES (  '$nome', '$snome', '$email', '$assunto', '$msg', '$hoje', '$hora')";
$con = $conexao->query($sql);

?>