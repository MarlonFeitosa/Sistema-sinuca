<?php
include ('../includes/conexao_format.php');


$time = $_REQUEST['time'];
$jogador1 = $_REQUEST['jogador1'];
$jogador2 = $_REQUEST['jogador2'];
$regras = $_REQUEST['regras'];
$pontuacaoInicial = '0';
$scrol = "scrol";



	$ver = "SELECT `ID`, `NomeTime` FROM `cad_times` WHERE NomeTime = '".$time."'";
	$verifica = mysql_query($ver);
	if(mysql_num_rows($verifica)==1)
	{
		
		echo '<script type="text/javascript">  
		alert("O nome do time já existe!"); </script>';
		
				 //Atualize a página
		echo '<script type="text/javascript">location.replace("../index.php?jogagor1='.$jogador1.'&jogagor2='.$jogador2.'&time='.$time.'&scrol='.$scrol.'"); 
		</script>';	
		
		
	}
	else{
		
				$verJog = "SELECT jogador1, jogador2 FROM `cad_jogador` WHERE  jogador1 = '".$jogador1."' or jogador2 = '".$jogador2."'";
				$verJogador = mysql_query($verJog);
				if(mysql_num_rows($verJogador)==1)
				{
					
					echo '<script type="text/javascript">  
					alert("Participante(s) percentem a outro time!"); </script>';
					
							 //Atualize a página
					echo '<script type="text/javascript">location.replace("../index.php?jogador1='.$jogador1.'&jogador2='.$jogador2.'&time='.$time.'&scrol='.$scrol.'"); 
					</script>';	
		
				}
				else{
			
		
		
		
		
		
			$insere = "INSERT INTO `cad_times`(`ID`, `NomeTime`) VALUES ('','".$time."')";
			//echo $insere;
			mysql_query($insere);	
			
			$veriID = "SELECT `ID`, `NomeTime` FROM `cad_times` WHERE NomeTime = '".$time."'";
			$verificaID = mysql_query($veriID);
			$arry=mysql_fetch_array($verificaID);
			$ID = $arry['ID'];
			
			
			$inss = "INSERT INTO `cad_jogador`(`ID`, 
												`IDTime`, 
												`Jogador1`, 
												`Jogador2`) 
												VALUES ('','".$ID."',
														   '".$jogador1."',
														   '".$jogador2."')";
			
			mysql_query($inss);	
			
			
			
			$pontuacao = "INSERT INTO `grupo_times`(`ID`, `IDTime`, `IDPontos`, `Pontuacao`)
												VALUES ('','".$ID."',
														   '".$regras."',
														   '".$pontuacaoInicial."')";
			
			mysql_query($pontuacao);	
			
													   
														   
		echo '<script type="text/javascript">  
		alert("Time e Jogadores Cadastrados com Sucesso!"); </script>';
		
				 //Atualize a página
		echo '<script type="text/javascript">location.replace("../index.php?scrol='.$scrol.'"); 
		</script>';													   
			
		}
	}

?>