<?php
session_start();
include('php/header.php');



if(empty($_SESSION)){
  echo"";
}

else{
  $user = $_SESSION['user'];
}



if(empty($_GET)){
  echo"";
}

else{
  $curso = $_GET['course'];
}



?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AROTEC | Cursos</title>
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
<body><div class="navegacao">
    <nav class=""> 
        <div class="nav-wrapper  3"> 
            <div class="container nav-alinhamento">
                
            <a href="index.php" class="brand-logo"><img src="imagens/logo.png" height="25px" style="color:#fff;" alt=""></a>
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons"><img src="imagens/menu.png" height="22px"  alt=""></i>
            </a> 
            <ul class="right hide-on-med-and-down">  <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia.php'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas.php'>Academia</a></li> ";
                    }
                         ?>
                <li><a href="loja.html">Loja</a></li> 
                <li><a href="index.php#sobre">Sobre</a></li> 
                <li><a href="eventos.html">Eventos</a></li> 
               
                     <?php
                     if(empty($_SESSION['logado'])){
                        echo "<li><a href='login.php'>Login</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session.php'>Sair</a></li> <li><a>".$user."</a></li> ";
                    }
        ?>
                   
                <li class="cart"><a href="#"><img src="imagens/carrinho.png" class="carrinho" height="50px" alt=""><div id="cart">0</div></a></li> 
             
            </ul> 
            </div>
            
        </div> 
        </nav> 
        <ul class="sidenav" id="mobile-demo">  <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia.php'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas.php'>Academia</a></li> ";
                    }
                         ?>
            <li> <a href="contatar.html"> Contacto</a></li>
            <li><a href="loja.html">Loja</a></li> 
            <li><a href="index.php#sobre">Sobre</a></li> 
            <li><a href="eventos.html">Eventos</a></li> 
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
<main class="main ">
    
<?php
 if(empty($_SESSION['logado'])){
?>

<center class="container">
  <br>
  <br>
  <br>
  <br>

    <h5><b class="cor">Para ver os cursos em que você está inscrito e ter acesso às aulas você deve se inscrevernum dos cursos ou fazer login para ter acesso</b></h5>
    <br><br>
    <h6 class="cor">Se ainda não se inscreveu em um dos cursos, aproveite fazer a sua inscrição! <a href="login.php?page=cursos"> login!</a>.</h6>
    <br>

    <a href="academia.php" class="btn " style="border-radius: 5px;"> Ver os cursos</a>

    <br>
    <br>

    <a href="login.php?page=cursos&course=<?=$curso?>" class="btn " style="border-radius: 5px;"> Faça Login</a>

  <br>
  <br>
  <br>
</center>
 <?php
 }
 elseif($_SESSION['logado']=='logado'){
 ?>

<center class="container">
    <br>
    <br>
    <h4><b class="cor">Seja bemvindo ao curso de <?=$curso?>, <b class="cor"></b><?=$user?></b>.</h4>
    <br><br>
    <h6 class="cor">Clique no botão abaixo para ver as aulas </a></h6>
    <br>
    <a href="cursos.php" class="btn " style="border-radius: 5px;"> Ir às aulas</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</center>
<?php
 }
?>


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
    
        
        
        </script>
</body>
</html>
