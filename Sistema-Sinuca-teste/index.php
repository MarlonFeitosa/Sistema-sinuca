<?php require_once('../Connections/sinuca.php');?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_sinuca, $sinuca);
$query_TimesLista = "SELECT * FROM  grupo_times as gTime
inner join cad_times as time ON time.ID=gTime.IDTime ORDER BY NomeTime ASC";
$TimesLista = mysql_query($query_TimesLista, $sinuca) or die(mysql_error());
$row_TimesLista = mysql_fetch_assoc($TimesLista);
$totalRows_TimesLista = mysql_num_rows($TimesLista);
?>
<?php
include 'includes/conexao_format.php';


	$ver = "SELECT `IDTime` FROM `grupo_times` where Pontuacao = '20'";
	$verifica = mysql_query($ver);
	$arr =mysql_fetch_array($verifica);
	$IDTime = $arr['IDTime'];
	
	
	if(mysql_num_rows($verifica)==1)
	{
		
		$acha = "SELECT `NomeTime` FROM `cad_times` where ID = '".$IDTime."'";
		$verific = mysql_query($acha);
		$arracha =mysql_fetch_array($verific);
		$NomeTime = $arracha['NomeTime'];
		
		
		$chama_x = "ok";
	
		
	}
		





if((isset($_REQUEST['scrol']))
			 )
             {	
             $scrol = $_REQUEST['scrol'];//ativa a funcao onload no body vindo da pagina cad_times.php
			 }
			 else{
					$scrol="";
			 		}
					
if((isset($_REQUEST['scrol2']))
			 )
             {	
             $scrol2 = $_REQUEST['scrol2'];//ativa a funcao onload no body vindo da pagina cad_times.php
			 }
			 else{
					$scrol2="";
			 		}
					
if((isset($_REQUEST['scrol3']))
			 )
             {	
             $scrol3 = $_REQUEST['scrol3'];//ativa a funcao onload no body vindo da pagina cad_times.php
			 }
			 else{
					$scrol3="";
			 		}
					
					
					
if((isset($_REQUEST['time']))
 )
 {	
 $time = $_REQUEST['time'];//ativa a funcao onload no body vindo da pagina cad_times.php
 }
 else{
	$time="";
	}


					
					
if((isset($_REQUEST['jogador1']))
 )
 {	
 $jogador1 = $_REQUEST['jogador1'];//ativa a funcao onload no body vindo da pagina cad_times.php
 }
 else{
	$jogador1="";
	}



					
					
if((isset($_REQUEST['jogador2']))
 )
 {	
 $jogador2 = $_REQUEST['jogador2'];//ativa a funcao onload no body vindo da pagina cad_times.php
 }
 else{
	$jogador2="";
	}


					
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Jogo de Sinuca</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">


<!--valida campos-->
<script language="JavaScript" >
	
	function ValidarCampos()
	{
	    if (document.times_jogadores.time.value=="")
		{
			alert( "Preencha o campo time!" );
			document.times_jogadores.time.focus();
			return false;
		}
		
		if (document.times_jogadores.jogador1.value=="")
		{
			alert( "Preencha o campo Primeiro Jogador!" );
			document.times_jogadores.jogador1.focus();
			return false;
		}
		
		
		if (document.times_jogadores.jogador2.value=="")
		{
			alert( "Preencha o campo Segundo Jogador!" );
			document.times_jogadores.jogador2.focus();
			return false;
		}
		
		
		 if (document.getElementById('regras').checked) {
           // alert("checked");
        	} else {
            alert("Marque a opção para concordar com a regra.");
       		 return false;
   	  		}
		
	return true;	
	}

</script>
<script language="JavaScript" >
	
	function ValidarCamposPontua()
	{
	    if (document.pontua.TimeL.value=="")
		{
			alert( "Selecione um Time!" );
			document.pontua.TimeL.focus();
			return false;
		}
		
		if (document.pontua.pontos.value=="")
		{
			alert( "Informe a pontuação do Time Selecionado!" );
			document.pontua.pontos.focus();
			return false;
		}
	return true;	
	}

</script>



<script language="javascript">
   function ancora()
   {
       location.href = "#<?php echo $scrol; ?>";
   }
