<?php
include_once('php/header.php');
session_start();

if(empty($_SESSION)){
  echo"";
}

else{
  $user = $_SESSION['user'];
}



?>


<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AROTEC | CANAR</title>
        <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/materialize.css">
        <script src="js/init.js"></script>
        <link rel="stylesheet" href="produtos.css">
        <link rel="stylesheet" href="nav.css">
        <script src="js/materialize.min.js"></script>
        <script src="js/materialize.js"></script>
    </head>
<body>
  

  <div class="navegacao">
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
                <li><a href="loja.php">Loja</a></li> 
                <li><a href="index.php#sobre">Sobre</a></li> 
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
        <ul class="sidenav" id="mobile-demo">  <?php
                     if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia.php'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas.php'>Academia</a></li> ";
                    }
                         ?>
            <li> <a href="contatar.php"> Outros</a></li>
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
        <center>
            <h4 class="">Campeonato Nacional de Robótica</h4>
            <img src="imagens/camp.jpg" class="rob-foto" alt="">
        </center>
            <br>
            <div class="container">
                <p> aqui vai a descricao do champion, Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellendus hic repellat in facilis accusantium odio tenetur provident voluptatem neque dignissimos similique commodi autem eos debitis vero, assumenda placeat iure! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, accusamus eum, totam aliquam eaque voluptas blanditiis obcaecati corrupti, quia non quisquam amet officiis excepturi consequuntur voluptate inventore assumenda eius sed.</p>
            </div>

<br><br><br>
<center>
<p>
  <b class="cor">Website</b>: <a href="http://canar.rf.gd/">canar.rf.gd</a>
</p>
</center>
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







</body>
</html>