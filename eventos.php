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
    <title>AROTEC | EVENTOS</title>
        <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="produtos.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="owl/dist/owl.carousel.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
</head>
<style>
    
    .align-left{
        text-align: left;
    }

.produtos{
    border: none;
    padding: 1%;
    width: 200vh;
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
                <ul class="right hide-on-med-and-down">  <?php 
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
                       
                    <li class="cart"><a href="#"><img src="imagens/carrinho.png" class="carrinho" height="50px" alt=""><div id="cart">0</div></a></li> 
                 
                </ul> 
                </div>
                
            </div> 
            </nav> 
            <ul class="sidenav" id="mobile-demo">  <?php 
                    if(empty($_SESSION['logado'])){
                        echo "<li><a href='academia'>Academia</a></li> ";
                         }
                     elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='aulas'>Academia</a></li> ";
                    }
                         ?>
                <li><a href="loja">Loja</a></li> 
                <li><a href="index#sobre">Sobre</a></li> 
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
       


            <a href="eventos"> <h4 style="padding-bottom: 1%; color: #013d70; margin-left: 2%; border-bottom: 2px solid #013d70; margin-right: 3%;"><b> Eventos Próximos</b></h4></a>
          
    <center>
    
        <div class="row container center">
    
            <div class="col s12 l5">
                <img src="imagens/Unitel code.jpg" style="margin-top: 1rem;" height="150rem" alt="">   <br>
           <p class="align-left">
               Um evento para menores / pequenos engenheiros educacional onde terão contacto com programação e robóticado montando o nosso AroBot. <h5 class="red-text">Evento encerrado</h5>
           </p>
            </div>
            
            <div class="col s12 l1">
            <hr  class="divisao">
           </div>

            <div class="col s12 l5">
                <img src="imagens/cnr2.png" height="200rem" alt="">
                <p class="align-left">
                   <b class="cor"> Campeonato Nacional de Robótica</b>, um evento ( 30 à 31 de Março) que junta estudantes de diferentes escolas pela paixão à Robótica, onde estes enfrentam vários desafios do campeonato desde a construção dos seus robôs como também desafios culturais.
                    saiba mais em <a href="http://canar.rf.gd"> canar.rf.gd </a> ou <a href="canar">clicando aqui</a>. 
                </p>
            </div>
            
        </div>
        
        
    
            </center>


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
                          <li><a class="white-text" href="index#sobre">Quem Somos?</a></li>
                          <li><a class="white-text" href="index#sobre">Quando Surgiu?</a></li>
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
                  &copy; <a class="brown-text text-lighten-3"  href="http://arotech.org"> AROTEC  2018 - 2022</a>
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


    
    $('button').click(function(){
        $('#cart').html('1');
        
        document.getElementById('msg').style.display='block';

        
        setTimeout(() => {
            document.getElementById('msg').style.display='none';
        }, 2000);

    });


    $(document).ready(function(){
        $('.modal').modal();
    });

    
    $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoWidth:true,
    indicators:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
});
        </script>
</body>
</html>