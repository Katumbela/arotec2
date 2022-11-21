
<?php

if(empty($_GET['page'])){
  echo"";
}

else if( $_GET['course']){
  echo "";
}

else{
  $page = $_GET['page'];
  $curso = $_GET['course'];

}




?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AROTEC | LOGIN</title>
    <link rel="shortcut icon" href="../imagens/a.png" type="image/x-icon">
    <script src="../js/jquery.js"></script>
    <link rel="stylesheet" href="../css/materialize.css">
    <script src="../js/init.js"></script>
    <link rel="stylesheet" href="../nav.css">
    <link rel="stylesheet" href="../produtos.css">
    <script src="../js/materialize.min.js"></script>
    <script src="../js/materialize.js"></script>
</head>
<style>
  @import url(../contato.css);
  @import url(../estilo.css);
  @import url(../nav.css);
  
  @media (min-width: 800px) {
      form{
          width: 50%!important;
      }
  }

  
 @font-face {
   font-family: roboto;
   src: url("fontes/roboto.ttf");
 }
 *{
   font-family: roboto!important;
 }


</style>
<body>
<br>
<br>
<main class="main ">
    

    <br>
    <div class="row container">

      <div class="col m12 s12 l12 center campo">
        <br>
        <br>
<center>
        <form action="auth_login.php" method="post" class="z-depth-3" >
          
          <h5><b class="cor">Faça Login</b></h5>
          <input type="hidden" name="pagina" value="<?=$page?>">
          <input type="hidden" name="curso" value="<?=$curso?>">
          <br>
            <input type="text" name="email" id="tel" placeholder="Email / Telefone">
          <div class="row center">  
              <br>
            
            <div class="col s10 l10">
             <input type="password"  name="senha" id="senha" placeholder="Insira sua senha">
            </div>
          
            <div style=" padding-top: 1rem;" class="col s2 l2">
              <span style="margin-left: -1rem;"  id="mostrar"  onclick="mostrar()" class="mostrar senha">Mostrar</span>
              <span style="margin-left: -1rem; " id="ocultar"  onclick="ocultar()" class="ocultar senha">Ocultar</span>
            </div>
          </div>
   
          <button class="btn enviar z-depth-2" name="login" id="enviar">Entrar</button>
          <br>
          <?php

            if(empty($_GET['i'])){
                 echo "";
              }
            elseif($_GET['i']=='a'){
          ?>
          <span class="red-text">os dados inseridos estão incorretos</span>
          <a href="#" class="grey-text">Esqueceu sua senha? contacte a admin</a>
          <?php }
          
          else{
            echo "";
          }

          ?>
          <br>
        </form>
        </center><br>
      </div>
    </div>
 
</main> 


<br>
<br>


<script>

    function mostrar(){
  document.getElementById('senha').setAttribute('type','text');
  document.getElementById('mostrar').style.display="none";
  document.getElementById('ocultar').style.display="block";
}


function ocultar(){
  document.getElementById('senha').setAttribute('type','password');
  document.getElementById('mostrar').style.display="flex";
  document.getElementById('ocultar').style.display="none";
}

</script>
</body>
</html>
