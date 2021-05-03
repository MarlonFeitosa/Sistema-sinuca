<?php
include ('../includes/conexao_format.php');
$IDTime = $_REQUEST['TimeL'];

$pontos = $_REQUEST['pontos'];
$scrol2 = "scrol2";
$scrol3 = "scrol3";


	$ins = "UPDATE `grupo_times` 
			SET `Pontuacao`='".$pontos."' 
						WHERE IDTime = '".$IDTime."'";
						
	$up = mysql_query($ins);
	
	
	
	$ver = "SELECT * FROM `grupo_times` WHERE Pontuacao = '20'";
	$verifica = mysql_query($ver);
	if(mysql_num_rows($verifica)==1)
	{
	
			echo '<script type="text/javascript">  
			alert("Pontuaçao Inserida co Sucesso!"); </script>';
			echo '<script type="text/javascript">location.replace("../index.php?scrol3='.$scrol3.'"); 
			</script>';	
	
	}
	else{
	echo '<script type="text/javascript">  
	alert("Pontuaçao Inserida co Sucesso!"); </script>';
	echo '<script type="text/javascript">location.replace("../index.php?scrol2='.$scrol2.'"); 
	</script>';	
	}
	

?>