</script>
<script language="javascript">
   function ancora2()
   {
       location.href = "#<?php echo $scrol2; ?>";
   }
</script>
<script language="javascript">
   function ancora3()
   {
       location.href = "#<?php echo $scrol3; ?>";
   }
</script>


<style>
/*tira barra horizontal*/
body { 
overflow-x: hidden;

}
</style>

</head>

<body onLoad="javascript:ancora();javascript:ancora2();javascript:ancora3();">
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" style="width:110px; height:40px;"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about">Cadastrar Times</a></li>
                 <li ><a href="#works">Times Cadastrados</a></li>
                 <li ><a href="#partners">Pontuação Times</a></li>
                 <li ><a href="#contact">Regras</a></li>                 
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/back1.jpg" alt="banner">          
            <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
            		<!--<img src="#" class="animated bounceInUp" alt="logo">-->
              		<h1 class="animated bounceInLeft">Sinuca</h1>
              		<p class="animated bounceInRight">Para Participar leia as Regras</p>
              		<div class="scroll animated fadeInUp">
                    
                    <a href="#contact" class="btn btn-default"><i class="fa fa-paper-plane-o">
                    </i> Regras</a></div>
              		</div>
              	</div>
            </div>
        </div>
        <!-- #Item 1 -->

     
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
     
    </div>
<!-- #Slider Ends -->
</div>









<!-- Cirlce Starts -->

<div  id="scrol"></div>
<form name="times_jogadores" action="cad/cad_time_jogador.php" method="post">
<div id="about"  class="container spacer about"  >
<h2 class="text-center wowload fadeInUp" >Cadastre os Times e Jogadores Participantes</h2>  



   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   <div class="col-sm-6 wowload fadeInRight"> 
   <h4><i class="fa fa-check-circle"></i> Times</h4>
   <p>
    <input  type="text" name="time" id="time" class="form-control" value="<?php echo $time; ?>"  placeholder="Informe o nome do Time">   
</p>
   </div>
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>

   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   <div class="col-sm-6 wowload fadeInRight"> 
   <p>
    <h4><i class="fa fa-user "></i> Jogadores</h4>
   </p>
   </div>
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>








   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   <div class="col-sm-6 wowload fadeInRight"> 
   <p>
   <input  type="text" name="jogador1" id="jogador1" value="<?php echo $jogador1; ?>"  class="form-control" placeholder="Informe o nome do Primeiro Jogador">
   </p>
   </div>
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>
   
  
  
  
  
   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   <div class="col-sm-6 wowload fadeInRight"> 
   
   <input  type="text" name="jogador2" id="jogador2" class="form-control" value="<?php echo $jogador2; ?>" placeholder="Informe o nome do Segundo Jogador">
   
   </div>
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>
   
   <br>
   <div class="row">
   <div class="col-sm-2 wowload fadeInRight"> </div>
   <div class="col-sm-1 wowload fadeInRight"> </div>
   
 
   <div class="col-sm-1 wowload fadeInRight"> 
   <input  type="checkbox" name="regras" id="regras" style="width:20px;" value="1" class="form-control" >
   </div>
  
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>
   
   
   
   <div class="row">
   <div class="col-sm-2 wowload fadeInRight"> </div>
   <div class="col-sm-1 wowload fadeInRight"> </div>
   <div  class="col-sm-3 wowload fadeInRight"  style="text-align:bottom:   0;"> Concordo com as regras</div>
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>

  
  <br>
  
   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   <div class="col-sm-6 wowload fadeInRight"> 
   
   <button id="insc" type="submit" class="btn btn-primary "  onClick="return ValidarCampos();">Cadastrar <i class="fa fa-paper-plane"></i></button>
   
    </div>
    <div class="col-sm-3 wowload fadeInRight"> </div>
    </div>
    
</div>
</form>

<!-- #CADASTRADOS -->

  <h3 class="text-center wowload fadeInUp" id="works">Times Cadastros e seus Jogadores</h3>
	<ul class="row text-center list-inline  wowload bounceInUp">
                      
