<?php
$server ="#"; //informe o servidor
$usuario = "#"; //informe o usuario
$senha = "#";// informe a senha
$bd = "sistema_sinuca";

if(!@mysql_connect($server, $usuario ,$senha))
{
echo "erro1"; exit();
}
if(!@mysql_select_db($bd)) 
{
echo "erro2";  exit();
}
?>
