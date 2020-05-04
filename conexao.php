<?php
$host="localhost";
$bd="projeto";
$user="root";
$pass="";

// conexão e seleção do banco de dados
$conexao = mysqlI_connect($host, $user, $pass, $bd) or die("alha ao conectar");
 
// executa a consulta
//$conexao = "select *from aluno where nome ='$username' and senha='$password'";