<!--<hr style="height:1px;border:none;color:#999;background-color: #A7CCF5;" />-->
   <br>     
       
   <div class="row">
   <div class="col-sm-2 wowload fadeInRight"> </div>
   
   <div class="col-sm-3 wowload fadeInRight"><b> TIMES </b> </div>
   <div class="col-sm-2 wowload fadeInRight"><b> JOGADOR 1 </b></div>
   <div class="col-sm-2 wowload fadeInRight"><b> JOGADOR 2 </b></div>
   
   
   <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>
    
 <br>
        
        
        <?php
        
		$visualiza = "SELECT time.NomeTime as time, jog.Jogador1 as Jog1, jog.Jogador2 as Jog2
						FROM cad_times as time 
   					 inner join cad_jogador as jog ON jog.IDTime=time.ID 
					 
					 LIMIT 10";
		
		$v=mysql_query($visualiza);
			
			$resultado = ($v);  
			$total_registros = mysql_num_rows($v);
			
				for($i=0; $i<$total_registros; $i++)
					{
					 $item = mysql_fetch_array($resultado);
		
		
						echo " <div class='row'>"; 
						echo "  <div class='col-sm-2 wowload fadeInRight'> </div>";
					   
						 echo " <div class='col-sm-3 wowload fadeInRight'>
						 <font face='Verdana, Geneva, sans-serif'>
						 <i class='fa fa-check-circle'></i> ".$item['time']."</div>";
						
						 echo "  <div class='col-sm-2 wowload fadeInRight'>
						 <font face='Verdana, Geneva, sans-serif'>
						 <i class='fa fa-user' aria-hidden='true'></i> ".$item['Jog1']."</div>";
						
						 echo "  <div class='col-sm-2 wowload fadeInRight'>
						 <font face='Verdana, Geneva, sans-serif'>
						 <i class='fa fa-user' aria-hidden='true'></i> ".$item['Jog2']."</div>";
					   
						echo " <div class='col-sm-3 wowload fadeInRight'> </div>";
						echo " </div>";
						echo " <br>";
		
					}
		
		?>
  	</ul>


<!-- #CADASTRADOS -->
  
 <br>
  <br>
   <br>
    <br>
     <br>
      <br>
       <br id="scrol2">
        <br id="partners">
         <br>
          <br>
         
  <h3 class="text-center wowload fadeInUp" >Pontuações dos 10 primeiros Times Cadastrados</h3>
	<ul class="row text-center list-inline  wowload bounceInUp" >
                      
<!--<hr style="height:1px;border:none;color:#999;background-color: #A7CCF5;" />-->
       
   <br>     
       
   <div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   
   <div class="col-sm-3 wowload fadeInRight"><b> TIMES </b> </div>
   <div class="col-sm-3 wowload fadeInRight"><b> PONTUAÇÃO </b></div>
   
   <div class="col-sm-3 wowload fadeInRight"> </div>
    </div>
  
   
    
    
 <br>
        
        
        <?php
        
		$pont = "SELECT time.ID as ID, time.NomeTime as time, gtime.Pontuacao as Pontuacao
					 FROM grupo_times as gtime 
   					 inner join cad_times as time ON time.ID=gtime.IDTime 
					 order by Pontuacao desc
					 LIMIT 10 ";
		
		$p=mysql_query($pont);
			
			$resultadoPontos = ($p);  
			$total_registrosPontos = mysql_num_rows($p);
			
				for($j=0; $j<$total_registrosPontos; $j++)
					{
					 $itemP = mysql_fetch_array($resultadoPontos);
		
		
						echo " <div class='row'>"; 
						echo "  <div class='col-sm-3 wowload fadeInRight'> </div>";
					   
						 echo " <div class='col-sm-3 wowload fadeInRight'>
						 <font face='Verdana, Geneva, sans-serif'>
						 <i class='fa fa-check-circle'></i> ".$itemP['time']."</div>";
						
						 echo "  <div class='col-sm-3 wowload fadeInRight'>
						 <font face='Verdana, Geneva, sans-serif'>
						 <i class='fa fa-product-hunt' aria-hidden='true'></i> ".$itemP['Pontuacao']."</div>";
						
						echo "  <div class='col-sm-3 wowload fadeInRight'> </div>";
						
						echo "</div>";
						
						
						
						
						echo " <br>";
		
					}
		
		?>
        
  	</ul>
 

   <br> 
   
     
