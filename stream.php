<?php
session_start();
include('php/header.php');

$hoje = date("d")." de ".date("M")." de ".date("Y");



    $link = null;



if(empty($_SESSION)){
  echo"";
}

else{

if(empty($_GET)){
  
    $aula = "<b class='cor'>Indefinido</b>";
}

else{

    $a = $_GET['a'];

        $au1 = "SELECT * FROM `aulas` WHERE id='$a'";
        $re1=$conexao->query($au1);
        $dat1 = mysqli_fetch_array($re1);
    $link = $dat1['link'];
    
    
    $au = "SELECT * FROM aulas WHERE id='$a'";
    $re=$conexao->query($au);

    $dat = mysqli_fetch_Array($re);
    

    $aula = $dat['titulo'];
    $materia = $dat['materia'];
    $material = $dat['documento'];
    $link = $dat['link'];
    $ordem = $dat['ordem'];
    $prof = $dat['quem'];


}
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];
  $pesquisar = "SELECT * FROM inscricao WHERE email ='$email' AND senha = '$senha'";
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
    <title>Aula <?=$aula?> | AROTEC </title>
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

<div style="margin: .5rem 1.5rem;">
    <br>
    <br>
    <div style="text-align:start!important;">
        <a href="sala?curso=Robotica%20Módulo%201">Voltar</a>
    </div>
    <center>
    <h5>Olá <?=$user?>,Bem vindo à aula de <b class="cor"> <?=$aula?></b></h5>
    <hr>
   </center>
    <br>
<div class="row ">

<div class="col l3 m4 sm12 w-100">

<p>Prof: <b class="cor" style="text-transform: uppercase" ><?=$prof?></b><br>
    Data: <span class="cor"><?=$dat['quando']?></span> <br>
    Hoje: <span class="cor"> <?=$hoje?></span><br>
    <br>
    <a href="docs/<?=$dat['documento']?>" style=" border: 1px solid #0066be; padding: .4rem .6rem; text-transform: uppercase; border-radius: 8px; color: #0066be; ">baixe o material</a><br><br>
   <center> <h5>Descrição</h5></center>
    <hr>
    <p><?=$dat['materia']?></p>
</p>
<br>

<div style="background: #ffb6b9; padding: .8rem; border-radius: 5px;">
    <span class=""><b style="font-size: 18px;"> Nota</b>: assita toda aula na íntegra depois submeta as suas dúvidas que responderei o mais rápido possivel</span>
</div>

</div>
<div class="col l9 center sm12" style="text-align:center!important">
    <center>
    <iframe width="760" height="515" src="<?=$link?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div></center>
</div>

</div>
    <br>
    <br>
 </div>

<?php
}
else {
  
  ?>

<h4>Não há aulas para mostrar. faça <a href="login">login</a> ou <a href="criar_conta">crie</a> uma conta</h4>


<?php
}
?>
    <br>
    <br>
    <hr class="linha">
    
<center class="container">
    <br>
    <br>
    <h6 class="cor">A AROTEC deseja lhe boas aulas e sucesso <?=$user?></h6>
</center>

</main> 


<br>
<br>



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
