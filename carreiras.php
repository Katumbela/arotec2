<?php
$see= "SELECT * FROM inscricao";
$conn = $conexao->query($see);
$a = mysqli_num_rows($conn);

$see1= "SELECT * FROM contactos";
$conn1 = $conexao->query($see1);
$i = mysqli_num_rows($conn1);

$see2= "SELECT * FROM loja";
$conn2 = $conexao->query($see2);
$l = mysqli_num_rows($conn2);

$see= "SELECT * FROM unitel_code";
$conn = $conexao->query($see);
$au = mysqli_num_rows($conn);


$see3= "SELECT * FROM carreira";
$conn3 = $conexao->query($see3);
$ca = mysqli_num_rows($conn3);

$see4= "SELECT * FROM semanamundial";
$conn4 = $conexao->query($see4);
$ca4 = mysqli_num_rows($conn4);



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
    <title>Candidaturas Recebidas | Dahsboard</title>
    <link rel="shortcut icon" href="imagens/a.png" type="image/x-icon">
    <script src="js/jquery.js"></script>
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
}
</style>

<body>
  



<div class="navegacao">
    <nav class=""> 
        <div class="nav-wrapper  3"> 
            <div class="container nav-alinhamento">
                
            <a href="home" class="brand-logo"><img src="imagens/logo.png" height="25px" style="color:#fff;" alt=""></a>
           
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons"><img src="imagens/menu.png" height="22px"  alt=""></i>
            </a> 
            <ul class="right hide-on-med-and-down"> 
                 
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

                ?>
                <li><a href="login">Login</a></li> 

                <?php } 

                    elseif($_SESSION['logado']=='logado'){
                        echo "<li><a href='end_session'>Sair</a></li> <li><a>".$user."</a></li>  ";
                    }?>
        </ul>
</div>

<main class="container">
  
<div>
  <h5>Usuário: <b class="cor"><?=$user." ".$snome?></b></h5>
<br>

<hr>

<a href="carreiras"><?=$ca?> Candidaturas </a> &middot; <a href="semana_mundial"> <?=$ca4?> Semana Espacial</a> <a href="alunos">  &middot; <?=$a?> Alunos</a> &middot; <a href="inbox"> <?=$i?> Inbox</a> &middot; <a href="unitel_code"><?=$au?> Unitel Code</a>
</div>
<br>
<hr>
<br><br>
<h5 class="cor">Candidatos recebidos ( <?=$ca?>)</h5>
<hr>
<table>
  <thead>
    <tr>
      <th>
       Nome
      </th>
      <th>
       Telefone
      </th>
      <th>
        Nascimento
      </th>
      <th>
        Genero
      </th>
      <th>
        Posição
      </th>
      <th>
        Curriculo
      </th>
      <th>
        Data a inscrição
      </th>
    </tr>
  </thead>
  <tbody>
      <?php
        $se= "SELECT * FROM carreira";
        $con = $conexao->query($se);
        $q = mysqli_num_rows($con);
        while ($dad = mysqli_fetch_Assoc($con)) {

         ?>
         
      <tr>
            <td><?=$dad['nome']." ".$dad['snome']?></td>
            <td><?=$dad['t1']." / ".$dad['t2']?></td>
            <td><?=$dad['nascimento']?></td>
            <td><?=$dad['genero']?></td>
            <td><?=$dad['posicao']?></td>
            <td><a download href="https://arotec.ao/vagas/carreira_docs/<?=$dad['cv']?>"><?=$dad['cv']?></a></td>
            <td><?=$dad['quando']?></td>
      </tr>
         <?php

        }
      ?>
  </tbody>
</table>
<div class="divisao"></div>

</main>






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