<form name="pontua"  action="cad/pontua.php" method="post">     
<div class="row">
   <div class="col-sm-3 wowload fadeInRight"> </div>
   
   <div class="col-sm-3 wowload fadeInRight">
    <select name="TimeL" class="form-control" >
    <option value="" selected>Selecione uma Opção</option>
      <?php
	do {  
	?>
      <option value="<?php echo $row_TimesLista['ID']?>"><?php echo $row_TimesLista['NomeTime']?></option>
      <?php
	} while ($row_TimesLista = mysql_fetch_assoc($TimesLista));
	  $rows = mysql_num_rows($TimesLista);
	  if($rows > 0) {
		  mysql_data_seek($TimesLista, 0);
		  $row_TimesLista = mysql_fetch_assoc($TimesLista);
	  }
	?>
    </select>
   
   </div>
   
   <div class="col-sm-3 wowload fadeInRight">
    <input name="pontos"  class="form-control"  placeholder="Informe a Pontuação">
   </div>
 
   <div class="col-sm-3 wowload fadeInRight"> </div>
   
   
</div>   
    

<br><br><br>

<div class="row">
    <div class="col-sm-3 wowload fadeInRight"> </div>
        <div class="col-sm-6 wowload fadeInRight"> 
         <button id="p" type="submit" class="btn btn-primary"  onClick="return ValidarCamposPontua();">Pontuar <i class="fa fa-paper-plane"></i></button>
        </div>
    <div class="col-sm-3 wowload fadeInRight"> </div>
</div>


</form>
<!-- #CADASTRADOS -->



<br id="scrol3">
<br>
<br>
<br>
<br >
<br>

<div class="row" <?php if ($IDTime == ""){ ?> hidden <?php } ?>>
 <div class="col-sm-4 wowload fadeInRight"> </div>
 <div class="col-sm-4 wowload fadeInRight"> 

  <?php
						
	  if($chama_x == "ok")
	  {
	  
	  
		
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='#339900' size='+1'>O TIME</font> 
		   <font  color='#339900' size='+1'>".$NomeTime."</font>
		   <font color='#339900' size='+1'>é Campeão</font>";
		   echo "<br>"; 
		   
	  }else{
		  
		  echo "<br>";
		  }

?>
</div>
<div class="col-sm-4 wowload fadeInRight"> </div>
</div>



<div class="row" <?php if ($IDTime == ""){ ?> hidden <?php } ?>>
 
 <div class="col-sm-4 wowload fadeInRight"> </div>
 
 <div class="col-sm-6 wowload fadeInRight"> 

  <?php
						
	  if($chama_x == "ok")
	  {
	  
	  
		
		  echo "<br>";
				echo "<img src='images/trofeu.png' style='width:380px; height:380px;'>";
		   
	   }
	   else{
		  
		  echo "<br>";
		  }


?>
</div>

<div class="col-sm-2 wowload fadeInRight"> </div>
</div>


<!-- works -->


<div id="contact" class="container spacer ">
<h2 class="text-center  wowload fadeInUp">Regras para Participar</h2>
 <div class="clearfix">
   <div class="row" >
   <div class="col-sm-3 wowload fadeInRight"> </div>
         <div class="col-sm-6 wowload fadeInRight"> 
            <p>
            <?php
            $re = "SELECT `ID`, `Premiacao`, `LimitPonts`, `Regras` FROM `tab_pontos`"; 
			$r=mysql_query($re);
			$arra=mysql_fetch_array($r);
			$Regras = $arra['Regras'];
			$Premiacao = $arra['Premiacao'];
			
			echo $Regras;
			echo "<br>";
			echo $Premiacao;
			?>
			
			</p>
         </div>
          <div class="col-sm-3 wowload fadeInRight"> </div>
   </div>
  
</div>


<!-- team -->
<div class="row grid team  wowload fadeInUpBig">	
 
</div>
<!-- team -->

</div>









<!-- About Starts -->
<div class="highlight-info">
</div>
<!-- About Ends -->








<div id="contact" class="spacer">
</div>
<!--Contact Ends-->



<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-dribbble fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin fa-2x"></i></a> </p>
Copyright 2021 Desenvolvido por Marlon Feitosa.(21)96633-3056.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
<?php
mysql_free_result($TimesLista);
?>
