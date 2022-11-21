<?php
include_once('php/header.php');
session_start();

$valor = "null";

if(empty($_SESSION)){
  echo"";
}

else{
  $user = $_SESSION['user'];
}


$case= null;
$s="";

if (isset($_GET['case'])) {
  $rec= $_GET['case'];

  switch ($rec) {
    case 'intelij':
      $case = "Maquinas inteligentes e servicos";
      $s ="Dipositivos e software que grantem o aumento da efficiencia e providencia manutencao preventivas em industrias.";
      break;

    case 'disper':
      $case = "Dispositivos e softwares personalisados";
      $s ="Electronicos e softwares virados as preferencias, persoalidade e necessidades dos usuarios/clientes.";
      break;
    
    case 'academy':
      $case = "Academia, tecnolgias de robotica e IA";
      $s ="Trazendo novas tecnologias mais proximos dos estudantes.";
      break;
    
    default:
      # code...
      break;
  }


}
else {
  echo"";
}


?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AROTEC | Contacto</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="alerts/sweetalert2.css">
    <script src="alerts/sweetalert2.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="contato.css">
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
    <link rel="stylesheet" href="produtos.css">
</head>
<style>
  body{
    overflow-x: hidden;
  }

  .form{
    padding: 1rem 2rem;
    border-radius: 15px;
  }
</style>

<body>
  



<div class="navegacao">
    <nav class=""> 
        <div class="nav-wrapper  3"> 
            <div class="container nav-alinhamento">
                
            <a href="index" class="brand-logo"><img src="imagens/logo.png" height="25px" style="color:#fff;" alt=""></a>
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons"><img src="imagens/menu.png" height="22px"  alt=""></i>
            </a> 
            <ul class="right hide-on-med-and-down"> 
                    <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas'>Academia</a></li> ";
                    }
                         ?>
                <li><a href="loja">Loja</a></li>  
                <li><a href="eventos">Eventos</a></li> 
               
                     <?php
                     if(empty($_SESSION['logado'])){
                        echo "<li><a href='login'>Login</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session'>Sair</a></li> <li><a>".$user."</a></li> ";
                    }
        ?>
                  
            </ul> 
            </div>
            
        </div> 
        </nav> 
        <ul class="sidenav" id="mobile-demo"> 
                    <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas'>Academia</a></li> ";
                    }
                         ?>
            </li> 
            <li> <a href="contatar"> Contacto</a></li>
            <li><a href="loja">Loja</a></li> 
            <li><a href="index.php#sobre">Sobre</a></li> 
            <li><a href="eventos">Eventos</a></li> 
                <?php
                   

                    if(empty($_SESSION['logado'])){

                ?>
                <li><a href="login">Login</a></li> 

                <?php } 

                    elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session'>Sair</a></li> <li><a>".$user."</a></li>  ";
                    }?>
        </ul>
</div>



<br>
<br>

        <br>
        <center>
        <div class=" center row">
          <div class="col s12 l12" style="">
          </div>
        
      </div>
        <br>
</center>
        <div class="row container">
          <div class="col m6 s12 l4 center">
            <h4><strong><img src="imagens/icone.png" height="30rem" alt=""></strong></h4>
            <p>Industry.Robotics.Hardware.Software</p>
                    
                    <h4 style="color: #0066be"><?=$case?></h4>
                    <p><?=$s?></p>
          </div>

          <div class="col l3"></div>


          <div class="col m6 s12 l5 center campo">
            <div class=" form z-depth-3">
              <div class="row">
                <div class="col s6 l6">
                  <input type="text" name="nome" placeholder="Nome" id="nome">
                </div>
                <div class="col s6 l6">
                  <input type="text" name="sobrenome" id="snome" placeholder="Sobrenome">
                </div>
              </div>
              <input type="email" name="email" id="email" placeholder="Email">
              <input type="text" name="assunto" value="<?=$case?>" id="assunto" placeholder="Assunto">
              <textarea name="msg" id="msg"  cols="30" rows="28" placeholder=" Escreva a mensagem"></textarea>
              <br>
              <button style="border-radius: 25px; margin-top: 1rem" class="btn light-blue accent-4 enviar z-depth-2" onclick="enviar()">Enviar</button>
                  </div>
            <br>
                  </div>
        </div>
        
<div class="divisao"></div>

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
              
            <li><a class="white-text" href="tel:+244938811659"> +244 938 811 659</a></li>
            <li><a class="white-text" href="tel:+244990811659"> +244 990 811 659</a></li>
            <li><a class="white-text" href="mailto:info.arotec@gmail.com">arotec.info@gmail.com</a></li>
            <li><a class="white-text" href="contatar">Contactar</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Links Rápidos</h5>
          <ul>
            <li><a class="white-text" href="academia">Academia</a></li>
              <li><a class="white-text" href="loja">Loja</a></li>
              <li><a class="white-text" href="http://canar.rf.gd">Campeonato Nacional de Robótica</a></li>
              <li><a class="white-text" href="inscricao">Unitel Code Robótica</a></li>
          </ul>
        </div>
        </div>
      </div>
      
    <div class="footer-copyright center">
      <div class="container">
      &copy; <a class="brown-text text-lighten-3"  href="http://aro-tec.net"> AROTEC  2018 - 2022</a>
      </div>
    </div>
  </footer>











        <script>

    $(document).ready(function(){ 
        $('.sidenav').sidenav(); 
    });


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators:true,
    });
        autoplay()

    function autoplay(){
        $('.carousel').carousel('next');
        setTimeout(autoplay, 7000);
    }


    $(document).ready(function(){
        $('.tooltipped').tooltip();
    });


    function enviar(e){

      
     var nome = $("#nome").val();
     var snome = $("#snome").val();
     var email = $("#email").val();
     var assunto = $("#assunto").val();
     var msg = $("#msg").val();

     if (nome=="" || msg=="" || email=="" || assunto=="") {
       
       Swal.fire(
         'Campos Vazios',
         'Por favor preencha os campos vazios',
         'error',
       );
     
    }

    else{
      var dados = {
        nome: nome,
        snome: snome,
        email: email,
        assunto: assunto,
        msg:msg,
      };
      $.post("php/contact", dados, function (s) {
       Swal.fire(
         'Recebido',
         'Obrigado pelo seu contacto, entraremos em contacto o mais breve possivel!',
         'success',
       );
      })
    }



    }
        </script>
</body>
</html>