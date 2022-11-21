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
    <title>AROTEC | Robótica Módulo 1</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="produtos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="academia.css">
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <script src="owl/dist/owl.carousel.js"></script>
</head>

  
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
                   
                <li class="cart"><a href="#"><img src="imagens/carrinho.png" class="carrinho" height="50px" alt=""><div id="cart">0</div></a></li> 
             
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

<br>
 
<div id="nav" class="pub row z-depth-3">
  <div class="col s6 l6">
    <b class="cor course">Robótica Mód. 1 </b> 
  </div>

  <div class="col s6 l6">
    <a href="insc_curso.php?curso=Robotica+Módulo+1"> <button class="curso align-right">Inscrever-se</button></a>
  </div>


</div>
<br>

      <br>


      <div class="row">
          <div class="col l6">
            <img src="imagens/Arobot com preço.png"  class="arobot" alt="">
          </div>
          <div class="col l6">
            <h4><b class="cor">O que você vai aprender:</b></h4>
            <ol class="hab">
              <li>Introdução à Robótica</li>
              <li>Introdução à mecanica</li>
              <li>Introdução à electronica</li>
              <li>Lógica de Programação</li>
              <li>Introdução à Linguagem C e blocky</li>
              <li>Arduino</li>
              <li>Montagem e programação de um projecto robótico</li>
            </ol>
          </div>
      </div>
        
      <hr class="linha">


      <div class="row container ">
        <div class="col s12 l6">
            <h6><b class="cor">Fazendo o curso de robótica da AROTEC você terá as seguintes habilidades:</b></h6>
            <div class=" row habilidades">
              <span>Programação em Arduinos</span>
              <span style="margin-top: 2rem;">Micro-Controladoes </span>
              <span style="margin-top: 2rem;" >Motores</span>
            </div>
        </div>

        <div class="col s12 l6 ">
      <center>      <h6><b class="cor">Certificados e Honras</b></h6></center>
      <p>
        - A Arotec fornece certificados para todos os seus estudantes que terminam o curso online na mesma, tanto para o <b class="cor">Curso de Robótica </b> quanto para os outros, claro após ter acompanhado todas as aulas passará por um exame para a aquisição do certificado físico.
        <br>
        <br>
        <div class="num">1</div>
        <span class="cor tag">- O estudante adquire o Certificado que comprova o cursado.</span>

       
        <br>
        <div class="num">2</div>      
        <span class="cor tag">- Os Melhores alunos serão honrados para além dos certificados.</span>


        
        <br>
        <div class="num">3</div>
        <span class="cor tag">- Pronto para os próximos desafios.</span>
      </p>
        </div>
      </div>
      
      <br>
        <br>

        <br>

        <center>
          <a href="manual" class="irr"> <button class="ir">Baixar programa de estudo</button></a>
            <br>
            <br>
          <a href="cursos.php" class="irr"> <button class="ir">Acessar às aulas</button></a>
        </center>

        <br>
<hr class="linha">
        <br>


          <a href="academia.html"> <h5 style="padding-bottom: 1%; color: #013d70; margin-left: 2%; border-bottom: 2px solid #013d70; margin-right: 3%;"><b> Opiniões de Pessoas que frequentaram o curso</b></h5></a>
    
        <center>
        <div class="row timeline owl-carousel owl-theme">

          <div class="item item1">
            <div class="icon">
              <img src="imagens/kat.jpg" alt="" class="icon">
              <h6><b class="cor">João A. Katombela</b></h6>
            </div>
            <div class="conteudo">
              <p><span>"</span> Fiz o meu curso online na plataforma da arotec e foi muito interessante e valioso no meu aprendizado, obtive o certificado e hoje vou aumentando no que já tenho!   <span>"</span></p>
            </div>
          </div>


          <div class="item">
            <div class="icon">
              <img src="imagens/kat.jpg" alt="" class="icon">
              <h6><b class="cor">João A. Katombela</b></h6>
            </div>
            <div class="conteudo">
              <p><span>"</span> Fiz o meu curso online na plataforma da arotec e foi muito interessante e valioso no meu aprendizado, obtive o certificado e hoje vou aumentando no que já tenho!   <span>"</span></p>
            </div>
          </div>


          <div class="item">
            <div class="icon">
              <img src="imagens/kat.jpg" alt="" class="icon">
              <h6><b class="cor">João A. Katombela</b></h6>
            </div>
            <div class="conteudo">
              <p><span>"</span> Fiz o meu curso online na plataforma da arotec e foi muito interessante e valioso no meu aprendizado, obtive o certificado e hoje vou aumentando no que já tenho!   <span>"</span></p>
            </div>
          </div>

        </div>
</center>

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
                    <li><a class="white-text" href="index.html#sobre">Quem Somos?</a></li>
                    <li><a class="white-text" href="index.html#sobre">Quando Surgiu?</a></li>
                  </ul>
      
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Suporte</h5>
                <ul>
                    
                  <li><a class="white-text" href="tel:+244946445629"> +244 946445629</a></li>
                  <li><a class="white-text" href="mailto:info.arotec@gmail.com">info.arotec@gmail.com</a></li>
                  <li><a class="white-text" href="contatar.html">Contactar</a></li>
                  <li><a class="white-text" href="https://facebook.com/arotec1">fb/arotec</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Links Rápidos</h5>
                <ul>
                  <li><a class="white-text" href="academia.html">Academia</a></li>
                    <li><a class="white-text" href="loja.html">Loja</a></li>
                    <li><a class="white-text" href="http://canar.rf.gd">Campeonato Nacional de Robótica</a></li>
                    <li><a class="white-text" href="inscricao.html">Unitel Code Robótica</a></li>
                </ul>
              </div>
              </div>
            </div>
            
          <div class="footer-copyright center">
            <div class="container">
            &copy; <a class="brown-text text-lighten-3"  href="http://arotech.org"> AROTEC , 2019 - 2022</a>
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



    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoWidth:true,
    indicators:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
        }
    }
});

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
        
$(window).scroll(function (){
var top =$(this).scrollTop();

if(top>100){
  $('.pub').css(
      'position','fixed',
      'width','100vw',
  );
  
  $('.pub').css(
      'top','0',
  );

  
  $('.pub').css(
      'z-index','1000',
  );

  $('.pub').css(
      'width','100vw',
  );
}

else{
  
  $('.pub').css(
      'position','relative'
  );
}

})
        
        
        </script>
</body>
</html>