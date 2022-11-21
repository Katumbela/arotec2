<?php
session_start();
include_once('php/header.php');




if(empty($_SESSION)){
    echo"";
  }
  
  else{
    $user = $_SESSION['user'];
  }
  
  

if(empty($_GET['curso'])){
  $curso = "<b> Não escolhido! </b>";
}
else{
$curso = $_GET['curso'];
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inscrição Para o curso de <?=$curso?> | AROTEC</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
</head>
<style>
  @import url(contato.css);
  @import url(estilo.css);
</style>
<body>
<div class="navegacao">
    <nav class=""> 
        <div class="nav-wrapper  3"> 
            <div class="container nav-alinhamento">
                
            <a href="index.php" class="brand-logo"><img src="imagens/logo.png" height="25px" style="color:#fff;" alt=""></a>
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons"><img src="imagens/menu.png" height="22px"  alt=""></i>
            </a> 
            <ul class="right hide-on-med-and-down">   
                <?php
                     if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia.php'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas.php'>Academia</a></li> ";
                    }
                         ?>
                <li><a href="loja.php">Loja</a></li> 
                <li><a href="eventos.php">Eventos</a></li> 
               
                     <?php
                     if(empty($_SESSION['logado'])){
                        echo "<li><a href='login.php'>Login</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session.php'>Sair</a></li> <li><a>".$user."</a></li> ";
                    }
                         ?>
                  
            </ul> 
            </div>
            
        </div> 
        </nav> 
        <ul class="sidenav" id="mobile-demo"> 
                    <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia.php'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas.php'>Academia</a></li> ";
                    }
                         ?>
            </li> 
            <li> <a href="contatar.php"> Contacto</a></li>
            <li><a href="loja.php">Loja</a></li> 
            <li><a href="index.php#sobre">Sobre</a></li> 
            <li><a href="eventos.php">Eventos</a></li> 
                <?php
                   

                    if(empty($_SESSION['logado'])){

                ?>
                <li><a href="login.php">Login</a></li> 

                <?php } 

                    elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session.php'>Sair</a></li> <li><a>".$user."</a></li>  ";
                    }?>
        </ul>
</div>
<br>
<br>
<main class="main ">
    

    <br>
    <center>
    <div class="title center">
    <h4 class=" titulo">Ficha de Inscrição</h4>
  </div>
    <br>
</center>
    <div class="row container">
      <div class="col m6 s12 l4 center">
        <img src="imagens/icone.png" height="30em" alt="">
        <p>Industry.Robotics.Softwares</p>
        <p>Trazendo evolução para Angola</p>
        <p> AROTEC SA</p>

      </div>

      <div class="col l3"></div>


      <div class="col m6 s12 l5 center campo">
          <center><h5 class="cor">Inscrição para o curso de <?= $curso?></h5></center>
        <form action="insert_form.php" method="post" class="z-depth-3" >
          <div class="row">
            <input type="hidden" name="curso" value="<?=$curso?>">
          </div>
          <input type="email" required name="email" id="email" placeholder="Insira seu Email">
          <input type="text" required name="tel" id="tel" placeholder="Insira seu Telefone">      <div class="row center">
           
          </div>
   
          <button class="btn enviar z-depth-2" id="enviar">Inscrever-se</button>
        </form>
        <br>
      </div>
    </div>
 
</main> 


<br>
<br>


<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l3 s12">
          <h5 class="white-text"><img src="imagens/logo.png" height="30rem" alt=""></h5>
          <p class="grey-text text-lighten-1">Angola Robótica e Tecnologia - Angola</p>

      <span><b  class="grey-text text-lighten-3 ">Mídeas</b></span>
      <ul class="mideas-sociais "> 
        <li class="img tooltipped" data-position="left" data-tooltip="Facebook"><a href="https://facebook.com/arotec1"> <img src="imagens/facebook.png"  height="20px" alt="facebook"></a>
        </li>
        <li class="img tooltipped" data-position="bottom" data-tooltip="Linkedin"><a href="#" > <img src="imagens/linkedin.png" height="20px" alt="linkedin"></a>
        </li>
        <li class=" tooltipped" data-position="bottom" data-tooltip="Youtube"><a href="http://"><img src="imagens/youtube.png"  height="20px" alt="youtube"></a></li> 
    </ul> 
        </div>
        <div class="col l3 s12">
            <h5 class="white-text">Sobre Nós</h5>
            <ul>
              <li><a class="white-text" href="index.php#sobre">Quem Somos?</a></li>
              <li><a class="white-text" href="index.php#sobre">Quando Surgiu?</a></li>
            </ul>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Suporte</h5>
          <ul>
              
            <li><a class="white-text" href="tel:+244946445629"> +244 946445629</a></li>
            <li><a class="white-text" href="tel:+244946445629"> +244 996445629</a></li>
            <li><a class="white-text" href="mailto:info.arotec@gmail.com">info.arotec@gmail.com</a></li>
            <li><a class="white-text" href="contatar.php">Contactar</a></li>
            <li><a class="white-text" href="https://facebook.com/arotec1">fb/arotec</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Links Rápidos</h5>
          <ul>
            <li><a class="white-text" href="academia.php">Academia</a></li>
              <li><a class="white-text" href="loja.php">Loja</a></li>
              <li><a class="white-text" href="http://canar.rf.gd">Campeonato Nacional de Robótica</a></li>
              <li><a class="white-text" href="inscricao.php">Unitel Code Robótica</a></li>
          </ul>
        </div>
        </div>
      </div>
      
    <div class="footer-copyright center">
      <div class="container">
      &copy; <a class="brown-text text-lighten-3"  href="http://arotech.org"> AROTEC  2018 - 2022</a>
      </div>
    </div>
  </footer>





      
      
      
      
        <script>

    $(document).ready(function(){ 
        $('.sidenav').sidenav(); 
    });


    function mostrar(){
  document.getElementById('senha').setAttribute('type','text');
  document.getElementById('mostrar').style.display="none";
  document.getElementById('ocultar').style.display="block";
}


function ocultar(){
  document.getElementById('senha').setAttribute('type','password');
  document.getElementById('mostrar').style.display="flex";
  document.getElementById('ocultar').style.display="none";
}


/*
var nav =document.getElementById('nav');

   function animarScroll(){
const windowTop = window.pageYOffset;
    
    if(windowTop > 80){
     nav.style.color='red';
    }

    else{
        nav.style.css.color='black';
    }
    
   }

   window.addEventListener('scroll', function(){
     animarScroll();
   });
*/
        
        
        
        </script>
</body>
</html>
