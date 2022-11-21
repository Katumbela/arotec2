
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
    <title>AROTEC | Entrar na sua conta</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/materialize.css">
    <script src="js/init.js"></script>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="produtos.css">
    <script src="js/materialize.min.js"></script>
    <script src="js/materialize.js"></script>
</head>
<style>
  @import url(contato.css);
  @import url(estilo.css);
  @import url(nav.css);
  

</style>
<body>
<br>
<br>
<main class="main ">
    

    <br>
    <div class="row container">
      <div class="col m6 s12 l4 center">
          <center class="sair">
              <img src="imagens/icone.png" class="logo-arobot" style="width: 30rem; margin-left: -5rem; margin-top: 7rem; height: 8rem;" alt="">
              <h3><b class="cor t1 t3">AROTEC</b></h3>
              <h4><b class="cor t2">Angola Robótica e Tecnologia</b></h4>
          </center>
          <h3><b class="cor t1">AROTEC</b></h3>
              <h4><b class="cor t1 t2">Angola Robótica e Tecnologia</b></h4>
        
      </div>

      <div class="col l3"></div>


      <div class="col m6 s12 l5 center campo">
        <br>
        <br>

        <form action="auth_login.php" method="post" class="z-depth-3" >
          
          <h5><b class="cor">Entrar</b></h5>
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
          <span>Não possui uma conta?<a href="criar_conta.php">Crie uma conta</a></span>
          <br>
          <?php

            if(empty($_GET['i'])){
                 echo "";
              }
            elseif($_GET['i']=='a'){
          ?>
          <span class="red-text">os dados inseridos estão incorretos</span>
          <a href="renew_password.php" class="grey-text">Esqueceu sua senha?</a>
          <?php }
          
          else{
            echo "";
          }

          ?>
          <br>
          <a href="index.php">Voltar</a>
       
          <br>
        </form>
        <br>
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
