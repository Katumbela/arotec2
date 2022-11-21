<?php
session_start();
include('php/header.php');


if(empty($_SESSION)){
  echo"";
}

else{


  
if(empty($_GET['curso'])){
  echo"";
}

else{
  $curso = $_GET['curso'];


}

  $email = $_SESSION['email'];
  $code = $_SESSION['senha'];
  $pesquisar = "SELECT * FROM inscricao WHERE email ='$email' AND senha = '$code'";
  $datas = $conexao->query($pesquisar);

if(mysqli_num_rows($datas)>0){
  $set=mysqli_fetch_array($datas);

      $user=$set['nome']; 
      $_SESSION['user'] = $user;
      $sobrenome=$set['sobrenome'];
}

}


?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Cursos | AROTEC  </title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="academia.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
</head>
<style>
  @import url(contato.css);
  @import url(estilo.css);
     



  
.cursos .rob{
    width: 15rem;
    height: 7rem;
    margin: 2rem;
    line-height: 1.5rem!important;
}


@media only screen and (min-width:650px) and (max-width:800px) {
    
    .nav-alinhamento{
        width: 55%;
    }

    
    .sair{
        display: none;
    }


    .t3{
        border-bottom: 2px solid var(--cor_principal);
    }
    .t1 {
        display: block;
    }

    .sair img{
        height: 10rem;
        width: 20rem;
    }
    }

@media only screen and (min-width:990px) and (max-width:1049px) {
        
        .nav-alinhamento{
            width: 65%;
        }
   }


   
   @media only screen and (min-width:601px) and (max-width:649px) {

    .sair{
        display: none;
    }
    
    .nav-alinhamento{
        width: 80%;
    }
    .t2{
        width: 90%;
    }
    .t3{
        border-bottom: 2px solid var(--cor_principal);
    }

    .t1 {
        display: block;
        margin-top: -2rem;
        margin-bottom: -2rem;
    }
   }


    @media only screen and (min-width:100px) and (max-width:600px) {
    
        .nav-alinhamento{
            width: 95%;
        }

        .e-c{
            width: 100%;
        }

        .titulo{
            width: 100%;
        }


        .t2{
            width: 100%;
            font-size: 25px;
            margin-bottom: -2rem;
        }

        .t3{
            border-bottom: 2px solid var(--cor_principal);
        }
    
        .t1 {
            display: block;
            margin-top: -2rem;
            margin-bottom: -2rem;
        }

        .sair{
            display: none;
        }

        }
    
    
@media only screen and (min-width:1305px) and (max-width:3000px) {
    
    .nav-alinhamento{
        width: 46%;
    }

    }

    
    
@media only screen and (min-width:1050px) and (max-width:1300px) {
    
    .nav-alinhamento{
        width: 60%;
    }

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
<main class="main ">
    
<?php
 if(empty($_SESSION['logado'])){
?>

<center class="container">
    <h4><b class="cor">Para ver as aulas você deve increver se no curso que pretende, ou fazer login para ver os seus cursos</b></h4>
    <br><br>
    <h6 class="cor">Para acessar as aulas e manuais do seu curso deve fazer o <a href="login"> login!</a> caso já tenha se inscrito em um</h6>
    <br>
    <a href="academia" class="btn " style="border-radius: 5px;"> Ver cursos</a>
    <br>
    <a href="login" class="btn " style="border-radius: 5px;"> Faça Login</a>
</center>
 <?php
 }
 elseif($_SESSION['logado']=='logado'){
 ?>

<center class="container">
    <br>
    <br>
    <h5>Olá <?=$user?> ,Estes são os cursos em que estás inscrito:</h5>
    <span><a href="academia">Clique aqui</a> para inscrever se em mais cursos</span>
    <br>
<div class="row cursos">

<?php

$pesquisar_curso = "SELECT DISTINCT curso FROM inscricao WHERE email='$email' AND senha = '$code'";
$dados = $conexao->query($pesquisar_curso);

while($results=mysqli_fetch_array($dados)){
    
    $curso=$results['curso'];
if(!empty($curso)){
?>


  <div class="col s6 l3">
    <a href="sala?curso=<?=$curso?>">
      <div class="rob z-depth-3" style="display: grid!important; place-items: center; padding: 0 .5rem;">
        <?=$curso?>
      </div>
    </a>
  </div>

<?php

}

else{
    echo"";
}




}
  ?>

</div>
    <br>
    <br>
</center>

<?php
}
  ?>

    <br>
    <br>

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


