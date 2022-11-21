<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AROTEC | Esqueceu a senha</title>
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/materialize.css">
        <script src="js/init.js"></script>
        <link rel="stylesheet" href="produtos.css">
        <link rel="stylesheet" href="nav.css">
        <script src="js/materialize.min.js"></script>
        <script src="js/materialize.js"></script>
    </head>
    <style>
        .form{
            height: 45vh;
        }

        #renew:focus{
            border-color: var(--cor_principal);
        }
    </style>
<body>
    
<nav class=""> 
  <div class="nav-wrapper  3"> 
      <div class="container nav-alinhamento">
          
      <a href="index.html" class="brand-logo"><img src="imagens/logo.png" height="25px" style="color:#fff;" alt=""></a> 
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
          <i class="material-icons"><img src="imagens/menu.png" height="22px"  alt=""></i>
      </a> 
      <ul class="right hide-on-med-and-down"> 
          <li><a href="academia.html">Academia</a>
          </li> 
          <li> <a href="#"> Outros</a></li>
          <li><a href="loja.html">Loja</a></li> 
          <li><a href="#">Sobre</a></li> 
          <li><a href="eventos.html">Eventos</a></li>  
          <li><a href="http://canar.rf.gd">Canar</a></li>     
          <li class="cart"><a href="#"><img src="imagens/carrinho.png" class="carrinho" height="50px" alt=""><div id="cart">0</div></a></li> 
       
      </ul> 
      </div>
      
  </div> 
  </nav> 
  <ul class="sidenav" id="mobile-demo"> 
    <li><a href="academia.html">Academia</a></li>
    <li> <a href="#"> Outros</a></li>
    <li><a href="loja.html">Loja</a></li> 
    <li><a href="eventos.html">Eventos</a></li>
    <li><a href="contatar.html">Contacto</a></li>
    <li><a href="canar.html">CANAR</a></li>
  </ul>

  </div> 
  </nav> 
  <ul class="sidenav" id="mobile-demo"> 
      <li><a href="academia.html">Academia</a>
      </li> 
      <li><a href="loja.html">Loja</a></li> 
      <li><a href="contatar.html">Contacto</a></li> 
      <li><a href="canar.html">CANAR</a></li> 
  </ul>

<br>

<center class="container form">
    <h4><b class="cor">Alterar sua senha</b></h4>

    <span>insira o seu email para renovar a sua senha, após este passo verifique a sua caixa de entrada pois receberá um email de confirmação</span>
        <br>
    <form action="renew_s.php" method="post">
        <input type="email" name="email" id="renew" style="width: 50%" placeholder="Insira o seu email"><br>
        <button class="btn">Renovar</button>
    </form>
</center>
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



</body>
</html>