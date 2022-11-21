
<?php
session_start();
include('php/header.php');

    $id = $_GET['c'];
 $s = "SELECT * FROM cursos WHERE id='$id' ";
 $con = $conexao->query($s);
 $dads = mysqli_fetch_array($con);
 $curso = $dads['curso']; 
 $ban = $dads['banner']; 
 $prog = $dads['program']; 
 $oque = $dads['oque']; 
 $hab = $dads['hab']; 
 $extra = $dads['extra']; 




if(empty($_SESSION)){
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
    <title><?=$curso?> | Pequeno Engenheiro</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
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
            <li> <a href="contatar"> Outros</a></li>
            <li><a href="loja">Loja</a></li> 
            <li><a href="#sobre">Sobre</a></li> 
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
 
<div id="nav" class="pub row z-depth-3">
  <div class="col s8 l6">
    <b class="cor course"> <?=$curso?> </b>
  </div>

  <div class="col s4 l6">
   <a href="insc_curso?curso=<?=$curso?>"> <button class="curso align-right">Inscrever-se</button></a>
  </div>


</div>
<br>

      <br>


      <div class="row">
          <div class="col l6">
            <img src="dashboard/uploads/<?=$ban?>" style="margin-top: .5rem" class="arobot" alt="">
          </div>
          <div class="col l6">
            <h4><b class="cor">O que vai aprender neste curso:</b></h4>
            <ol class="hab">
              <?=$oque?>
            </ol>
          </div>
      </div>
        
      <hr class="linha">


      <div class="row container ">
        <div class="col s12 l6">
            <h6><b class="cor">Fazendo o curso de robótica da AROTEC você terá as seguintes habilidades:</b></h6>
            <div class=" row habilidades">
               <?=$hab?>
            </div>
        </div>

        <div class="col s12 l6 ">
      <center>      <h6><b class="cor">Certificados e Honras</b></h6></center>
    <?=$extra?>
        </div>
      </div>
      
      <br>
        <br>

        <br>

        <center>
          <a href="dashboard/uploads/<?=$prog?>" class="irr"> <button class="ir">programa de estudo</button></a>
            <br>
            <br>
          <a href="cursos?course=<?=$curso?>" class="irr"> <button class="ir">Acessar às aulas</button></a>
        </center>

        <br>
<hr class="linha">
        <br>    
        <br>
        <br>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <h5 class="white-text"><img src="imagens/logo.png"  height="30rem" alt=""></h5>
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
                  <li><a class="white-text" href="mailto:info.arotec@gmail.com">info.arotec@gmail.com</a></li>
                  <li><a class="white-text" href="contatar">Contactar</a></li>
                  <li><a class="white-text" href="https://facebook.com/arotec1">fb/arotec</a></li>
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
