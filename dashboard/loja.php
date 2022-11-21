<?php
include_once('../php/header.php');
session_start();

$valor = "null";

if(empty($_SESSION)){
  echo"";

}

else{
  $user = $_SESSION['user'];
  $snome = $_SESSION['snome'];
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];
}

$see= "SELECT * FROM aulas";
$conn = $conexao->query($see);
$au = mysqli_num_rows($conn);


$see= "SELECT * FROM inscricao";
$conn = $conexao->query($see);
$a = mysqli_num_rows($conn);

$see1= "SELECT * FROM contactos";
$conn1 = $conexao->query($see1);
$i = mysqli_num_rows($conn1);

$see2= "SELECT * FROM loja";
$conn2 = $conexao->query($see2);
$l = mysqli_num_rows($conn2);



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
    <title>AROTEC | Dahsboard</title>
    <link rel="shortcut icon" href="../imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="../css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../contato.css">
    <script src="../js/materialize.min.js"></script>
    <script src="../js/materialize.js"></script>
    <link rel="stylesheet" href="../produtos.css">
</head>
<style>
  body{
    overflow-x: hidden;
  }
  
 @font-face {
   font-family: roboto;
   src: url("fontes/roboto.ttf");
 }
 *{
   font-family: roboto!important;
 }


 .center a{
   border: 1px dotted #0066be;
   padding: 2rem 3rem;
   font-size: 25px;
   transition: .3s;
 }

 .center a:hover, .activo{
   background: #0066bec4;
   border-radius: 15px;
   color: white;
   font-weight: bolder;
   transition: .3s;
 }

main{
  padding-top: 1.5rem;
  height: 75vh;
}
</style>

<body>
  



<div class="navegacao">
    <nav class=""> 
        <div class="nav-wrapper  3"> 
            <div class="container nav-alinhamento">
                
            <a href="home.php" class="brand-logo"><img src=" ../imagens/logo.png" height="25px" style="color:#fff;" alt=""></a>
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons"><img src=" ../imagens/menu.png" height="22px"  alt=""></i>
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
            <li><a href="home.php#sobre">Sobre</a></li> 
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

<main class="container">
  
<div>
  <h5>Usuário: <b class="cor"><?=$user." ".$snome?></b></h5>
</div>
<br>
<hr>
<br>
<br>
<br>
<div class="row">
<div class="col l3 m3 s12 container center">
       <a href="alunos.php"> <?=$a?> Alunos</a>
  </div>
  <div class="col l3 m3 s12 container center">
    <a href="inbox.php"> <?=$i?> Inbox</a>
  </div>
  <div class="col l3 m3 s12 container center">
    <a href="loja.php" class="activo"> <?=$l?> Loja</a>
  </div>
  <div class="col l3 m3 s12 container center">
    <a href="cursos.php"><?=$au?> Aulas</a>
  </div>
</div>


<br>
<br><br>
<div> <h5 class="cor">
    Pedidos de produtos ( <?=$l?> )
</h5> </div>
<hr>

<table>
  <thead>
    <tr>
      <th>
       Email
      </th>
      <th>
        Produto
      </th>
      <th>
        Quem/ Entidade
      </th>
      <th>
        Quando
      </th>
    </tr>
  </thead>
  <tbody>
      
  <?php
        $se= "SELECT * FROM loja";
        $con = $conexao->query($se);
        $q = mysqli_num_rows($con);
        while ($dad = mysqli_fetch_Assoc($con)) {

         ?>
         
      <tr>
          
            <td><?=$dad['email']?></td>
            <td><?=$dad['produto']?></td>
            <td><?=$dad['quem']?></td>
            <td><?=$dad['hora']." do dia ".$dad['quando']?></td>
      </tr>
         <?php

        }
      ?>
  </tbody>
</table>
<div class="divisao"></div>

</main>

<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l3 s12">
          <h5 class="white-text"><img src=" ../imagens/logo.png" height="30rem" alt=""></h5>
          <p class="grey-text text-lighten-1">Angola Robótica e Tecnologia - Angola</p>

      <span><b  class="grey-text text-lighten-3 ">Mídeas</b></span>
      <ul class="mideas-sociais "> 
        <li class="img tooltipped" data-position="left" data-tooltip="Facebook"><a href="https://facebook.com/arotec1"> <img src=" ../imagens/facebook.png"  height="20px" alt="facebook"></a>
        </li>
        <li class="img tooltipped" data-position="bottom" data-tooltip="Linkedin"><a href="#" > <img src=" ../imagens/linkedin.png" height="20px" alt="linkedin"></a>
        </li>
        <li class=" tooltipped" data-position="bottom" data-tooltip="Youtube"><a href="http://"><img src=" ../imagens/youtube.png"  height="20px" alt="youtube"></a></li> 
    </ul> 
        </div>
        <div class="col l3 s12">
            <h5 class="white-text">Sobre Nós</h5>
            <ul>
              <li><a class="white-text" href="home.php#sobre">Quem Somos?</a></li>
              <li><a class="white-text" href="home.php#sobre">Quando Surgiu?</a></li>
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


    function enviar(){
      alert('Agradecemos o seu contacto, retornaremos o mais breve possível. Obrigado');
    }
        </script>
</body>
</html>